@extends('components.layouts.dashboard')

@section('main-content')
    <div class="light">
        <div x-data="{ tab: 'tab1' }" class="right-part py-8 px-16 rounded-[46px] bg-white dark:backdrop-blur-[100px]">
            <div class="dark:text-white flex justify-between mb-9 border-b pb-6 dark:border-[#313131]">

                <div class="font-sfpro">
                    <ul class="flex w-full px-5 gap-x-11">
                        <li @click="tab = 'tab1'"
                            class="md:text-2xl text-[13px] font-medium cursor-pointer text-[#000]/[0.22] dark:text-[#fff]/[0.25]"
                            x-bind:class="{ 'text-[#000] dark:text-[#fff]': tab === 'tab1' }">
                            Редактирование заказа пользователю
                        </li>
                    </ul>
                </div>
                <div class="lg:flex hidden items-center gap-3">
                    <a href="#"><img src="{{ asset('assets/images/Avatar-big.png') }}" alt=""
                            class="h-[40px] w-[40px]"></a>
                    <a href="#"
                        class="font-inter font-medium text-lg block bg-[#202020] rounded-3xl px-5 py-2">Выйти</a>
                </div>
            </div>

            <div>
                <div class="flex flex-col w-full">
                    <div x-show="tab === 'tab1'">
                        <div class="">
                            <div class="flex flex-col gap-4 font-inter mb-11">
                                <div
                                    class="flex items-center justify-between dark:bg-[#808080]/[0.05] dark:border dark:border-white/15 border border-[000000]/[0.13] rounded-[54px] overflow-hidden py-12 px-8">
                                    <div class="flex flex-col items-start gap-4 ">
                                        <span
                                            class="mb-2 flex justify-center items-center rounded-full bg-[#202020] w-11 h-11 font-inter font-medium text-2xl text-white">1</span>
                                        <div>
                                            <span class="block text-xl font-medium dark:text-white">Конфигурация №1</span>
                                        </div>
                                    </div>

                                    <div class="font-inter">
                                        <span class="block text-base font-medium dark:text-white">Процессор</span>
                                        <span class="block w-72 font-medium text-[13px] dark:text-white/60">Intel Core
                                            i9-9900K (8
                                            ядер, 16 потоков). Benchmark:
                                            18359.</span>
                                    </div>

                                    <div class="font-inter">
                                        <span class="block text-base font-medium dark:text-white">64 ГБ оперативной
                                            памяти</span>
                                        <span class="block font-medium text-[13px] dark:text-white/60">2 TB SSD
                                            накопителя</span>
                                    </div>

                                    <div class="font-inter">
                                        <span class="block text-base font-medium dark:text-white">Локация сервера -
                                            Германия</span>
                                        <span class="block font-medium text-[13px] dark:text-white/60">Базовая защита от
                                            DDoS</span>
                                    </div>
                                    <div>
                                        <button type="button"
                                            class="flex items-center justify-center  p-4 dark:bg-[#86DA2F] bg-[#202020] text-white rounded-[19px] font-medium text-[17px] darktext-black">45.99$</button>
                                    </div>
                                    <div>
                                        <a href="#"
                                            class="flex items-center justify-center p-4 bg-[#202020] rounded-[19px] font-medium text-[17px] text-white">
                                            <img src="{{ asset('assets/images/pencil.svg') }}" alt="">
                                        </a>
                                    </div>
                                </div>

                            </div>

                            <div>
                                <div>
                                    <form class="">
                                        <div class="grid grid-cols-2 gap-5">
                                            <div class="col-span-1">
                                                <div
                                                    class="dark:bg-[#808080]/[0.05] dark:border dark:border-white/15 border border-[000000]/[0.13] rounded-[54px] w-full p-10 overflow-hidden ">
                                                    <label for=""
                                                        class="block mb-6 pb-5 font-medium text-xl dark:text-white border-b border-[#313131]">Смена
                                                        характеристик</label>
                                                    <div class="flex items-center gap-8">
                                                        <input type="text"
                                                            placeholder="Список доступных характеристик..."
                                                            class="w-[460px] dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-span-1">
                                                <div
                                                    class="dark:bg-[#808080]/[0.05] dark:border dark:border-white/15 border border-[000000]/[0.13] rounded-[54px] w-full p-10 overflow-hidden ">
                                                    <label for=""
                                                        class="block mb-6 pb-5 font-medium text-xl dark:text-white border-b border-[#313131]">Смена
                                                        локации</label>
                                                    <div class="flex items-center gap-8">
                                                        <input type="text" placeholder="Список возможных локаций..."
                                                            class="w-[460px] dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0">
                                                        <div>
                                                            <button type="button"
                                                                class="flex items-center justify-center px-4 dark:bg-[#86DA2F] bg-[#202020] text-white rounded-[19px] font-medium text-[31px] dark:text-black">+</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="grid grid-cols-3 gap-5 mt-10">
                                            <div class="col-span-2">
                                                <div
                                                    class="dark:bg-[#808080]/[0.05] dark:border dark:border-white/15 border border-[000000]/[0.13] rounded-[54px] w-full p-10 overflow-hidden ">
                                                    <label for=""
                                                        class="block mb-6 pb-5 font-medium text-xl dark:text-white border-b border-[#313131]">Добавление
                                                        доп. услуг</label>
                                                    <div class="flex items-end justify-between">
                                                        <div class="flex gap-14 mt-7">
                                                            <div class="flex flex-col gap-5">
                                                                <label
                                                                    class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                                                    <input type="checkbox"
                                                                        class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer"
                                                                        checked>
                                                                    Базовая защита от DDoS
                                                                </label><label
                                                                    class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                                                    <input type="checkbox"
                                                                        class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer"
                                                                        checked>
                                                                    Базовая защита от DDoS
                                                                </label><label
                                                                    class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                                                    <input type="checkbox"
                                                                        class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer"
                                                                        checked>
                                                                    Базовая защита от DDoS
                                                                </label>
                                                            </div>
                                                            <div class="flex flex-col gap-5">
                                                                <label
                                                                    class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                                                    <input type="checkbox"
                                                                        class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer"
                                                                        checked>
                                                                    Базовая защита от DDoS
                                                                </label><label
                                                                    class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                                                    <input type="checkbox"
                                                                        class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer"
                                                                        checked>
                                                                    Базовая защита от DDoS
                                                                </label><label
                                                                    class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                                                    <input type="checkbox"
                                                                        class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer"
                                                                        checked>
                                                                    Базовая защита от DDoS
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="flex gap-3">
                                                            <button type="button"
                                                                class="flex items-center justify-center px-4 py-4 bg-[#202020] dark:bg-[#86DA2F] rounded-[19px] font-medium text-[23px] text-white dark:text-black">Добавить</button>
                                                            <button type="button"
                                                                class="flex items-center justify-center px-4 py-4 bg-[#202020] rounded-[19px] font-medium text-[23px] text-black">
                                                                <img src="{{ asset('assets/images/right-arrow-white.svg') }}"
                                                                    alt="">
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-span-1">
                                                <div
                                                    class="dark:bg-[#808080]/[0.05] dark:border dark:border-white/15 border border-[000000]/[0.13] rounded-[54px] w-full p-10 overflow-hidden ">
                                                    <label for=""
                                                        class="block mb-6 pb-5 font-medium text-xl dark:text-white border-b border-[#313131]">Клиент</label>
                                                    <div class="flex items-center justify-between w-full ">
                                                        <div class="flex items-center w-full gap-5">
                                                            <img class="w-10 h-10 rounded-xl"
                                                                src="{{ asset('assets/images/Avatar-2.png') }}"
                                                                alt="avatar">
                                                            <div class="font-sfpro">
                                                                <p class="text-2xl font-medium dark:text-white">Sssnnnmmm
                                                                </p>
                                                                <span class="inline-block text-sm text-[#535353]/[0.87]">ID
                                                                    аккаунта
                                                                    - 791823751</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
