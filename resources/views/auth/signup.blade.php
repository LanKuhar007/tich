<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite('resources/css/app.css')
</head>

<body>
    <div class="relative w-screen h-screen bg-dark-gray ">
        <nav class="bg-gray px-5 text-white absolute w-full xl:px-5">
            <div class="w-full m-auto py-4 flex">
                <div class="w-[25%]">
                    <a href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}" alt="" class="absolute w-25"></a>
                </div>
                <div class="w-[50%] flex justify-center">
                    <form method="post" action="" class="flex">
                        @csrf
                        <input type="text" name="search" placeholder="Search"
                            class="w-100 p-1 rounded-l-sm border-1 border-gray-300 text-center focus:outline-none hover:outline-none hover:border-gray-400">
                        <a href="" class="bg-gray-300 w-10 rounded-r-sm flex justify-center items-center group">
                            <img src="{{ asset('img/search-icon.svg') }}" alt="" class="size-6">
                        </a>
                    </form>
                </div>
                <div class="flex w-[25%] justify-end">
                    <div class="flex items-center gap-3">
                        <a href="{{ url('/login') }}" class="px-4 py-1 bg-light-gray rounded-sm">Log In</a>
                        <a href="{{ url('/signup') }}" class="px-4 py-1 bg-orange rounded-sm">Sign Up</a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="w-screen h-screen flex justify-center items-center">
            <div class="w-120 bg-light-gray rounded-sm p-10 text-white">
                <h1 class="flex justify-center text-2xl text-white font-bold"><img src="{{ asset('img/logo-signup.png') }}" alt="" class="w-60"></h1>
                <form method="post" action="{{ url('/signup') }}" class="mt-5">
                    @csrf
                    <div class="mb-5">
                        <label for="name" class="block text-md font-bold">Tich Name</label>
                        <div class="flex items-center w-full h-10 p-2 border-1 border-gray-300 rounded-sm focus:outline-none hover:outline-none hover:border-gray-400">
                          <div class="shrink-0 text-base text-white select-none sm:text-sm/6">Tich /</div>
                          <input type="text" name="name" id="name" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-white placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="Enter your Tich Name">
                        </div>
                        <x-form-error name="name"></x-form-error>
                    </div>
                    <div class="mb-5">
                        <label for="dob" class="block text-md font-bold">Date of Birth</label>
                        <div class="flex gap-2">
                          <input type="number" placeholder="day" min="1" max="31" name="day" id="day" class="w-full  h-10 p-2 border-1 border-gray-300 rounded-sm focus:outline-none hover:outline-none hover:border-gray-400">
                          <input list="browsers" placeholder="month" name="month" id="month" class="w-full h-10 p-2 border-1 border-gray-300 rounded-sm focus:outline-none hover:outline-none hover:border-gray-400">
                          <datalist id="browsers">
                            <option value="January">
                            <option value="February">
                            <option value="March">
                            <option value="April">
                            <option value="May">
                            <option value="June">
                            <option value="July">
                            <option value="August">
                            <option value="September">
                            <option value="October">
                            <option value="November">
                            <option value="December">
                          </datalist>
                          <input type="number" placeholder="year" min="1950" max="2025" name="year" id="dob" class="w-full h-10 p-2 border-1 border-gray-300 rounded-sm focus:outline-none hover:outline-none hover:border-gray-400">
                        </div>
                        <x-form-error name="day"></x-form-error>
                        <x-form-error name="month"></x-form-error>
                        <x-form-error name="year"></x-form-error>
                    </div>
                    <div class="mb-5">
                        <label for="email" class="block text-md font-bold">Email</label>
                        <input type="email" name="email" id="email"
                            class="w-full p-2 border-1 border-gray-300 rounded-sm focus:outline-none hover:outline-none hover:border-gray-400">
                        <x-form-error name="email"></x-form-error>
                    </div>
                    <div class="mb-5">
                        <label for="password" class="block text-md font-bold">Password</label>
                        <input type="password" name="password" id="password"
                            class="w-full p-2 border-1 border-gray-300 rounded-sm focus:outline-none hover:outline-none hover:border-gray-400">
                        <x-form-error name="password"></x-form-error>
                    </div>
                    <div class="mb-5">
                        <button type="submit" class="w-full bg-orange text-white p-2 rounded-sm">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>