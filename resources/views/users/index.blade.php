<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl space-y-6 sm:px-6 lg:px-8">
            <div class="bg-white py-10">
                <div class="mx-auto max-w-7xl">
                    <div class="px-4 sm:px-6 lg:px-8">
                        <div class="sm:flex sm:items-center">
                            <div class="sm:flex-auto">
                                <h1 class="text-base font-semibold leading-6 text-gray-900">Users</h1>
                                <p class="mt-2 text-sm text-gray-700">A list of all the users in your account including
                                    their name, title, email and role.</p>
                            </div>
                            <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                                <a class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                                    type="button" href="{{ route('users.create') }}">
                                    Add user
                                </a>
                            </div>
                        </div>
                        <div class="-mx-4 mt-8 sm:-mx-0">
                            <table class="min-w-full divide-y divide-gray-300">
                                <thead>
                                    <tr>
                                        <th class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0"
                                            scope="col">Name</th>
                                        <th class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 sm:table-cell"
                                            scope="col">Username</th>
                                        <th class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell"
                                            scope="col">Email</th>
                                        <th class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"
                                            scope="col">Role</th>
                                        <th class="relative py-3.5 pl-3 pr-4 sm:pr-0" scope="col">
                                            <span class="sr-only">Edit</span>
                                        </th>
                                        <th class="relative py-3.5 pl-3 pr-4 sm:pr-0" scope="col">
                                            <span class="sr-only">Delete</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 bg-white">
                                    @foreach ($users as $user)
                                        <tr>
                                            <td
                                                class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">
                                                {{ $user->name }}
                                            </td>
                                            <td
                                                class="hidden whitespace-nowrap px-3 py-4 text-sm text-gray-500 sm:table-cell">
                                                {{ $user->username }}
                                            </td>
                                            <td
                                                class="hidden whitespace-nowrap px-3 py-4 text-sm text-gray-500 lg:table-cell">
                                                {{ $user->email }}
                                            </td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                Member
                                            </td>
                                            <td
                                                class="whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                                                <a class="text-indigo-600 hover:text-indigo-900"
                                                    href="{{ route('users.edit', $user) }}">
                                                    Edit<span class="sr-only">, Lindsay Walton</span>
                                                </a>
                                            </td>
                                            <td
                                                class="whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                                                <form class="text-indigo-600 hover:text-indigo-900"
                                                    action="{{ route('users.destroy', $user) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button>
                                                        Delete<span class="sr-only">, Lindsay Walton</span>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            {{ $users->links() }}
        </div>
    </div>
</x-app-layout>
