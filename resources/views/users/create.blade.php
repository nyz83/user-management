<x-app-layout>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="mb-4 grid gap-4 sm:grid-cols-3">
            <div>
                <x-input-label class="mb-2" for="name" :value="__('Name')" />
                <x-input-text id="name" name="name" value="{{ old('name') }}" required />
                @error('name')
                    <x-input-error class="mt-1" :messages="$message" />
                @enderror
            </div>
            <div>
                <x-input-label class="mb-2" for="username" :value="__('Username')" />
                <x-input-text id="username" name="username" value="{{ old('username') }}" required />
                @error('username')
                    <x-input-error class="mt-1" :messages="$message" />
                @enderror
            </div>
            <div>
                <x-input-label class="mb-2" for="email" :value="__('Email')" />
                <x-input-text id="email" name="email" type="email" value="{{ old('email') }}" required />
                @error('email')
                    <x-input-error class="mt-1" :messages="$message" />
                @enderror
            </div>
            <div>
                <x-input-label class="mb-2" for="password" :value="__('Password')" />
                <x-input-text id="password" name="password" value="{{ old('password') }}" required />
                @error('password')
                    <x-input-error class="mt-1" :messages="$message" />
                @enderror
            </div>
            <div>
                <x-input-label class="mb-2" for="phone" :value="__('Phone')" />
                <x-input-text id="phone" name="phone" value="{{ old('phone') }}" required />
                @error('phone')
                    <x-input-error class="mt-1" :messages="$message" />
                @enderror
            </div>
            <div>
                <x-input-label class="mb-2" for="gender" :value="__('Gender')" />
                <x-input-select id="gender" name="gender" :options="$genders" :default="__('Select Gender')" />
                @error('gender')
                    <x-input-error class="mt-1" :messages="$message" />
                @enderror
            </div>
            <div>
                <x-input-label class="mb-2" for="address" :value="__('Address')" />
                <x-input-textarea id="address" name="address" rows="4" plceholder="Write Your Address" required>
                    {{ old('address') }}
                </x-input-textarea>
                @error('address')
                    <x-input-error class="mt-1" :messages="$message" />
                @enderror
            </div>
            <div>
                <x-input-label class="mb-2" for="role" :value="__('Role')" />
                <x-input-select id="role" name="role_id" :options="$roles" :default="__('Select Role')" />
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
                            <x-input-text class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600"
                                id="is_active" name="is_active" type="checkbox" value="1" />
                        </div>
                        <div class="text-sm leading-6">
                            <label class="font-medium text-gray-900" for="isActive">
                                Is Active
                            </label>
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
            Create User
        </x-button-primary>
    </form>
</x-app-layout>
