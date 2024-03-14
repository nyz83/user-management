<x-app-layout>
    <form action="{{ route('roles.update', $role) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4 max-w-md space-y-5">
            <div>
                <x-input-label class="mb-2" for="name" :value="__('Name')" />
                <x-input-text id="name" name="name" value="{{ old('name', $role->name) }}" required />
                @error('name')
                    <x-input-error class="mt-1" :messages="$message" />
                @enderror
            </div>
            <div>
                <fieldset>
                    <legend class="mb-2 block text-sm font-medium text-gray-700" id="is_active">
                        Features
                    </legend>
                    <div class="space-y-2">
                        @foreach ($features as $feature)
                            <div class="space-y-1">
                                <p class="text-sm font-medium capitalize text-gray-700">{{ $feature->name }}</p>
                                <div class="relative flex gap-x-4">
                                    @foreach ($feature->permissions as $permission)
                                        <div class="space-x-1">
                                            <x-input-checkbox id="{{ $permission->id }}" name="permissions[]"
                                                value="{{ $permission->id }}" :checked="$role->permissions->pluck('id')->contains($permission->id)" />
                                            <x-input-label for="{{ $permission->id }}" :value="$permission->name" />
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </fieldset>
                @error('permissions')
                    <x-input-error class="mt-1" :messages="$message" />
                @enderror
            </div>
        </div>
        <x-button-primary>
            Update Role
        </x-button-primary>
    </form>
</x-app-layout>
