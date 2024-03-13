<x-app-layout>
    <form action="{{ route('roles.update', $role) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4 max-w-md space-y-5">
            <div>
                <x-input-label class="mb-2" for="name" :value="__('Name')" />
                <x-text-input id="name" name="name" value="{{ old('name', $role->name) }}" required />
                @error('name')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
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
                                <span class="block text-sm font-medium text-gray-700">{{ $feature->name }}</span>
                                <div class="relative flex gap-x-3">
                                    @foreach ($feature->permissions as $permission)
                                        <div class="flex h-6 items-center">
                                            <input
                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600"
                                                id="{{ $permission->id }}" name="permissions[]" type="checkbox"
                                                value='{{ $permission->id }}' @checked($role->permissions->pluck('id')->contains($permission->id))>
                                        </div>
                                        <label class="text-sm font-medium leading-6 text-gray-900"
                                            for="{{ $permission->id }}">
                                            {{ $permission->name }}
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>

                </fieldset>
                @error('permissions')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <x-primary-button>
            Update Role
        </x-primary-button>
    </form>
</x-app-layout>
