@extends('components.layouts.dashboard')

@section('main-content')
    <div class="right-part py-8 md:px-16 px-5 overflow-hidden rounded-[46px] bg-white dark:backdrop-blur-[100px]">
        <div class="dark:text-white flex justify-between mb-9 border-b pb-6 dark:border-[#313131]">
            <p class="text-2xl font-medium">
                Модули
            </p>
            <div class="flex items-center gap-3">
                <a href="#"><img src="{{ asset('assets/images/Avatar-big.png') }}" alt=""
                        class="h-[40px] w-[40px]"></a>
                <a href="#"
                    class="font-inter font-medium text-lg block bg-[#202020] text-white rounded-3xl px-5 py-2">Выйти</a>
            </div>
        </div>

        <div class="">
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                        <div class="">
                            <table class="min-w-full text-left">
                                <thead class="border-b py-4 dark:border-[#313131]">
                                    <tr class="">
                                        <th scope="col"
                                            class="px-6 py-7 text-xs md:text-sm dark:text-white/[.70] font-inter font-medium">
                                            Имя</th>
                                        <th scope="col"
                                            class="md:block hidden px-6 py-7 text-xs md:text-sm dark:text-white/[.70] font-inter font-medium text-center">
                                            Статус</th>
                                        <th scope="col"
                                            class="px-6 py-7 text-xs md:text-sm dark:text-white/[.70] font-inter font-medium text-center">
                                            Версия</th>
                                        <th scope="col"
                                            class="px-6 py-7 text-xs md:text-sm dark:text-white/[.70] font-inter font-medium text-right">
                                            Редактировать</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b dark:border-[#313131]">
                                        <td class="flex items-center px-6 font-medium py-7">
                                            <span
                                                class="hidden md:inline-block mr-10 text-2xl font-medium dark:text-white font-inter">1</span>
                                            <span
                                                class="inline-block text-base md:text-2xl font-medium dark:text-white font-inter">
                                                CPANEL
                                                <span class="block text-[10px] text-[#535353]">Панель управления</span>
                                            </span>
                                        </td>
                                        <td class="md:block hidden px-6 text-center py-7">
                                            <div class="flex items-center justify-center gap-2 font-inter">
                                                <span
                                                    class="md:text-2xl text-xs block dark:text-white/[0.87]">Выключен</span>
                                                <span class="block bg-[#FF0000] w-3 h-3 rounded-full"></span>
                                            </div>
                                        </td>
                                        <td class="px-6 text-center py-7"><span
                                                class="md:text-2xl text-xs font-inter dark:text-white/[0.87]">1.0.0</span>
                                        </td>
                                        <td class="px-6 text-right py-7">
                                            <a href="#"
                                                class="md:text-base text-xs font-medium font-inter dark:bg-[#86DA2F] dark:text-black text-white bg-black py-3 px-4 rounded-2xl">Изменить</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <table class="min-w-full text-left">
                                <thead class="border-b py-4 dark:border-[#313131]">
                                    <tr class="">
                                        <th scope="col"
                                            class="px-6 py-7 text-xs md:text-sm dark:text-white/[.70] font-inter font-medium">
                                            Платежи</th>
                                        <th scope="col"
                                            class="px-6 py-7 text-xs md:text-sm dark:text-white/[.70] font-inter font-medium text-center">
                                        </th>
                                        <th scope="col"
                                            class="md:block hidden px-6 py-7 text-xs md:text-sm dark:text-white/[.70] font-inter font-medium text-center">
                                            Статус</th>
                                        <th scope="col"
                                            class="px-6 py-7 text-xs md:text-sm dark:text-white/[.70] font-inter font-medium text-right">
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b dark:border-[#313131]">
                                        <td class="flex items-center px-6 font-medium py-7">
                                            <span
                                                class="hidden md:inline-block mr-10 text-2xl font-medium dark:text-white font-inter">1</span>
                                            <span
                                                class="inline-block text-base md:text-2xl font-medium dark:text-white font-inter">
                                                CPANEL
                                                <span class="block text-[10px] text-[#535353]">Панель управления</span>
                                            </span>
                                        </td>
                                        <td class="md:block hidden px-6 text-center py-7">
                                            <div class="flex items-center justify-center gap-2 font-inter">
                                                <span
                                                    class="md:text-2xl text-xs block dark:text-white/[0.87]">Выключен</span>
                                                <span class="block bg-[#FF0000] w-3 h-3 rounded-full"></span>
                                            </div>
                                        </td>
                                        <td class="px-6 text-center py-7"><span
                                                class="md:text-2xl text-xs font-inter dark:text-white/[0.87]">1.0.0</span>
                                        </td>
                                        <td class="px-6 text-right py-7">
                                            <a href="#"
                                                class="md:text-base text-xs font-medium font-inter dark:bg-[#86DA2F] dark:text-black text-white bg-black py-3 px-4 rounded-2xl">Изменить</a>
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
@endsection
