@extends('components.layouts.dashboard')

@section('main-content')
    <div class="light">
        <div x-data="{ tab: 'tab1' }" class="right-part py-8 px-16 rounded-[46px] bg-white dark:backdrop-blur-[100px]">
            <div class="dark:text-white flex justify-between mb-9 border-b pb-6 dark:border-[#313131]">

                <div class="font-sfpro">
                    <ul class="flex w-full px-5 gap-x-11">
                        <li class="text-2xl font-medium cursor-pointer text-[#000]/[0.22] dark:text-[#fff]/[0.25]"
                            x-bind:class="{ 'text-[#000] dark:text-[#fff]': tab === 'tab1' }">
                            Создать тикет пользователю
                        </li>
                    </ul>

                </div>

                <div class="flex items-center gap-3">
                    <a href="#"><img src="{{ asset('assets/images/Avatar-big.png') }}" alt=""
                            class="h-[40px] w-[40px]"></a>
                    <a href="#"
                        class="font-inter font-medium text-lg block bg-[#202020] rounded-3xl text-white px-5 py-2">Выйти</a>
                </div>
            </div>

            <div>
                <div class="py-10">
                    <div x-show="tab === 'tab1'">
                        <div class="flex gap-7">
                            <div class="basis-2/4">
                                <div>
                                    <div
                                        class="bg-white dark:bg-black dark:border dark:border-white/15 border border-black/15 rounded-[54px] w-full px-[45px] py-[35px] mb-9">
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
                                        class="bg-white dark:bg-black dark:border dark:border-white/15 border border-black/15  rounded-[54px] px-[45px] py-[35px]">
                                        <span
                                            class="block mb-6 font-sfpro font-medium text-2xl border-b border-[#313131] pb-6 dark:text-white">Обращение
                                            клиента</span>
                                        <div class="flex flex-col w-full">
                                            <p class="text-lg dark:text-[#D2D2D2] text-[#656565] mb-5">Сегодня мной был
                                                заказан сервер и саппорт
                                                с
                                                ником adeno отказал мне в
                                                соершении услуг хостинга QWINS. Я выследил его, избил и обоссал с головы до
                                                пяток. Прошу вернуть денежные средства на мой внутренний баланс для
                                                дальнейшего распоряжения ими.</p>
                                            <p class="text-lg dark:text-[#D2D2D2] text-[#656565]">С уважением, ss!</p>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="basis-3/4">
                                <form class="flex gap-8 max-h-[655px]">
                                    <div
                                        class="rounded-[54px] flex items-center bg-white dark:bg-black dark:border dark:border-white/15 border border-black/15 p-10 w-full">

                                        <div class="flex flex-col w-2/3 gap-y-8 mr-9">
                                            <div
                                                class="flex flex-col gap-y-3 bg-[#f5f5f5] dark:bg-[#000] rounded-[34px] dark:border dark:border-[#323232]  p-4">
                                                <div class="flex">
                                                    <input type="checkbox" id="choose-1" class="hidden peer" />
                                                    <label for="choose-1"
                                                        class="font-sfpro font-medium select-none flex w-full gap-x-3 cursor-pointer rounded-[100px]  
                                                        py-3 px-6  dark:text-white/25 text-[#000000]/[0.22] text-xl transition-colors duration-200 ease-in-out dark:peer-checked:bg-[#5E5E5E] peer-checked:bg-[#E9E9E9] dark:peer-checked:text-white/25 peer-checked:text-black">
                                                        <span
                                                            class="block border-2 w-[24px] h-[24px] border-white/[.23] border-dashed rounded">
                                                        </span>
                                                        Финансы </label>
                                                </div>
                                                <div class="flex">
                                                    <input type="checkbox" id="choose-2" class="hidden peer" />
                                                    <label for="choose-2"
                                                        class="font-sfpro font-medium select-none flex w-full gap-x-3 cursor-pointer rounded-[100px]  
                                                        py-3 px-6  dark:text-white/25 text-[#000000]/[0.22] text-xl transition-colors duration-200 ease-in-out dark:peer-checked:bg-[#5E5E5E] peer-checked:bg-[#E9E9E9] dark:peer-checked:text-white/25 peer-checked:text-black">
                                                        <span
                                                            class="block border-2 w-[24px] h-[24px] border-white/[.23] border-dashed rounded">
                                                        </span>
                                                        Профиль </label>
                                                </div>
                                                <div class="flex">
                                                    <input type="checkbox" id="choose-3" class="hidden peer" />
                                                    <label for="choose-3"
                                                        class="font-sfpro font-medium select-none flex w-full gap-x-3 cursor-pointer rounded-[100px]  
                                                        py-3 px-6  dark:text-white/25 text-[#000000]/[0.22] text-xl transition-colors duration-200 ease-in-out dark:peer-checked:bg-[#5E5E5E] peer-checked:bg-[#E9E9E9] dark:peer-checked:text-white/25 peer-checked:text-black">
                                                        <span
                                                            class="block border-2 w-[24px] h-[24px] border-white/[.23] border-dashed rounded">
                                                        </span>
                                                        Настройки </label>
                                                </div>
                                                <div class="flex">
                                                    <input type="checkbox" id="choose-4" class="hidden peer" />
                                                    <label for="choose-4"
                                                        class="font-sfpro font-medium select-none flex w-full gap-x-3 cursor-pointer rounded-[100px]  
                                                        py-3 px-6  dark:text-white/25 text-[#000000]/[0.22] text-xl transition-colors duration-200 ease-in-out dark:peer-checked:bg-[#5E5E5E] peer-checked:bg-[#E9E9E9] dark:peer-checked:text-white/25 peer-checked:text-black ">
                                                        <span
                                                            class="block border-2 w-[24px] h-[24px] border-white/[.23] border-dashed rounded">
                                                        </span>
                                                        Обьявления </label>
                                                </div>
                                                <div class="flex">
                                                    <input type="checkbox" id="choose-5" class="hidden peer" />
                                                    <label for="choose-5"
                                                        class="font-sfpro font-medium select-none flex w-full gap-x-3 cursor-pointer rounded-[100px]  
                                                        py-3 px-6  dark:text-white/25 text-[#000000]/[0.22] text-xl transition-colors duration-200 ease-in-out dark:peer-checked:bg-[#5E5E5E] peer-checked:bg-[#E9E9E9] dark:peer-checked:text-white/25 peer-checked:text-black">
                                                        <span
                                                            class="block border-2 w-[24px] h-[24px] border-white/[.23] border-dashed rounded">
                                                        </span>
                                                        Виртуальные </label>
                                                </div>
                                                <div class="flex">
                                                    <input type="checkbox" id="choose-6" class="hidden peer" />
                                                    <label for="choose-6"
                                                        class="font-sfpro font-medium select-none flex w-full gap-x-3 cursor-pointer rounded-[100px]  
                                                        py-3 px-6  dark:text-white/25 text-[#000000]/[0.22] text-xl transition-colors duration-200 ease-in-out dark:peer-checked:bg-[#5E5E5E] peer-checked:bg-[#E9E9E9] dark:peer-checked:text-white/25 peer-checked:text-black">
                                                        <span
                                                            class="block border-2 w-[24px] h-[24px] border-white/[.23] border-dashed rounded">
                                                        </span>
                                                        Выделенные </label>
                                                </div>
                                                <div class="flex">
                                                    <input type="checkbox" id="choose-7" class="hidden peer" />
                                                    <label for="choose-7"
                                                        class="font-sfpro font-medium select-none flex w-full gap-x-3 cursor-pointer rounded-[100px]  
                                                        py-3 px-6  dark:text-white/25 text-[#000000]/[0.22] text-xl transition-colors duration-200 ease-in-out dark:peer-checked:bg-[#5E5E5E] peer-checked:bg-[#E9E9E9] dark:peer-checked:text-white/25 peer-checked:text-black">
                                                        <span
                                                            class="block border-2 w-[24px] h-[24px] border-white/[.23] border-dashed rounded">
                                                        </span>
                                                        Помощь </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex flex-col w-full ">
                                            <div>
                                                <label for=""
                                                    class="block pb-2 mb-2 text-xl font-medium dark:text-white/50">Название
                                                    тикета</label>
                                                <label class="flex flex-col">

                                                    <input type="text" placeholder="Тикет..."
                                                        class="w-full dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0 mb-9">
                                                </label>
                                            </div>

                                            <div>
                                                <label for=""
                                                    class="block pb-2 mb-2 text-xl font-medium dark:text-white/50">Тип
                                                    услуги</label>
                                                <label class="flex flex-col">

                                                    <input type="text" placeholder="Тип тикета..."
                                                        class="w-full dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0 mb-9">
                                                </label>
                                            </div>

                                            <div>
                                                <label for=""
                                                    class="block pb-2 mb-2 text-xl font-medium dark:text-white/50">Описание
                                                    проблемы</label>
                                                <label class="flex flex-col">

                                                    <input type="text" placeholder="Проблема..."
                                                        class="w-full dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0 mb-9">
                                                </label>
                                            </div>


                                            <div class="flex gap-3">
                                                <button
                                                    class="font-inter font-medium text-base text-white dark:text-black dark:bg-[#86DA2F] bg-[#202020] py-3 px-7 rounded-[19px]"
                                                    type="button">Отправить тикет</button>
                                                <button
                                                    class="font-inter font-medium text-base text-white dark:text-black dark:bg-[#86DA2F] bg-[#202020] py-3 px-7 rounded-[19px]"
                                                    type="button">
                                                    <img src="{{ asset('assets/images/right-arrow-white.svg') }}"
                                                        alt="">
                                                </button>
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
@endsection
