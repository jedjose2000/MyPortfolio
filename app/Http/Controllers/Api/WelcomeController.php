<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectResource;
use App\Http\Resources\SkillResource;
use App\Models\Project;
use App\Models\ProjectSkills;
use App\Models\Skill;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function skills()
    {
        return SkillResource::collection(Skill::all());
    }

    public function projects()
    {
        return ProjectResource::collection(Project::all());
    }

    public function allProjectsWithSkills()
    {
        $projects = Project::with('projectSkills')->get();
        return ProjectResource::collection($projects);
    }

}
