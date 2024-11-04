@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-accent-500 dark:focus:border-accent-600 focus:ring-accent-500 dark:focus:ring-accent-600 rounded-md shadow-sm']) !!}>
