<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class AdminController extends Controller
{
    public function index() {
        return view('admin.index');
    }

    public function create() {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        $project = new Project;
        $project->title = $validated['title'];
        $project->description = $validated['description'];
        $project->url = $request->url ? $request->url : null;
        $project->github = $request->github ? $request->github : null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $savePath = "public/projects/images/" . $validated['title'];
            $image->storeAs($savePath, $filename);
        }
        $project->image = $filename;
        $project->save();

        return redirect()->route('admin.projects.index');
    }
}
