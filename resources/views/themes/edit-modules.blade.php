@extends('components.layouts.dashboard')

@section('main-content')
    <div class="right-part py-8 md:px-16 px-5 overflow-hidden rounded-[46px] bg-white dark:backdrop-blur-[100px]">
        <div class="dark:text-white flex justify-between mb-9 border-b pb-6 dark:border-[#313131]">
            <p class="text-2xl font-medium">
                Редактирование модуля
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
                    <form class="flex gap-8">
                        <div class="flex flex-col gap-8 w-full md:w-[750px]">

                            {{-- Mobile --}}
                            <div
                                class="w-full md:max-w-[750px] md:hidden rounded-[54px]  p-10 overflow-hidden border border-[#000000]/[0.13] dark:border dark:border-white/[0.13]">
                                <label for="" class="block pb-5 mb-6 text-xl font-medium dark:text-white">Введите
                                    параметры модуля</label>
                                <input type="text" placeholder="Значение модуля..."
                                    class="block dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg w-full md:w-[460px] dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0 mb-3">

                                <input type="text" placeholder="Отображаемое имя..."
                                    class="block dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg w-full md:w-[460px] dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0 mb-3">

                                <input type="text" placeholder="Hostname..."
                                    class="block dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg w-full md:w-[460px] dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0 mb-3">

                                <input type="text" placeholder="Username..."
                                    class="block dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg w-full md:w-[460px] dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0 mb-3">

                                <input type="text" placeholder="API-ключ..."
                                    class="block dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg w-full md:w-[460px] dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0">

                                <div class="mt-8">
                                    <button type="submit"
                                        class="bg-[#86DA2F] text-black font-inter font-medium text-base py-3 px-7 rounded-[16px] ">
                                        Сохранить модуль
                                    </button>
                                </div>
                            </div>

                            {{-- Desktop --}}

                            <div
                                class="max-w-[750px] md:block hidden rounded-[54px] dark:bg-form-gr w-full p-10 overflow-hidden border border-[#000000]/[0.13] dark:border dark:border-white/[0.13]">
                                <label for="" class="block pb-5 mb-6 text-xl font-medium dark:text-white">Значение
                                    модуля</label>
                                <input type="text" placeholder="True/False..."
                                    class="block dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg w-[460px] dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0">
                            </div>

                            <div
                                class="max-w-[750px] md:block hidden rounded-[54px] dark:bg-form-gr w-full p-10 overflow-hidden border border-[#000000]/[0.13] dark:border dark:border-white/[0.13]">
                                <label for=""
                                    class="block pb-5 mb-6 text-xl font-medium dark:text-white">Отображаемое
                                    имя...</label>
                                <input type="text" placeholder="Имя модуля..."
                                    class="block dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg w-[460px] dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0">
                            </div>

                            <div
                                class="max-w-[750px] md:block hidden rounded-[54px] dark:bg-form-gr w-full p-10 overflow-hidden border border-[#000000]/[0.13] dark:border dark:border-white/[0.13]">
                                <label for="" class="block pb-5 mb-6 text-xl font-medium dark:text-white">Hostname,
                                    Username</label>
                                <input type="text" placeholder="Введите Hostname..."
                                    class="block dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg w-[460px] dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0 mb-5">

                                <input type="text" placeholder="Введите Username..."
                                    class="block dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg w-[460px] dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0">
                            </div>
                        </div>


                        <div>
                            <div
                                class="w-[444px] md:block hidden rounded-[54px] dark:bg-form-gr p-10 overflow-hidden border border-[#000000]/[0.13] dark:border dark:border-white/[0.13] mb-5">

                                <div>
                                    <p
                                        class="font-inter text-white font-medium text-2xl bg-[#202020] rounded-full w-11 h-11 flex items-center justify-center mb-7">
                                        1
                                    </p>
                                    <p class="text-xl font-medium dark:text-white font-inter mb-7">Модуль CPanel
                                    </p>
                                    <div class="flex flex-col gap-4">
                                        <div class="">
                                            <p class="text-base font-medium dark:text-white font-inter ">Включен</p>
                                            <span class="font-inter dark:text-white/[0.60] text-sm">Отображаемое имя:
                                                CPanel</span>
                                        </div>

                                        <div class="">
                                            <p class="text-base font-medium dark:text-white font-inter ">Hostname: 78131
                                            </p>
                                            <span class="font-inter dark:text-white/[0.60] text-sm">Username:
                                                jkajskldaks</span>
                                        </div>

                                        <div class="">
                                            <p class="text-base font-medium dark:text-white font-inter ">API-ключ</p>
                                            <span
                                                class="font-inter dark:text-white/[0.60] text-sm">123576392789012781368</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-8">
                                    <button type="submit"
                                        class="bg-[#86DA2F] text-black font-inter font-medium text-base py-3 px-7 rounded-[16px] ">
                                        Сохранить модуль
                                    </button>
                                </div>
                            </div>

                            <div
                                class="max-w-[750px] md:block hidden rounded-[54px] dark:bg-form-gr w-full p-10 overflow-hidden border border-[#000000]/[0.13] dark:border dark:border-white/[0.13]">
                                <label
                                    class="block mb-6 pb-5 font-medium text-xl dark:text-white border-b border-[#313131]">
                                    Введите
                                    API-ключ</label>
                                <input type="text" placeholder="True/False..."
                                    class="block dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg w-[460px] dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    </div>
@endsection
