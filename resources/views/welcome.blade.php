<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    <x-heroicon-o-plus x-data="" x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')" class="w-6 h-6 hover:bg-sky-100 rounded-md"/>
                    @auth
                        <a href="{{ url('/dashboard') }}" class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal">
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>
        <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
            <main class="grid lg:grid-cols-3 sm:grid-cols-1 md:grid-rows-1 gap-5 max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-col">
                <div class="card">
                    <div class="card__image">
                        <img class="rounded-tl-md rounded-tr-md" src="5.jpg" alt="">
                    </div>
                    <div class="card__content">
                        <span class="card__label card__label_violet">
                            Акция
                        </span>
                        <p class="text-xs italic text-right">30 марта 2021</p>
                        <h1 class="mb-1 font-bold text-blue-600">Цены перестали быть колючими!</h1>
                        <p class="mb-2 text-[#706f6c] dark:text-[#A1A09A]">
                            Ёжики со скидкой до 70%. Яблоко в подарок с каждым купленным ёжиком
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card__image">
                        <img class="rounded-tl-md rounded-tr-md" src="1.jpg" alt="">
                    </div>
                    <div class="card__content">
                        <span class="card__label">
                            Не акция
                        </span>
                        <p class="text-xs italic text-right">1 сентября 2021</p>
                        <h1 class="mb-1 font-bold text-blue-600">Акита-ину</h1>
                        <p class="mb-2 text-[#706f6c] dark:text-[#A1A09A]">
                            Статья о самой известной в кинематографе собаке.
                            Ссылка открывается не сразу - придётся подождать какое-то время.
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card__image">
                        <img src="2.jpg" alt="">
                    </div>
                    <div class="card__content">
                        <span class="card__label card__label_violet">Акция</span>
                        <p class="text-xs italic text-right">30 марта 2021</p>
                        <h1 class="mb-1 font-bold">Австралийский импорт</h1>
                        <p class="mb-2 text-[#706f6c] dark:text-[#A1A09A]">
                            Лавровый лист в одни руки. Абсолютно бесплатно!!! Товар будет доставлен в сумке нашим
                            курьером в кратчайшие сроки.
                        </p>
                        <a href="#" class="ml-auto inline-flex p-2 underline italic mt-auto">Читать далее</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card__image">
                        <img src="4.jpg" alt="">
                    </div>
                    <div class="card__content">
                        <span class="card__label">Не акция</span>
                        <p class="text-xs italic text-right">30 марта 2021</p>
                        <h1 class="mb-1 font-bold">Выставка художников кубистов</h1>
                        <p class="mb-2 text-[#706f6c] dark:text-[#A1A09A]">
                            На выставке вы сможете ощутить на себе всю депрессивность параллелепипедов и познать все
                            эмоциональные тонкости Октаэдра.
                        </p>
                        <a href="#" class="ml-auto inline-flex p-2 underline italic mt-auto">Читать далее</a>
                    </div>
                </div>
            </main>
        </div>

        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
    </body>
</html>
