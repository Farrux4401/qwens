@extends('components.layouts.app')

@section('content')
    <!-- This is an example component -->
    <div class="bg-white dark:bg-black">
        <nav class="fixed z-30 w-full bg-white dark:bg-black">
            <div class="px-3 py-3 xl:px-5 xl:pl-3">
                <div x-data="{ showMenu: false }" class="block md:hidden">
                    <div class="flex justify-between items-center w-full z-30">
                        <div class="flex items-center">
                            <a href="/"
                                class=" text-xl mx-auto text-center justify-center font-bold flex items-center lg:ml-2.5">
                                <img src="{{ asset('assets/images/logo.svg') }}" class="w-[30px] h-[26px] mr-2"
                                    alt="Logo">
                            </a>
                            <button @click.prevent="showMenu = !showMenu " id="toggleSidebarMobile" aria-expanded="true"
                                aria-controls="sidebar" class="block bg-[#86DA2F] text-black rounded-[19px] px-2.5 py-0.5">
                                Меню
                            </button>
                        </div>

                        <div class="flex items-center gap-3">
                            <a href="#"><img src="{{ asset('assets/images/Avatar-big.png') }}" alt=""
                                    class="h-[40px] w-[40px]"></a>
                            <a href="#"
                                class="font-inter font-medium text-lg block bg-[#202020] text-white rounded-3xl px-5 py-2">Выйти</a>
                        </div>
                    </div>

                    <div x-show="showMenu">
                        <aside id="sidebar"
                            class=" flex flex-col flex-shrink-0 h-full pt-6 duration-75 xl:flex transition-width"
                            aria-label="Sidebar">

                            <div class="relative flex flex-col flex-1 min-h-0 pt-0 bg-white dark:bg-black">

                                <div class="flex flex-col h-full pt-5 overflow-y-auto">
                                    <div class="flex flex-col justify-between h-full px-3 bg-white dark:bg-black ">

                                        <div class="flex flex-col gap-y-4 w-52">

                                            <ul
                                                class="rounded-[34px] p-3 bg-[#808080]/[.12] backdrop:blur-[100px] bg-gradient-to-b from-[#040404]/[0.01] to-[#4A4A4A]/[0.01] colored-bordered-block active-border">
                                                <li>
                                                    <a href="/"
                                                        class="md:text-[19px] text-base font-medium dark:text-white/[.23] text-black/25 hover:text-black rounded-full flex items-center p-3 hover:p-3  dark:hover:bg-[#5E5E5E] hover:bg-white group">
                                                        <span
                                                            class="border-2 w-[24px] h-[24px] border-white/[.23] border-dashed rounded"></span>
                                                        <span class="ml-3">Главная</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/virtual"
                                                        class="md:text-[19px] text-base font-medium dark:text-white/[.23] text-black/25 hover:text-black rounded-full flex items-center p-3 hover:p-3  dark:hover:bg-[#5E5E5E] hover:bg-white group">
                                                        <span
                                                            class="border-2 w-[24px] h-[24px] border-white/[.23] border-dashed rounded"></span>
                                                        <span class="ml-3">Виртуальные</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/"
                                                        class="md:text-[19px] text-base font-medium dark:text-white/[.23] text-black/25 hover:text-black rounded-full flex items-center p-3 hover:p-3  dark:hover:bg-[#5E5E5E] hover:bg-white group">
                                                        <span
                                                            class="border-2 w-[24px] h-[24px] border-white/[.23] border-dashed rounded"></span>
                                                        <span class="ml-3">Выделенные</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul
                                                class="rounded-[34px] p-3 bg-[#808080]/[.12] colored-bordered-block active-border">
                                                <li>
                                                    <a href="/"
                                                        class="md:text-[19px] text-base font-medium dark:text-white/[.23] text-black/25 hover:text-black rounded-full flex items-center p-3 hover:p-3  dark:hover:bg-[#5E5E5E] hover:bg-white group">
                                                        <span
                                                            class="border-2 w-[24px] h-[24px] border-white/[.23] border-dashed rounded"></span>
                                                        <span class="ml-3">Финансы</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('/profile') }}"
                                                        class="md:text-[19px] text-base font-medium dark:text-white/[.23] text-black/25 hover:text-black rounded-full flex items-center p-3 hover:p-3  dark:hover:bg-[#5E5E5E] hover:bg-white group">
                                                        <span
                                                            class="border-2 w-[24px] h-[24px] border-white/[.23] border-dashed rounded"></span>
                                                        <span class="ml-3">Профиль</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/"
                                                        class="md:text-[19px] text-base font-medium dark:text-white/[.23] text-black/25 hover:text-black rounded-full flex items-center p-3 hover:p-3  dark:hover:bg-[#5E5E5E] hover:bg-white group">
                                                        <span
                                                            class="border-2 w-[24px] h-[24px] border-white/[.23] border-dashed rounded"></span>
                                                        <span class="ml-3">Настройки</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/"
                                                        class="md:text-[19px] text-base font-medium dark:text-white/[.23] text-black/25 hover:text-black rounded-full flex items-center p-3 hover:p-3  dark:hover:bg-[#5E5E5E] hover:bg-white group">
                                                        <span
                                                            class="border-2 w-[24px] h-[24px] border-white/[.23] border-dashed rounded"></span>
                                                        <span class="ml-3">Обьявления</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="rounded-[34px] p-3 dark:bg-[#808080]/[.12] border border-[#C6C6C6] ">
                                                <li>
                                                    <a href="/"
                                                        class="md:text-[19px] text-base font-medium bg-[#F1F1F1]  dark:bg-[#808080]/[0.12] dark:text-white/[.23] text-black/25 hover:text-black rounded-full flex items-center p-3 hover:p-3 dark:hover:bg-[#5E5E5E] hover:bg-[#fff] group">
                                                        <span
                                                            class="dark:border-2 w-[24px] h-[24px] dark:border-white/[.23] border-dashed rounded"></span>
                                                        <span class="ml-3">Админ-панель</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="pt-2 space-y-2">
                                            <ul class="rounded-[34px] p-3">
                                                <li>
                                                    <a href="/"
                                                        class="md:text-[19px] text-base font-medium dark:text-white/[.23] text-[#6D6D6D] rounded-full flex items-center p-3 ">
                                                        <span
                                                            class="border-2 w-[24px] h-[24px] border-white/[.23] border-dashed rounded"></span>
                                                        <span class="ml-3">Жалоба</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/"
                                                        class="md:text-[19px] text-base font-medium dark:text-white/[.23] text-[#6D6D6D] rounded-full flex items-center p-3  ">
                                                        <span
                                                            class="border-2 w-[24px] h-[24px] border-white/[.23] border-dashed rounded"></span>
                                                        <span class="ml-3">Поддержка</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/"
                                                        class="md:text-[19px] text-base font-medium dark:text-white/[.23] text-[#6D6D6D] rounded-full flex items-center p-3 ">
                                                        <span
                                                            class="border-2 w-[24px] h-[24px] border-white/[.23] border-dashed rounded"></span>
                                                        <span class="ml-3">Контакты</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>

                    </div>
                </div>
            </div>
        </nav>
        <div class="flex pt-24 overflow-hidden bg-white dark:bg-black">

            {{-- SideBar --}}
            @include('components.layouts.sidebar')



            <div class="fixed inset-0 z-10 hidden bg-gray-900 opacity-50" id="sidebarBackdrop"></div>
            <div id="main-content" class="relative w-full h-full xl:mr-8 m-0 overflow-y-auto xl:ml-72">
                {{-- Main Content --}}
                <main>
                    <button x-data={darkMode=true} @click="$store.darkMode.toggle()" class="text-white bg-red-400">Toggle
                        Dark
                        Mode</button>
                    @yield('main-content')
                </main>
            </div>
        </div>

    </div>
@endsection
