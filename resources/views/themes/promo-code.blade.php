@extends('components.layouts.dashboard')

@section('main-content')
    <div class="">
        <div x-data="{ tab: 'tab1' }" class="right-part py-8 md:px-16 px-5 rounded-[46px] bg-white dark:backdrop-blur-[100px]">
            <div class="dark:text-white flex justify-between mb-9 border-b pb-6 dark:border-[#313131]">

                <div class="font-sfpro">
                    <ul class="flex w-full px-5 gap-x-11">
                        <li @click="tab = 'tab1'"
                            class="text-2xl font-medium cursor-pointer text-[#000]/[0.22] dark:text-[#fff]/[0.25]"
                            x-bind:class="{ 'text-[#000] dark:text-[#fff]': tab === 'tab1' }">
                            Создание промокодов
                        </li>
                        <li @click="tab = 'tab2'"
                            class="text-2xl font-medium cursor-pointer text-[#000]/[0.22] dark:text-white/25"
                            x-bind:class="{ 'text-[#000] dark:text-[#fff]': tab === 'tab2' }">
                            Редактирование промокодов
                        </li>
                        <li @click="tab = 'tab3'"
                            class="text-2xl font-medium cursor-pointer text-[#000]/[0.22] dark:text-white/25"
                            x-bind:class="{ 'text-[#000] dark:text-[#fff]': tab === 'tab3' }">
                            Список
                        </li>

                    </ul>

                </div>

                <div class="flex items-center gap-3">
                    <a href="#"><img src="{{ asset('assets/images/Avatar-big.png') }}" alt=""
                            class="h-[40px] w-[40px]"></a>
                    <a href="#"
                        class="font-inter font-medium text-lg block bg-[#202020] text-white rounded-3xl px-5 py-2">Выйти</a>
                </div>
            </div>

            <div>
                <div class="flex flex-col w-full p-10">
                    <div x-show="tab === 'tab1'">
                        <div class="">
                            <form class="flex flex-col xl:flex-row gap-8">
                                <div class="md:flex hidden flex-col gap-8 w-full md:w-[538px]">
                                    <div
                                        class="max-w-[540px] block rounded-[54px] bg-white  dark:bg-black dark:border dark:border-white/15 border border-black/15] p-10">
                                        <label for=""
                                            class="block mb-6 pb-5 font-medium text-xl dark:text-white border-b border-[#313131]">Введите
                                            название кода</label>

                                        <span class="block mb-3 text-xl font-sfpro dark:text-white/50">Название
                                            промокода</span>
                                        <input type="text" placeholder="Промокод...."
                                            class="w-full dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0">
                                    </div>

                                    <div
                                        class="max-w-[540px] block rounded-[54px] bg-white  dark:bg-black dark:border dark:border-white/15 border border-black/15] p-10">
                                        <p
                                            class="block mb-6 pb-5 font-medium text-xl dark:text-white border-b border-[#313131]">
                                            Результат</p>

                                        <div class="">
                                            <span
                                                class="mb-3 flex justify-center items-center rounded-full bg-[#202020] w-11 h-11 font-inter font-medium text-2xl text-white">1</span>
                                            <p class="mb-2 text-xl font-medium dark:text-white font-inter">Промокод
                                                HV2024
                                            </p>
                                            <p class="mb-5 text-base font-inter text-white/35">Скидка 20% на
                                                весь
                                                ассортимент</p>

                                            <div class="flex gap-3">
                                                <button
                                                    class="font-inter font-medium text-base dark:text-black dark:bg-[#86DA2F] bg-[#202020] text-white py-3 px-7 rounded-[19px]"
                                                    type="button">Создать</button>
                                                <button
                                                    class="font-inter font-medium text-base text-white dark:text-white bg-[#202020] py-3 px-7 rounded-[19px]"
                                                    type="button">Черновик</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div
                                    class="rounded-[54px] md:flex hidden items-center bg-white  dark:bg-black dark:border dark:border-white/15 border border-black/15] p-10 w-full">
                                    <div
                                        class="dark:border-r dark:border-[#313131] xl:border-r border-none xl:border-[#313131] w-full flex flex-col pr-4">
                                        <div>
                                            <label for=""
                                                class="md:block hidden pb-2 mb-2 text-xl font-medium dark:text-white">Тип
                                                промокода</label>


                                            <label class="flex flex-col">

                                                <input type="text" placeholder="Процент..."
                                                    class="w-full dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0 mb-9">
                                            </label>
                                        </div>

                                        <div>
                                            <label for=""
                                                class="block pb-2 mb-2 text-xl font-medium dark:text-white">Время
                                                действия</label>
                                            <label class="flex flex-col">

                                                <input type="text" placeholder="Время действия промокода..."
                                                    class="w-full dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0 mb-9">
                                            </label>
                                        </div>

                                        <div>
                                            <label for=""
                                                class="block pb-2 mb-2 text-xl font-medium dark:text-white">Статус
                                                промокода</label>
                                            <label class="flex flex-col">

                                                <input type="text" placeholder="Процент..."
                                                    class="w-full dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0 mb-9">
                                            </label>
                                        </div>

                                        <div>
                                            <label for=""
                                                class="block pb-2 mb-2 text-xl font-medium dark:text-white">Дата
                                                начала/окончания</label>
                                            <label class="flex flex-col">

                                                <input type="text" placeholder="Процент..."
                                                    class="w-full dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0 mb-9">
                                            </label>
                                        </div>

                                    </div>

                                    <div class="flex  flex-col w-2/3 gap-y-8 ml-9">
                                        <p class="font-inter font-medium text-[22px] dark:text-white">Назначенные товары</p>
                                        <div
                                            class="flex flex-col gap-y-3 bg-[#f5f5f5] dark:bg-[#000] rounded-[34px] dark:border dark:border-[#323232] p-4">
                                            <div class="flex">
                                                <input type="checkbox" id="choose-1" class="hidden peer" />
                                                <label for="choose-1"
                                                    class="font-sfpro font-medium select-none flex w-full gap-x-3 cursor-pointer rounded-[100px]  
                                                         py-3 px-6  dark:text-white/25 text-[#000000]/[0.22] text-xl transition-colors duration-200 ease-in-out dark:peer-checked:bg-[#5E5E5E] peer-checked:bg-[#E9E9E9] dark:peer-checked:text-white/25 peer-checked:text-black">
                                                    <span
                                                        class="block border-2 w-[24px] h-[24px] border-white/[.23] border-dashed rounded">
                                                    </span>
                                                    Server 1 </label>
                                            </div>
                                            <div class="flex">
                                                <input type="checkbox" id="choose-2" class="hidden peer" />
                                                <label for="choose-2"
                                                    class="font-sfpro font-medium select-none flex w-full gap-x-3 cursor-pointer rounded-[100px]  
                                                    py-3 px-6  dark:text-white/25 text-[#000000]/[0.22] text-xl transition-colors duration-200 ease-in-out dark:peer-checked:bg-[#5E5E5E] peer-checked:bg-[#E9E9E9] dark:peer-checked:text-white/25 peer-checked:text-black">
                                                    <span
                                                        class="block border-2 w-[24px] h-[24px] border-white/[.23] border-dashed rounded">
                                                    </span>
                                                    Server 2 </label>
                                            </div>
                                            <div class="flex">
                                                <input type="checkbox" id="choose-3" class="hidden peer" />
                                                <label for="choose-3"
                                                    class="font-sfpro font-medium select-none flex w-full gap-x-3 cursor-pointer rounded-[100px]  
                                                    py-3 px-6  dark:text-white/25 text-[#000000]/[0.22] text-xl transition-colors duration-200 ease-in-out dark:peer-checked:bg-[#5E5E5E] peer-checked:bg-[#E9E9E9] dark:peer-checked:text-white/25 peer-checked:text-black">
                                                    <span
                                                        class="block border-2 w-[24px] h-[24px] border-white/[.23] border-dashed rounded">
                                                    </span>
                                                    Server 3 </label>
                                            </div>
                                            <div class="flex">
                                                <input type="checkbox" id="choose-4" class="hidden peer" />
                                                <label for="choose-4"
                                                    class="font-sfpro font-medium select-none flex w-full gap-x-3 cursor-pointer rounded-[100px]  
                                                    py-3 px-6  dark:text-white/25 text-[#000000]/[0.22] text-xl transition-colors duration-200 ease-in-out dark:peer-checked:bg-[#5E5E5E] peer-checked:bg-[#E9E9E9] dark:peer-checked:text-white/25 peer-checked:text-black">
                                                    <span
                                                        class="block border-2 w-[24px] h-[24px] border-white/[.23] border-dashed rounded">
                                                    </span>
                                                    Server 4 </label>
                                            </div>
                                            <div class="flex">
                                                <input type="checkbox" id="choose-5" class="hidden peer" />
                                                <label for="choose-5"
                                                    class="font-sfpro font-medium select-none flex w-full gap-x-3 cursor-pointer rounded-[100px]  
                                                    py-3 px-6  dark:text-white/25 text-[#000000]/[0.22] text-xl transition-colors duration-200 ease-in-out dark:peer-checked:bg-[#5E5E5E] peer-checked:bg-[#E9E9E9] dark:peer-checked:text-white/25 peer-checked:text-black">
                                                    <span
                                                        class="block border-2 w-[24px] h-[24px] border-white/[.23] border-dashed rounded">
                                                    </span>
                                                    Server 5 </label>
                                            </div>
                                        </div>
                                        <div class="flex gap-3">
                                            <button
                                                class="font-inter font-medium text-base dark:text-black text-white dark:bg-[#86DA2F] bg-[#202020] py-3 px-7 rounded-[19px]"
                                                type="button">Создать</button>
                                            <button
                                                class="font-inter font-medium text-base dark:text-black text-white dark:bg-[#86DA2F] bg-[#202020] py-3 px-7 rounded-[19px]"
                                                type="button">X</button>
                                        </div>
                                    </div>
                                </div>

                                {{--  --}}

                                <div
                                    class="rounded-[54px] flex md:hidden items-center bg-white  dark:bg-black dark:border dark:border-white/15 border border-black/15] p-10 w-full">
                                    <div
                                        class="dark:border-r dark:border-[#313131] xl:border-r border-none xl:border-[#313131] w-full flex flex-col pr-4">
                                        <div>

                                            <label for=""
                                                class="xl:hidden block pb-2 mb-2 text-xl font-medium dark:text-white">Создание
                                                промокода</label>
                                            <p class="text-[11px] text-[#535353]/[.87] flex gap-2 mb-3">
                                                <img src="{{ asset('assets/images/info-icon.svg') }}" alt="">
                                                Перед созданием промокода, будьте
                                                уверены в его адекватности
                                            </p>
                                            <label class="flex flex-col">

                                                <input type="text" placeholder="Название промокода..."
                                                    class="w-full dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0 mb-9">
                                            </label>
                                        </div>

                                        <div>
                                            <label for=""
                                                class="xl:block hidden pb-2 mb-2 text-xl font-medium dark:text-white">Тип
                                                промокода...</label>
                                            <label class="flex flex-col">

                                                <input type="text" placeholder="Тип промокода..."
                                                    class="w-full dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0 mb-9">
                                            </label>
                                        </div>

                                        <div>
                                            <label for=""
                                                class="xl:block hidden pb-2 mb-2 text-xl font-medium dark:text-white">Время
                                                действия....</label>
                                            <label class="flex flex-col">

                                                <input type="text" placeholder="Время действия...."
                                                    class="w-full dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0 mb-9">
                                            </label>
                                        </div>

                                        <div>
                                            <label for=""
                                                class="xl:block hidden pb-2 mb-2 text-xl font-medium dark:text-white">Статус
                                                промокода....</label>
                                            <label class="flex flex-col">

                                                <input type="text" placeholder="Статус промокода...."
                                                    class="w-full dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0 mb-9">
                                            </label>
                                        </div>

                                        <div>
                                            <label for=""
                                                class="xl:block hidden pb-2 mb-2 text-xl font-medium dark:text-white">Назначенные
                                                товары....</label>
                                            <label class="flex flex-col">

                                                <input type="text" placeholder="Назначенные товары...."
                                                    class="w-full dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0 mb-9">
                                            </label>
                                        </div>


                                        <button
                                            class="font-inter font-medium text-base dark:text-black text-white dark:bg-[#86DA2F] bg-[#202020] py-3 px-7 rounded-[19px]"
                                            type="button">Сохранить промокод</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                    <div x-show="tab === 'tab2'">
                        <div class="">
                            <form class="flex flex-col xl:flex-row gap-8">
                                <div class="md:flex hidden flex-col gap-8 w-full md:w-[538px]">
                                    <div
                                        class="max-w-[540px] block rounded-[54px] bg-white  dark:bg-black dark:border dark:border-white/15 border border-black/15] p-10">
                                        <label for=""
                                            class="block mb-6 pb-5 font-medium text-xl dark:text-white border-b border-[#313131]">Введите
                                            название кода</label>

                                        <span class="block mb-3 text-xl font-sfpro dark:text-white/50">Название
                                            промокода</span>
                                        <input type="text" placeholder="Промокод...."
                                            class="w-full dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0">
                                    </div>

                                    <div
                                        class="max-w-[540px] block rounded-[54px] bg-white  dark:bg-black dark:border dark:border-white/15 border border-black/15] p-10">
                                        <p
                                            class="block mb-6 pb-5 font-medium text-xl dark:text-white border-b border-[#313131]">
                                            Результат</p>

                                        <div class="">
                                            <span
                                                class="mb-3 flex justify-center items-center rounded-full bg-[#202020] w-11 h-11 font-inter font-medium text-2xl text-white">1</span>
                                            <p class="mb-2 text-xl font-medium dark:text-white font-inter">Промокод
                                                HV2024
                                            </p>
                                            <p class="mb-5 text-base font-inter text-white/35">Скидка 20% на
                                                весь
                                                ассортимент</p>

                                            <div class="flex gap-3">
                                                <button
                                                    class="font-inter font-medium text-base dark:text-black dark:bg-[#86DA2F] bg-[#202020] text-white py-3 px-7 rounded-[19px]"
                                                    type="button">Создать</button>
                                                <button
                                                    class="font-inter font-medium text-base text-white dark:text-white bg-[#202020] py-3 px-7 rounded-[19px]"
                                                    type="button">Черновик</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div
                                    class="rounded-[54px] md:flex hidden items-center bg-white  dark:bg-black dark:border dark:border-white/15 border border-black/15] p-10 w-full">
                                    <div
                                        class="dark:border-r dark:border-[#313131] xl:border-r border-none xl:border-[#313131] w-full flex flex-col pr-4">
                                        <div>
                                            <label for=""
                                                class="md:block hidden pb-2 mb-2 text-xl font-medium dark:text-white">Тип
                                                промокода</label>


                                            <label class="flex flex-col">

                                                <input type="text" placeholder="Процент..."
                                                    class="w-full dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0 mb-9">
                                            </label>
                                        </div>

                                        <div>
                                            <label for=""
                                                class="block pb-2 mb-2 text-xl font-medium dark:text-white">Время
                                                действия</label>
                                            <label class="flex flex-col">

                                                <input type="text" placeholder="Время действия промокода..."
                                                    class="w-full dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0 mb-9">
                                            </label>
                                        </div>

                                        <div>
                                            <label for=""
                                                class="block pb-2 mb-2 text-xl font-medium dark:text-white">Статус
                                                промокода</label>
                                            <label class="flex flex-col">

                                                <input type="text" placeholder="Процент..."
                                                    class="w-full dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0 mb-9">
                                            </label>
                                        </div>

                                        <div>
                                            <label for=""
                                                class="block pb-2 mb-2 text-xl font-medium dark:text-white">Дата
                                                начала/окончания</label>
                                            <label class="flex flex-col">

                                                <input type="text" placeholder="Процент..."
                                                    class="w-full dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0 mb-9">
                                            </label>
                                        </div>

                                    </div>

                                    <div class="flex  flex-col w-2/3 gap-y-8 ml-9">
                                        <p class="font-inter font-medium text-[22px] dark:text-white">Назначенные товары
                                        </p>
                                        <div
                                            class="flex flex-col gap-y-3 bg-[#f5f5f5] dark:bg-[#000] rounded-[34px] dark:border dark:border-[#323232] p-4">
                                            <div class="flex">
                                                <input type="checkbox" id="choose-1" class="hidden peer" />
                                                <label for="choose-1"
                                                    class="font-sfpro font-medium select-none flex w-full gap-x-3 cursor-pointer rounded-[100px]  
                                                         py-3 px-6  dark:text-white/25 text-[#000000]/[0.22] text-xl transition-colors duration-200 ease-in-out dark:peer-checked:bg-[#5E5E5E] peer-checked:bg-[#E9E9E9] dark:peer-checked:text-white/25 peer-checked:text-black">
                                                    <span
                                                        class="block border-2 w-[24px] h-[24px] border-white/[.23] border-dashed rounded">
                                                    </span>
                                                    Server 1 </label>
                                            </div>
                                            <div class="flex">
                                                <input type="checkbox" id="choose-2" class="hidden peer" />
                                                <label for="choose-2"
                                                    class="font-sfpro font-medium select-none flex w-full gap-x-3 cursor-pointer rounded-[100px]  
                                                    py-3 px-6  dark:text-white/25 text-[#000000]/[0.22] text-xl transition-colors duration-200 ease-in-out dark:peer-checked:bg-[#5E5E5E] peer-checked:bg-[#E9E9E9] dark:peer-checked:text-white/25 peer-checked:text-black">
                                                    <span
                                                        class="block border-2 w-[24px] h-[24px] border-white/[.23] border-dashed rounded">
                                                    </span>
                                                    Server 2 </label>
                                            </div>
                                            <div class="flex">
                                                <input type="checkbox" id="choose-3" class="hidden peer" />
                                                <label for="choose-3"
                                                    class="font-sfpro font-medium select-none flex w-full gap-x-3 cursor-pointer rounded-[100px]  
                                                    py-3 px-6  dark:text-white/25 text-[#000000]/[0.22] text-xl transition-colors duration-200 ease-in-out dark:peer-checked:bg-[#5E5E5E] peer-checked:bg-[#E9E9E9] dark:peer-checked:text-white/25 peer-checked:text-black">
                                                    <span
                                                        class="block border-2 w-[24px] h-[24px] border-white/[.23] border-dashed rounded">
                                                    </span>
                                                    Server 3 </label>
                                            </div>
                                            <div class="flex">
                                                <input type="checkbox" id="choose-4" class="hidden peer" />
                                                <label for="choose-4"
                                                    class="font-sfpro font-medium select-none flex w-full gap-x-3 cursor-pointer rounded-[100px]  
                                                    py-3 px-6  dark:text-white/25 text-[#000000]/[0.22] text-xl transition-colors duration-200 ease-in-out dark:peer-checked:bg-[#5E5E5E] peer-checked:bg-[#E9E9E9] dark:peer-checked:text-white/25 peer-checked:text-black">
                                                    <span
                                                        class="block border-2 w-[24px] h-[24px] border-white/[.23] border-dashed rounded">
                                                    </span>
                                                    Server 4 </label>
                                            </div>
                                            <div class="flex">
                                                <input type="checkbox" id="choose-5" class="hidden peer" />
                                                <label for="choose-5"
                                                    class="font-sfpro font-medium select-none flex w-full gap-x-3 cursor-pointer rounded-[100px]  
                                                    py-3 px-6  dark:text-white/25 text-[#000000]/[0.22] text-xl transition-colors duration-200 ease-in-out dark:peer-checked:bg-[#5E5E5E] peer-checked:bg-[#E9E9E9] dark:peer-checked:text-white/25 peer-checked:text-black">
                                                    <span
                                                        class="block border-2 w-[24px] h-[24px] border-white/[.23] border-dashed rounded">
                                                    </span>
                                                    Server 5 </label>
                                            </div>
                                        </div>
                                        <div class="flex gap-3">
                                            <button
                                                class="font-inter font-medium text-base dark:text-black text-white dark:bg-[#86DA2F] bg-[#202020] py-3 px-7 rounded-[19px]"
                                                type="button">Создать</button>
                                            <button
                                                class="font-inter font-medium text-base dark:text-black text-white dark:bg-[#86DA2F] bg-[#202020] py-3 px-7 rounded-[19px]"
                                                type="button">X</button>
                                        </div>
                                    </div>
                                </div>

                                {{--  --}}

                                <div
                                    class="rounded-[54px] flex md:hidden items-center bg-white  dark:bg-black dark:border dark:border-white/15 border border-black/15] p-10 w-full">
                                    <div
                                        class="dark:border-r dark:border-[#313131] xl:border-r border-none xl:border-[#313131] w-full flex flex-col pr-4">
                                        <div>

                                            <label for=""
                                                class="md:hidden block pb-2 mb-2 text-xl font-medium dark:text-white">Создание
                                                промокода</label>
                                            <p class="text-[11px] text-[#535353]/[.87] flex gap-2 mb-3">
                                                <img src="{{ asset('assets/images/info-icon.svg') }}" alt="">
                                                Перед созданием промокода, будьте
                                                уверены в его адекватности
                                            </p>
                                            <label class="flex flex-col">

                                                <input type="text" placeholder="Название промокода..."
                                                    class="w-full dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0 mb-9">
                                            </label>
                                        </div>

                                        <div>
                                            <label for=""
                                                class="xl:block hidden pb-2 mb-2 text-xl font-medium dark:text-white">Тип
                                                промокода...</label>
                                            <label class="flex flex-col">

                                                <input type="text" placeholder="Тип промокода..."
                                                    class="w-full dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0 mb-9">
                                            </label>
                                        </div>

                                        <div>
                                            <label for=""
                                                class="xl:block hidden pb-2 mb-2 text-xl font-medium dark:text-white">Время
                                                действия....</label>
                                            <label class="flex flex-col">

                                                <input type="text" placeholder="Время действия...."
                                                    class="w-full dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0 mb-9">
                                            </label>
                                        </div>

                                        <div>
                                            <label for=""
                                                class="xl:block hidden pb-2 mb-2 text-xl font-medium dark:text-white">Статус
                                                промокода....</label>
                                            <label class="flex flex-col">

                                                <input type="text" placeholder="Статус промокода...."
                                                    class="w-full dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0 mb-9">
                                            </label>
                                        </div>

                                        <div>
                                            <label for=""
                                                class="xl:block hidden pb-2 mb-2 text-xl font-medium dark:text-white">Назначенные
                                                товары....</label>
                                            <label class="flex flex-col">

                                                <input type="text" placeholder="Назначенные товары...."
                                                    class="w-full dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0 mb-9">
                                            </label>
                                        </div>


                                        <button
                                            class="font-inter font-medium text-base dark:text-black text-white dark:bg-[#86DA2F] bg-[#202020] py-3 px-7 rounded-[19px]"
                                            type="button">Сохранить промокод</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                    <div x-show="tab === 'tab3'">
                        <div class="">
                            <div class="flex flex-col">
                                <div class="overflow-x-auto">
                                    <div class="inline-block w-full">
                                        <div class="">
                                            <table class="w-full">
                                                <thead class="border-b py-4 dark:border-[#313131]">
                                                    <tr class="">
                                                        <th scope="col"
                                                            class="px-6 py-7 text-xs md:text-base text-left dark:text-white/[.70] font-sfpro font-medium">
                                                            ID-промокода и его статус</th>
                                                        <th scope="col"
                                                            class="px-6 py-7 text-xs md:text-base text-center dark:text-white/[.70] font-sfpro font-medium">
                                                            Дата окончания</th>
                                                        <th scope="col"
                                                            class="px-6 py-7 text-xs md:text-base text-center dark:text-white/[.70] font-sfpro font-medium">
                                                            Статус</th>
                                                        <th scope="col"
                                                            class="px-6 py-7 text-xs md:text-base text-center dark:text-white/[.70] font-sfpro font-medium">
                                                            Размер</th>
                                                        <th scope="col"
                                                            class="px-6 py-7 text-xs md:text-base text-right dark:text-white/[.70] font-sfpro font-medium">
                                                        </th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="border-b dark:border-[#313131]">
                                                        <td class="flex px-6 font-medium py-7">
                                                            <span
                                                                class="inline-block md:text-2xl text-[13px] font-medium dark:text-white font-inter">
                                                                Промокод-скидка
                                                                <span class="block dark:text-[#535353] text-[10px]">Панель
                                                                    управления</span>
                                                            </span>
                                                        </td>
                                                        <td class="px-6 text-center py-7">
                                                            <div class="gap-2 font-inter">
                                                                <span
                                                                    class="md:text-2xl text-[13px] block dark:text-white/[0.87]">21.02.2024</span>

                                                            </div>
                                                        </td>
                                                        <td class="px-6 text-center py-7">
                                                            <div class="flex items-center justify-center gap-2 font-inter">
                                                                <span
                                                                    class="md:text-2xl text-[13px] block dark:text-white/[0.87]">Активный</span>
                                                                <span
                                                                    class="block bg-[#86DA2F] w-3 h-3 rounded-full"></span>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 text-center py-7"><span
                                                                class="md:text-2xl text-[13px] font-inter dark:text-white/[0.87]">20%</span>
                                                        </td>
                                                        <td class="px-6 text-right py-7">
                                                            <a href="#"
                                                                class="w-[50px] flex items-center justify-center rounded-2xl h-[50px] bg-[#202020]">
                                                                <img class="w-[24px] h-[24px] "
                                                                    src="{{ asset('assets/images/pencil.svg') }}"
                                                                    alt="" />
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr class="border-b dark:border-[#313131]">
                                                        <td class="flex px-6 font-medium py-7">
                                                            <span
                                                                class="inline-block md:text-2xl text-[13px] font-medium dark:text-white font-inter">
                                                                Фиксированный промокод
                                                                <span class="block text-[#535353] text-[10px]">ID
                                                                    промокода: HV2024</span>
                                                            </span>
                                                        </td>
                                                        <td class="px-6 text-center py-7">
                                                            <div class="gap-2 font-inter">
                                                                <span
                                                                    class="md:text-2xl text-[13px] block dark:text-white/[0.87]">21.02.2024</span>

                                                            </div>
                                                        </td>
                                                        <td class="px-6 text-center py-7">
                                                            <div class="flex items-center justify-center gap-2 font-inter">
                                                                <span
                                                                    class="md:text-2xl text-[13px] block dark:text-white/[0.87]">Приостановлен</span>
                                                                <span
                                                                    class="block bg-[#E7B70C] w-3 h-3 rounded-full"></span>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 text-center py-7"><span
                                                                class="md:text-2xl text-[13px] font-inter dark:text-white/[0.87]">20%</span>
                                                        </td>
                                                        <td class="px-6 text-right py-7">
                                                            <a href="#"
                                                                class="w-[50px] flex items-center justify-center rounded-2xl h-[50px] bg-[#202020]">
                                                                <img class="w-[24px] h-[24px] "
                                                                    src="{{ asset('assets/images/pencil.svg') }}"
                                                                    alt="" />
                                                            </a>
                                                        </td>
                                                    </tr>

                                                    <tr class="border-b dark:border-[#313131]">
                                                        <td class="flex px-6 font-medium py-7">
                                                            <span
                                                                class="inline-block md:text-2xl text-[13px] font-medium dark:text-white font-inter">
                                                                Фиксированный промокод
                                                                <span class="block text-[#535353] text-[10px]">ID
                                                                    промокода: HV2024</span>
                                                            </span>
                                                        </td>
                                                        <td class="px-6 text-center py-7">
                                                            <div class="gap-2 font-inter">
                                                                <span
                                                                    class="md:text-2xl text-[13px] block dark:text-white/[0.87]">21.02.2024</span>

                                                            </div>
                                                        </td>
                                                        <td class="px-6 text-center py-7">
                                                            <div class="flex items-center justify-center gap-2 font-inter">
                                                                <span
                                                                    class="md:text-2xl text-[13px] block dark:text-white/[0.87]">Активный</span>
                                                                <span
                                                                    class="block bg-[#86DA2F] w-3 h-3 rounded-full"></span>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 text-center py-7">
                                                            <span
                                                                class="md:text-2xl text-[13px] font-inter dark:text-white/[0.87]">150$</span>
                                                        </td>
                                                        <td class="px-6 text-right py-7">
                                                            <a href="#"
                                                                class="w-[50px] flex items-center justify-center rounded-2xl h-[50px] bg-[#202020]">
                                                                <img class="w-[24px] h-[24px] "
                                                                    src="{{ asset('assets/images/pencil.svg') }}"
                                                                    alt="" />
                                                            </a>
                                                        </td>
                                                    </tr>

                                                    <tr class="border-b dark:border-[#313131]">
                                                        <td class="flex px-6 font-medium py-7">
                                                            <span
                                                                class="inline-block md:text-2xl text-[13px] font-medium dark:text-white font-inter">
                                                                Промокод-скидка
                                                                <span class="block text-[#535353] text-[10px]">ID
                                                                    промокода: HV2024</span>
                                                            </span>
                                                        </td>
                                                        <td class="px-6 text-center py-7">
                                                            <div class="gap-2 font-inter">
                                                                <span
                                                                    class="md:text-2xl text-[13px] block dark:text-white/[0.87]">21.02.2024</span>

                                                            </div>
                                                        </td>
                                                        <td class="px-6 text-center py-7">
                                                            <div class="flex items-center justify-center gap-2 font-inter">
                                                                <span
                                                                    class="md:text-2xl text-[13px] block dark:text-white/[0.87]">Закрыт</span>
                                                                <span
                                                                    class="block bg-[#FF2E1E] w-3 h-3 rounded-full"></span>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 text-center py-7">
                                                            <span
                                                                class="md:text-2xl text-[13px] font-inter dark:text-white/[0.87]">150$</span>
                                                        </td>
                                                        <td class="px-6 text-right py-7">
                                                            <a href="#"
                                                                class="w-[50px] flex items-center justify-center rounded-2xl h-[50px] bg-[#202020]">
                                                                <img class="w-[24px] h-[24px] "
                                                                    src="{{ asset('assets/images/pencil.svg') }}"
                                                                    alt="" />
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
