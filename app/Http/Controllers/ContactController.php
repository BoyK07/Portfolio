<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\CustomEmail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        // Send email
        $details = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ];

        $subject = "New Contact Form Submission";

        Mail::to(getenv('ADMIN_MAIL'))->send(new CustomEmail($details, $subject));

        return response()->json([
            'status' => 'success',
            'message' => 'Your message has been sent successfully!'
        ], 200);
    }
}
