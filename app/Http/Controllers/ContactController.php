<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        $rules = [
            // 'fname' => 'required|max:255',
            // 'lname' => 'required|max:255',
            // 'mail' => 'required|email',
            // 'phone' => 'required',
            // 'looking' => 'required',
            // 'optradio' => 'required',
            // 'msg' => 'required',

            // new career

            'name' => 'required',
            'dob' => 'required',
            'permanent-address' => 'required',
            'current-address' => 'required',
            // 'marital-status' => 'required',
            // 'spouse-details' => 'nullable',
            // 'mobile' => 'required',
            // 'email' => 'required|email',
            // 'medical-registration' => 'required',
            // 'state' => 'required',
            // 'remuneration' => 'required',
            // 'ssc-college' => 'required',
            // 'ssc-board' => 'required',
            // 'ssc-year' => 'required',
            // 'ssc-marks' => 'required',
            // 'exp-designation1' => 'required',
            // 'exp-duration1' => 'required',
            // 'exp-institution1' => 'required',
            // 'exp-details1' => 'required',
            // 'exp-designation2' => 'required',
            // 'exp-duration2' => 'required',
            // 'exp-institution2' => 'required',
            // 'exp-details2' => 'required',
            // 'ref-name1' => 'required',
            // 'ref-address1' => 'required',
            // 'ref-mobile1' => 'required',
            // 'ref-name2' => 'required',
            // 'ref-address2' => 'required',
            // 'ref-mobile2' => 'required',
            // 'achievements' => 'required',
            // 'any-achievements' => 'required',
            // 'languages-known' => 'required',
            // 'signature-name' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        $data = [
            // "fname" => $request->post('fname'),
            // "lname" => $request->post('lname'),
            // "mail" => $request->post('mail'),
            // "phone" => $request->post('phone'),
            // "looking" => $request->post('looking'),
            // "optradio" => $request->post('optradio'),
            // "msg" => $request->post('msg'),

            // new career

            'name' => $request->post('name'),
            'dob' => $request->post('dob'),
            'permanent-address' => $request->post('permanent-address'),
            'current-address' => $request->post('current-address'),
            'marital-status' => $request->post('marital-status'),
            'spouse-details' => $request->post('spouse-details'),
            'mobile' => $request->post('mobile'),
            'email' => $request->post('email'),
            'medical-registration' => $request->post('medical-registration'),
            'state' => $request->post('state'),
            'remuneration' => $request->post('remuneration'),

            'ssc-college' => $request->post('ssc-colg'),
            'ssc-board' => $request->post('ssc-board'),
            'ssc-year' => $request->post('ssc-year'),
            'ssc-marks' => $request->post('ssc-marks'),
            'ssc-rank' => $request->post('ssc-rank'),
            'ssc-attempt' => $request->post('ssc-attempt'),

            // 'exp-designation1' => $request->post('exp-designation1'),
            // 'exp-duration1' => $request->post('exp-duration1'),
            // 'exp-institution1' => $request->post('exp-institution1'),
            // 'exp-details1' => $request->post('exp-details1'),

            // 'exp-designation2' => $request->post('exp-designation2'),
            // 'exp-duration2' => $request->post('exp-duration2'),
            // 'exp-institution2' => $request->post('exp-institution2'),
            // 'exp-details2' => $request->post('exp-details2'),

            // 'ref-name1' => $request->post('ref-name1'),
            // 'ref-address1' => $request->post('ref-address1'),
            // 'ref-mobile1' => $request->post('ref-mobile1'),

            // 'ref-name2' => $request->post('ref-name2'),
            // 'ref-address2' => $request->post('ref-address2'),
            // 'ref-mobile2' => $request->post('ref-mobile2'),

            // 'achievements' => $request->post('achievements'),
            // 'any-achievements' => $request->post('any-achievements'),
            // 'languages-known' => $request->post('languages-known'),
            // 'signature-name' => $request->post('signature-name'),

        ];
        $recipient = 'shraddhanavale1998@gmail.com';
        $subject = 'Book Appointment';

        Mail::send('emails.contact', ['data' => $data], function ($message) use ($recipient, $subject) {
            $message->to($recipient)
                ->subject($subject);
        });

        return redirect()->back()->with('success', 'We have received your query. thank you');

        // dd($data);
        // echo "next";
    }
}
