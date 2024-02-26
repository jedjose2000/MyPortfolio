<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name','image','projectUrl','projectDescription','gitHubUrl'];


    public function projectSkills(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ProjectSkills::class, 'project_id');
    }

}
