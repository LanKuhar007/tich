@props(['width' => 90])
@props(['stream' => ''])

@php
    if ($stream === 'kaicenat') {
        $stream = 'kaicenat';
    } elseif ($stream === 'loltyler1') {
        $stream = 'loltyler1';
    } elseif ($stream === 'grubby') {
        $stream = 'grubby';
    } elseif ($stream === 'arteezy') {
        $stream = 'arteezy';
    } elseif ($stream === 'esldota2') {
        $stream = 'esldota2';
    }{
        
    }

@endphp

<div class="m-auto w-fill flex">
    <div class="relative">
        <img src="{{ asset('img/stream-photo/'. $stream .'.jpg') }}" alt="" class="h-auto">
        <span class="absolute top-2 left-1 py-0.4 px-3 text-md bg-red-500 rounded-sm">LIVE</span>
        <span class="absolute bottom-2 left-1 py-0 px-3 text-md bg-dark-gray opacity-90 rounded-sm">
            @php
                $rand = rand(1, 99999);
            @endphp
            {{ $rand > 10000 ? number_format($rand / 1000, 1) . 'K' : $rand }}
            viewers
        </span>
        <a href="" class="absolute right-0 bottom-0 py-2 px-10 text-md bg-orange border-dark-gray border-t-10 border-l-10">Watch</a>
    </div>
</div>