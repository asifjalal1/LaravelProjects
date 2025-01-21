<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <br>
    <div style="margin: 10px 0px;">
        Send name from here in livewire
        <div>
            <input type="text" name="name" id="" wire:model="name">
        </div>
        {{-- call through component --}}
        <button type="button" wire:click="send" class="bg-[#000] text-[#fff] my-5 p-2 rounded-lg float-right">through component Send</button>
        <br>
        {{-- call through blade --}}
        <button type="button" wire:click="$dispatch('addName', { name: name})" wire:loading.attr="disabled" class="bg-[#000] text-[#fff] my-5 p-2 rounded-lg float-right">through blade Send</button>
    </div>
</div>
