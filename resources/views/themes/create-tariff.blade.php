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
                            Новый тариф
                        </li>
                        <li @click="tab = 'tab2'"
                            class="md:text-2xl text-[13px] font-medium cursor-pointer text-[#000]/[0.22] dark:text-[#fff]/[0.25]"
                            x-bind:class="{ 'text-[#000] dark:text-[#fff]': tab === 'tab2' }">
                            Редактирование тарифов
                        </li>
                    </ul>
                </div>

                <div class="lg:flex hidden items-center gap-3">
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

                            <div class="grid  xl:grid-cols-3 gap-11">
                                <div class="xl:col-span-2 col-span-1">
                                    <div
                                        class="dark:bg-[#808080]/[0.05] dark:border dark:border-white/15 border border-[000000]/[0.13] rounded-[54px]  w-full p-10 overflow-hidden">
                                        <label for=""
                                            class="block mb-6 pb-5 font-medium text-xl dark:text-white border-b border-[#313131]">Создание
                                            нового тарифа</label>
                                        <div class="flex items-start gap-2 mb-4">
                                            <img class="block w-[15px] h-[15px] pt-2"
                                                src="{{ asset('assets/images/info-icon.svg') }}" alt="" />
                                            <span class="block dark:text-[#535353]/[0.87]">Перед созданием нового тарифа,
                                                будьте
                                                уверены в
                                                его доступности и адекватности</span>
                                        </div>
                                        <div class="flex flex-col gap-6">
                                            <div class="flex items-center">
                                                <input type="text" placeholder="Имя тарифа..."
                                                    class="md:w-[460px] w-full dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0">

                                            </div>
                                            <div class="flex items-center">
                                                <input type="text" placeholder="Процессор..."
                                                    class="md:w-[460px] w-full dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0">

                                            </div>
                                            <div class="flex items-center">
                                                <input type="text" placeholder="Кол-во RAM...."
                                                    class="md:w-[460px] w-full dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0">

                                            </div>
                                            <div class="flex items-center">
                                                <input type="text" placeholder="Кол-во NVME"
                                                    class="md:w-[460px] w-full dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0">

                                            </div>
                                            <div>
                                                <button type="button"
                                                    class="flex items-center justify-center px-7 py-3 dark:bg-[#86DA2F] bg-[#202020] text-white rounded-[19px] font-medium text-[17px] dark:text-black">Введите
                                                    желаемую цену</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-2 col-span-1">
                                    <div
                                        class="dark:bg-[#808080]/[0.05] dark:border dark:border-white/15 border border-[000000]/[0.13] rounded-[54px]  w-full p-10 overflow-hidden">
                                        <label for=""
                                            class="block mb-6 pb-5 font-medium text-xl dark:text-white border-b border-[#313131]">Выбор
                                            локации</label>
                                        <div class="flex items-start gap-2 mb-4">
                                            <img class="block w-[15px] h-[15px] pt-2"
                                                src="{{ asset('assets/images/info-icon.svg') }}" alt="" />
                                            <span class="block text-[#535353]/[0.87]">Проверьте, существует ли выбранная
                                                вами локация</span>
                                        </div>
                                        <div class="flex flex-col gap-6">
                                            <div class="flex items-center">
                                                <input type="text" placeholder="Название локации..."
                                                    class="md:w-[460px] w-full dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0">

                                            </div>

                                            <div class="flex flex-col gap-5 my-6">
                                                <label
                                                    class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                                    <input type="checkbox"
                                                        class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer"
                                                        checked>
                                                    Базовая защита от DDoS
                                                </label>
                                                <label
                                                    class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                                    <input type="checkbox"
                                                        class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer"
                                                        checked>
                                                    Открытый тариф
                                                </label>
                                                <label
                                                    class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                                    <input type="checkbox"
                                                        class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer"
                                                        checked>
                                                    Создать со скидкой
                                                </label>
                                            </div>
                                            <div class="flex items-center mb-5">
                                                <input type="text" placeholder="Скидка..."
                                                    class="md:w-[460px] w-full dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0">

                                            </div>
                                            <div class="flex gap-3">
                                                <button type="button"
                                                    class="flex items-center justify-center px-7 py-3 bg-[#202020] rounded-[19px] font-medium text-[17px] text-white">Сохранить
                                                    тариф</button>
                                                <button type="button"
                                                    class="flex items-center justify-center px-5 py-3 bg-[#202020] rounded-[19px] font-medium text-[17px] text-white">
                                                    <img src="{{ asset('assets/images/right-arrow-white.svg') }}"
                                                        alt="">
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div x-data="{ tarif: 'tarif1' }"
                                class="mt-10 bg-[#808080]/[0.05] border border-white/15 rounded-[54px] overflow-hidden py-12 px-8">
                                <ul class="flex w-full gap-x-11 px-5 mb-8 border-b border-[#313131] pb-4">
                                    <li @click="tarif = 'tarif1'" class="text-2xl font-medium cursor-pointer text-white/25"
                                        x-bind:class="{ 'text-[#ffffff]': tab === 'tab1' }">
                                        Новый тариф
                                    </li>
                                    <li @click="tarif = 'tarif2'" class="text-2xl font-medium cursor-pointer text-white/25"
                                        x-bind:class="{ 'text-[#ffffff]': tab === 'tab1' }">
                                        Черновики
                                    </li>
                                </ul>

                                <div x-show="tarif === 'tarif1'">
                                    <div class="grid xl:grid-cols-3 gap-11">
                                        <div class="col-span-1">
                                            <div class="">
                                                <div
                                                    class="flex flex-col dark:bg-[#808080]/[0.05] dark:border dark:border-white/15 border border-[000000]/[0.13] rounded-[54px]  overflow-hidden py-12 px-8">
                                                    <div class="flex flex-col items-start gap-7 mb-7">
                                                        <span
                                                            class="flex justify-center items-center text-white rounded-full bg-[#202020] w-11 h-11 font-inter font-medium text-2xl text-whit">1</span>
                                                        <div>
                                                            <span
                                                                class="block text-xl font-medium dark:text-white">Конфигурация
                                                                №1</span>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 font-inter">
                                                        <span
                                                            class="block text-base font-medium dark:text-white">Процессор</span>
                                                        <span
                                                            class="block w-72 font-medium text-[13px] dark:text-white/60">Intel
                                                            Core
                                                            i9-9900K (8
                                                            ядер, 16 потоков). Benchmark:
                                                            18359.</span>
                                                    </div>

                                                    <div class="mb-4 font-inter">
                                                        <span class="block text-base font-medium dark:text-white">64 ГБ
                                                            оперативной
                                                            памяти</span>
                                                        <span class="block font-medium text-[13px] dark:text-white/60">2 TB
                                                            SSD
                                                            накопителя</span>
                                                    </div>

                                                    <div class="font-inter mb-7">
                                                        <span class="block text-base font-medium dark:text-white">Локация
                                                            сервера -
                                                            Германия</span>
                                                        <span
                                                            class="block font-medium text-[13px] dark:text-white/60">Базовая
                                                            защита
                                                            от
                                                            DDoS</span>
                                                    </div>
                                                    <div class="flex gap-3">
                                                        <div>
                                                            <button type="button"
                                                                class="flex items-center justify-center  p-4 dark:bg-[#86DA2F] bg-[#202020] text-white rounded-[19px] font-medium text-[17px] dark:text-black">45.99$</button>
                                                        </div>
                                                        <div>
                                                            <button type="button"
                                                                class="flex items-center justify-center  p-4 bg-[#202020] rounded-[19px] font-medium text-[17px] text-white">Добавить
                                                                в корзину</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-1">
                                            <div class="">
                                                <div
                                                    class="flex flex-col dark:bg-[#808080]/[0.05] dark:border dark:border-white/15 border border-[000000]/[0.13] rounded-[54px]  overflow-hidden py-12 px-8">
                                                    <div class="flex flex-col items-start gap-7 mb-7">
                                                        <span
                                                            class="flex justify-center items-center text-white rounded-full bg-[#202020] w-11 h-11 font-inter font-medium text-2xl text-whit">1</span>
                                                        <div>
                                                            <span
                                                                class="block text-xl font-medium dark:text-white">Конфигурация
                                                                №1</span>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 font-inter">
                                                        <span
                                                            class="block text-base font-medium dark:text-white">Процессор</span>
                                                        <span
                                                            class="block w-72 font-medium text-[13px] dark:text-white/60">Intel
                                                            Core
                                                            i9-9900K (8
                                                            ядер, 16 потоков). Benchmark:
                                                            18359.</span>
                                                    </div>

                                                    <div class="mb-4 font-inter">
                                                        <span class="block text-base font-medium dark:text-white">64 ГБ
                                                            оперативной
                                                            памяти</span>
                                                        <span class="block font-medium text-[13px] dark:text-white/60">2 TB
                                                            SSD
                                                            накопителя</span>
                                                    </div>

                                                    <div class="font-inter mb-7">
                                                        <span class="block text-base font-medium dark:text-white">Локация
                                                            сервера -
                                                            Германия</span>
                                                        <span
                                                            class="block font-medium text-[13px] dark:text-white/60">Базовая
                                                            защита
                                                            от
                                                            DDoS</span>
                                                    </div>
                                                    <div class="flex gap-3">
                                                        <div>
                                                            <button type="button"
                                                                class="flex items-center justify-center  p-4 dark:bg-[#86DA2F] bg-[#202020] text-white rounded-[19px] font-medium text-[17px] dark:text-black">45.99$</button>
                                                        </div>
                                                        <div>
                                                            <button type="button"
                                                                class="flex items-center justify-center  p-4 bg-[#202020] rounded-[19px] font-medium text-[17px] text-white">Добавить
                                                                в корзину</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-1">
                                            <div class="">
                                                <div
                                                    class="flex flex-col dark:bg-[#808080]/[0.05] dark:border dark:border-white/15 border border-[000000]/[0.13] rounded-[54px]  overflow-hidden py-12 px-8">
                                                    <div class="flex flex-col items-start gap-7 mb-7">
                                                        <span
                                                            class="flex justify-center items-center text-white rounded-full bg-[#202020] w-11 h-11 font-inter font-medium text-2xl text-whit">1</span>
                                                        <div>
                                                            <span
                                                                class="block text-xl font-medium dark:text-white">Конфигурация
                                                                №1</span>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 font-inter">
                                                        <span
                                                            class="block text-base font-medium dark:text-white">Процессор</span>
                                                        <span
                                                            class="block w-72 font-medium text-[13px] dark:text-white/60">Intel
                                                            Core
                                                            i9-9900K (8
                                                            ядер, 16 потоков). Benchmark:
                                                            18359.</span>
                                                    </div>

                                                    <div class="mb-4 font-inter">
                                                        <span class="block text-base font-medium dark:text-white">64 ГБ
                                                            оперативной
                                                            памяти</span>
                                                        <span class="block font-medium text-[13px] dark:text-white/60">2 TB
                                                            SSD
                                                            накопителя</span>
                                                    </div>

                                                    <div class="font-inter mb-7">
                                                        <span class="block text-base font-medium dark:text-white">Локация
                                                            сервера -
                                                            Германия</span>
                                                        <span
                                                            class="block font-medium text-[13px] dark:text-white/60">Базовая
                                                            защита
                                                            от
                                                            DDoS</span>
                                                    </div>
                                                    <div class="flex gap-3">
                                                        <div>
                                                            <button type="button"
                                                                class="flex items-center justify-center  p-4 dark:bg-[#86DA2F] bg-[#202020] text-white rounded-[19px] font-medium text-[17px] dark:text-black">45.99$</button>
                                                        </div>
                                                        <div>
                                                            <button type="button"
                                                                class="flex items-center justify-center  p-4 bg-[#202020] rounded-[19px] font-medium text-[17px] text-white">Добавить
                                                                в корзину</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-1">
                                            <div class="">
                                                <div
                                                    class="flex flex-col dark:bg-[#808080]/[0.05] dark:border dark:border-white/15 border border-[000000]/[0.13] rounded-[54px]  overflow-hidden py-12 px-8">
                                                    <div class="flex flex-col items-start gap-7 mb-7">
                                                        <span
                                                            class="flex justify-center items-center text-white rounded-full bg-[#202020] w-11 h-11 font-inter font-medium text-2xl text-whit">1</span>
                                                        <div>
                                                            <span
                                                                class="block text-xl font-medium dark:text-white">Конфигурация
                                                                №1</span>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 font-inter">
                                                        <span
                                                            class="block text-base font-medium dark:text-white">Процессор</span>
                                                        <span
                                                            class="block w-72 font-medium text-[13px] dark:text-white/60">Intel
                                                            Core
                                                            i9-9900K (8
                                                            ядер, 16 потоков). Benchmark:
                                                            18359.</span>
                                                    </div>

                                                    <div class="mb-4 font-inter">
                                                        <span class="block text-base font-medium dark:text-white">64 ГБ
                                                            оперативной
                                                            памяти</span>
                                                        <span class="block font-medium text-[13px] dark:text-white/60">2 TB
                                                            SSD
                                                            накопителя</span>
                                                    </div>

                                                    <div class="font-inter mb-7">
                                                        <span class="block text-base font-medium dark:text-white">Локация
                                                            сервера -
                                                            Германия</span>
                                                        <span
                                                            class="block font-medium text-[13px] dark:text-white/60">Базовая
                                                            защита
                                                            от
                                                            DDoS</span>
                                                    </div>
                                                    <div class="flex gap-3">
                                                        <div>
                                                            <button type="button"
                                                                class="flex items-center justify-center  p-4 dark:bg-[#86DA2F] bg-[#202020] text-white rounded-[19px] font-medium text-[17px] dark:text-black">45.99$</button>
                                                        </div>
                                                        <div>
                                                            <button type="button"
                                                                class="flex items-center justify-center  p-4 bg-[#202020] rounded-[19px] font-medium text-[17px] text-white">Добавить
                                                                в корзину</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-1">
                                            <div class="">
                                                <div
                                                    class="flex flex-col dark:bg-[#808080]/[0.05] dark:border dark:border-white/15 border border-[000000]/[0.13] rounded-[54px]  overflow-hidden py-12 px-8">
                                                    <div class="flex flex-col items-start gap-7 mb-7">
                                                        <span
                                                            class="flex justify-center items-center text-white rounded-full bg-[#202020] w-11 h-11 font-inter font-medium text-2xl text-whit">1</span>
                                                        <div>
                                                            <span
                                                                class="block text-xl font-medium dark:text-white">Конфигурация
                                                                №1</span>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 font-inter">
                                                        <span
                                                            class="block text-base font-medium dark:text-white">Процессор</span>
                                                        <span
                                                            class="block w-72 font-medium text-[13px] dark:text-white/60">Intel
                                                            Core
                                                            i9-9900K (8
                                                            ядер, 16 потоков). Benchmark:
                                                            18359.</span>
                                                    </div>

                                                    <div class="mb-4 font-inter">
                                                        <span class="block text-base font-medium dark:text-white">64 ГБ
                                                            оперативной
                                                            памяти</span>
                                                        <span class="block font-medium text-[13px] dark:text-white/60">2 TB
                                                            SSD
                                                            накопителя</span>
                                                    </div>

                                                    <div class="font-inter mb-7">
                                                        <span class="block text-base font-medium dark:text-white">Локация
                                                            сервера -
                                                            Германия</span>
                                                        <span
                                                            class="block font-medium text-[13px] dark:text-white/60">Базовая
                                                            защита
                                                            от
                                                            DDoS</span>
                                                    </div>
                                                    <div class="flex gap-3">
                                                        <div>
                                                            <button type="button"
                                                                class="flex items-center justify-center  p-4 dark:bg-[#86DA2F] bg-[#202020] text-white rounded-[19px] font-medium text-[17px] dark:text-black">45.99$</button>
                                                        </div>
                                                        <div>
                                                            <button type="button"
                                                                class="flex items-center justify-center  p-4 bg-[#202020] rounded-[19px] font-medium text-[17px] text-white">Добавить
                                                                в корзину</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-1">
                                            <div class="">
                                                <div
                                                    class="flex flex-col dark:bg-[#808080]/[0.05] dark:border dark:border-white/15 border border-[000000]/[0.13] rounded-[54px]  overflow-hidden py-12 px-8">
                                                    <div class="flex flex-col items-start gap-7 mb-7">
                                                        <span
                                                            class="flex justify-center items-center text-white rounded-full bg-[#202020] w-11 h-11 font-inter font-medium text-2xl text-whit">1</span>
                                                        <div>
                                                            <span
                                                                class="block text-xl font-medium dark:text-white">Конфигурация
                                                                №1</span>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 font-inter">
                                                        <span
                                                            class="block text-base font-medium dark:text-white">Процессор</span>
                                                        <span
                                                            class="block w-72 font-medium text-[13px] dark:text-white/60">Intel
                                                            Core
                                                            i9-9900K (8
                                                            ядер, 16 потоков). Benchmark:
                                                            18359.</span>
                                                    </div>

                                                    <div class="mb-4 font-inter">
                                                        <span class="block text-base font-medium dark:text-white">64 ГБ
                                                            оперативной
                                                            памяти</span>
                                                        <span class="block font-medium text-[13px] dark:text-white/60">2 TB
                                                            SSD
                                                            накопителя</span>
                                                    </div>

                                                    <div class="font-inter mb-7">
                                                        <span class="block text-base font-medium dark:text-white">Локация
                                                            сервера -
                                                            Германия</span>
                                                        <span
                                                            class="block font-medium text-[13px] dark:text-white/60">Базовая
                                                            защита
                                                            от
                                                            DDoS</span>
                                                    </div>
                                                    <div class="flex gap-3">
                                                        <div>
                                                            <button type="button"
                                                                class="flex items-center justify-center  p-4 dark:bg-[#86DA2F] bg-[#202020] text-white rounded-[19px] font-medium text-[17px] dark:text-black">45.99$</button>
                                                        </div>
                                                        <div>
                                                            <button type="button"
                                                                class="flex items-center justify-center  p-4 bg-[#202020] rounded-[19px] font-medium text-[17px] text-white">Добавить
                                                                в корзину</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div x-show="tarif === 'tarif2'">
                                    <div class="grid xl:grid-cols-3 gap-11">
                                        <div class="col-span-1">
                                            <div class="">
                                                <div
                                                    class="flex flex-col bg-[#808080]/[0.05] border border-white/15 rounded-[54px] overflow-hidden py-12 px-8">
                                                    <div class="flex flex-col items-start gap-7 mb-7">
                                                        <span
                                                            class="flex justify-center items-center rounded-full bg-[#202020] w-11 h-11 font-inter font-medium text-2xl text-whit">1</span>
                                                        <div>
                                                            <span class="block text-xl font-medium text-white">Конфигурация
                                                                №1</span>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 font-inter">
                                                        <span
                                                            class="block text-base font-medium text-white">Процессор</span>
                                                        <span
                                                            class="block w-72 font-medium text-[13px] text-white/60">Intel
                                                            Core
                                                            i9-9900K (8
                                                            ядер, 16 потоков). Benchmark:
                                                            18359.</span>
                                                    </div>

                                                    <div class="mb-4 font-inter">
                                                        <span class="block text-base font-medium text-white">64 ГБ
                                                            оперативной
                                                            памяти</span>
                                                        <span class="block font-medium text-[13px] text-white/60">2 TB SSD
                                                            накопителя</span>
                                                    </div>

                                                    <div class="font-inter mb-7">
                                                        <span class="block text-base font-medium text-white">Локация
                                                            сервера -
                                                            Германия</span>
                                                        <span class="block font-medium text-[13px] text-white/60">Базовая
                                                            защита
                                                            от
                                                            DDoS</span>
                                                    </div>
                                                    <div class="flex gap-3">
                                                        <div>
                                                            <button type="button"
                                                                class="flex items-center justify-center  p-4 bg-[#86DA2F] rounded-[19px] font-medium text-[17px] text-black">45.99$</button>
                                                        </div>
                                                        <div>
                                                            <button type="button"
                                                                class="flex items-center justify-center  p-4 bg-[#202020] rounded-[19px] font-medium text-[17px] text-white">Добавить
                                                                в корзину</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-1">
                                            <div class="">
                                                <div
                                                    class="flex flex-col bg-[#808080]/[0.05] border border-white/15 rounded-[54px] overflow-hidden py-12 px-8">
                                                    <div class="flex flex-col items-start gap-7 mb-7">
                                                        <span
                                                            class="flex justify-center items-center rounded-full bg-[#202020] w-11 h-11 font-inter font-medium text-2xl text-whit">1</span>
                                                        <div>
                                                            <span class="block text-xl font-medium text-white">Конфигурация
                                                                №1</span>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 font-inter">
                                                        <span
                                                            class="block text-base font-medium text-white">Процессор</span>
                                                        <span
                                                            class="block w-72 font-medium text-[13px] text-white/60">Intel
                                                            Core
                                                            i9-9900K (8
                                                            ядер, 16 потоков). Benchmark:
                                                            18359.</span>
                                                    </div>

                                                    <div class="mb-4 font-inter">
                                                        <span class="block text-base font-medium text-white">64 ГБ
                                                            оперативной
                                                            памяти</span>
                                                        <span class="block font-medium text-[13px] text-white/60">2 TB SSD
                                                            накопителя</span>
                                                    </div>

                                                    <div class="font-inter mb-7">
                                                        <span class="block text-base font-medium text-white">Локация
                                                            сервера -
                                                            Германия</span>
                                                        <span class="block font-medium text-[13px] text-white/60">Базовая
                                                            защита
                                                            от
                                                            DDoS</span>
                                                    </div>
                                                    <div class="flex gap-3">
                                                        <div>
                                                            <button type="button"
                                                                class="flex items-center justify-center  p-4 bg-[#86DA2F] rounded-[19px] font-medium text-[17px] text-black">45.99$</button>
                                                        </div>
                                                        <div>
                                                            <button type="button"
                                                                class="flex items-center justify-center  p-4 bg-[#202020] rounded-[19px] font-medium text-[17px] text-white">Добавить
                                                                в корзину</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-1">
                                            <div class="">
                                                <div
                                                    class="flex flex-col bg-[#808080]/[0.05] border border-white/15 rounded-[54px] overflow-hidden py-12 px-8">
                                                    <div class="flex flex-col items-start gap-7 mb-7">
                                                        <span
                                                            class="flex justify-center items-center rounded-full bg-[#202020] w-11 h-11 font-inter font-medium text-2xl text-whit">1</span>
                                                        <div>
                                                            <span class="block text-xl font-medium text-white">Конфигурация
                                                                №1</span>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 font-inter">
                                                        <span
                                                            class="block text-base font-medium text-white">Процессор</span>
                                                        <span
                                                            class="block w-72 font-medium text-[13px] text-white/60">Intel
                                                            Core
                                                            i9-9900K (8
                                                            ядер, 16 потоков). Benchmark:
                                                            18359.</span>
                                                    </div>

                                                    <div class="mb-4 font-inter">
                                                        <span class="block text-base font-medium text-white">64 ГБ
                                                            оперативной
                                                            памяти</span>
                                                        <span class="block font-medium text-[13px] text-white/60">2 TB SSD
                                                            накопителя</span>
                                                    </div>

                                                    <div class="font-inter mb-7">
                                                        <span class="block text-base font-medium text-white">Локация
                                                            сервера -
                                                            Германия</span>
                                                        <span class="block font-medium text-[13px] text-white/60">Базовая
                                                            защита
                                                            от
                                                            DDoS</span>
                                                    </div>
                                                    <div class="flex gap-3">
                                                        <div>
                                                            <button type="button"
                                                                class="flex items-center justify-center  p-4 bg-[#86DA2F] rounded-[19px] font-medium text-[17px] text-black">45.99$</button>
                                                        </div>
                                                        <div>
                                                            <button type="button"
                                                                class="flex items-center justify-center  p-4 bg-[#202020] rounded-[19px] font-medium text-[17px] text-white">Добавить
                                                                в корзину</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-1">
                                            <div class="">
                                                <div
                                                    class="flex flex-col bg-[#808080]/[0.05] border border-white/15 rounded-[54px] overflow-hidden py-12 px-8">
                                                    <div class="flex flex-col items-start gap-7 mb-7">
                                                        <span
                                                            class="flex justify-center items-center rounded-full bg-[#202020] w-11 h-11 font-inter font-medium text-2xl text-whit">1</span>
                                                        <div>
                                                            <span class="block text-xl font-medium text-white">Конфигурация
                                                                №1</span>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 font-inter">
                                                        <span
                                                            class="block text-base font-medium text-white">Процессор</span>
                                                        <span
                                                            class="block w-72 font-medium text-[13px] text-white/60">Intel
                                                            Core
                                                            i9-9900K (8
                                                            ядер, 16 потоков). Benchmark:
                                                            18359.</span>
                                                    </div>

                                                    <div class="mb-4 font-inter">
                                                        <span class="block text-base font-medium text-white">64 ГБ
                                                            оперативной
                                                            памяти</span>
                                                        <span class="block font-medium text-[13px] text-white/60">2 TB SSD
                                                            накопителя</span>
                                                    </div>

                                                    <div class="font-inter mb-7">
                                                        <span class="block text-base font-medium text-white">Локация
                                                            сервера -
                                                            Германия</span>
                                                        <span class="block font-medium text-[13px] text-white/60">Базовая
                                                            защита
                                                            от
                                                            DDoS</span>
                                                    </div>
                                                    <div class="flex gap-3">
                                                        <div>
                                                            <button type="button"
                                                                class="flex items-center justify-center  p-4 bg-[#86DA2F] rounded-[19px] font-medium text-[17px] text-black">45.99$</button>
                                                        </div>
                                                        <div>
                                                            <button type="button"
                                                                class="flex items-center justify-center  p-4 bg-[#202020] rounded-[19px] font-medium text-[17px] text-white">Добавить
                                                                в корзину</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-1">
                                            <div class="">
                                                <div
                                                    class="flex flex-col bg-[#808080]/[0.05] border border-white/15 rounded-[54px] overflow-hidden py-12 px-8">
                                                    <div class="flex flex-col items-start gap-7 mb-7">
                                                        <span
                                                            class="flex justify-center items-center rounded-full bg-[#202020] w-11 h-11 font-inter font-medium text-2xl text-whit">1</span>
                                                        <div>
                                                            <span class="block text-xl font-medium text-white">Конфигурация
                                                                №1</span>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 font-inter">
                                                        <span
                                                            class="block text-base font-medium text-white">Процессор</span>
                                                        <span
                                                            class="block w-72 font-medium text-[13px] text-white/60">Intel
                                                            Core
                                                            i9-9900K (8
                                                            ядер, 16 потоков). Benchmark:
                                                            18359.</span>
                                                    </div>

                                                    <div class="mb-4 font-inter">
                                                        <span class="block text-base font-medium text-white">64 ГБ
                                                            оперативной
                                                            памяти</span>
                                                        <span class="block font-medium text-[13px] text-white/60">2 TB SSD
                                                            накопителя</span>
                                                    </div>

                                                    <div class="font-inter mb-7">
                                                        <span class="block text-base font-medium text-white">Локация
                                                            сервера -
                                                            Германия</span>
                                                        <span class="block font-medium text-[13px] text-white/60">Базовая
                                                            защита
                                                            от
                                                            DDoS</span>
                                                    </div>
                                                    <div class="flex gap-3">
                                                        <div>
                                                            <button type="button"
                                                                class="flex items-center justify-center  p-4 bg-[#86DA2F] rounded-[19px] font-medium text-[17px] text-black">45.99$</button>
                                                        </div>
                                                        <div>
                                                            <button type="button"
                                                                class="flex items-center justify-center  p-4 bg-[#202020] rounded-[19px] font-medium text-[17px] text-white">Добавить
                                                                в корзину</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-1">
                                            <div class="">
                                                <div
                                                    class="flex flex-col bg-[#808080]/[0.05] border border-white/15 rounded-[54px] overflow-hidden py-12 px-8">
                                                    <div class="flex flex-col items-start gap-7 mb-7">
                                                        <span
                                                            class="flex justify-center items-center rounded-full bg-[#202020] w-11 h-11 font-inter font-medium text-2xl text-whit">1</span>
                                                        <div>
                                                            <span class="block text-xl font-medium text-white">Конфигурация
                                                                №1</span>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 font-inter">
                                                        <span
                                                            class="block text-base font-medium text-white">Процессор</span>
                                                        <span
                                                            class="block w-72 font-medium text-[13px] text-white/60">Intel
                                                            Core
                                                            i9-9900K (8
                                                            ядер, 16 потоков). Benchmark:
                                                            18359.</span>
                                                    </div>

                                                    <div class="mb-4 font-inter">
                                                        <span class="block text-base font-medium text-white">64 ГБ
                                                            оперативной
                                                            памяти</span>
                                                        <span class="block font-medium text-[13px] text-white/60">2 TB SSD
                                                            накопителя</span>
                                                    </div>

                                                    <div class="font-inter mb-7">
                                                        <span class="block text-base font-medium text-white">Локация
                                                            сервера -
                                                            Германия</span>
                                                        <span class="block font-medium text-[13px] text-white/60">Базовая
                                                            защита
                                                            от
                                                            DDoS</span>
                                                    </div>
                                                    <div class="flex gap-3">
                                                        <div>
                                                            <button type="button"
                                                                class="flex items-center justify-center  p-4 bg-[#86DA2F] rounded-[19px] font-medium text-[17px] text-black">45.99$</button>
                                                        </div>
                                                        <div>
                                                            <button type="button"
                                                                class="flex items-center justify-center  p-4 bg-[#202020] rounded-[19px] font-medium text-[17px] text-white">Добавить
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
                    <div x-show="tab === 'tab2'">
                        <div>
                            <div x-data="{ edit_tarif: 'edit_tarif1' }"
                                class="mt-10 dark:bg-[#808080]/[0.05] dark:border dark:border-white/15 border border-[000000]/[0.13] rounded-[54px]  overflow-hidden py-12 px-8">
                                <ul class="flex w-full gap-x-11 px-5 mb-8 border-b border-[#313131] pb-4">
                                    <li @click="edit_tarif = 'edit_tarif1'"
                                        class="text-2xl font-medium cursor-pointer text-[#000]/[0.22] dark:text-[#fff]/[0.25]"
                                        x-bind:class="{ 'text-[#000] dark:text-[#fff]': edit_tarif === 'edit_tarif1' }">
                                        Список всех тарифов
                                    </li>
                                    <li @click="edit_tarif = 'edit_tarif2'"
                                        class="text-2xl font-medium cursor-pointer text-[#000]/[0.22] dark:text-[#fff]/[0.25]"
                                        x-bind:class="{ 'text-[#000] dark:text-[#fff]': edit_tarif === 'edit_tarif2' }">
                                        Черновики
                                    </li>
                                </ul>

                                <div x-show="edit_tarif === 'edit_tarif1'">
                                    <div x-data="{ list_tarif: 'list_tarif1' }" class="">


                                        <ul class="flex w-full gap-x-11 px-5 mb-8 border-b border-[#313131] pb-4">
                                            <li @click="list_tarif = 'list_tarif1'"
                                                class="text-2xl font-medium cursor-pointer text-[#000]/[0.22] dark:text-[#fff]/[0.25]"
                                                x-bind:class="{ 'text-[#000] dark:text-[#fff]': list_tarif === 'list_tarif1' }">
                                                Выделенные серверы
                                            </li>
                                            <li @click="list_tarif = 'list_tarif1'"
                                                class="text-2xl font-medium cursor-pointer text-[#000]/[0.22] dark:text-[#fff]/[0.25]"
                                                x-bind:class="{ 'text-[#000] dark:text-[#fff]': list_tarif === 'list_tarif2' }">
                                                Виртуальные серверы
                                            </li>

                                        </ul>



                                        <div x-show="list_tarif === 'list_tarif1'">
                                            <div class="grid xl:grid-cols-3 gap-11">
                                                <div class="col-span-1">
                                                    <div class="">
                                                        <div
                                                            class="flex flex-col dark:bg-[#808080]/[0.05] dark:border dark:border-white/15 border border-[000000]/[0.13] rounded-[54px]  overflow-hidden py-12 px-8">
                                                            <div class="flex flex-col items-start gap-7 mb-7">
                                                                <span
                                                                    class="flex justify-center items-center text-white rounded-full bg-[#202020] w-11 h-11 font-inter font-medium text-2xl text-whit">1</span>
                                                                <div>
                                                                    <span
                                                                        class="block text-xl font-medium dark:text-white">Конфигурация
                                                                        №1</span>
                                                                </div>
                                                            </div>

                                                            <div class="mb-4 font-inter">
                                                                <span
                                                                    class="block text-base font-medium dark:text-white">Процессор</span>
                                                                <span
                                                                    class="block w-72 font-medium text-[13px] dark:text-white/60">Intel
                                                                    Core
                                                                    i9-9900K (8
                                                                    ядер, 16 потоков). Benchmark:
                                                                    18359.</span>
                                                            </div>

                                                            <div class="mb-4 font-inter">
                                                                <span
                                                                    class="block text-base font-medium dark:text-white">64
                                                                    ГБ оперативной
                                                                    памяти</span>
                                                                <span
                                                                    class="block font-medium text-[13px] dark:text-white/60">2
                                                                    TB SSD
                                                                    накопителя</span>
                                                            </div>

                                                            <div class="font-inter mb-7">
                                                                <span
                                                                    class="block text-base font-medium dark:text-white">Локация
                                                                    сервера -
                                                                    Германия</span>
                                                                <span
                                                                    class="block font-medium text-[13px] dark:text-white/60">Базовая
                                                                    защита
                                                                    от
                                                                    DDoS</span>
                                                            </div>
                                                            <div class="flex gap-3">
                                                                <div>
                                                                    <button type="button"
                                                                        class="flex items-center justify-center  p-4 dark:bg-[#86DA2F] bg-[#202020] text-white rounded-[19px] font-medium text-[17px] dark:text-black">45.99$</button>
                                                                </div>
                                                                <div>
                                                                    <button type="button"
                                                                        class="flex items-center justify-center  p-4 bg-[#202020] rounded-[19px] font-medium text-[17px] text-white">Добавить
                                                                        в корзину</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-span-1">
                                                    <div class="">
                                                        <div
                                                            class="flex flex-col dark:bg-[#808080]/[0.05] dark:border dark:border-white/15 border border-[000000]/[0.13] rounded-[54px]  overflow-hidden py-12 px-8">
                                                            <div class="flex flex-col items-start gap-7 mb-7">
                                                                <span
                                                                    class="flex justify-center items-center text-white rounded-full bg-[#202020] w-11 h-11 font-inter font-medium text-2xl text-whit">1</span>
                                                                <div>
                                                                    <span
                                                                        class="block text-xl font-medium dark:text-white">Конфигурация
                                                                        №1</span>
                                                                </div>
                                                            </div>

                                                            <div class="mb-4 font-inter">
                                                                <span
                                                                    class="block text-base font-medium dark:text-white">Процессор</span>
                                                                <span
                                                                    class="block w-72 font-medium text-[13px] dark:text-white/60">Intel
                                                                    Core
                                                                    i9-9900K (8
                                                                    ядер, 16 потоков). Benchmark:
                                                                    18359.</span>
                                                            </div>

                                                            <div class="mb-4 font-inter">
                                                                <span
                                                                    class="block text-base font-medium dark:text-white">64
                                                                    ГБ оперативной
                                                                    памяти</span>
                                                                <span
                                                                    class="block font-medium text-[13px] dark:text-white/60">2
                                                                    TB SSD
                                                                    накопителя</span>
                                                            </div>

                                                            <div class="font-inter mb-7">
                                                                <span
                                                                    class="block text-base font-medium dark:text-white">Локация
                                                                    сервера -
                                                                    Германия</span>
                                                                <span
                                                                    class="block font-medium text-[13px] dark:text-white/60">Базовая
                                                                    защита
                                                                    от
                                                                    DDoS</span>
                                                            </div>
                                                            <div class="flex gap-3">
                                                                <div>
                                                                    <button type="button"
                                                                        class="flex items-center justify-center  p-4 dark:bg-[#86DA2F] bg-[#202020] text-white rounded-[19px] font-medium text-[17px] dark:text-black">45.99$</button>
                                                                </div>
                                                                <div>
                                                                    <button type="button"
                                                                        class="flex items-center justify-center  p-4 bg-[#202020] rounded-[19px] font-medium text-[17px] text-white">Добавить
                                                                        в корзину</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-span-1">
                                                    <div class="">
                                                        <div
                                                            class="flex flex-col dark:bg-[#808080]/[0.05] dark:border dark:border-white/15 border border-[000000]/[0.13] rounded-[54px]  overflow-hidden py-12 px-8">
                                                            <div class="flex flex-col items-start gap-7 mb-7">
                                                                <span
                                                                    class="flex justify-center items-center text-white rounded-full bg-[#202020] w-11 h-11 font-inter font-medium text-2xl text-whit">1</span>
                                                                <div>
                                                                    <span
                                                                        class="block text-xl font-medium dark:text-white">Конфигурация
                                                                        №1</span>
                                                                </div>
                                                            </div>

                                                            <div class="mb-4 font-inter">
                                                                <span
                                                                    class="block text-base font-medium dark:text-white">Процессор</span>
                                                                <span
                                                                    class="block w-72 font-medium text-[13px] dark:text-white/60">Intel
                                                                    Core
                                                                    i9-9900K (8
                                                                    ядер, 16 потоков). Benchmark:
                                                                    18359.</span>
                                                            </div>

                                                            <div class="mb-4 font-inter">
                                                                <span
                                                                    class="block text-base font-medium dark:text-white">64
                                                                    ГБ оперативной
                                                                    памяти</span>
                                                                <span
                                                                    class="block font-medium text-[13px] dark:text-white/60">2
                                                                    TB SSD
                                                                    накопителя</span>
                                                            </div>

                                                            <div class="font-inter mb-7">
                                                                <span
                                                                    class="block text-base font-medium dark:text-white">Локация
                                                                    сервера -
                                                                    Германия</span>
                                                                <span
                                                                    class="block font-medium text-[13px] dark:text-white/60">Базовая
                                                                    защита
                                                                    от
                                                                    DDoS</span>
                                                            </div>
                                                            <div class="flex gap-3">
                                                                <div>
                                                                    <button type="button"
                                                                        class="flex items-center justify-center  p-4 dark:bg-[#86DA2F] bg-[#202020] text-white rounded-[19px] font-medium text-[17px] dark:text-black">45.99$</button>
                                                                </div>
                                                                <div>
                                                                    <button type="button"
                                                                        class="flex items-center justify-center  p-4 bg-[#202020] rounded-[19px] font-medium text-[17px] text-white">Добавить
                                                                        в корзину</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div x-show="list_tarif === 'list_tarif2'"></div>

                                    </div>
                                </div>

                                <div x-show="edit_tarif === 'edit_tarif2'">
                                    <div class="grid xl:grid-cols-3 gap-11">
                                        <div class="col-span-1">
                                            <div class="">
                                                <div
                                                    class="flex flex-col dark:bg-[#808080]/[0.05] dark:border dark:border-white/15 border border-[000000]/[0.13] rounded-[54px]  overflow-hidden py-12 px-8">
                                                    <div class="flex flex-col items-start gap-7 mb-7">
                                                        <span
                                                            class="flex justify-center items-center text-white rounded-full bg-[#202020] w-11 h-11 font-inter font-medium text-2xl text-whit">1</span>
                                                        <div>
                                                            <span
                                                                class="block text-xl font-medium dark:text-white">Конфигурация
                                                                №1</span>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 font-inter">
                                                        <span
                                                            class="block text-base font-medium dark:text-white">Процессор</span>
                                                        <span
                                                            class="block w-72 font-medium text-[13px] dark:text-white/60">Intel
                                                            Core
                                                            i9-9900K (8
                                                            ядер, 16 потоков). Benchmark:
                                                            18359.</span>
                                                    </div>

                                                    <div class="mb-4 font-inter">
                                                        <span class="block text-base font-medium dark:text-white">64 ГБ
                                                            оперативной
                                                            памяти</span>
                                                        <span class="block font-medium text-[13px] dark:text-white/60">2 TB
                                                            SSD
                                                            накопителя</span>
                                                    </div>

                                                    <div class="font-inter mb-7">
                                                        <span class="block text-base font-medium dark:text-white">Локация
                                                            сервера -
                                                            Германия</span>
                                                        <span
                                                            class="block font-medium text-[13px] dark:text-white/60">Базовая
                                                            защита
                                                            от
                                                            DDoS</span>
                                                    </div>
                                                    <div class="flex gap-3">
                                                        <div>
                                                            <button type="button"
                                                                class="flex items-center justify-center  p-4 dark:bg-[#86DA2F] bg-[#202020] text-white rounded-[19px] font-medium text-[17px] dark:text-black">45.99$</button>
                                                        </div>
                                                        <div>
                                                            <button type="button"
                                                                class="flex items-center justify-center  p-4 bg-[#202020] rounded-[19px] font-medium text-[17px] text-white">Добавить
                                                                в корзину</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-1">
                                            <div class="">
                                                <div
                                                    class="flex flex-col dark:bg-[#808080]/[0.05] dark:border dark:border-white/15 border border-[000000]/[0.13] rounded-[54px]  overflow-hidden py-12 px-8">
                                                    <div class="flex flex-col items-start gap-7 mb-7">
                                                        <span
                                                            class="flex justify-center items-center text-white rounded-full bg-[#202020] w-11 h-11 font-inter font-medium text-2xl text-whit">1</span>
                                                        <div>
                                                            <span
                                                                class="block text-xl font-medium dark:text-white">Конфигурация
                                                                №1</span>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 font-inter">
                                                        <span
                                                            class="block text-base font-medium dark:text-white">Процессор</span>
                                                        <span
                                                            class="block w-72 font-medium text-[13px] dark:text-white/60">Intel
                                                            Core
                                                            i9-9900K (8
                                                            ядер, 16 потоков). Benchmark:
                                                            18359.</span>
                                                    </div>

                                                    <div class="mb-4 font-inter">
                                                        <span class="block text-base font-medium dark:text-white">64 ГБ
                                                            оперативной
                                                            памяти</span>
                                                        <span class="block font-medium text-[13px] dark:text-white/60">2 TB
                                                            SSD
                                                            накопителя</span>
                                                    </div>

                                                    <div class="font-inter mb-7">
                                                        <span class="block text-base font-medium dark:text-white">Локация
                                                            сервера -
                                                            Германия</span>
                                                        <span
                                                            class="block font-medium text-[13px] dark:text-white/60">Базовая
                                                            защита
                                                            от
                                                            DDoS</span>
                                                    </div>
                                                    <div class="flex gap-3">
                                                        <div>
                                                            <button type="button"
                                                                class="flex items-center justify-center  p-4 dark:bg-[#86DA2F] bg-[#202020] text-white rounded-[19px] font-medium text-[17px] dark:text-black">45.99$</button>
                                                        </div>
                                                        <div>
                                                            <button type="button"
                                                                class="flex items-center justify-center  p-4 bg-[#202020] rounded-[19px] font-medium text-[17px] text-white">Добавить
                                                                в корзину</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-1">
                                            <div class="">
                                                <div
                                                    class="flex flex-col dark:bg-[#808080]/[0.05] dark:border dark:border-white/15 border border-[000000]/[0.13] rounded-[54px]  overflow-hidden py-12 px-8">
                                                    <div class="flex flex-col items-start gap-7 mb-7">
                                                        <span
                                                            class="flex justify-center items-center text-white rounded-full bg-[#202020] w-11 h-11 font-inter font-medium text-2xl text-whit">1</span>
                                                        <div>
                                                            <span
                                                                class="block text-xl font-medium dark:text-white">Конфигурация
                                                                №1</span>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 font-inter">
                                                        <span
                                                            class="block text-base font-medium dark:text-white">Процессор</span>
                                                        <span
                                                            class="block w-72 font-medium text-[13px] dark:text-white/60">Intel
                                                            Core
                                                            i9-9900K (8
                                                            ядер, 16 потоков). Benchmark:
                                                            18359.</span>
                                                    </div>

                                                    <div class="mb-4 font-inter">
                                                        <span class="block text-base font-medium dark:text-white">64 ГБ
                                                            оперативной
                                                            памяти</span>
                                                        <span class="block font-medium text-[13px] dark:text-white/60">2 TB
                                                            SSD
                                                            накопителя</span>
                                                    </div>

                                                    <div class="font-inter mb-7">
                                                        <span class="block text-base font-medium dark:text-white">Локация
                                                            сервера -
                                                            Германия</span>
                                                        <span
                                                            class="block font-medium text-[13px] dark:text-white/60">Базовая
                                                            защита
                                                            от
                                                            DDoS</span>
                                                    </div>
                                                    <div class="flex gap-3">
                                                        <div>
                                                            <button type="button"
                                                                class="flex items-center justify-center  p-4 dark:bg-[#86DA2F] bg-[#202020] text-white rounded-[19px] font-medium text-[17px] dark:text-black">45.99$</button>
                                                        </div>
                                                        <div>
                                                            <button type="button"
                                                                class="flex items-center justify-center  p-4 bg-[#202020] rounded-[19px] font-medium text-[17px] text-white">Добавить
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
        </div>
    </div>
@endsection
