<x:layout>
    <header class="relative py-24">
        <div
            class="absolute w-full transform skew-y-12 pointer-events-none h-72 md:h-96 -translate-y-1/4 bg-gradient-to-br from-yellow-300 to-pink-400 mix-blend-multiply">
        </div>

        <x-container>
            <div class="flex flex-col items-center space-y-6 text-center text-yellow-900">
                <h1 class="text-4xl font-bold tracking-tighter md:text-5xl lg:text-8xl">Laravel Code Tips</h1>

                <p class="text-xl font-medium">Make your Laravel code cleaner, faster, and safer.</p>

                <x:socials />
            </div>
        </x-container>
    </header>

    <main class="flex-1 divide-y" role="feed">
        <x:feed :tips="$tips" />
    </main>
</x:layout>
