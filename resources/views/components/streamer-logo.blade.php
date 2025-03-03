@props(['size' => 'base'])

@php
    $classes = 'rounded-full';

    if ($size === 'small') {
        $classes .= ' w-8 h-8';
    } elseif ($size === 'base') {
        $classes .= ' w-30 h-30';
    }
@endphp

<div class="flex flex-col items-center gap-2">
    <img src="{{ asset('img/stream.logo.png') }}" alt="" class="{{ $classes }}">
    @php
        if ($size === 'base') {
            echo "<p>Kai Cenet</p>";
        }
    @endphp
</div>
