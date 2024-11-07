@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-neutral-300 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-300 focus:border-accent-500 dark:focus:border-accent-600 focus:ring-accent-500 dark:focus:ring-accent-600 rounded-md shadow-sm']) !!}>
