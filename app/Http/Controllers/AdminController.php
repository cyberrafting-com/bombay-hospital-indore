<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PersonalInformation;
use App\Models\EducationDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; // Add this import

class AdminController extends Controller
{
    //

    public function loginForm()
    {
        return view('login');
    }


    public function viewData()
    {
        $personalInformations = PersonalInformation::with('educationDetails')->get();
        return view('viewData', compact('personalInformations'));
    }

    public function viewDataByForm($form_name)
    {
        $decodedFormName = urldecode($form_name);
        $personalInformations = PersonalInformation::with('educationDetails')->where('form_name', $decodedFormName)->get();
        return view('viewData', compact('personalInformations', 'form_name'));
    }

    //   where('form_name', $decodedFormName): 
    //   This adds a condition to only fetch records where the form_name column matches the decoded form name.
    //   Method to display more details for a specific user

    
    public function viewDetails($id)
    {
        $personalInformation = PersonalInformation::with('educationDetails')->find($id);
        return view('viewDetails', compact('personalInformation'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
    
        // Invalidate the session and regenerate the token
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    
        return redirect()->route('login');
    }
    
    public function loginData(Request $request)
    {
        // Validate the request
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Find the user by email
        $user = User::where('email', $credentials['email'])->first();

        // Check if the user exists and the password matches
        if ($user && Hash::check($credentials['password'], $user->password)) {
            // Log in the user
            Auth::login($user);

            // Regenerate session to prevent fixation attacks
            $request->session()->regenerate();

            return redirect()->route('viewdata')->with('success', 'Login successful');
        } else {
            // Log failed attempt
            \Log::warning('Login failed', $credentials);

            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
    }
}
