<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PersonalInformation;
use App\Models\EducationDetail;
use Illuminate\Support\Facades\Auth;


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
    


     // Method to display more details for a specific user
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

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',

        ]);

         // Attempt to authenticate the user
         if (Auth::attempt($credentials)) {
            
             // Regenerate session to prevent fixation attacks
            // $request->session()->regenerate();
     
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
