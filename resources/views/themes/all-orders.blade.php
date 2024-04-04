@extends('components.layouts.dashboard')

@section('main-content')
    <div class="">
        <div x-data="{ tab: 'tab1' }"
            class="md:right-part dark:bg-black bg-white py-8 md:px-16 px-5 overflow-hidden  md:rounded-[46px]  md:dark:backdrop-blur-[100px]">
            <div class="dark:text-white flex justify-between mb-9 border-b pb-6 dark:border-[#313131]">

                <div class="font-sfpro">
                    <ul class="flex w-full px-5 gap-x-11">
                        <li @click="tab = 'tab1'"
                            class="md:text-2xl text-[13px] font-medium cursor-pointer text-black/25 dark:text-white/25"
                            x-bind:class="{ 'text-black dark:text-white': tab === 'tab1' }">
                            Корзина
                        </li>
                        <li @click="tab = 'tab2'"
                            class="md:text-2xl text-[13px] font-medium cursor-pointer text-black/25 dark:text-white/25"
                            x-bind:class="{ 'text-black dark:text-white': tab === 'tab2' }">
                            Список всех заказов
                        </li>
                    </ul>
                </div>
                <div class="lg:flex hidden items-center gap-3">
                    <a href="#"><img src="{{ asset('assets/images/Avatar-big.png') }}" alt=""
                            class="h-[40px] w-[40px]"></a>
                    <a href="#"
                        class="font-inter font-medium text-lg block bg-[#202020] text-white rounded-3xl px-5 py-2">Выйти</a>
                </div>
            </div>

            <div>
                <div class="flex flex-col w-full">
                    <div x-show="tab === 'tab1'">
                        <div class="">
                            <div class="flex flex-col gap-4 font-inter">
                                <div
                                    class="flex flex-col xl:flex-row xl:items-center items-start gap-5 justify-between dark:bg-[#808080]/[0.05] dark:border dark:border-white/15 border border-[000000]/[0.13] rounded-[54px] overflow-hidden py-12 px-8">
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
                                    <div class="flex gap-3">
                                        <button type="button"
                                            class="flex items-center justify-center  p-4 dark:bg-[#86DA2F] bg-[#202020] text-white rounded-[19px] font-medium md:text-[17px] text-[15px] dark:text-black">45.99$</button>
                                        <button type="button"
                                            class="flex items-center justify-center  p-4 bg-[#202020] rounded-[19px] font-medium md:text-[17px] text-[15px] text-white">X</button>
                                    </div>
                                </div>
                                <div
                                    class="flex flex-col xl:flex-row xl:items-center items-start gap-5 justify-between dark:bg-[#808080]/[0.05] dark:border dark:border-white/15 border border-[000000]/[0.13] rounded-[54px] overflow-hidden py-12 px-8">
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
                                    <div class="flex gap-3">
                                        <button type="button"
                                            class="flex items-center justify-center  p-4 dark:bg-[#86DA2F] bg-[#202020] text-white rounded-[19px] font-medium md:text-[17px] text-[15px] dark:text-black">45.99$</button>
                                        <button type="button"
                                            class="flex items-center justify-center  p-4 bg-[#202020] rounded-[19px] font-medium md:text-[17px] text-[15px] text-white">X</button>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="flex flex-wrap gap-5 items-center justify-between mt-14 border-y border-[#313131] py-9">
                                <div>
                                    <p class="font-sfpro font-medium xl:text-[43px] text-[26px] dark:text-white">ИТОГО:</p>
                                    <span class="block font-sfpro text-[15px] dark:text-white/50 mb-4">Включая базовую
                                        защиту от
                                        DDoS</span>
                                    <div class="flex gap-3">
                                        <button type="button"
                                            class="flex items-center justify-center  p-4 bg-[#202020] rounded-[19px] font-medium text-[17px] dark:text-white text-white">Редактировать
                                            заказ</button>
                                        <button type="button"
                                            class="xl:flex hidden items-center justify-center  p-4 bg-[#202020] rounded-[19px] font-medium text-xs xl:text-[17px] text-white">X</button>
                                    </div>
                                </div>
                                <div>
                                    <p class="font-inter font-medium md:text-[43px] text-[26px] dark:text-white mb-4">1500$
                                    </p>
                                    <div class="flex gap-3">
                                        <button type="button"
                                            class="flex items-center justify-center  p-4 dark:bg-[#86DA2F] bg-[#202020] text-white rounded-[19px] font-medium text-xs xl:text-[17px] dark:text-black">Оформить
                                            заказ</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div x-show="tab === 'tab2'">
                        <div class="">
                            <div class="flex flex-col gap-4 font-inter">
                                <div
                                    class="flex flex-col xl:flex-row xl:items-center items-start gap-5 justify-between dark:bg-[#808080]/[0.05] dark:border dark:border-white/15 border border-[000000]/[0.13] rounded-[54px] overflow-hidden py-12 px-8">
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
                                    <div class="flex gap-3">
                                        <button type="button"
                                            class="flex items-center justify-center  p-4 dark:bg-[#86DA2F] bg-[#202020] text-white rounded-[19px] font-medium md:text-[17px] text-[15px] dark:text-black">45.99$</button>
                                        <button type="button"
                                            class="flex items-center justify-center  p-4 bg-[#202020] rounded-[19px] font-medium md:text-[17px] text-[15px] text-white">X</button>
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
