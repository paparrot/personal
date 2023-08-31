<?php

namespace App\Livewire\Components;

use App\Models\Project;
use Livewire\Component;

class ProjectCard extends Component
{
    public Project $project;

    public function render()
    {
        return view('livewire.components.project-card', ['project' => $this->project]);
    }
}
