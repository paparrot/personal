<?php

namespace App\Livewire\Components;

use Illuminate\Support\Facades\Session;
use Livewire\Component;

class LocaleToggler extends Component
{
    public function toggle(string $language)
    {
        Session::put('locale', $language);

        return to_route('home');
    }


    public function render()
    {
        return view('livewire.components.locale-toggler');
    }
}
