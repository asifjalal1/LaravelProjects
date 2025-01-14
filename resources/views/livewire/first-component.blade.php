<main>
    <div>
        {{ $message }}
    </div>
    <div>
        {{ $count }}
    </div>
    <div>
        <input type="number" name="number" wire:model.live="number" id="">
        <button wire:click="UpdateNumber($number)">Update Number</button>
        <!-- <button wire:click="increment">Increment</button> -->
        <!-- <button wire:click="decrement">Decrement</button> -->
    </div>
</main>
