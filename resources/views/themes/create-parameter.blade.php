@extends('components.layouts.dashboard')

@section('main-content')
    <div class="">
        <div class="right-part py-8 overflow-hidden px-5 md:px-16  dark:rounded-[46px] bg-white  dark:backdrop-blur-[100px]">
            <div
                class="dark:text-white flex justify-between mb-9 pb-6 dark:border-b dark:border-[#313131] border-b border-[#313131]/[0.22]">
                <p class="text-2xl font-medium">
                    Создание настраиваемых параметров
                </p>
                <div class="flex items-center gap-3">
                    <a href="#"><img src="{{ asset('assets/images/Avatar-big.png') }}" alt=""
                            class="h-[40px] w-[40px]"></a>
                    <a href="#"
                        class="font-inter font-medium text-lg block bg-[#202020] rounded-3xl text-white px-5 py-2">Выйти</a>
                </div>
            </div>
            <div class="font-inter">
                <form class="flex flex-col gap-8">
                    <div class="max-w-[600px] w-full p-10 overflow-hidden ">

                        <input type="text" placeholder="Введите имя.."
                            class="block dark:bg-[#3C3C43] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg w-full md:w-[460px] dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0 mb-3">

                        <input type="text" placeholder="Введите описание..."
                            class="block dark:bg-[#3C3C43] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg w-full md:w-[460px] dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0 mb-3">

                        <input type="text" placeholder="Выберите продукт..."
                            class="block dark:bg-[#3C3C43] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg w-full md:w-[460px] dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0 mb-3">

                        <button type="submit"
                            class="dark:bg-[#86DA2F] bg-black text-white dark:text-black font-inter font-medium text-xs md:text-base py-3 px-7 rounded-[16px]">Создать
                            параметр</button>
                    </div>
                    {{--  --}}
                    <div
                        class="max-w-[600px] md:block hidden rounded-[54px] dark:bg-form-gr w-full p-10 overflow-hidden border border-[#000000]/[0.13] dark:border dark:border-white/[0.13]">
                        <label for=""
                            class="block mb-6 pb-5 font-medium text-xl dark:text-white dark:border-b dark:border-[#313131] border-b border-[#313131]/[0.22]">Введите
                            имя</label>
                        <input type="text" placeholder="Имя параметра...."
                            class="block dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg w-[460px] dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0">
                    </div>



                    <div
                        class="max-w-[600px] md:block hidden rounded-[54px] dark:bg-form-gr w-full p-10 overflow-hidden border border-[#000000]/[0.13] dark:border dark:border-white/[0.13]">
                        <label for=""
                            class="block mb-6 pb-5 font-medium text-xl dark:text-white dark:border-b dark:border-[#313131] border-b border-[#313131]/[0.22]">Введите
                            описание</label>
                        <input type="text" placeholder="Описание параметра...."
                            class="block dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg w-[460px] dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0">
                    </div>

                    <div
                        class="max-w-[600px] md:block hidden rounded-[54px] dark:bg-form-gr w-full p-10 overflow-hidden border border-[#000000]/[0.13] dark:border dark:border-white/[0.13]">
                        <label for=""
                            class="block mb-6 pb-5 font-medium text-xl dark:text-white dark:border-b dark:border-[#313131] border-b border-[#313131]/[0.22]">Выберите
                            продукт</label>

                        <select name="" id=""
                            class="block dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg w-[460px] dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0 mb-6">
                            <option>Продукт....</option>
                            <option value="lorem1">lorem</option>
                            <option value="lorem2">lorem</option>
                            <option value="lorem3">lorem</option>
                            <option value="lorem4">lorem</option>
                        </select>

                        <button type="submit"
                            class="dark:bg-[#86DA2F] bg-black text-white dark:text-black font-inter font-medium text-base py-3 px-7 rounded-[16px]">Создать
                            параметр</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
