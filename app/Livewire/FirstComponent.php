<?php

namespace App\Livewire;

use Livewire\Component;

class FirstComponent extends Component
{
    public string $message = 'Welcome to Livewire Tutorial';
    public int $count = 0;
    public int $number = 0;
    public function increment()
    {
        $this->count++;
    }
    public function decrement()
    {
        $this->count--;
    }
    public function updateNumber(int $number)
    {
        $this->count = $number;
    }
    public function render()
    {
        return view('livewire.first-component');
    }
}
