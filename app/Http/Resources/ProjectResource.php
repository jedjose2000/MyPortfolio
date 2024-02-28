<?php

namespace App\Http\Resources;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'image' => asset('/storage/' . $this->image),
            'link' => $this->projectUrl,
            'gitHubUrl' => $this->gitHubUrl,
            'projectDescription' => $this->projectDescription,
            'projectImages' => $this->getImages(),
            'project_skills' => $this->projectSkills,
        ];
    }

    /**
     * Get images related to project skills.
     *
     * @return array
     */
    public function getImages(): array
    {
        $imageUrl = [];
        $projectSkillImages = $this->projectSkills;
        foreach ($projectSkillImages as $modelData){
            $skill = $modelData->skill_id;
            $skillModel = Skill::find($skill);
            $imageUrl[] = asset('/storage/' . $skillModel->image);
        }
        return $imageUrl;
    }
}
