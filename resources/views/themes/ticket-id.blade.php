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
                            Тикет №455152
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
                            <div class="xl:grid xl:grid-cols-3 gap-6">
                                <div class="flex  flex-col col-span-1 gap-5">
                                    <div
                                        class="bg-white dark:bg-black dark:border dark:border-white/15 border border-black/15 rounded-[54px] w-full px-[45px] py-[35px]">
                                        <span
                                            class="block mb-6 font-sfpro font-medium text-2xl border-b border-[#313131] pb-6 dark:text-white">Клиент</span>
                                        <div class="flex flex-col w-full">
                                            <div class="flex items-center justify-between w-full ">
                                                <div class="flex items-center w-full gap-5">
                                                    <img class="w-10 h-10 rounded-xl"
                                                        src="{{ asset('assets/images/Avatar-2.png') }}" alt="avatar">
                                                    <div class="font-sfpro">
                                                        <p class="text-2xl font-medium dark:text-white">Sssnnnmmm</p>
                                                        <span class="inline-block text-sm dark:text-[#535353]/[0.87]">ID
                                                            аккаунта
                                                            - 791823751</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div
                                        class="bg-white dark:bg-black dark:border dark:border-white/15 border border-black/15 rounded-[54px] w-full  px-[45px] py-[35px]">
                                        <span
                                            class="block mb-6 font-sfpro font-medium text-2xl border-b border-[#313131] pb-6 dark:text-white ">Раздел
                                            возникшей проблемы</span>
                                        <div class="flex flex-col w-full">
                                            <div class="flex items-center justify-between w-full">
                                                <div class="flex items-center w-full gap-5">
                                                    <a href="/"
                                                        class="flex items-center w-full text-[19px] font-medium dark:text-white/[.23] rounded-full  p-3 hover:p-3 dark:hover:text-white dark:hover:bg-[#5E5E5E] hover:bg-[#5E5E5E]/[0.06] group">
                                                        <span
                                                            class="border-2 w-[24px] h-[24px] border-white/[.23] border-dashed rounded"></span>
                                                        <span class="ml-3">Главная</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="xl:col-span-2 col-span-1">
                                    <div
                                        class="bg-white dark:bg-black dark:border dark:border-white/15 border border-black/15 rounded-[54px] px-[45px] py-[35px]">
                                        <span
                                            class="block mb-6 font-sfpro font-medium text-2xl border-b border-[#313131] pb-6 dark:text-white">Обращение
                                            клиента</span>
                                        <div class="flex flex-col w-full">
                                            <p class="text-lg text-[#D2D2D2] dark:text-[#D2D2D2] mb-5">Сегодня мной был
                                                заказан сервер и
                                                саппорт
                                                с
                                                ником adeno отказал мне в
                                                соершении услуг хостинга QWINS. Я выследил его, избил и обоссал с головы до
                                                пяток. Прошу вернуть денежные средства на мой внутренний баланс для
                                                дальнейшего распоряжения ими.</p>
                                            <p class="text-lg text-[#D2D2D2]">С уважением, ss!</p>

                                            <div class="flex gap-4 mt-10">
                                                <button
                                                    class="dark:bg-[#86DA2F] bg-[#202020] text-white font-inter font-medium dark:text-[#000000] text-[17px] py-3 px-6 rounded-[19px]"
                                                    type="button">Приступить к рассмотрению</button>
                                                <button
                                                    class="bg-[#202020] font-inter font-medium text-[#fff] text-[17px] py-3 px-6 rounded-[19px]"
                                                    type="button">Ответить</button>
                                                <button
                                                    class="bg-[#541111] font-inter font-medium text-[#fff] text-[17px] py-3 px-6 rounded-[19px]"
                                                    type="button">Закрыть</button>
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
