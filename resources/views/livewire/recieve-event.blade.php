<div>
    {{-- Be like water. --}}
    <ul class="bg-[#f9aaf9] text-[#000]" style="list-style: number;">
        @foreach ($names_array as $name)
            <li class="p-2 my-2">{{ $name }}</li>
        @endforeach
        <!-- <div x-on:addNameFromBlade='revieved'></div> -->
    </ul>
</div>
