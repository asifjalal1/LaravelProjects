<?php

namespace App\Livewire;

use Livewire\Component;

class FirstComponent extends Component
{
    // public string $message = 'Welcome to Livewire Tutorial';
    // public int $count = 0;
    // public int $number = 0;
    
    // public function increment()
    // {
    //     $this->count++;
    // }
    // public function decrement()
    // {
    //     $this->count--;
    // }
    // public function updateNumber(int $number)
    // {
    //     $this->count = $number;
    // }

    public string $name, $email, $your_password;
    public $users = [
        [
            'name' => 'New User',
            'email' => 'new@example',
            'password' => 'pppppp',
        ]
    ];

    public function mount()
    {
        // $this->users = \App\Models\User::all();
    }

    public function addUser(){
        $new_user = [
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->your_password,
        ];
        $this->users[] = $new_user;
    }
    public function editUser($name){
        foreach ($this->users as $key => $user) {
            if($user['name'] == $name){
                $this->name = $user['name'];
                $this->email = $user['email'];
                $this->your_password = $user['password'];
            }
        }
    }
    public function deleteUser($name){
        $this->users = array_filter($this->users, fn($user) => $user['name'] != $name);
    }
    public function render()
    {
        return view('livewire.first-component');
    }
}
