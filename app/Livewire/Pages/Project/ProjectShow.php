<?php

namespace App\Livewire\Pages\Project;

use App\Models\Project;
use Livewire\Component;

class ProjectShow extends Component
{
    public Project $project;

    public function mount(Project $project)
    {
        $this->project = $project;
    }

    public function render()
    {
        return view('livewire.pages.project.project-show');
    }
}
