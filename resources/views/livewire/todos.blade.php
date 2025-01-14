<?php

use App\Models\Todo;

use function Livewire\Volt\{state, with};

state(['task' => '']);
with(['tasks' => fn () => Todo::all()]);
$addTask = function () {
    Todo::create([
        'user_id' => auth()->id(),
        'task' => $this->task
    ]);
    $this->task = '';
};

$deleteTask = function (Todo $task) {
    $task->delete();
};
?>

<div>
    <form wire:submit.prevent="addTask">
        <input type="text" wire:model.live="task">
        <button type="submit" style="margin-left: 10px; padding: 10px; background: #000; color: #fff">Add</button>
    </form>
    <div class="mt-4">
    @foreach ($tasks as $task)
        <div>
            {{ $task->task }}
            <button wire:click="deleteTask({{ $task }})" style="margin-left: 10px; padding: 10px; background: #000; color: #fff">X</button>
        </div>
    @endforeach
    </div> 
</div>
 