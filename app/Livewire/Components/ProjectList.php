<?php

namespace App\Livewire\Components;

use App\Models\Project;
use Illuminate\Support\Collection;
use Livewire\Component;

class ProjectList extends Component
{
    public Collection $projects;

    public function render()
    {
        return view('livewire.components.project-list');
    }
}
