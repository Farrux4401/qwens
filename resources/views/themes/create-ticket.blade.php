@extends('components.layouts.dashboard')

@section('main-content')
    <div class="light">
        <div x-data="{ tab: 'tab1' }"
            class="right-part py-8 md:px-16 px-5 overflow-hidden rounded-[46px] bg-white dark:backdrop-blur-[100px]">
            <div class="dark:text-white flex justify-between mb-9 border-b pb-6 dark:border-[#313131]">

                <div class="font-sfpro">
                    <ul class="flex w-full px-5 gap-x-11">
                        <li class="text-2xl font-medium cursor-pointer text-[#000]/[0.22] dark:text-[#fff]/[0.25]"
                            x-bind:class="{ 'text-[#000] dark:text-[#fff]': tab === 'tab1' }">
                            Создание тикета
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
                <div class="flex flex-col w-full py-10">
                    <div x-show="tab === 'tab1'">
                        <div class="flex flex-wrap gap-7">
                            <form class="flex basis-full xl:basis-4/6 gap-8 max-h-[655px]">
                                <div
                                    class="rounded-[54px] flex items-center bg-white dark:bg-black dark:border dark:border-white/15 border border-black/15 p-10 w-full">

                                    <div class="xl:flex hidden flex-col w-2/3 gap-y-8 mr-9">
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
                                                class="font-inter font-medium text-base dark:text-black text-white dark:bg-[#86DA2F] bg-[#202020] py-3 px-7 rounded-[19px]"
                                                type="button">Отправить тикет</button>
                                            <button
                                                class="font-inter font-medium text-base text-black bg-[#86DA2F] py-3 px-7 rounded-[19px]"
                                                type="button">
                                                <img src="{{ asset('assets/images/right-arrow.svg') }}" alt="">
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </form>

                            <div
                                class="flex basis-full xl:basis-2/6 flex-col rounded-[54px] items-center  bg-white  dark:bg-black dark:border dark:border-white/15 border border-black/15] p-10 w-full">
                                <p class="p-6 text-3xl font-medium dark:text-white font-inter text-pretty">Часто задаваемые
                                    вопросы
                                </p>
                                <div class="dark:bg-black bg-white w-full mx-auto dark:border-t dark:border-white/[0.13] border-t border-black/15 py-8 px-8"
                                    x-data="{ selected: 0 }">

                                    <ul class="shadow-box">
                                        <li class="relative">
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center gap-3">
                                                    <span class="text-xl font-medium dark:text-white font-inter">
                                                        Почему выбраны эти ЦОД и какое их преимущество над другими?
                                                    </span>
                                                </div>

                                                <button type="button"
                                                    @click="selected !== 1 ? selected = 1 : selected = null"
                                                    class="flex items-center justify-center bg-[#202020] w-12 h-12 rounded-[19px]">
                                                    <img src="{{ asset('assets/images/arrow-down.svg') }}"
                                                        alt="" />
                                                </button>

                                            </div>

                                            <div class="relative overflow-hidden transition-all duration-700 max-h-0"
                                                style="" x-ref="container1"
                                                x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' :
                                                    ''">
                                                <div class="flex justify-center py-6 mt-9">
                                                    <p class="dark:text-white font-inter">Lorem, ipsum dolor sit amet
                                                        consectetur adipisicing elit. Sint veritatis officia laborum totam
                                                        eos error sed vero nam cupiditate. Tempore enim animi laudantium
                                                        repellendus corporis doloribus quidem earum blanditiis sequi!</p>
                                                </div>
                                            </div>

                                        </li>
                                    </ul>
                                </div>

                                <div class="dark:bg-black bg-white w-full mx-auto dark:border-t dark:border-white/[0.13] border-t border-black/15  py-8 px-8"
                                    x-data="{ selected: 0 }">

                                    <ul class="shadow-box">
                                        <li class="relative">
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center gap-3">
                                                    <span class="text-xl font-medium dark:text-white font-inter">
                                                        Какие меры безопасности применяются в дата-центрах?
                                                    </span>
                                                </div>

                                                <button type="button"
                                                    @click="selected !== 1 ? selected = 1 : selected = null"
                                                    class="flex items-center justify-center bg-[#202020] w-12 h-12 rounded-[19px]">
                                                    <img src="{{ asset('assets/images/arrow-down.svg') }}"
                                                        alt="" />
                                                </button>

                                            </div>

                                            <div class="relative overflow-hidden transition-all duration-700 max-h-0"
                                                style="" x-ref="container1"
                                                x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' :
                                                    ''">
                                                <div class="flex justify-center py-6 mt-9">
                                                    <p class="dark:text-white font-inter">Lorem, ipsum dolor sit amet
                                                        consectetur adipisicing elit. Sint veritatis officia laborum totam
                                                        eos error sed vero nam cupiditate. Tempore enim animi laudantium
                                                        repellendus corporis doloribus quidem earum blanditiis sequi!</p>
                                                </div>
                                            </div>

                                        </li>
                                    </ul>
                                </div>

                                <div class="dark:bg-black bg-white w-full mx-auto dark:border-t dark:border-white/[0.13] border-t border-black/15  py-8 px-8"
                                    x-data="{ selected: 0 }">

                                    <ul class="shadow-box">
                                        <li class="relative">
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center gap-3">
                                                    <span class="text-xl font-medium dark:text-white font-inter">
                                                        Как обеспечивается надежность
                                                        работы серверов в ЦОД?
                                                    </span>
                                                </div>

                                                <button type="button"
                                                    @click="selected !== 1 ? selected = 1 : selected = null"
                                                    class="flex items-center justify-center bg-[#202020] w-12 h-12 rounded-[19px]">
                                                    <img src="{{ asset('assets/images/arrow-down.svg') }}"
                                                        alt="" />
                                                </button>

                                            </div>

                                            <div class="relative overflow-hidden transition-all duration-700 max-h-0"
                                                style="" x-ref="container1"
                                                x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' :
                                                    ''">
                                                <div class="flex justify-center py-6 mt-9">
                                                    <p class="dark:text-white font-inter">Lorem, ipsum dolor sit amet
                                                        consectetur adipisicing elit. Sint veritatis officia laborum totam
                                                        eos error sed vero nam cupiditate. Tempore enim animi laudantium
                                                        repellendus corporis doloribus quidem earum blanditiis sequi!</p>
                                                </div>
                                            </div>

                                        </li>
                                    </ul>
                                </div>

                                <div class="dark:bg-black bg-white w-full mx-auto dark:border-t dark:border-white/[0.13] border-t border-black/15  py-8 px-8"
                                    x-data="{ selected: 0 }">

                                    <ul class="shadow-box">
                                        <li class="relative">
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center gap-3">
                                                    <span class="text-xl font-medium dark:text-white font-inter">
                                                        Какую роль играет местоположение
                                                        ЦОД хостинг-провайдера?
                                                    </span>
                                                </div>

                                                <button type="button"
                                                    @click="selected !== 1 ? selected = 1 : selected = null"
                                                    class="flex items-center justify-center bg-[#202020] w-12 h-12 rounded-[19px]">
                                                    <img src="{{ asset('assets/images/arrow-down.svg') }}"
                                                        alt="" />
                                                </button>

                                            </div>

                                            <div class="relative overflow-hidden transition-all duration-700 max-h-0"
                                                style="" x-ref="container1"
                                                x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' :
                                                    ''">
                                                <div class="flex justify-center py-6 mt-9">
                                                    <p class="dark:text-white font-inter">Lorem, ipsum dolor sit amet
                                                        consectetur adipisicing elit. Sint veritatis officia laborum totam
                                                        eos error sed vero nam cupiditate. Tempore enim animi laudantium
                                                        repellendus corporis doloribus quidem earum blanditiis sequi!</p>
                                                </div>
                                            </div>

                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
