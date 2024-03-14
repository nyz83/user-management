<nav class="flex flex-1 flex-col">
    <ul class="flex flex-1 flex-col gap-y-7" role="list">
        <li>
            <ul class="-mx-2 space-y-1" role="list">
                <li>
                    <x-nav-link href="{{ route('users.index') }}" :active="request()->routeIs('users.index')">
                        <svg class="h-6 w-6 shrink-0 text-white" class="h-6 w-6" aria-hidden="true" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                        </svg>
                        Users List
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link href="{{ route('users.create') }}" :active="request()->routeIs('users.create')">
                        <svg class="h-6 w-6 shrink-0 text-indigo-200 group-hover:text-white" class="h-6 w-6"
                            aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                        </svg>
                        New User
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link href="{{ route('roles.index') }}" :active="request()->routeIs('roles.index')">
                        <svg class="h-6 w-6 shrink-0 text-indigo-200 group-hover:text-white" aria-hidden="true"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z">
                            </path>
                        </svg>
                        Roles List
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link href="{{ route('roles.create') }}" :active="request()->routeIs('roles.create')">
                        <svg class="h-6 w-6 shrink-0 text-indigo-200 group-hover:text-white" class="h-6 w-6"
                            aria-hidden="true"fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 10.5v6m3-3H9m4.06-7.19-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
                        </svg>
                        Create Role
                    </x-nav-link>
                </li>
            </ul>
        </li>
    </ul>
</nav>
