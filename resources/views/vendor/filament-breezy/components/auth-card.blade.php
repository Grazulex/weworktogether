@props(['action'])
<div @class([
    'flex items-center justify-center min-h-screen bg-gray-100 text-gray-900 filament-breezy-auth-component filament-login-page',
    'dark:bg-gray-900 dark:text-white' => config('filament.dark_mode'),
])>
<div
        class="px-6 -mt-16 md:mt-0 md:px-2 max-w-{{ config('filament-breezy.auth_card_max_w') ?? 'md' }} space-y-8 w-screen">
                <div class="p-8 space-y-8 bg-white/50 backdrop-blur-xl border border-gray-200 shadow-2xl rounded-2xl relative filament-breezy-auth-card"
        ])>
               <div class="w-full flex justify-center">
        <x-filament::brand />
    </div>
    <div>
        <h2 class="font-bold tracking-tight text-center text-2xl">
            {{ __('In difficult times, why not work together and invite new colleagues home') }}
        </h2>
        <p class="mt-2 text-sm text-center">
            {{ __('Find or invite people to homework from your home for FREE. In addition to no longer being alone, you can also get together so that you don\'t have to heat several houses. In addition, you will make new friends and why not colleagues.') }}
        </p>
    </div>
        </div>
        </div>
    <div
        class="px-6 -mt-16 md:mt-0 md:px-2 max-w-{{ config('filament-breezy.auth_card_max_w') ?? 'md' }} space-y-8 w-screen">
        <form wire:submit.prevent="{{ $action }}" @class([
            'p-8 space-y-8 bg-white/50 backdrop-blur-xl border border-gray-200 shadow-2xl rounded-2xl relative filament-breezy-auth-card',
            'dark:bg-gray-900/50 dark:border-gray-700' => config('filament.dark_mode'),
        ])>
            {{ $slot }}
        </form>

        {{ $this->modal }}
        <x-filament::footer />
    </div>

    @livewire('notifications')

</div>
