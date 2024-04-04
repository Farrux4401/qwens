@extends('components.layouts.dashboard')

@section('main-content')
    <div class="right-part py-8 md:px-16 px-5 rounded-[46px] bg-white dark:backdrop-blur-[100px]">
        <div
            class="dark:text-white flex justify-between mb-9 dark:border-b pb-6 dark:border-[#313131] border-b border-[#313131]/[0.22]">
            <p class="md:text-2xl text-[13px] font-medium">
                Журналы эл.почты
            </p>
            <div class="lg:flex hidden items-center gap-3">
                <a href="#"><img src="{{ asset('assets/images/Avatar-big.png') }}" alt=""
                        class="h-[40px] w-[40px]"></a>
                <a href="#"
                    class="font-inter font-medium text-lg block bg-[#202020] text-white rounded-3xl px-5 py-2">Выйти</a>
            </div>
        </div>


        <div>

            <h2
                class="font-sfpro font-medium text-2xl dark:text-white dark:border-b dark:border-[#313131] border-b border-[#313131]/[0.22] pb-5 mb-6">
                Отправленные
                письма</h2>


            <div class="">
                <ul
                    class="flex font-inter text-base font-medium text-white/[0.70] dark:border-[#313131] border-b border-[#313131]/[0.22] pb-5 mb-6">
                    <li class="md:mr-[540px] mr-auto">Название сообщения</li>
                    <li class="md:block hidden">Статус</li>
                </ul>



                <div class="flex flex-col gap-8">
                    <div class="mx-auto py-8 px-8 rounded-[54px] w-full p-10 overflow-hidden border border-[#000000]/[0.13] dark:border dark:border-white/[0.13]"
                        x-data="{ selected: 1 }">
                        <ul class="shadow-box">
                            <li class="relative">
                                <div class="flex items-center justify-between">
                                    <div class="flex flex-col md:flex-row items-start md:items-center gap-3"><span
                                            class="flex items-center justify-center w-11 h-11 bg-[#202020] rounded-full font-inter font-medium text-2xl text-white">1</span>
                                        <span class="text-xl font-medium dark:text-white font-inter">
                                            New invoice - payment #81278
                                        </span>
                                    </div>

                                    <div class="md:flex hidden items-center gap-2 -ml-36">
                                        <span class="block text-xl font-medium dark:text-white font-inter">Отправлено</span>
                                        <span class="block w-2 h-2 bg-[#86DA2F] rounded-full"></span>
                                    </div>

                                    <button type="button" @click="selected !== 1 ? selected = 1 : selected = null"
                                        class="flex items-center justify-center bg-[#202020] w-12 h-12 rounded-[19px]">
                                        <img src="{{ asset('assets/images/arrow-down.svg') }}" alt="" />
                                    </button>

                                </div>

                                <div class="relative overflow-hidden transition-all duration-700 max-h-0" style=""
                                    x-ref="container1"
                                    x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                                    <div class="p-6 border border-white/[0.13] mt-9 rounded-[54px] flex justify-center">
                                        <img src="{{ asset('assets/images/invoice-img.jpg') }}" alt="invoice"
                                            class="block object-cover rounded-[19px]" />
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
@endsection
