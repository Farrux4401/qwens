@extends('components.layouts.dashboard')

@section('main-content')
    <div class="right-part py-8 md:px-16 px-5 overflow-hidden rounded-[46px] bg-white dark:backdrop-blur-[100px]">
        <div
            class="dark:text-white flex justify-between mb-9 dark:border-b pb-6 dark:border-[#313131] border-b border-[#313131]/[0.22]">
            <p class="text-2xl font-medium">
                Создание обьявлений
            </p>
            <div class="flex items-center gap-3">
                <a href="#"><img src="{{ asset('assets/images/Avatar-big.png') }}" alt=""
                        class="h-[40px] w-[40px]"></a>
                <a href="#"
                    class="font-inter font-medium text-lg block bg-[#202020] text-white rounded-3xl px-5 py-2">Выйти</a>
            </div>
        </div>
        <div>
            <div>
                <div>
                    <form class="flex flex-col xl:flex-nowrap flex-wrap md:flex-row gap-8">
                        <div class="flex flex-wrap flex-col gap-8">
                            <div
                                class="md:w-[433px] block md:hidden w-full rounded-[54px] bg-white  dark:bg-black dark:border dark:border-white/15 border border-black/15] p-10 overflow-hidden ">
                                <div class="mb-8">
                                    <label for=""
                                        class="block mb-4 text-xl font-medium dark:text-white pb-2  border-b border-[#313131]">Введите
                                        заголовок и дату</label>
                                    <input type="text" placeholder="Заголовок..."
                                        class="w-full dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0">
                                </div>

                                <div>

                                    <input type="text" placeholder="Дата релиза....."
                                        class="w-full dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0">
                                </div>
                            </div>
                            {{--  --}}
                            <div
                                class="w-[433px] md:block hidden rounded-[54px] bg-white  dark:bg-black dark:border dark:border-white/15 border border-black/15] p-10 overflow-hidden ">
                                <div class="mb-8">
                                    <label for="" class="block mb-4 text-xl font-medium dark:text-white ">Тип
                                        обьявления</label>
                                    <input type="text" placeholder="Незначительное..."
                                        class="w-full dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0">
                                </div>

                                <div>
                                    <label for="" class="block mb-4 text-xl font-medium dark:text-white">Дата
                                        релиза</label>
                                    <input type="text" placeholder="Дата выпуска обьявления..."
                                        class="w-full dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0">
                                </div>
                            </div>
                            <div
                                class="hidden md:flex items-center bg-white  dark:bg-black dark:border dark:border-white/15 border border-black/15]  p-10 gap-4  rounded-[54px]">
                                <span
                                    class="flex items-center justify-center  p-4 bg-[#202020] rounded-[19px] font-medium text-2xl text-white">1</span>
                                <div>
                                    <span class="block text-base font-medium dark:text-white/70">Тех.работы</span>
                                    <span class="block text-xl font-medium dark:text-white">Обновление хостинга</span>
                                </div>
                            </div>
                        </div>

                        <div
                            class="rounded-[54px] bg-white  dark:bg-black dark:border dark:border-white/15 border border-black/15]  w-full p-10 overflow-hidden ">
                            <div class="">
                                <label for="" class="block mb-4 text-xl font-medium dark:text-white/50">Текст
                                    обьявления</label>
                                <textarea name="" id="" cols="30" rows="10" placeholder="Дата выпуска обьявления..."
                                    class="focus-visible:outline-0 block h-full dark:bg-[#0D0D0D] bg-[#E9E9E9] px-4 py-5 rounded-lg w-full dark:text-[#D2D2D2] font-sfpro text-lg placeholder:text-[#FFFFFF]/[0.22]">Сегодня с 20:00 до 23:00 будут проводится технические работы из-за обновления хостинга и добавления нескольких новых локаций. Продлим каждому сервер на 3 часа отсутствия нас. Сегодня с 20:00 до 23:00 будут проводится технические работы из-за обновления хостинга и добавления нескольких новых локаций. Продлим каждому сервер на 3 часа отсутствия нас. Сегодня с 20:00 до 23:00 будут проводится технические работы из-за обновления хостинга и добавления нескольких новых локаций. Продлим каждому сервер на 3 часа отсутствия нас. Сегодня с 20:00 до 23:00 будут проводится технические работы из-за обновления хостинга и добавления нескольких новых локаций. Продлим каждому сервер на 3 часа отсутствия нас.</textarea>

                            </div>

                            <div class="flex mt-6 gap-7">
                                <button
                                    class="dark:bg-[#86DA2F] bg-[#202020] text-white dark:text-black py-3 px-5 rounded-2xl font-inter font-medium text-[17px text-black]"
                                    type="button">Создать
                                    обьявление</button>
                                <button
                                    class="dark:bg-[#86DA2F] bg-[#202020] py-3 px-5 rounded-2xl font-inter font-medium text-[17px]  text-black"
                                    type="button">
                                    <img src="{{ asset('assets/images/right-arrow-white.svg') }}" alt="">
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>


    </div>
    </div>
@endsection
