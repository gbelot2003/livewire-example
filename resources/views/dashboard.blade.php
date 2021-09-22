<x-app-layout>
    {{-- <x-jet-welcome /> --}}
    <div class="bg-white p-2 rounded-2xl">
        <h3>Texto de Prueba</h3>
        <div class="mt-6 sm:mt-5">
            <x-input.group label="Username" for="username" :error="$errors->first('username')">
                <x-input.text  id="username" name="username" placeholder="Test" />
            </x-input.group>

            <x-input.group label="About" for="about" :error="$errors->first('about')" help-text="Escribe algunas cosas sobre tí">
                <x-input.textarea  id="about" name="about" />
            </x-input.group>

            <x-input.group label="seleccion" for="seleccion">
                <livewire:select2-auto-search
                    name="user_id"
                    placeholder="Choose a User"
                    :value="request('user_id')"
                    :searchable="true"
                    class="bg-gray-200"
                />
            </x-input.group>

            <x-input.group label="About" for="about" :error="$errors->first('about')" help-text="Escribe algunas cosas sobre tí">
                <x-switch  id="about" label="switch" />
            </x-input.group>

            <x-button.primary>Prueba</x-button.primary>
        </div>

    </div>



</x-app-layout>
