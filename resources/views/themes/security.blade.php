@extends('components.layouts.dashboard')

@section('main-content')
    <div class="overflow-hidden">
        <div x-data="{ tab: 'tab1' }" class="right-part py-8 xl:px-16 px-5 rounded-[46px] bg-white dark:backdrop-blur-[100px]">
            <div class="dark:text-white flex justify-between mb-9 border-b pb-6 dark:border-[#313131]">

                <div class="font-sfpro">
                    <ul class="flex w-full  px-5 gap-x-11">
                        <li @click="tab = 'tab1'"
                            class="md:text-2xl text-[13px] font-medium cursor-pointer text-[#000]/[0.22] dark:text-[#fff]/[0.25]"
                            x-bind:class="{ 'text-[#000] dark:text-[#fff]': tab === 'tab1' }">
                            Безопасность
                        </li>
                        <li @click="tab = 'tab2'"
                            class="md:text-2xl text-[13px] font-medium cursor-pointer text-[#000]/[0.22] dark:text-[#fff]/[0.25]"
                            x-bind:class="{ 'text-[#000] dark:text-[#fff]': tab === 'tab2' }">
                            Авторизация
                        </li>
                        <li @click="tab = 'tab3'"
                            class="md:text-2xl text-[13px] font-medium cursor-pointer text-[#000]/[0.22] dark:text-[#fff]/[0.25]"
                            x-bind:class="{ 'text-[#000] dark:text-[#fff]': tab === 'tab3' }">
                            SSH-ключи
                        </li>
                    </ul>
                </div>

                <div class="lg:flex items-center gap-3 hidden">
                    <a href="#"><img src="{{ asset('assets/images/Avatar-big.png') }}" alt=""
                            class="h-[40px] w-[40px]"></a>
                    <a href="#"
                        class="font-inter font-medium text-lg block bg-[#202020] text-white rounded-3xl px-5 py-2">1094$</a>
                    <a href="#"
                        class="font-inter font-medium text-lg block bg-[#202020] text-white rounded-3xl px-5 py-2">Выйти</a>
                </div>
            </div>

            <div>
                <div class="flex flex-col w-full">
                    <div x-show="tab === 'tab1'">
                        <div class="dark:text-white">

                            <div class="xl:grid xl:grid-cols-5 gap-5">
                                <div class="xl:col-span-2 col-span-1">
                                    <div
                                        class="dark:bg-[#808080]/[0.05] dark:border dark:border-white/15 border border-[000000]/[0.13] rounded-[54px]  w-full p-10 overflow-hidden mb-9">
                                        <label for=""
                                            class="block mb-6 pb-5 font-medium text-xl dark:text-white border-b border-[#313131]">Cмена
                                            пароля</label>
                                        <div class="flex items-start mb-4 gap-2">
                                            <img class="block w-[15px] h-[15px] pt-2"
                                                src="{{ asset('assets/images/info-icon.svg') }}" alt="" />
                                            <span class="block text-[#535353]/[0.87]">Длина пароля должна составлять от 8 до
                                                20 символов</span>
                                        </div>
                                        <div class="flex flex-col gap-6">
                                            <div class="flex items-center">
                                                <input type="text" placeholder="Новый пароль..."
                                                    class="dark:bg-[#0D0D0D] bg-[#3C3C43]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0 w-[460px]">

                                            </div>
                                            <div class="flex items-center">
                                                <input type="text" placeholder="Подтвердите пароль..."
                                                    class="dark:bg-[#0D0D0D] bg-[#3C3C43]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0 w-[460px]">

                                            </div>

                                            <div class="flex gap-3">
                                                <button type="button"
                                                    class="flex items-center justify-center px-7 py-3 bg-[#202020] rounded-[19px] font-medium text-[17px] text-white">Изменить
                                                    <img class="ml-2"
                                                        src="{{ asset('assets/images/right-arrow-white.svg') }}"
                                                        alt=""></button>
                                                <button type="button"
                                                    class="flex items-center justify-center px-5 py-3 bg-[#202020] rounded-[19px] font-medium text-[17px] text-white">
                                                    +
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="dark:bg-[#808080]/[0.05] dark:border dark:border-white/15 border border-[000000]/[0.13] rounded-[54px]  w-full p-10 overflow-hidden ">
                                        <label for=""
                                            class="block mb-6 pb-5 font-medium text-xl dark:text-white border-b border-[#313131]">Cмена
                                            почты</label>
                                        <div class="flex items-start mb-4 gap-2">
                                            <img class="block w-[15px] h-[15px] pt-2"
                                                src="{{ asset('assets/images/info-icon.svg') }}" alt="" />
                                            <span class="block text-[#535353]/[0.87]">Пожалуйста, введите корректный адрес
                                                эл.почты </span>
                                        </div>
                                        <div class="flex flex-col gap-6">
                                            <div class="flex items-center">
                                                <input type="email" placeholder="Адрес почты...."
                                                    class="dark:bg-[#0D0D0D] bg-[#3C3C43]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0 w-[460px]">

                                            </div>
                                            <div class="flex items-center">
                                                <input type="text" placeholder="Код..."
                                                    class="dark:bg-[#0D0D0D] bg-[#3C3C43]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0 w-[460px]">

                                            </div>

                                            <div class="flex gap-3">
                                                <button type="button"
                                                    class="flex items-center justify-center px-7 py-3 bg-[#202020] rounded-[19px] font-medium text-[14px] xl:text-[17px] text-white">Отправить
                                                    код
                                                </button>
                                                <button type="button"
                                                    class="flex items-center justify-center px-5 py-3 bg-[#202020] rounded-[19px] font-medium text-[14px] xl:text-[17px] text-white">
                                                    Изменить
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-3 col-span-1">
                                    <div
                                        class="rounded-[54px] dark:bg-[#808080]/[0.05] dark:border dark:border-white/15 border border-[000000]/[0.13] w-full p-10 overflow-hidden   mb-10 mt-10 xl:mt-0">
                                        <p class="flex items-center mb-5 text-2xl font-medium dark:text-white  font-inter">
                                            Двухфакторная
                                            аунтефикация
                                            <span class="block bg-[#FF4649] w-3 h-3 rounded-full ml-2"></span>
                                        </p>
                                        <div class="mb-10">
                                            <a class="inline-block font-sfpro dark:bg-white/5 bg-[#202020] text-white rounded-[100px] py-3 px-8 font-medium text-[19px] dark:text-white mr-3 mb-3 xl:mb-0"
                                                href="#">Подключить</a>
                                            <a class="inline-block font-sfpro border border-black dark:border dark:border-white rounded-[100px] py-3 px-8 font-medium text-[19px] dark:text-white"
                                                href="#">Вход через Telegram</a>
                                        </div>
                                        <p class="font-inter text-[13px] text-[#5E5E5E]/[0.87]">Двухфакторная аунтефикация
                                            ещё не подключена на этом аккаунте.
                                            Просим вас подключить еёво избежание случаев утери аккаунта и доступа к
                                            серверам.</p>
                                    </div>

                                    <div
                                        class="rounded-[54px] dark:bg-[#808080]/[0.05] dark:border dark:border-white/15 border border-[000000]/[0.13] w-full p-10 overflow-hidden ">
                                        <p class="flex items-center mb-5 text-2xl font-medium dark:text-white  font-inter">
                                            Двухфакторная
                                            аунтефикация

                                        </p>
                                        <div class="mb-10">
                                            <a class="inline-block font-sfpro dark:bg-white/5 bg-[#F1F1F1] rounded-[100px] py-3 px-8 font-medium text-[19px] dark:text-white mr-3"
                                                href="#">Закрыть все сессии, кроме текущей</a>
                                        </div>

                                        <div class="flex flex-col gap-4">
                                            <div class="flex items-center gap-4">
                                                <span class="block bg-[#787878] w-3 h-3 rounded-full ml-2"></span>
                                                <div>
                                                    <p class="text-base font-medium dark:text-white font-inter">Windows</p>
                                                    <span
                                                        class="inline-block text-base font-medium dark:text-white font-inter">Chrome,
                                                        192.168.0.1</span>
                                                </div>
                                            </div>
                                            <div class="flex items-center gap-4">
                                                <span class="block bg-[#FF4649] w-3 h-3 rounded-full ml-2"></span>
                                                <div>
                                                    <p class="text-base font-medium dark:text-white font-inter">Windows</p>
                                                    <span
                                                        class="inline-block text-base font-medium dark:text-white font-inter">Chrome,
                                                        192.168.0.1</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div x-show="tab === 'tab2'">
                        <div>
                            <h2
                                class="xl:inline-block hidden font-inter font-medium text-[30px] dark:text-white border-b border-[#313131]/[0.34] pb-5 mb-10">
                                Авторизация
                                через соц.сети</h2>

                            <div class="xl:grid xl:grid-cols-5 gap-14">
                                <div class="xl:col-span-3 col-span-1">
                                    <div class="flex flex-col mb-10 gap-6">
                                        <div
                                            class="flex justify-between items-center dark:bg-[#808080]/[0.05] dark:border dark:border-white/15 border border-[000000]/[0.13] rounded-[54px]  w-full p-5 md:p-10 overflow-hidden">
                                            <img src="{{ asset('assets/images/vk-white.svg') }}" alt="">
                                            <p class="font-inter dark:text-white text-[22px] font-medium">
                                                Матвей Кошкин
                                                <span
                                                    class="font-inter dark:text-white/60 text-[18px] font-light md:hidden inline-block">vk.com/cheapdedic</span>
                                            </p>
                                            <span
                                                class="font-inter dark:text-white/60 text-[18px] font-light hidden md:inline-block">vk.com/cheapdedic</span>
                                            <button type="button"
                                                class="flex items-center justify-center px-7 py-3 bg-[#202020] rounded-[19px] font-medium text-[17px] text-white">Изменить
                                            </button>
                                        </div>
                                        <div
                                            class="flex justify-between items-center dark:bg-[#808080]/[0.05] dark:border dark:border-white/15 border border-[000000]/[0.13] rounded-[54px]  w-full p-10 overflow-hidden">
                                            <img src="{{ asset('assets/images/telegram-white.svg') }}" alt="">
                                            <p class="font-inter dark:text-white text-[22px] font-medium">@matveykkk
                                                <span
                                                    class="font-inter dark:text-white/60 text-[18px] font-light md:hidden inline-block">t.me/cheapdedic</span>
                                            </p>
                                            <span
                                                class="font-inter dark:text-white/60 text-[18px] font-light hidden md:inline-block">t.me/cheapdedic</span>
                                            <button type="button"
                                                class="flex items-center justify-center px-7 py-3 bg-[#202020] rounded-[19px] font-medium text-[17px] text-white">Изменить
                                            </button>
                                        </div>
                                        <div
                                            class="flex justify-between items-center dark:bg-[#808080]/[0.05] dark:border dark:border-white/15 border border-[000000]/[0.13] rounded-[54px]  w-full p-10 overflow-hidden">
                                            <img src="{{ asset('assets/images/google-white.svg') }}" alt="">
                                            <p class="font-inter dark:text-white text-[22px] font-medium">matveykkk

                                                <span
                                                    class="font-inter dark:text-white/60 text-[18px] font-light md:hidden inline-block">google.com/cheapdedic</span>
                                            </p>
                                            <span
                                                class="font-inter dark:text-white/60 text-[18px] font-light hidden md:inline-block">google.com/cheapdedic</span>
                                            <button type="button"
                                                class="flex items-center justify-center px-7 py-3 bg-[#202020] rounded-[19px] font-medium text-[17px] text-white">Изменить
                                            </button>
                                        </div>
                                    </div>

                                    <div
                                        class="xl:w-[520px] w-full  dark:bg-[#808080]/[0.05] dark:border dark:border-white/15 border border-[000000]/[0.13] rounded-[54px]  p-10 overflow-hidden mb-9">
                                        <div class="flex items-center mb-6 pb-5 font-medium text-[22px] dark:text-white">
                                            <img class="ml-2" src="{{ asset('assets/images/github-white.svg') }}"
                                                alt="">GitHub
                                        </div>


                                        <div class="flex flex-col gap-6">
                                            <p class="font-inter text-[18px] font-light dark:text-white/60 mb-5">Привязка в
                                                данной социальной сети отсутствует. Советуем вам подключить аккаунт GitHub
                                                для удобного входа в биллинг.</p>

                                            <div class="flex justify-end">
                                                <a href
                                                    class="inline-flex items-center justify-center px-7 py-3 bg-[#202020] rounded-[19px] font-medium text-[17px] text-white">Добавить
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-2 col-span-1">
                                    <div
                                        class="dark:bg-[#808080]/[0.05] dark:border dark:border-white/15 border border-[000000]/[0.13] rounded-[54px]  p-5 md:p-10 overflow-hidden  mb-9">
                                        <div class="flex items-center pb-5 mb-6 text-xl font-medium dark:text-white">
                                            Двухфакторная аунтефикация
                                            <span class="block bg-[#FF4649] w-3 h-3 rounded-full ml-2"></span>
                                        </div>


                                        <div class="flex flex-col gap-6">
                                            <p class="font-inter text-[13px] dark:text-[#5E5E5E]/[0.87] mb-10">
                                                Двухфакторная
                                                аунтефикация ещё не подключена на этом аккаунте. Просим вас
                                                подключить её во избежание случаев утери аккаунта и доступа к серверам.</p>

                                            <div class="">
                                                <a href
                                                    class="inline-flex items-center justify-center px-7 py-3 bg-[#202020] rounded-[19px] font-medium text-[17px] text-white">Подключить
                                                    <img class="ml-2"
                                                        src="{{ asset('assets/images/right-arrow-white.svg') }}"
                                                        alt=""></a>
                                                <div class="mt-5">
                                                    <a href="#"
                                                        class="inline-block items-center justify-center px-5 py-3 bg-[#202020] rounded-[19px] font-medium text-[17px] text-white">
                                                        Вход через Telegram
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div x-show="tab === 'tab3'">

                        <div class="xl:grid xl:grid-cols-5 gap-11">
                            <div class="xl:col-span-3 col-span-1">

                                <div
                                    class="dark:bg-[#808080]/[0.05] dark:border dark:border-white/15 border border-[000000]/[0.13] rounded-[54px]  p-5 md:p-10 mb-11">
                                    <h2
                                        class="block mb-6 pb-5 font-medium text-[30px] dark:text-white border-b border-[#313131]">
                                        Создание
                                        API-токена
                                    </h2>
                                    <label for=""
                                        class="block mb-2 pb-5 font-medium font-sfpro :text-[20px] dark:text-white/20 ">Введите
                                        название токена</label>

                                    <div class="flex flex-col gap-6">
                                        <div class="flex items-center">
                                            <input type="text" placeholder="Токен..."
                                                class="w-[460px] dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0">

                                        </div>

                                        <div class="flex flex-wrap gap-11">
                                            <div class="flex flex-col my-6 gap-5">
                                                <label
                                                    class="flex items-center text-base font-medium dark:dark:text-white font-inter gap-4">
                                                    <input type="checkbox"
                                                        class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer"
                                                        checked>
                                                    invoice:read
                                                </label>
                                                <label
                                                    class="flex items-center text-base font-medium dark:dark:text-white font-inter gap-4">
                                                    <input type="checkbox"
                                                        class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer"
                                                        checked>
                                                    ticket:read
                                                </label>
                                                <label
                                                    class="flex items-center text-base font-medium dark:dark:text-white font-inter gap-4">
                                                    <input type="checkbox"
                                                        class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer"
                                                        checked>
                                                    api:read
                                                </label>
                                            </div>

                                            <div class="flex flex-col my-6 gap-5">
                                                <label
                                                    class="flex items-center text-base font-medium dark:text-white font-inter gap-4">
                                                    <input type="checkbox"
                                                        class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer"
                                                        checked>
                                                    invoice:read
                                                </label>
                                                <label
                                                    class="flex items-center text-base font-medium dark:text-white font-inter gap-4">
                                                    <input type="checkbox"
                                                        class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer"
                                                        checked>
                                                    ticket:read
                                                </label>
                                                <label
                                                    class="flex items-center text-base font-medium dark:text-white font-inter gap-4">
                                                    <input type="checkbox"
                                                        class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer"
                                                        checked>
                                                    api:read
                                                </label>
                                            </div>

                                            <div class="flex flex-col my-6 gap-5">
                                                <label
                                                    class="flex items-center text-base font-medium dark:text-white font-inter gap-4">
                                                    <input type="checkbox"
                                                        class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer"
                                                        checked>
                                                    invoice:read
                                                </label>
                                                <label
                                                    class="flex items-center text-base font-medium dark:text-white font-inter gap-4">
                                                    <input type="checkbox"
                                                        class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer"
                                                        checked>
                                                    ticket:read
                                                </label>
                                                <label
                                                    class="flex items-center text-base font-medium dark:text-white font-inter gap-4">
                                                    <input type="checkbox"
                                                        class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer"
                                                        checked>
                                                    api:read
                                                </label>
                                            </div>

                                            <div class="flex flex-col my-6 gap-5">
                                                <label
                                                    class="flex items-center text-base font-medium dark:text-white font-inter gap-4">
                                                    <input type="checkbox"
                                                        class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer"
                                                        checked>
                                                    invoice:read
                                                </label>
                                                <label
                                                    class="flex items-center text-base font-medium dark:text-white font-inter gap-4">
                                                    <input type="checkbox"
                                                        class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer"
                                                        checked>
                                                    ticket:read
                                                </label>
                                                <label
                                                    class="flex items-center text-base font-medium dark:text-white font-inter gap-4">
                                                    <input type="checkbox"
                                                        class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer"
                                                        checked>
                                                    api:read
                                                </label>
                                            </div>
                                        </div>


                                        <div class="flex gap-3">
                                            <button type="button"
                                                class="flex items-center justify-center px-7 py-3 bg-[#202020] rounded-[19px] font-medium text-[17px] text-white">Очистить</button>
                                            <button type="button"
                                                class="flex items-center justify-center px-7 py-3 bg-[#202020] rounded-[19px] font-medium text-[17px] text-white">Создать</button>

                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="dark:bg-[#808080]/[0.05] dark:border dark:border-white/15 border border-[000000]/[0.13] rounded-[54px] p-5 md:p-10">
                                    <h2
                                        class="block mb-6 pb-5 font-medium text-[30px] dark:text-white border-b border-[#313131]">
                                        Управляйте API-токеном
                                    </h2>


                                    <div class="flex flex-col gap-6">
                                        <div class="flex justify-between">
                                            <div class="flex gap-2">
                                                <button
                                                    class="font-inter hidden md:block font-medium text-[25px] text-white bg-[#202020] w-[42px] h-[42px] rounded-[19px]">
                                                    1
                                                </button>
                                                <span
                                                    class="block font-sfpro font-medium md:text-[17px] text-[12px] dark:text-white dark:bg-[#202020] bg-[#E9E9E9] py-3 px-4 rounded-xl">
                                                    1328qwe37138Aqweqkwjehu
                                                </span>
                                            </div>

                                            <div class="flex items-center gap-5">
                                                <button
                                                    class="font-inter font-medium  md:text-[17px] text-[12px] dark:text-white bg-[#541111] rounded-[19px] py-3 px-7">
                                                    Удалить
                                                </button>
                                                <button
                                                    class="font-inter font-medium text-[17px] text-white bg-[#202020] rounded-[19px] p-3">
                                                    <img src="{{ asset('assets/images/settings.svg') }}" alt="">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="flex justify-between">
                                            <div class="flex gap-2">
                                                <button
                                                    class="font-inter hidden md:block font-medium text-[25px] text-white bg-[#202020] w-[42px] h-[42px] rounded-[19px]">
                                                    1
                                                </button>
                                                <span
                                                    class="block font-sfpro font-medium md:text-[17px] text-[12px] dark:text-white dark:bg-[#202020] bg-[#E9E9E9] py-3 px-4 rounded-xl">
                                                    1328qwe37138Aqweqkwjehu
                                                </span>
                                            </div>

                                            <div class="flex items-center gap-5">
                                                <button
                                                    class="font-inter font-medium md:text-[17px] text-[12px] text-white bg-[#541111] rounded-[19px] py-3 px-7">
                                                    Удалить
                                                </button>
                                                <button
                                                    class="font-inter font-medium text-[17px] text-white bg-[#202020] rounded-[19px] p-3">
                                                    <img src="{{ asset('assets/images/settings.svg') }}" alt="">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="flex justify-between">
                                            <div class="flex gap-2">
                                                <button
                                                    class="font-inter hidden md:block font-medium text-[25px] text-white bg-[#202020] w-[42px] h-[42px] rounded-[19px]">
                                                    1
                                                </button>
                                                <span
                                                    class="block font-sfpro font-medium md:text-[17px] text-[12px] dark:text-white dark:bg-[#202020] bg-[#E9E9E9] py-3 px-4 rounded-xl">
                                                    1328qwe37138Aqweqkwjehu
                                                </span>
                                            </div>

                                            <div class="flex items-center gap-5">
                                                <button
                                                    class="font-inter font-medium md:text-[17px] text-[12px] text-white bg-[#541111] rounded-[19px] py-3 px-7">
                                                    Удалить
                                                </button>
                                                <button
                                                    class="font-inter font-medium  text-white bg-[#202020] rounded-[19px] p-3">
                                                    <img src="{{ asset('assets/images/settings.svg') }}" alt="">
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xl:col-span-2 col-span-1">
                                <div
                                    class="flex basis-2/6 flex-col items-center dark:bg-[#808080]/[0.05] dark:border dark:border-white/15 border border-[000000]/[0.13] rounded-[54px] mt-10 xl:mt-0">
                                    <p class="p-6 text-3xl font-medium dark:text-white font-inter text-pretty">Часто
                                        задаваемые
                                        вопросы
                                    </p>
                                    <div class="w-full mx-auto border-t border-white/[0.13] py-8 px-8"
                                        x-data="{ selected: 0 }">

                                        <ul class="shadow-box">
                                            <li class="relative">
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center gap-3">
                                                        <span class="text-xl font-medium dark:text-white font-inter">
                                                            Почему выбраны эти ЦОД и какое их преимущество над другими?
                                                        </span>
                                                    </div>

                                                    <button type="button"
                                                        @click="selected !== 1 ? selected = 1 : selected = null"
                                                        class="flex items-center justify-center bg-[#202020] w-12 h-12 rounded-[19px]">
                                                        <img src="{{ asset('assets/images/arrow-down.svg') }}"
                                                            alt="" />
                                                    </button>

                                                </div>

                                                <div class="relative overflow-hidden transition-all max-h-0 duration-700"
                                                    style="" x-ref="container1"
                                                    x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight +
                                                        'px' :
                                                        ''">
                                                    <div class="flex justify-center py-6  mt-9">
                                                        <p class="dark:text-white font-inter">Lorem, ipsum dolor sit amet
                                                            consectetur adipisicing elit. Sint veritatis officia laborum
                                                            totam
                                                            eos error sed vero nam cupiditate. Tempore enim animi laudantium
                                                            repellendus corporis doloribus quidem earum blanditiis sequi!
                                                        </p>
                                                    </div>
                                                </div>

                                            </li>
                                        </ul>
                                    </div>

                                    <div class="w-full mx-auto border-t border-white/[0.13]  py-8 px-8"
                                        x-data="{ selected: 0 }">

                                        <ul class="shadow-box">
                                            <li class="relative">
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center gap-3">
                                                        <span class="text-xl font-medium dark:text-white font-inter">
                                                            Какие меры безопасности применяются в дата-центрах?
                                                        </span>
                                                    </div>

                                                    <button type="button"
                                                        @click="selected !== 1 ? selected = 1 : selected = null"
                                                        class="flex items-center justify-center bg-[#202020] w-12 h-12 rounded-[19px]">
                                                        <img src="{{ asset('assets/images/arrow-down.svg') }}"
                                                            alt="" />
                                                    </button>

                                                </div>

                                                <div class="relative overflow-hidden transition-all max-h-0 duration-700"
                                                    style="" x-ref="container1"
                                                    x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight +
                                                        'px' :
                                                        ''">
                                                    <div class="flex justify-center py-6  mt-9">
                                                        <p class="text-white font-inter">Lorem, ipsum dolor sit amet
                                                            consectetur adipisicing elit. Sint veritatis officia laborum
                                                            totam
                                                            eos error sed vero nam cupiditate. Tempore enim animi laudantium
                                                            repellendus corporis doloribus quidem earum blanditiis sequi!
                                                        </p>
                                                    </div>
                                                </div>

                                            </li>
                                        </ul>
                                    </div>

                                    <div class="w-full mx-auto border-t border-white/[0.13]  py-8 px-8"
                                        x-data="{ selected: 0 }">

                                        <ul class="shadow-box">
                                            <li class="relative">
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center gap-3">
                                                        <span class="text-xl font-medium dark:text-white font-inter">
                                                            Как обеспечивается надежность
                                                            работы серверов в ЦОД?
                                                        </span>
                                                    </div>

                                                    <button type="button"
                                                        @click="selected !== 1 ? selected = 1 : selected = null"
                                                        class="flex items-center justify-center bg-[#202020] w-12 h-12 rounded-[19px]">
                                                        <img src="{{ asset('assets/images/arrow-down.svg') }}"
                                                            alt="" />
                                                    </button>

                                                </div>

                                                <div class="relative overflow-hidden transition-all max-h-0 duration-700"
                                                    style="" x-ref="container1"
                                                    x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight +
                                                        'px' :
                                                        ''">
                                                    <div class="flex justify-center py-6  mt-9">
                                                        <p class="text-white font-inter">Lorem, ipsum dolor sit amet
                                                            consectetur adipisicing elit. Sint veritatis officia laborum
                                                            totam
                                                            eos error sed vero nam cupiditate. Tempore enim animi laudantium
                                                            repellendus corporis doloribus quidem earum blanditiis sequi!
                                                        </p>
                                                    </div>
                                                </div>

                                            </li>
                                        </ul>
                                    </div>

                                    <div class="w-full mx-auto border-t border-white/[0.13]  py-8 px-8"
                                        x-data="{ selected: 0 }">

                                        <ul class="shadow-box">
                                            <li class="relative">
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center gap-3">
                                                        <span class="text-xl font-medium dark:text-white font-inter">
                                                            Какую роль играет местоположение
                                                            ЦОД хостинг-провайдера?
                                                        </span>
                                                    </div>

                                                    <button type="button"
                                                        @click="selected !== 1 ? selected = 1 : selected = null"
                                                        class="flex items-center justify-center bg-[#202020] w-12 h-12 rounded-[19px]">
                                                        <img src="{{ asset('assets/images/arrow-down.svg') }}"
                                                            alt="" />
                                                    </button>

                                                </div>

                                                <div class="relative overflow-hidden transition-all max-h-0 duration-700"
                                                    style="" x-ref="container1"
                                                    x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight +
                                                        'px' :
                                                        ''">
                                                    <div class="flex justify-center py-6  mt-9">
                                                        <p class="text-white font-inter">Lorem, ipsum dolor sit amet
                                                            consectetur adipisicing elit. Sint veritatis officia laborum
                                                            totam
                                                            eos error sed vero nam cupiditate. Tempore enim animi laudantium
                                                            repellendus corporis doloribus quidem earum blanditiis sequi!
                                                        </p>
                                                    </div>
                                                </div>

                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
