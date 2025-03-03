<div class="m-auto flex h-928/1000 text-white">
    <div class="flex w-full">
        <aside class="w-80 h-full px-3 bg-gray xl:min-w-65">
            <div class="py-3 text-white">
                <h3 class="font-bold mb-3 px-3">LIVE CHANNELS</h3>
                <x-live-streaming></x-live-streaming>
                <x-live-streaming></x-live-streaming>
                <x-live-streaming></x-live-streaming>
                <x-live-streaming></x-live-streaming>
                <x-live-streaming></x-live-streaming>
            </div>
            <div class="py-3 text-white">
                <h3 class="font-bold mb-3 px-3">LIVE SUBS</h3>
                <x-offline-subs></x-offline-subs>
            </div>
        </aside>
        <main class="w-full bg-dark-gray">
            <x-stream-pannel></x-stream-pannel>
        </main>
    </div>
</div>