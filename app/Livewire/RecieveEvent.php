<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class RecieveEvent extends Component
{
    public array $names_array = ['asif jalal'];

    #[On('addName')]
    public function addName($name = 'default name')
    {
        $this->names_array[] = $name;
    }
    public function render()
    {
        return view('livewire.recieve-event');
    }
}
