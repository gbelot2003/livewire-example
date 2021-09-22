<div class="flex-col space-y-4">

    <div class="w-1/4">
        <x-input.text wire:model.debounce.400="search" placeholder="Search users..." />
    </div>

    <x-table>
        <x-slot name="head">
            <x-table.heading sortable wire:click="sortBy('name')"
                :direction="$sortField === 'name' ? $sortDirection : null" class="pr-0">{{ __('Name') }}
            </x-table.heading>
            <x-table.heading sortable wire:click="sortBy('email')"
                :direction="$sortField === 'email' ? $sortDirection : null" class="w-auto">{{ __('Email') }}
            </x-table.heading>
            <x-table.heading sortable wire:click="sortBy('state')"
                :direction="$sortField === 'state' ? $sortDirection : null">{{ __('State') }}</x-table.heading>
            <x-table.heading sortable>{{ __('Rol') }}</x-table.heading>
        </x-slot>

        <x-slot name="body">
            @forelse ($users as $user)
                <x-table.row wire:loading.class="opacity-50">
                    <x-table.cell>
                        <a wire:click="edit({{ $user->id }})" href="#"
                            class="inline-flex space-x-2 truncate text-sm leading-5 hover:underline">
                            <x-icon.cash class="text-cool-gray-500" />
                            <p class="text-cool-500 truncate">
                                {{ $user->name }}
                            </p>
                            </span>
                    </x-table.cell>
                    <x-table.cell>
                        <p class="inline-flex space-x-2 truncate text-sm leading-5 text-cool-500">
                            {{ $user->email }}
                        </p>
                    </x-table.cell>
                    <x-table.cell>
                        <span class="{{ $user->UserColor() }} font-semibold px-2 rounded-full">
                            {{ $user->userState() }}
                        </span>
                    </x-table.cell>
                    <x-table.cell>
                        <span class="text-gray-500 text-sm font-semibold tracking-wide">
                            {{ str_replace(array('["','"]'), "", $user->roles->pluck('name')) }}
                            {{-- str_replace(array('[',']'), "", $user->roles->pluck('id')); --}}
                        </span>
                    </x-table.cell>
                </x-table.row>
            @empty
                <x-table.row>
                    <x-table.cell colspan="4">
                        <div class="flex justify-center items-center">
                            <span class="text-x1 py-8">{{ __('No results in search') }}</span>
                        </div>

                    </x-table.cell>
                </x-table.row>
            @endforelse
        </x-slot>
    </x-table>
    {{ $users->links() }}
    <form wire:submit.prevent="save">
        <x-modal.dialog wire:model.defer="showEditModal">
            <x-slot name="title">{{ __('Edit User') }}</x-slot>
            <x-slot name="content">

                <x-input.group for="name" label="{{ __('Name') }}" :error="$errors->first('editing.name')">
                    <x-input.text wire:model="editing.name" id="name" />
                </x-input.group>

                <x-input.group for="email" label="{{ __('Email') }}" :error="$errors->first('editing.email')">
                    <x-input.text wire:model="editing.email" id="email" />
                </x-input.group>

                <x-input.group for="state" label="{{ __('State') }}" :error="$errors->first('editing.state')">
                    <x-switch wire:model="editing.state" id="state" label="{{ __('State') }}" />
                </x-input.group>

                <x-input.group for="rol" label="{{ __('Rol') }}">
                    <x-input.select wire:model="roleSelected" placeholder="Rol Selecction">
                        @foreach ($roles as $rol)
                            <option value="{{ $rol->id }}">{{ $rol->name }}</option>
                        @endforeach
                    </x-input.select>
                </x-input.group>

            </x-slot>
            <x-slot name="footer">
                <x-button.secondary wire:click="close">Cancel</x-button.secondary>
                <x-button.primary type="submit">Save</x-button.primary>
            </x-slot>
        </x-modal.dialog>
    </form>
</div>

{{-- <div class="flex items-center px-4">
    <div class='overflow-x-auto w-full'>
        <!-- Table -->
        <table class='mx-auto w-full whitespace-nowrap rounded-lg bg-white divide-y divide-gray-300 overflow-hidden'>
            <thead class="bg-gray-50">
                <tr class="text-gray-600 text-left">
                    <th class="font-semibold text-sm uppercase px-6 py-4">
                        Name
                    </th>
                    <th class="font-semibold text-sm uppercase px-6 py-4">
                        Title
                    </th>
                    <th class="font-semibold text-sm uppercase px-6 py-4 text-center">
                        status
                    </th>
                    <th class="font-semibold text-sm uppercase px-6 py-4 text-center">
                        role
                    </th>
                    <th class="font-semibold text-sm uppercase px-6 py-4">

                    </th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                
            </tbody>
        </table>

    </div>
</div>
    
    <tr>
                    <td class="px-6 py-4">
                        <div class="flex items-center space-x-3">
                            <div class="inline-flex w-10 h-10">
                                <img class='w-10 h-10 object-cover rounded-full' alt='User avatar' src='https://images.unsplash.com/photo-1477118476589-bff2c5c4cfbb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=200&q=200'>
                            </div>
                            <div>
                                <p class="">
                                    Jane Doe
                                </p>
                                <p class="text-gray-500 text-sm font-semibold tracking-wide">
                                    jane20doe@mail.com
                                </p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <p class="">
                            Patwari at Betul
                        </p>
                        <p class="text-gray-500 text-sm font-semibold tracking-wide">
                            Management
                        </p>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <span class="text-green-800 bg-green-200 font-semibold px-2 rounded-full">
                            Active
                        </span>
                    </td>
                    <td class="px-6 py-4 text-center">
                        Admin
                    </td>
                    <td class="px-6 py-4 text-center">
                        <a href="#" class="text-purple-800 hover:underline">Edit</a>
                    </td>
                </tr>
                <tr>
                    <td class="px-6 py-4">
                        <div class="flex items-center space-x-3">
                            <div class="inline-flex w-10 h-10">
                                <img class='w-10 h-10 object-cover rounded-full' alt='User avatar' src='https://images.unsplash.com/photo-1477118476589-bff2c5c4cfbb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=200&q=200'>
                            </div>
                            <div>
                                <p class="">
                                    Jane Doe
                                </p>
                                <p class="text-gray-500 text-sm font-semibold tracking-wide">
                                    jane20doe@mail.com
                                </p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <p class="">
                            Patwari at Betul
                        </p>
                        <p class="text-gray-500 text-sm font-semibold tracking-wide">
                            Management
                        </p>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <span class="text-green-800 bg-green-200 font-semibold px-2 rounded-full">
                            Active
                        </span>
                    </td>
                    <td class="px-6 py-4 text-center">
                        Admin
                    </td>
                    <td class="px-6 py-4 text-center">
                        <a href="#" class="text-purple-800 hover:underline">Edit</a>
                    </td>
                </tr> --}}
