<div class="relative m-auto w-fill h-full p-5 overflow-y-auto" id="style-1">
    <style>
        #style-1::-webkit-scrollbar {
            width: 12px;
        }

        #style-1::-webkit-scrollbar-track {
            background: var(--color-bg);
        }

        #style-1::-webkit-scrollbar-thumb {
            background: #888;
        }

        #style-1::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    </style>
    <div class="w-full h-130"
        style="background-image: url('{{ asset('img/stream-photo/banners/loltyler1-banner.png') }}'); background-size: cover; background-position: center;">
        <div class="w-full h-full bg-opacity-50 flex flex-col justify-center items-center">
            <div class="w-fill h-auto">

                <video class="w-200" controls autoplay loop>
                    <source src="{{ asset('videos/video.mp4') }}" type="video/mp4">
                </video>
            </div>
        </div>
    </div>

    <x-stream-pannel-h>Top 12 Categories</x-stream-pannel-h>

    @php
        $list = [
            'Just Chatting',
            'Grand Theft Auto 5',
            'PUBG',
            'Slot & Casino',
            'Dota 2',
            'Rust',
            'IRL',
            'Among Us',
            'League of Legends',
            'Sons of the Forest',
            'Counter-Strike 2',
            'Chess',
        ];
    @endphp

    <div class="grid grid-cols-2 py-4 xl:grid-cols-6 2xl:grid-cols-12">
        @for ($i = 0; $i < 12; $i++)
            <div class="h-full p-1.5">
                <div class="hidden">{{ $k = $i + 1 }}</div>
                <a href="@auth {{ url('top-content/' . $k) }} @else {{ url('login') }} @endauth" class="w-full">
                    <h1 class="absolute text-5xl font-bold pl-2 z-10 drop-shadow-xl">{{ $i + 1 }}</h1>
                    <img src="{{ asset('img/posters/' . ($i + 1) . '.jpg') }}" alt="" class="relative w-full z-5">
                </a>
                <div class="relative w-fill p-1.5">
                    <p class="font-bold">{{ $list[$i] }}</p>

                    @php
                        $viewers = rand(1, 99999);
                    @endphp
                    <p class="text-sm text-gray-400">
                        {{ $viewers > 10000 ? number_format($viewers / 1000, 1) . 'K' : $viewers }}
                        watching
                    </p>
                </div>
            </div>
        @endfor
    </div>


    <x-stream-pannel-h>Your Live TICH</x-stream-pannel-h>

    <div class="grid grid-cols-2 gap-3 py-4 xl:grid-cols-3 2xl:grid-cols-5">
        <x-stream-pannel-stream stream="kaicenat"></x-stream-pannel-stream>
        <x-stream-pannel-stream stream="loltyler1"></x-stream-pannel-stream>
        <x-stream-pannel-stream stream="grubby"></x-stream-pannel-stream>
        <x-stream-pannel-stream stream="arteezy"></x-stream-pannel-stream>
        <x-stream-pannel-stream stream="esldota2"></x-stream-pannel-stream>
    </div>
</div>
