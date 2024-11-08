<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-neutral-100 dark:bg-neutral-900">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-neutral-800 shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>

    @if (isset($footer))
        {{ $footer }}
    @endif
</div>
