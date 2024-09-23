<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

        //TODO Process the request (e.g., send an email, save to the database)
        //TODO Make this send an email to me

        return response()->json([
            'status' => 'success',
            'message' => 'Your message has been sent successfully!'
        ], 200);
    }
}
