<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Status;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProjectController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $projects = Project::latest()->where('user_id', $user->id)->get();
        return view('manage', [ 'projects' => $projects ]);
    }

    public function create()
    {
        $statuses = Status::all();
        return view('create', [ 'statuses' => $statuses ]);
    }

    public function edit(Project $project)
    {
        $statuses = Status::all();
        return view('edit', [ 
            'statuses' => $statuses,
            'project' => $project
        ]);
    }

    public function store(Request $request)
    {
        $validated_data = $request->validate(
            [
                'name' => ['required', 'max:100'],
                'description' => ['required'],
                'status_id' => ['required', 'exists:statuses,id']
            ],
            [
                'status_id.required' => 'Please select project status',
                'status_id.exists' => 'Please select project status'
            ]
        );

        $validated_data['user_id'] = auth()->user()->id;

        Project::create($validated_data);

        Alert::success('Success!', 'Success to create a project.');

        return redirect('/manage-projects');
    }

    public function update(Request $request)
    {
        $project_id = $request->id;
        $validated_data = $request->validate(
            [
                'name' => ['required', 'max:100'],
                'description' => ['required'],
                'status_id' => ['required', 'exists:statuses,id']
            ],
            [
                'status_id.required' => 'Please select project status',
                'status_id.exists' => 'Please select project status'
            ]
        );

        $validated_data['user_id'] = auth()->user()->id;

        Project::where('id', $project_id)->update($validated_data);

        Alert::success('Success!', 'Success to update a project.');

        return redirect('/manage-projects');
    }

    public function delete(Request $request)
    {
        $project_id = $request->id;
        $project = Project::find($project_id);
        $project->delete();

        Alert::success('Success!', 'Success to delete a project.');

        return back();
    }
}
