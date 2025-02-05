<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;

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
}
