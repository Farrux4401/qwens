@extends('components.layouts.dashboard')

@section('main-content')
    <div class="light">
        <div x-data="{ tab: 'tab1' }"
            class="right-part py-8 px-5 overflow-hidden md:px-16 rounded-[46px] bg-white dark:backdrop-blur-[100px]">
            <div class="dark:text-white flex justify-between mb-9 border-b pb-6 dark:border-[#313131]">


                <div class="font-sfpro">
                    <ul class="flex w-full px-5 gap-x-11">
                        <li @click="tab = 'tab1'"
                            class="md:text-2xl text-[13px] font-medium cursor-pointer text-[#000]/[0.22] dark:text-[#fff]/[0.25]"
                            x-bind:class="{ 'text-[#000] dark:text-[#fff]': tab === 'tab1' }">
                            Виртуальные
                        </li>
                        <li @click="tab = 'tab2'"
                            class="md:text-2xl text-[13px] font-medium cursor-pointer text-[#000]/[0.22] dark:text-[#fff]/[0.25]"
                            x-bind:class="{ 'text-[#000] dark:text-[#fff]': tab === 'tab2' }">
                            Выделенные
                        </li>
                    </ul>
                </div>

                <div class="items-center gap-3 md:flex hidden">
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
                            <div class="md:grid grid md:grid-cols-3 grid-cols-1  gap-11">
                                <div class="md:col-span-1 col-span-1">
                                    <div class="">
                                        <div
                                            class="flex flex-col dark:bg-[#808080]/[0.05] dark:border dark:border-white/15 border border-[000000]/[0.13] rounded-[54px]  overflow-hidden py-12 px-8">
                                            <div class="flex flex-col items-start gap-7 mb-7">
                                                <span
                                                    class="flex justify-center items-center text-white rounded-full bg-[#202020] w-11 h-11 font-inter font-medium text-2xl text-whit">1</span>
                                                <div>
                                                    <span class="block text-xl font-medium dark:text-white">Конфигурация
                                                        №1</span>
                                                </div>
                                            </div>

                                            <div class="mb-4 font-inter">
                                                <span class="block text-base font-medium dark:text-white">Процессор</span>
                                                <span
                                                    class="block md:w-72 w-full font-medium text-[13px] dark:text-white/60">Intel
                                                    Core
                                                    i9-9900K (8
                                                    ядер, 16 потоков). Benchmark:
                                                    18359.</span>
                                            </div>

                                            <div class="mb-4 font-inter">
                                                <span class="block text-base font-medium dark:text-white">64 ГБ оперативной
                                                    памяти</span>
                                                <span class="block font-medium text-[13px] dark:text-white/60">2 TB SSD
                                                    накопителя</span>
                                            </div>

                                            <div class="font-inter mb-7">
                                                <span class="block text-base font-medium dark:text-white">Локация сервера -
                                                    Германия</span>
                                                <span class="block font-medium text-[13px] dark:text-white/60">Базовая
                                                    защита
                                                    от
                                                    DDoS</span>
                                            </div>
                                            <div class="flex flex-wrap gap-3">
                                                <div>
                                                    <button type="button"
                                                        class="flex items-center justify-center  p-4 dark:bg-[#86DA2F] bg-[#202020] text-white rounded-[19px] font-medium md:text-[17px] text-[15px] dark:text-black">45.99$</button>
                                                </div>
                                                <div>
                                                    <button type="button"
                                                        class="flex items-center justify-center  p-4 bg-[#202020] rounded-[19px] font-medium md:text-[17px] text-[15px] text-white">Добавить
                                                        в корзину</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div x-show="tab === 'tab2'">
                        <div class="dark:text-white">
                            <div class="md:grid grid md:grid-cols-3 grid-cols-1 gap-11">
                                <div class="md:col-span-1 col-span-1">
                                    <div class="">
                                        <div
                                            class="flex flex-col dark:bg-[#808080]/[0.05] dark:border dark:border-white/15 border border-[000000]/[0.13] rounded-[54px]  overflow-hidden py-12 px-8">
                                            <div class="flex flex-col items-start gap-7 mb-7">
                                                <span
                                                    class="flex justify-center items-center text-white rounded-full bg-[#202020] w-11 h-11 font-inter font-medium text-2xl text-whit">1</span>
                                                <div>
                                                    <span class="block text-xl font-medium dark:text-white">Конфигурация
                                                        №1</span>
                                                </div>
                                            </div>

                                            <div class="mb-4 font-inter">
                                                <span class="block text-base font-medium dark:text-white">Процессор</span>
                                                <span
                                                    class="block md:w-72 w-full font-medium text-[13px] dark:text-white/60">Intel
                                                    Core
                                                    i9-9900K (8
                                                    ядер, 16 потоков). Benchmark:
                                                    18359.</span>
                                            </div>

                                            <div class="mb-4 font-inter">
                                                <span class="block text-base font-medium dark:text-white">64 ГБ оперативной
                                                    памяти</span>
                                                <span class="block font-medium text-[13px] dark:text-white/60">2 TB SSD
                                                    накопителя</span>
                                            </div>

                                            <div class="font-inter mb-7">
                                                <span class="block text-base font-medium dark:text-white">Локация сервера -
                                                    Германия</span>
                                                <span class="block font-medium text-[13px] dark:text-white/60">Базовая
                                                    защита
                                                    от
                                                    DDoS</span>
                                            </div>
                                            <div class="flex flex-wrap gap-3">
                                                <div>
                                                    <button type="button"
                                                        class="flex items-center justify-center  p-4 dark:bg-[#86DA2F] bg-[#202020] text-white rounded-[19px] font-medium md:text-[17px] text-[15px] dark:text-black">45.99$</button>
                                                </div>
                                                <div>
                                                    <button type="button"
                                                        class="flex items-center justify-center  p-4 bg-[#202020] rounded-[19px] font-medium md:text-[17px] text-[15px] text-white">Добавить
                                                        в корзину</button>
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
        </div>
    </div>
@endsection
