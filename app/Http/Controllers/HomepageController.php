<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\CustomEmailAdmin;
use App\Mail\CustomEmailUser;
use App\Models\Project;

class HomepageController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        $tags = $projects->pluck('tags')->filter()->unique()->flatMap(function ($tags) {
            return explode(',', $tags);
        })->unique();

        return view('portfolio.index', compact('projects', 'tags'));
    }

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

        // Send email to admin
        $details = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ];
        $subject = "New contact form submision on BoyK07 - Portfolio";
        Mail::to(getenv('ADMIN_MAIL'))->send(new CustomEmailAdmin($details, $subject));

        # Send email to user
        $details = [
            'name' => $request->input('name'),
        ];
        $subject = "Thank you for contacting me!";
        Mail::to($request->input('email'))->send(new CustomEmailUser($details, $subject));


        return response()->json([
            'status' => 'success',
            'message' => 'Your message has been sent successfully!'
        ], 200);
    }
}
