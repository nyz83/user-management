<x-app-layout>
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <h1 class="text-base font-semibold leading-6 text-gray-900">Roles</h1>
            <p class="mt-2 text-sm text-gray-700">
                A list of all roles
            </p>
        </div>
        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
            <a class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                type="button" href="{{ route('roles.create') }}">
                Add role
            </a>
        </div>
    </div>
    <div class="mb-4">
        <table class="min-w-full divide-y divide-gray-300">
            <thead>
                <tr>
                    <th class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0" scope="col">
                        Name
                    </th>
                    <th class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell"
                        scope="col">
                        Permissions
                    </th>
                    <th class="relative py-3.5 pl-3 pr-4 sm:pr-0" scope="col">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 bg-white">
                @foreach ($roles as $role)
                    <tr>
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">
                            <p class="capitalize">{{ $role->name }}</p>
                        </td>
                        <td class="hidden whitespace-nowrap px-3 py-4 text-sm text-gray-500 lg:table-cell">
                            <div class="space-y-3">
                                @foreach ($features as $feature)
                                    <div class="flex gap-x-4 gap-y-2">
                                        <x-badge :value="$feature->name" :type="__('gray')" />
                                        @foreach ($role->permissions as $permission)
                                            @if ($permission->feature_id == $feature->id)
                                                <div class="flex flex-wrap justify-center gap-y-4">
                                                    <x-badge :value="$permission->name" :type="__('green')" />
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>

                        </td>
                        <td class="whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                            <div class="flex justify-center gap-2">
                                <x-nav-link class="text-indigo-600 hover:text-indigo-900"
                                    href="{{ route('roles.edit', $role) }}">
                                    Edit<span class="sr-only">, {{ $role->name }}</span>
                                </x-nav-link>
                                <form class="text-indigo-600 hover:text-indigo-900"
                                    action="{{ route('roles.destroy', $role) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button>
                                        Delete<span class="sr-only">, {{ $role->name }}</span>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
