<?php

namespace App\Livewire;

use App\Models\User;
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

    public string $name, $email, $id;
    // public $users = [];
    public function mount()
    {
        // $this->users = User::all();
    }

    public function addUser(){
        // $new_user = [
        //     'name' => $this->name,
        //     'email' => $this->email,
        // ];
        // $this->users[] = $new_user;
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);
        $new_user = [
            'name' => $this->name,
            'email' => $this->email,
            'password' => rand(1000, 9999),
        ];
        User::updateOrCreate(
            [
               'id' => $this->id ?? null, 
            ],$new_user);
        // $this->reset();
    }
    public function editUser($id){
        // foreach ($this->users as $key => $user) {
        //     if($user['name'] == $id){
        //         $this->name = $user['name'];
        //         $this->email = $user['email'];
        //     }
        // }
        $user = User::find($id);
        $this->name = $user->name;
        $this->email = $user->email;
        $this->id = $user->id;
    }
    public function deleteUser($id){
        // $this->users = array_filter($this->users, fn($user) => $user['name'] != $id);
        User::find($id)->delete();
    }
    public function render()
    {
        return view('livewire.first-component', [
            'users' => User::all()->toArray()
        ]);
    }
}
