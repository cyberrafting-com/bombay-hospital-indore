<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonalInformation;
use App\Models\EducationDetail;

class HospitalController extends Controller
{
    public function career()
    {
        return view('associate-consultant');
    }

    public function store(Request $request)
    {
        // Validate the request data
            $rules =[
            'name' => 'required|string',
            'dob' => 'required|date',
            'permanent_address' => 'required|string',
            'current_address' => 'nullable|string',
            'marital-status' => 'nullable|string',
            'spouse-details' => 'nullable|string',
            'mobile' => 'required|numeric',       
            'email' => 'required|email|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',  //  using regex
            'medical_registration' => 'required|string',
            'state' => 'required|string',
            'remuneration' => 'required|string',
            'designation_1' => 'nullable|string',
            'duration_period_1' => 'nullable|string',
            'institution_1' => 'nullable|string',
            'details_1' => 'nullable|string',
            'designation_2' => 'nullable|string',
            'duration_period_2' => 'nullable|string',
            'institution_2' => 'nullable|string',
            'details_2' => 'nullable|string',
            'activities' => 'nullable|string',
            'other_achievements' => 'nullable|string',
            'languages_known' => 'nullable|string',
            'ref_name_1' => 'nullable|string',
            'ref_add_1' => 'nullable|string',
            'ref_mob_1' => 'required|numeric',    
            'ref_name_2' => 'nullable|string',
            'ref_add_2' => 'nullable|string',
            'ref_mob_2' => 'required|numeric',           
            'signature_name' => 'nullable|string',

            // ssc
            'ssc_college' => 'nullable|string',
            'ssc_university' => 'nullable|string', 
            'ssc_year' => 'nullable|digits:4|integer|between:1960,' . date('Y'),     // length = 4 and must be Integer 
            'ssc_percentage' => 'nullable|numeric|regex:/^\d*(\.\d{1,2})?$/',
            'ssc_position' => 'nullable|string',
            'ssc_attempt' => 'nullable|string',


            // hsc
            'hsc_college' => 'nullable|string',
            'hsc_university' => 'nullable|string',
            'hsc_year' => 'nullable|digits:4|integer|between:1960,' . date('Y'),
            'hsc_percentage' => 'nullable|numeric|regex:/^\d*(\.\d{1,2})?$/',
            'hsc_position' => 'nullable|string',
            'hsc_attempt' => 'nullable|string',
            


            // Details of UG Entrance Examination
            'ug_college' => 'nullable|string',
            'ug_university' => 'nullable|string',
            'ug_year' => 'nullable|digits:4|integer|between:1960,' . date('Y'),
            'ug_percentage' => 'nullable|numeric|regex:/^\d*(\.\d{1,2})?$/',
            'ug_position' => 'nullable|string',
            'ug_attempt' => 'nullable|string',

            // MBBS
            'mbbs_college' => 'nullable|string',
            'mbbs_university' => 'nullable|string',
            'mbbs_year' => 'nullable|digits:4|integer|between:1960,' . date('Y'),
            'mbbs_percentage' => 'nullable|numeric|regex:/^\d*(\.\d{1,2})?$/',
            'mbbs_position' => 'nullable|string',
            'mbbs_attempt' => 'nullable|string',

            // Details of PG Entrance Examination
            'pg_college' => 'nullable|string',
            'pg_university' => 'nullable|string',
            'pg_year' => 'nullable|digits:4|integer|between:1960,' . date('Y'),
            'pg_percentage' => 'nullable|numeric|regex:/^\d*(\.\d{1,2})?$/',
            'pg_position' => 'nullable|string',
            'pg_attempt' => 'nullable|string',

            // MD/MS/DNB
            'md_ms_dnb_college' => 'nullable|string',
            'md_ms_dnb_university' => 'nullable|string',
            'md_ms_dnb_year' => 'nullable|digits:4|integer|between:1960,' . date('Y'),
            'md_ms_dnb_percentage' => 'nullable|numeric|regex:/^\d*(\.\d{1,2})?$/',
            'md_ms_dnb_position' => 'nullable|string',
            'md_ms_dnb_attempt' => 'nullable|string',

            // Details of SS Entrance Examination
            'ss_college' => 'nullable|string',
            'ss_university' => 'nullable|string',
            'ss_year' => 'nullable|digits:4|integer|between:1960,' . date('Y'),
            'ss_percentage' => 'nullable|numeric|regex:/^\d*(\.\d{1,2})?$/',
            'ss_position' => 'nullable|string',
            'ss_attempt' => 'nullable|string',

            // DM/MCH/DNB
            'dm_mch_dnb_college' => 'nullable|string',
            'dm_mch_dnb_university' => 'nullable|string',
            'dm_mch_dnb_year' => 'nullable|digits:4|integer|between:1960,' . date('Y'),
            'dm_mch_dnb_percentage' => 'nullable|numeric|regex:/^\d*(\.\d{1,2})?$/',
            'dm_mch_dnb_position' => 'nullable|string',
            'dm_mch_dnb_attempt' => 'nullable|string',

            // Fellowship
            'fellowship_college' => 'nullable|string',
            'fellowship_university' => 'nullable|string',
            'fellowship_year' => 'nullable|digits:4|integer|between:1960,' . date('Y'),
            'fellowship_percentage' => 'nullable|numeric|regex:/^\d*(\.\d{1,2})?$/',
            'fellowship_position' => 'nullable|string',
            'fellowship_attempt' => 'nullable|string',
            ];

        $messages = [
            'email.regex' => 'The email format is invalid. Please enter a valid email address.',
            'mobile.numeric' => 'The mobile number must contain only digits.',
            'mobile.digits' => 'The mobile number must be exactly 10 digits.',

            'ssc_year.numeric' => 'The SSC year must be a number.',
            'ssc_year.digits' => 'The SSC year must be exactly 4 digits long.',
            'ssc_year.between' => 'The SSC year must be between 1960 and ' . date('Y') . '.',
            'ssc_percentage.numeric' => 'The SSC percentage must be a number.',
            'ssc_percentage.regex' => 'The SSC percentage must be a valid numeric value with up to two decimal places.',



            'hsc_year.numeric' => 'The HSC year must be a number.',
            'hsc_year.digits' => 'The HSC year must be exactly 4 digits long.',
            'hsc_year.between' => 'The HSC year must be between 1960 and ' . date('Y') . '.',
            'hsc_percentage.numeric' => 'The HSC percentage must be a number.',
            'hsc_percentage.regex' => 'The HSC percentage must be a valid numeric value with up to two decimal places.',


            'ug_year.digits' => 'The UG year must be exactly 4 digits long.',
            'ug_year.numeric' => 'The UG year must be a number.',
            'ug_year.between' => 'The UG year must be between 1960 and ' . date('Y') . '.',
            'ug_percentage.numeric' => 'The UG percentage must be a number.',
            'ug_percentage.regex' => 'The UG percentage must be a valid numeric value with up to two decimal places.',



            'mbbs_year.digits' => 'The MBBS year must be exactly 4 digits long.',
            'mbbs_year.numeric' => 'The MBBS year must be a number.',
            'mbbs_year.between' => 'The MBBS year must be between 1960 and ' . date('Y') . '.',
            'mbbs_percentage.numeric' => 'The MBBS percentage must be a number.',
            'mbbs_percentage.regex' => 'The MBBS percentage must be a valid numeric value with up to two decimal places.',



            'pg_year.digits' => 'The PG year must be exactly 4 digits long.',
            'pg_year.numeric' => 'The PG year must be a number.',
            'pg_year.between' => 'The PG year must be between 1960 and ' . date('Y') . '.',
            'pg_percentage.numeric' => 'The PG percentage must be a number.',
            'pg_percentage.regex' => 'The PG percentage must be a valid numeric value with up to two decimal places.',



            'md_ms_dnb_year.digits' => 'The MD/MS/DNB year must be exactly 4 digits long.',
            'md_ms_dnb_year.numeric' => 'The MD/MS/DNB year must be a number.',
            'md_ms_dnb_year.between' => 'The MD/MS/DNB year must be between 1960 and ' . date('Y') . '.',
            'md_ms_dnb_percentage.numeric' => 'The MD/MS/DNB percentage must be a number.',
            'md_ms_dnb_percentage.regex' => 'The MD/MS/DNB percentage must be a valid numeric value with up to two decimal places.',



            'ss_year.digits' => 'The SS year must be exactly 4 digits long.',
            'ss_year.numeric' => 'The SS year must be a number.',
            'ss_year.between' => 'The SS year must be between 1960 and ' . date('Y') . '.',
            'ss_percentage.numeric' => 'The SS percentage must be a number.',
            'ss_percentage.regex' => 'The SS percentage must be a valid numeric value with up to two decimal places.',



            'dm_mch_dnb_year.digits' => 'The DM/MCH/DNB year must be exactly 4 digits long.',
            'dm_mch_dnb_year.numeric' => 'The DM/MCH/DNB year must be a number.',
            'dm_mch_dnb_year.between' => 'The DM/MCH/DNB year must be between 1960 and ' . date('Y') . '.',
            'dm_mch_dnb_percentage.numeric' => 'The DM/MCH/DNB percentage must be a number.',
            'dm_mch_dnb_percentage.regex' => 'The DM/MCH/DNB percentage must be a valid numeric value with up to two decimal places.',



            'fellowship_year.digits' => 'The Fellowship year must be exactly 4 digits long.',
            'fellowship_year.numeric' => 'The Fellowship year must be a number.',
            'fellowship_year.between' => 'The Fellowship year must be between 1960 and ' . date('Y') . '.',
            'fellowship_percentage.numeric' => 'The Fellowship percentage must be a number.',
            'fellowship_percentage.regex' => 'The Fellowship percentage must be a valid numeric value with up to two decimal places.',



            'ref_mob_1.digits' => 'The reference mobile number must be exactly 10 digits.',
            'ref_mob_2.digits' => 'The reference mobile number must be exactly 10 digits.',

        ];
       
        
        $validatedData = $request->validate($rules, $messages);
    

        // Create personal information record
        $data = new PersonalInformation;
        $data->name = $request->name;
        $data->dob = $request->dob;
        $data->permanent_address = $request->permanent_address;
        $data->current_address = $request->current_address;
        $data->marital_status = $request->input('marital-status'); 
        $data->spouse_details = $request->input('spouse-details'); 
        $data->mobile = $request->mobile;
        $data->email = $request->email;
        $data->medical_registration = $request->medical_registration;
        $data->state = $request->state;
        $data->remuneration = $request->remuneration;
        $data->designation_1 = $request->designation_1;
        $data->duration_period_1 = $request->duration_period_1;
        $data->institution_1 = $request->institution_1;
        $data->details_1 = $request->details_1;
        $data->designation_2 = $request->designation_2;
        $data->duration_period_2 = $request->duration_period_2;
        $data->institution_2 = $request->institution_2;
        $data->details_2 = $request->details_2;
        $data->activities = $request->activities;
        $data->other_achievements = $request->other_achievements;
        $data->languages_known = $request->languages_known;
        $data->ref_name_1 = $request->ref_name_1;
        $data->ref_add_1 = $request->ref_add_1;
        $data->ref_mob_1 = $request->ref_mob_1;
        $data->ref_name_2 = $request->ref_name_2;
        $data->ref_add_2 = $request->ref_add_2;
        $data->ref_mob_2 = $request->ref_mob_2;
        $data->name_2 = $request->signature_name;
        $data->save();

        // Create EducationDetail records
        $educationLevels = ['ssc', 'hsc', 'ug', 'mbbs', 'pg', 'md_ms_dnb', 'ss', 'dm_mch_dnb', 'fellowship'];

        foreach ($educationLevels as $level) {
            $validatedData = array_merge([
                $level . '_college' => null,
                $level . '_university' => null,
                $level . '_year' => null,
                $level . '_percentage' => null,
                $level . '_position' => null,
                $level . '_attempt' => null,
            ], $validatedData);
        }

        foreach ($educationLevels as $level) {
            EducationDetail::create([
                'personal_information_id' => $data->id, // Assign the personal_information_id
                'education_level' => $level,
                'college' => $validatedData[$level . '_college'],
                'university' => $validatedData[$level . '_university'],
                'year' => $validatedData[$level . '_year'],
                'marks' => $validatedData[$level . '_percentage'],
                'position' => $validatedData[$level . '_position'],
                'attempt' => $validatedData[$level . '_attempt'],
            ]);
        }

        // return "Data stored successfully";

         // Fetch the stored data
 $personalInformation = PersonalInformation::with('educationDetails')->find($data->id);

 // Return a view with the fetched data
 return view('submitted-data', [
    'personal_information' => $personalInformation,
]);


        // Uncomment to debug
        //  dd($request->all());
    }
   
}


