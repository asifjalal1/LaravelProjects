<main>
    
    {{-- <div>
        {{ $message }}
    </div>
    <div>
        {{ $count }}
    </div>
    <div>
        <input type="number" name="number" wire:model="number" id="">
        <button wire:click="updateNumber({{$number}})">Update Number</button>
        <button wire:click="increment">Increment</button>
        <button wire:click="decrement">Decrement</button>
    </div> --}}
    

    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="p-4">
            <form class="max-w-sm mx-auto" wire:submit="addUser">
                <div class="mb-5">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your name</label>
                    <input type="text" id="name" wire:model="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-white-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=""/>
                </div>    
                <div class="mt-4">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                    <input type="email" id="email" wire:model="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=""/>
                </div>
                <div class="mt-4">
                    <label for="your_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
                    <input type="password" id="your_password" wire:model="your_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                </div>
                <button type="submit" class="mt-4 w-full text-dark bg-primary hover:bg-primary-dark focus:ring-4 focus:outline-none focus:ring-primary-dark font-medium rounded-lg text-sm px-5 py-2.5" style="background-color: #F06A4E">Submit</button>
            </form>
        </div>
    </div>


    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        User Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        password
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr class="bg-danger border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-orange-500">
                            {{ $user['name'] ?? '-' }}
                        </th>
                        <td class="px-6 py-4 text-red">
                            {{ $user['email'] ?? '-' }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user['password'] ?? '-' }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" class="text-white font-medium p-3" wire:click="editUser('{{ e($user['name'] ?? '')}}')" style="background-color: lightseagreen; padding:5px; border-radius: 6px">Edit</a>
                            <a href="#" class="text-white font-medium p-3" wire:click="deleteUser('{{ e($user['name'] ?? '')}}')" style="background-color: lightsalmon; padding:5px; border-radius: 6px">delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
