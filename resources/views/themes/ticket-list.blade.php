@extends('components.layouts.dashboard')

@section('main-content')
    <div class="light">
        <div x-data="{ tab: 'tab1' }"
            class="right-part py-8 md:px-16 px-5 overflow-hidden rounded-[46px] bg-white dark:backdrop-blur-[100px]">
            <div class="dark:text-white flex justify-between mb-9 border-b pb-6 dark:border-[#313131]">

                <div class="font-sfpro">
                    <ul class="flex w-full px-5 gap-x-11">
                        <li class="md:text-2xl text-[13px] font-medium cursor-pointer text-[#000]/[0.22] dark:text-[#fff]/[0.25]"
                            x-bind:class="{ 'text-[#000] dark:text-[#fff]': tab === 'tab1' }">
                            Список тикетов
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
                            <div class="flex flex-col">
                                <div class="overflow-x-auto">
                                    <div class="inline-block w-full">
                                        <div class="overflow-auto">
                                            <table class="w-full">
                                                <thead class="border-b py-4 dark:border-[#313131]">
                                                    <tr class="">
                                                        <th scope="col"
                                                            class="px-6 py-7 text-base text-left dark:text-white/[.70] font-sfpro font-medium">
                                                            Описание проблемы</th>
                                                        <th scope="col"
                                                            class="px-6 py-7 text-base text-center dark:text-white/[.70] font-sfpro font-medium">
                                                            Срок открытия</th>
                                                        <th scope="col"
                                                            class="px-6 py-7 text-base text-center dark:text-white/[.70] font-sfpro font-medium">
                                                            Статус</th>
                                                        <th scope="col"
                                                            class="px-6 py-7 text-base text-center dark:text-white/[.70] font-sfpro font-medium">
                                                            Раздел</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="border-b dark:border-[#313131]">
                                                        <td class="flex px-6 font-medium py-7">
                                                            <div class="flex items-center gap-2">
                                                                <span
                                                                    class="mb-3 flex justify-center items-center rounded-full bg-[#202020] w-11 h-11 font-inter font-medium text-2xl text-white">1</span>
                                                                <span
                                                                    class="inline-block md:text-2xl text-xs font-medium dark:text-white font-inter">
                                                                    Ошибка при покупке сервера
                                                                    <span
                                                                        class="block text-[#535353] text-[10px]">Пользователь
                                                                        sssnnnmmm</span>
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 text-center py-7">
                                                            <div class="gap-2 font-inter">
                                                                <span
                                                                    class="md:text-2xl text-xs block dark:text-white/[0.87]">21.02.2024</span>

                                                            </div>
                                                        </td>
                                                        <td class="px-6 text-center py-7">
                                                            <div class="flex items-center justify-center gap-2 font-inter">
                                                                <span
                                                                    class="tmd:text-2xl text-xs block dark:text-white/[0.87]">Открыт</span>
                                                                <span
                                                                    class="block bg-[#86DA2F] w-3 h-3 rounded-full"></span>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 text-center py-7"><span
                                                                class="md:text-2xl text-xs font-inter dark:text-white/[0.87]">Финансы</span>
                                                        </td>

                                                    </tr>
                                                    <tr class="border-b dark:border-[#313131]">
                                                        <td class="flex px-6 font-medium py-7">
                                                            <div class="flex items-center gap-2">
                                                                <span
                                                                    class="mb-3 flex justify-center items-center rounded-full bg-[#202020] w-11 h-11 font-inter font-medium text-2xl text-white">1</span>
                                                                <span
                                                                    class="inline-block md:text-2xl text-xs font-medium dark:text-white font-inter">
                                                                    Ошибка при покупке сервера
                                                                    <span
                                                                        class="block text-[#535353] text-[10px]">Пользователь
                                                                        sssnnnmmm</span>
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 text-center py-7">
                                                            <div class="gap-2 font-inter">
                                                                <span
                                                                    class="md:text-2xl text-xs block dark:text-white/[0.87]">21.02.2024</span>

                                                            </div>
                                                        </td>
                                                        <td class="px-6 text-center py-7">
                                                            <div class="flex items-center justify-center gap-2 font-inter">
                                                                <span
                                                                    class="md:text-2xl text-xs block dark:text-white/[0.87]">На
                                                                    рассмотрении</span>
                                                                <span
                                                                    class="block bg-[#E7B70C] w-3 h-3 rounded-full"></span>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 text-center py-7"><span
                                                                class="md:text-2xl text-xs font-inter dark:text-white/[0.87]">Финансы</span>
                                                        </td>
                                                    </tr>
                                                    <tr class="border-b dark:border-[#313131]">
                                                        <td class="flex px-6 font-medium py-7">
                                                            <div class="flex items-center gap-2">
                                                                <span
                                                                    class="mb-3 flex justify-center items-center rounded-full bg-[#202020] w-11 h-11 font-inter font-medium text-2xl text-white">1</span>
                                                                <span
                                                                    class="inline-block md:text-2xl text-xs font-medium dark:text-white font-inter">
                                                                    Ошибка при покупке сервера
                                                                    <span
                                                                        class="block text-[#535353] text-[10px]">Пользователь
                                                                        sssnnnmmm</span>
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 text-center py-7">
                                                            <div class="gap-2 font-inter">
                                                                <span
                                                                    class="md:text-2xl text-xs block dark:text-white/[0.87]">21.02.2024</span>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 text-center py-7">
                                                            <div class="flex items-center justify-center gap-2 font-inter">
                                                                <span
                                                                    class="md:text-2xl text-xs block dark:text-white/[0.87]">Закрыт</span>
                                                                <span
                                                                    class="block bg-[#FF2E1E] w-3 h-3 rounded-full"></span>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 text-center py-7">
                                                            <span
                                                                class="text-2xl font-inter dark:text-white/[0.87]">Финансы</span>
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
