<div class="w-full h-auto m-0 hover:bg-light-gray">
    {{-- href="/{{ $stream->name }}" --}}
    <a href="">
        <div class="py-1 px-3 mb-1 flex justify-between items-center">
            <div class="text-sm flex items-center">
                <x-streamer-logo size="small"></x-streamer-logo>
                <div class="ml-2">
                    <h4 class="font-bold">KaiCenat</h4>
                    <p class="opacity-50">I'm Only Sleeping</p>
                </div>
            </div>
            <div class="flex items-center gap-1">
                <span class="w-2 h-2 bg-orange rounded-full"></span>
                @php
                    $viewers = rand(1, 99999);
                @endphp
                <p class="text-sm">
                    {{ $viewers > 10000 ? number_format($viewers / 1000, 1) . 'K' : $viewers }}
                </p>
            </div>
        </div>
    </a>
</div>