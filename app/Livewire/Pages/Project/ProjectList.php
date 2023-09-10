<?php

namespace App\Livewire\Pages\Project;

use App\Models\Project;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Lang;
use Livewire\Component;

class ProjectList extends Component
{
    public Collection $projects;

    public function mount()
    {
        $this->projects = Project::all();
    }

    public function render()
    {
        return view('livewire.pages.project.project-list');
    }
}
