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
    public function send()
    {
        $this->dispatch('addName', $this->name);
        $this->reset('name');
        // $this->dispatchBrowserEvent('addName', $this->name);
    }
    public function render()
    {
        return view('livewire.send-event');
    }
}
