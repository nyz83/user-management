@props(['type', 'value'])

<span @class([
    'inline-flex items-center rounded-md px-2 py-1 text-sm font-medium ring-1 ring-inset',
    'bg-gray-50 text-gray-600 ring-gray-500/10' => $type === 'gray',
    'bg-green-50 text-green-700 ring-green-600/20' => $type === 'green',
]) {{ $attributes }}>
    {{ $value ?? $slot }}
</span>
