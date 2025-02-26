<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\DocumentLike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class DocumentController extends Controller
{
    public function uploadPDF(Request $request)
    {
        $request->validate([
            'pdf' => 'required|mimes:doc,docx,txt|max:2048',
        ]);

        $pdfFile = $request->file('pdf');
        $path = $pdfFile->store('pdfs', 'public');

        $pdf = Document::create([
            'user_id' => Auth::id(), // Store logged-in user ID
            'filename' => $pdfFile->getClientOriginalName(),
            'path' => $path,
        ]);

        $approvalLink = route('approve.document', ['id' => $pdf->id]);

        Mail::raw("A new PDF has been uploaded by " . Auth::user()->name . ". Click to approve: $approvalLink", function ($message) use ($pdf) {
            $message->to('2000sagarr@gmail.com')
                ->subject("Approve PDF: {$pdf->filename}")
                ->attach(storage_path("app/public/{$pdf->path}"));
        });

        return redirect()->back()->with('success-pdf-upload', 'PDF uploaded successfully. Awaiting approval.');
    }

    public function approvePDF($id)
    {
        $pdf = Document::findOrFail($id);
        $pdf->is_approved = true;
        $pdf->save();
        return "PDF approved successfully. Now it is visible to users.";
    }

    public function showApprovedPDFs()
    {
        $pdfs = Document::where('is_approved', true)->get();
        return view('profile', compact('pdfs'));
    }

    public function showUserPDFs()
    {
        $userPDFs = Document::where('user_id', Auth::id())->get();
        $approvedPDFs = Document::where('is_approved', true)->get(); // All approved PDFs
        return view('profile', compact('userPDFs', 'approvedPDFs'));
    }

    public function likeDocument($id)
    {
        $pdf = Document::findOrFail($id);
        $user = Auth::user();

        // Check if user has already liked the PDF
        if ($pdf->likes()->where('user_id', $user->id)->exists()) {
            return response()->json(['success' => false, 'message' => 'You have already liked this PDF.']);
        }

        // Add like
        DocumentLike::create([
            'user_id' => $user->id,
            'document_id' => $pdf->id,
        ]);

        return response()->json(['success' => true, 'message' => 'PDF liked successfully!']);

        // $pdf = Document::findOrFail($id);
        // $user = Auth::user();

        // // Check if the user already liked this PDF
        // if ($pdf->likes()->where('user_id', $user->id)->exists()) {
        //     return redirect()->back()->with('message', 'You have already liked this PDF.');
        // }

        // // Create a like record
        // DocumentLike::create([
        //     'user_id' => $user->id,
        //     'document_id' => $pdf->id,
        // ]);

        // return redirect()->back()->with('message', 'PDF liked successfully!');
    }
    public function openDocument($id)
    {
        $pdf = Document::findOrFail($id);

        // Increment view count
        $pdf->increment('views');

        // Redirect to actual PDF file
        return redirect(asset('storage/' . $pdf->path));
    }
}
