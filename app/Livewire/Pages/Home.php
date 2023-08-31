<?php

namespace App\Livewire\Pages;

use App\Models\Project;
use Illuminate\Support\Collection;
use Livewire\Component;

class Home extends Component
{
    public Collection $projects;

    public function mount()
    {
        $this->projects = Project::all();
    }

    public function render()
    {
        return view('livewire.pages.home', ['projects' => $this->projects]);
    }
}
