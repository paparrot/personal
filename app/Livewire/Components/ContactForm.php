<?php

namespace App\Livewire\Components;

use App\Jobs\SendContactForm;
use Livewire\Component;

class ContactForm extends Component
{
    public string $name;
    public string $email;
    public string $message;

    protected $rules = [
        'name' => ['required', 'string'],
        'email' => ['email', 'required'],
        'message' => ['required']
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {

        $this->validate();

        SendContactForm::dispatch($this->name, $this->email, $this->message);

        session()->flash('message', 'Form successfully send.');

        return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.components.contact-form');
    }
}
