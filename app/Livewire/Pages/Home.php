<?php

namespace App\Livewire\Pages;

use App\Models\Project;
use Illuminate\Support\Collection;
use Illuminate\View\View;
use Livewire\Component;

class Home extends Component
{
    public Collection $projects;

    public function mount(): void
    {
        $this->projects = Project::latest()->get();
    }

    public function render(): View
    {
        return view('livewire.pages.home', ['projects' => $this->projects]);
    }
}
