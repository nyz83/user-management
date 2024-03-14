@props(['active' => null])

@php
    $classes =
        $active ?? false
            ? 'group flex gap-x-3 rounded-md bg-indigo-700 p-2 text-sm font-semibold leading-6 text-white'
            : 'group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 text-indigo-200 hover:bg-indigo-700 hover:text-white';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
