<form wire:submit.prevent="register">
    <div>
        <Label for="email">Email</Label>
        <input wire:model="email" type="text" id="email" name="email">
        @error('email')
        <span>{{ $message }}</span>
    @enderror
    </div>
    <div>
        <Label for="name">Name</Label>
        <input wire:model="name" type="text" id="name" name="name">
        @error('name')
            <span>{{ $message }}</span>
        @enderror
    </div>
    <div>
        <Label for="password">Password</Label>
        <input wire:model="password" type="password" id="password" name="password">
        @error('password')
            <span>{{ $message }}</span>
        @enderror
    </div>
    <div>
        <Label for="passwordConfirmation">Password Confirmation</Label>
        <input wire:model="passwordConfirmation" type="password" id="passwordConfirmation" name="passwordConfirmation">
    </div>
    <div>
        <button type="submit">Register</button>
    </div>
</form>
