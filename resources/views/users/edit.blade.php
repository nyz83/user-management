<x-app-layout>
    <form action="{{ route('users.update', $user) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4 grid gap-4 sm:grid-cols-3">
            <div>
                <x-input-label class="mb-2" for="name" :value="__('Name')" />
                <x-input-text id="name" name="name" value="{{ old('name', $user->name) }}" required />
                @error('name')
                    <x-input-error class="mt-1" :messages="$message" />
                @enderror
            </div>
            <div>
                <x-input-label class="mb-2" for="username" :value="__('Username')" />
                <x-input-text id="username" name="username" value="{{ old('username', $user->username) }}" required />
                @error('username')
                    <x-input-error class="mt-1" :messages="$message" />
                @enderror
            </div>
            <div>
                <x-input-label class="mb-2" for="email" :value="__('Email')" />
                <x-input-text id="email" name="email" type="email" value="{{ old('email', $user->email) }}"
                    required />
                @error('email')
                    <x-input-error class="mt-1" :messages="$message" />
                @enderror
            </div>
            <div>
                <x-input-label class="mb-2" for="password" :value="__('Password')" />
                <x-input-text id="password" name="password" value="{{ old('password, $user->password') }}" required />
                @error('password')
                    <x-input-error class="mt-1" :messages="$message" />
                @enderror
            </div>
            <div>
                <x-input-label class="mb-2" for="phone" :value="__('Phone')" />
                <x-input-text id="phone" name="phone" value="{{ old('phone', $user->phone) }}" required />
                @error('phone')
                    <x-input-error class="mt-1" :messages="$message" />
                @enderror
            </div>
            <div>
                <x-input-label class="mb-2" for="gender" :value="__('Gender')" />
                <x-input-select id="gender" name="gender" :options="$genders" :selected="$user->gender"
                    :default="__('Select Gender')" />
                @error('gender')
                    <x-input-error class="mt-1" :messages="$message" />
                @enderror
            </div>
            <div>
                <x-input-label class="mb-2" for="address" :value="__('Address')" />
                <x-input-textarea id="address" name="address" rows="4" plceholder="Write Your Address" required>
                    {{ old('address', $user->address) }}
                </x-input-textarea>
                @error('address')
                    <x-input-error class="mt-1" :messages="$message" />
                @enderror
            </div>
            <div>
                <x-input-label class="mb-2" for="role" :value="__('Role')" />
                <x-input-select id="role" name="role_id" :options="$roles" :default="__('Select Role')" :selected="$user->role_id" />
                @error('gender')
                    <x-input-error class="mt-1" :messages="$message" />
                @enderror
            </div>
            <div>
                <fieldset>
                    <legend class="mb-2 block text-sm font-medium text-gray-700" id="is_active">
                        Active Status
                    </legend>
                    <div class="relative flex gap-x-3">
                        <div class="flex h-6 items-center">
                            <x-input-text name="is_active" type="hidden" value="0" />
                            <x-input-checkbox id="is_active" name="is_active" value="1"
                                checked="{{ $user->is_active }}" />
                        </div>
                        <div class="text-sm leading-6">
                            <x-input-label for="is_active" :value="__('Is Active')" />
                            <p class="text-gray-500">
                                When unchecked, the user will be considered inactive
                            </p>
                        </div>
                    </div>
                </fieldset>
                @error('is_active')
                    <x-input-error class="mt-1" :messages="$message" />
                @enderror
            </div>
        </div>
        <x-button-primary>
            Update User
        </x-button-primary>
    </form>
</x-app-layout>
