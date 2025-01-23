<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class AdminController extends Controller
{
    public function index() {
        $projects = Project::all();
        return view('admin.index')->with('projects', $projects);
    }

    public function create() {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'tags' => 'nullable|string',
        ]);

        // Return with error message if validation is wrong
        if (!$validated) {
            return redirect()->back()->with('error', 'Validation failed');
        }

        $project = new Project;
        $project->title = $validated['title'];
        $project->description = $validated['description'];
        $project->url = $request->url ? $request->url : null;
        $project->github = $request->github ? $request->github : null;
        $project->tags = $request->tags ? str_replace(', ', ',', $request->tags) : null;
        $project->save();

        return redirect()->route('admin.projects.index');
    }

    public function edit($id) {
        $project = Project::find($id);
        return view('admin.edit')->with('project', $project);
    }

    public function update(Request $request, $id) {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        // Return with error message if validation is wrong
        if (!$validated) {
            return redirect()->back()->with('error', 'Validation failed');
        }

        $project = Project::find($id);
        $project->title = $validated['title'];
        $project->description = $validated['description'];
        $project->url = $request->url ? $request->url : null;
        $project->github = $request->github ? $request->github : null;
        $project->tags = $request->tags ? str_replace(', ', ',', $request->tags) : null;
        $project->save();

        return redirect()->route('admin.projects.index');
    }

    public function destroy($id) {
        $project = Project::find($id);
        $project->delete();

        return redirect()->route('admin.projects.index');
    }
}
