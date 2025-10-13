<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <br>
    <div style="margin: 10px 0px;">
        Send name from here in livewire
        <div>
            <input type="text" name="name" id="name" wire:model.lazy="name">
        </div>
        {{-- call through component --}}
        <button type="button" wire:click="send" class="bg-[#c30] text-[#fff] my-5 p-2 rounded-lg float-right">through component</button>
        <br>
        {{-- call through blade without component reference --}}
        <button type="button" wire:click="$dispatch('addName', {name: '{{$name}}'})" class="bg-[#fe0] text-[#fff] my-5 p-2 rounded-lg float-right">through blade</button>
        <!-- <button type="button" wire:click="$dispatch('addName', 'RecieveEvent', {name: name})" class="bg-[#fdf] text-[#000] my-5 p-2 rounded-lg float-right">specific component</button> -->
        <br>
        {{-- call through js --}}
        <button type="button" wire:click="sendData" class="bg-[#fdf] text-[#000] my-5 p-2 rounded-lg float-right">specific component</button>
    </div>
</div>
<script>
    Livewire.on('send-data', () => {
        let name_data = {
            name: document.getElementById('name').value // get value from input
            // name: "{{$name}}" // get variable value from blade or component
        };
        Livewire.dispatch('addName', name_data);
    })

    // document.addEventListener('DOMContentLoaded', function () {
    //     document.addEventListener('livewire:load', function () {
    //         Livewire.on('sendData', () => {
    //             const phpVariable = JSON.parse(document.getElementById('myPhpVariable').value);
    //             Livewire.dispatch('addName', { phpVariable: phpVariable });
    //         })
    //     })
    // })
</script>