<?php

namespace App\Livewire;

use Livewire\Component;

class SendEvent extends Component
{
    public string $name = '';
    public function sendEvent($name)
    {
        $this->emit('event', $name);
    }

    public function sendData(){
        $this->dispatch('send-data');
        // $this->dispatchBrowserEvent('send-data');
    }

    public function send()
    {
        $this->dispatch('addName', $this->name);
        // $this->reset('name');
    }
    public function render()
    {
        return view('livewire.send-event');
    }
}
