<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $message;

    protected $rules = [
        'name' => 'required|string|min:3',
        'email' => 'required|email',
        'message' => 'required|string',
    ];

    public function submit()
    {
        $this->validate();

        Mail::send('emails.contact', [
            'name' => $this->name,
            'email' => $this->email,
            'messageContent' => $this->message, 
        ], function ($mail) {
            $mail->to('kacper.celak@gmail.com')
                 ->subject('New Contact Form AppliqTech');
        });

        $this->reset();

        session()->flash('success', 'Your message has been sent successfully!');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
