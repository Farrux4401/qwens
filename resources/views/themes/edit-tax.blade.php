@extends('components.layouts.dashboard')

@section('main-content')
    <div class="">
        <div class="right-part py-8 md:px-16 px-5  dark:rounded-[46px]  backdrop-blur-[100px]">
            <div class="dark:text-white flex justify-between mb-9 border-b pb-6 dark:border-[#313131]">
                <p class="text-2xl font-medium">
                    Налоги
                </p>
                <div class="flex items-center gap-3">
                    <a href="#"><img src="{{ asset('assets/images/Avatar-big.png') }}" alt=""
                            class="h-[40px] w-[40px]"></a>
                    <a href="#"
                        class="font-inter font-medium text-lg block bg-[#202020] rounded-3xl  text-white px-5 py-2">Выйти</a>
                </div>
            </div>

            <div>
                <div class="mb-[45px]">
                    <label class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                        <input type="checkbox" class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg"
                            checked>
                        Enable Tax
                    </label>
                </div>

                <div>
                    <div>
                        <form class="flex md:flex-nowrap flex-wrap gap-8">
                            <div class="flex flex-wrap flex-col gap-8 w-full md:w-[750px]">
                                <div
                                    class="block md:hidden md:max-w-[750px] rounded-none md:rounded-[54px]  w-full p-10 overflow-hidden border-none md:border md:border-[#000000]/[0.13] md:dark:border md:dark:border-white/[0.13]">

                                    <input type="text" placeholder="Выберите тип Tax..."
                                        class="block dark:bg-[#3C3C43] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg md:w-[460px] w-full dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0 mb-5">

                                    <input type="text" placeholder="Выберите налоговую ставку..."
                                        class="block dark:bg-[#3C3C43] bg-[#3C3C43]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg md:w-[460px] w-full dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0">
                                    <div class="flex mt-3">
                                        <button type="submit"
                                            class="dark:bg-[#86DA2F] bg-black dark:text-black text-white font-inter font-medium text-xs py-3 px-7 rounded-[16px] ">
                                            Создать налог
                                        </button>
                                    </div>
                                </div>

                                {{--  --}}
                                <div
                                    class="max-w-[750px] md:block hidden rounded-[54px]  w-full p-10 overflow-hidden border border-[#000000]/[0.13] dark:border dark:border-white/[0.13]">
                                    <label for=""
                                        class="block mb-6 pb-5 font-medium text-xl dark:text-white border-b border-[#313131]">Введите
                                        Tax Type</label>
                                    <input type="text" placeholder="Tax type...."
                                        class="block dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg w-[460px] dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0">
                                </div>

                                <div
                                    class="max-w-[750px] md:block hidden rounded-[54px]  w-full p-10 overflow-hidden border border-[#000000]/[0.13] dark:border dark:border-white/[0.13]">
                                    <label for=""
                                        class="block mb-6 pb-5 font-medium text-xl dark:text-white border-b border-[#313131]">Налоговые
                                        ставки</label>
                                    <input type="text" placeholder="Выберите налоговую ставку..."
                                        class="block dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg w-[460px] dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0">
                                </div>
                            </div>

                            {{--  --}}
                            <div
                                class="md:block hidden rounded-[54px] dark:bg-form-gr w-full p-10 overflow-hidden border border-[#000000]/[0.13] dark:border dark:border-white/[0.13]">
                                <label for=""
                                    class="block mb-6 pb-5 font-medium text-xl dark:text-white border-b border-[#313131]">Создать
                                    налоговую ставку</label>
                                <label class="flex flex-col mb-3">
                                    <span class="font-inter font-medium text-[15px] dark:text-white block mb-3">Введите
                                        Name</span>
                                    <input type="text" placeholder="Name...."
                                        class="block dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg w-[460px] dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0">
                                </label>

                                <label class="flex flex-col mb-3">
                                    <span class="font-inter font-medium text-[15px] dark:text-white block mb-3">Введите
                                        Rate</span>
                                    <input type="text" placeholder="Rate...."
                                        class="block dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg w-[460px] dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0">
                                </label>

                                <label>
                                    <span class="font-inter font-medium text-[15px] dark:text-white block mb-3">Выберите
                                        страну</span>
                                    <select name="" id=""
                                        class="block dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg w-[460px] dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0">
                                        <option>Country....</option>
                                        <option value="lorem1">lorem</option>
                                        <option value="lorem2">lorem</option>
                                        <option value="lorem3">lorem</option>
                                        <option value="lorem4">lorem</option>
                                    </select>
                                </label>

                                <div class="text-right">
                                    <button type="submit"
                                        class="dark:bg-[#86DA2F] bg-black dark:text-black text-white font-inter font-medium text-base py-3 px-7 rounded-[16px] ">
                                        Создать
                                    </button>
                                </div>
                            </div>
                            {{--  --}}
                            <div class="block md:hidden  w-full p-10 overflow-hidden  border-[#000000]/[0.13] dark:border ">
                                <label for=""
                                    class="block mb-6 pb-5 font-medium text-xl dark:text-white border-b border-[#313131]">Создать
                                    налоговую ставку</label>
                                <label class="flex flex-col mb-3">

                                    <input type="text" placeholder="Введите Name..."
                                        class="block dark:bg-[#3C3C43] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg w-full md:w-[460px] dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0">
                                </label>

                                <label class="flex flex-col mb-3">

                                    <input type="text" placeholder="Введите Rate..."
                                        class="block dark:bg-[#3C3C43] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg w-full md:w-[460px] dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0">
                                </label>

                                <label class="flex flex-col mb-3">

                                    <input type="text" placeholder="Ввведите ставку..."
                                        class="block dark:bg-[#3C3C43] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg w-full md:w-[460px] dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0">
                                </label>


                                <div class="flex flex-wrap gap-3">
                                    <button type="submit"
                                        class="dark:bg-[#86DA2F] bg-black dark:text-black text-white font-inter font-medium text-xs py-3 px-7 rounded-[16px] ">
                                        Создать ставку
                                    </button>
                                    <button type="submit"
                                        class="dark:bg-[#202020] bg-black  text-white font-inter font-medium text-xs py-3 px-7 rounded-[16px] ">
                                        Очистить
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
