@props(['checked' => false])

<input type="checkbox" {{ $checked ? 'checked' : '' }} {!! $attributes->merge([
    'class' =>
        'w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-md focus:ring-blue-500 p-2.5 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600',
]) !!}>
