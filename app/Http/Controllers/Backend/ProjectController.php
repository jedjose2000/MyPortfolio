<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;
use App\Models\ProjectSkills;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('projects.index',compact('projects'));
    }

    public function create()
    {
        $skills = Skill::all();
        return view('projects.create', compact('skills'));
    }

    public function store(StoreProjectRequest $request)
    {

        if ($request->hasFile('image')){
            $image = $request->file('image')->store('projects');
            $newProjectId = Project::create([
                'name' => $request->name,
                'projectUrl' => $request->projectUrl,
                'image' => $image,
                'projectDescription' => $request->projectDescription
            ]);

            foreach ($request->skills as $skill){
                ProjectSkills::create([
                    'skill_id' => $skill,
                    'project_id'=> $newProjectId->id,
                ]);
            }


            return to_route('projects.index')->with('success','Project Created!');
        }

        return back();
    }

    public function edit(Project $project)
    {
        $skills = Skill::all();
        $projectSkills = $project->projectSkills;
        $data = [];
        foreach ($projectSkills as $projectSkill) {
            $data[]  = $projectSkill->skill_id;
        }
        return view('projects.edit', compact('project','skills' , 'projectSkills', 'data'));
    }

    public function update(UpdateProjectRequest $request, Project $project)
    {
        $image = $project->image;
        if($request->hasFile('image')){
            Storage::delete($image);
            $image = $request->file('image')->store('projects');
        }

        $project->update([
            'name' => $request->name,
            'skill_id' => $request->skills,
            'projectUrl' => $request->projectUrl,
            'image' => $image,
            'projectDescription' => $request->projectDescription
        ]);

        $project->projectSkills()->delete();

        foreach ($request->skills as $skill){
            ProjectSkills::create([
                'skill_id' => $skill,
                'project_id'=> $project->id,
            ]);
        }

        return to_route('projects.index')->with('success','Project Updated');
    }

    public function destroy(Project $project)
    {
        Storage::delete($project->image);
        $project->delete();
        return back()->with('danger','Project Deleted');
    }
}
