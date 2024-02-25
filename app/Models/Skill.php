<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = ['name','image'];


    public function projectSkills()
    {
        return $this->hasMany(ProjectSkills::class, 'skill_id');
    }
}
