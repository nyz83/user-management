<x-app-layout>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="mb-4 grid gap-4 sm:grid-cols-3">
            <div>
                <x-input-label class="mb-2" for="name" :value="__('Name')" />
                <x-text-input id="name" name="name" value="{{ old('name') }}" required />
                @error('name')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <x-input-label class="mb-2" for="username" :value="__('Username')" />
                <x-text-input id="username" name="username" value="{{ old('username') }}" required />
                @error('username')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <x-input-label class="mb-2" for="email" :value="__('Email')" />
                <x-text-input id="email" name="email" type="email" value="{{ old('email') }}" required />
                @error('email')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <x-input-label class="mb-2" for="password" :value="__('Password')" />
                <x-text-input id="password" name="password" value="{{ old('password') }}" required />
                @error('password')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <x-input-label class="mb-2" for="phone" :value="__('Phone')" />
                <x-text-input id="phone" name="phone" value="{{ old('phone') }}" required />
                @error('phone')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <x-input-label class="mb-2" for="gender" :value="__('Gender')" />
                <x-select id="gender" name="gender">
                    <option selected>Select gender</option>
                    <option value="male">
                        Male
                    </option>
                    <option value="female">
                        Female
                    </option>
                    <option value="unknown">
                        Unknown
                    </option>
                </x-select>
                @error('gender')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <x-input-label class="mb-2" for="address" :value="__('Address')" />
                <x-textarea id="address" name="address" rows="4" plceholder="Write Your Address" required>
                    {{ old('address') }}
                </x-textarea>
                @error('address')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <fieldset>
                    <legend class="mb-2 block text-sm font-medium text-gray-700" id="is_active">
                        Active Status
                    </legend>
                    <div class="relative flex gap-x-3">
                        <div class="flex h-6 items-center">
                            <x-text-input name="is_active" type="hidden" value="0" />
                            <x-text-input class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600"
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
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <x-primary-button>
            Create User
        </x-primary-button>
    </form>
</x-app-layout>
