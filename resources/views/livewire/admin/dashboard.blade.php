<div>
    <div class="relative mb-6 w-full">
        <div class="bg-sky-400 text-amber-400">
            {{-- <flux:header size='xl'> --}}
                Dashboard
            {{-- </flux:header> --}}
        </div>
        <flux:header size="sm" class="mb-4 text-sm text-gray-500">
            Welcome {{ auth()->user()->name }}!
        </flux:header>
        <flux:separator />

        {{-- <flux:calendar /> --}}
    </div>
</div>
