<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-accent-800 dark:bg-accent-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-accent-800 uppercase tracking-widest hover:bg-accent-700 dark:hover:bg-white focus:bg-accent-700 dark:focus:bg-white active:bg-accent-900 dark:active:bg-accent-300 focus:outline-none focus:ring-2 focus:ring-accent-500 focus:ring-offset-2 dark:focus:ring-offset-accent-800 disabled:opacity-50 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
