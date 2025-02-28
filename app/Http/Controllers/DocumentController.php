<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\DocumentLike;
use App\Models\EventRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;

class DocumentController extends Controller
{
    public function uploadPDF(Request $request)
    {
        $request->validate([
            'pdf' => 'required|mimes:doc,docx,txt,pdf|max:2048',
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
            $message->to("hello@hrconnects.org")
                ->subject("Approve PDF: {$pdf->filename}")
                ->attach(storage_path("app/public/{$pdf->path}"));
        });

        return redirect()->back()->with('success-pdf-upload', 'PDF uploaded successfully. Awaiting approval.');
    }
    public function uploadTextDocument(Request $request)
    {
        $data = $request->json()->all();

        if (!isset($data['content']) || empty(trim($data['content']))) {
            return response()->json(['error' => 'Content is required'], 400);
        }

        // Create DOCX file
        $phpWord = new PhpWord();
        $section = $phpWord->addSection();
        $section->addText($data['content']);

        $filename = 'document_' . time() . '.docx';
        $path = storage_path("app/public/pdfs/{$filename}");

        $writer = IOFactory::createWriter($phpWord, 'Word2007');
        $writer->save($path);

        // Save document in database
        $document = Document::create([
            'user_id' => Auth::id(),
            'filename' => $filename,
            'path' => "pdfs/{$filename}",
            'is_approved' => false
        ]);

        // Send approval email
        $approvalLink = route('approve.document', ['id' => $document->id]);

        Mail::raw("A new document has been uploaded by " . Auth::user()->name . ". Click to approve: $approvalLink", function ($message) use ($document, $path) {
            $message->to('prashantbhamre94@gmail.com')
                ->subject("Approve Document: {$document->filename}")
                ->attach($path);
        });

        return response()->json(['message' => 'Document uploaded successfully. Awaiting approval.']);
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
        $user = Auth::user();
        $today = Carbon::today();

        $userPDFs = Document::where('user_id', Auth::id())->get();
        $approvedPDFs = Document::where('is_approved', true)->get(); // All approved PDFs

        // Fetch registered events for the logged-in user
        $registrations = EventRegistration::where('user_id', $user->id)
            ->with('event')
            ->get();

        // Categorize events
        $upcomingEvents = [];
        $todayEvents = [];
        $completedEvents = [];

        foreach ($registrations as $registration) {
            if ($registration->event) {
                $event = $registration->event;
                $eventDate = Carbon::parse($event->event_date);
    
                if ($eventDate->isFuture()) {
                    $upcomingEvents[] = $event;
                } elseif ($eventDate->isSameDay($today)) {
                    $todayEvents[] = $event; 
                } else {
                    $completedEvents[] = $event; 
                }
            }
        }
        return view('profile', compact('userPDFs', 'approvedPDFs', 'upcomingEvents', 'todayEvents', 'completedEvents'));
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

        $user->reward_points = ($user->reward_points ?? 0) + 25; 
        $user->save();

        return response()->json(['success' => true, 'message' => 'PDF liked successfully!']);

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
