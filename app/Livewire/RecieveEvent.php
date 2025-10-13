<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class RecieveEvent extends Component
{
    public array $names_array = ['asif jalal'];
    protected $listeners = ['addName'];
    // protected $listeners = ['addName' => 'handleAddName'];
    
    // #[On('addName')]
    public function addName($name)
    {
        $this->names_array[] = $name;
    }

    public function handleAddName($action,$data)
    {
        $this->names_array[] = $data['name'];
    }

    public function mount()
    {
        sleep(3);
    }

    public function placeholder()
    {
        return <<<'HTML'
        <div>
            <h1>loading...</h1>
        </div>
        HTML;
    }
    public function render()
    {
        return view('livewire.recieve-event');
    }
}
