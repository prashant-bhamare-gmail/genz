<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class RegisterController extends Controller
{
    // Validation rules
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'], // 'confirmed' checks the password_confirmation field
        ]);
    }

    // Register method using Request object
    public function register(Request $request)
    {
        // Validate incoming data using the validator method
        $validator = $this->validator($request->all());

        // If validation fails, return errors
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('registerError', true);

        }

        // Merge first name and last name to create full name
        $fullName = $request->first_name . ' ' . $request->last_name;

        // Check if the email already exists
        if (User::where('email', $request->email)->exists()) {
            return redirect()->back()->withErrors(['email' => 'This email is already registered.'])->with('registerError', true);
        }

        // Create a new user instance after valid registration
        User::create([
            'name' => $fullName,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redirect after successful registration
        return redirect()->route('profile')->with('success', 'Account created successfully!');
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'current_role'  => 'nullable|string|max:255',
            'company_name'  => 'nullable|string|max:255',
            'phone'         => 'nullable|string|max:20',
            'address'       => 'nullable|string|max:255',
            'street'        => 'nullable|string|max:255',
            'city'          => 'nullable|string|max:255',
            'state'         => 'nullable|string|max:255',
            'profile_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = Auth::user();

        // Handle profile photo upload
        if ($request->hasFile('profile_photo')) {
            if ($user->profile_photo) {
                Storage::disk('public')->delete($user->profile_photo);
            }
            $user->profile_photo = $request->file('profile_photo')->store('profile_photos', 'public');
        }

        // Update user data
        $user->update($request->except('profile_photo'));

        return redirect()->route('profile')->with('success', 'Profile updated successfully');
    }
}
