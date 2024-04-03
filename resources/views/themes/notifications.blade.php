@extends('components.layouts.dashboard')

@section('main-content')
    <div class="right-part py-8 md:px-16 px-5 rounded-[46px] bg-white dark:backdrop-blur-[100px]">
        <div
            class="dark:text-white flex justify-between mb-9 dark:border-b pb-6 dark:border-[#313131] border-b border-[#313131]/[0.22]">
            <p class="text-2xl font-medium">
                Обьявления
            </p>
            <div class="flex items-center gap-3">
                <a href="#"><img src="{{ asset('assets/images/Avatar-big.png') }}" alt=""
                        class="h-[40px] w-[40px]"></a>
                <a href="#"
                    class="font-inter font-medium text-lg block bg-[#202020] text-white rounded-3xl px-5 py-2">Выйти</a>
            </div>
        </div>


        <div class="flex flex-col gap-4 font-inter">
            <div
                class="flex flex-col md:flex-row justify-between dark:bg-[#808080]/[0.05] bg-white dark:border dark:border-white/15 border border-black/15 rounded-[54px] overflow-hidden py-12 px-8">
                <div class="flex md:items-start items-center gap-4 w-72">
                    <span
                        class="flex items-center justify-center  p-4 bg-[#202020] rounded-[19px] font-medium text-2xl text-white">1</span>
                    <div>
                        <span class="md:block hidden text-base font-medium dark:text-white/70">Тех.работы</span>
                        <span class="block text-xl font-medium dark:text-white">Обновление хостинга</span>
                    </div>
                </div>

                <div class="max-w-[770px] font-sfpro text-lg dark:text-[#D2D2D2]">
                    Сегодня с 20:00 до 23:00 будут проводится технические работы из-за обновления хостинга и добавления
                    нескольких новых локаций. Продлим каждому сервер на 3 часа отсутствия нас.
                </div>

                <div class="md:block flex justify-end">
                    <button type="button"
                        class="flex items-center justify-center  p-4 bg-[#202020] rounded-[19px] font-medium text-2xl text-white">X</button>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
