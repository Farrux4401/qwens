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
                            Главная
                        </li>
                    </ul>
                </div>
                <div class="flex items-center gap-3">
                    <a href="#"><img src="{{ asset('assets/images/Avatar-big.png') }}" alt=""
                            class="h-[40px] w-[40px]"></a>
                    <a href="#"
                        class="font-inter font-medium text-lg block text-white bg-[#202020] rounded-3xl px-5 py-2">1094$</a>
                    <a href="#"
                        class="font-inter font-medium text-lg block text-white bg-[#202020] rounded-3xl px-5 py-2">Выйти</a>
                </div>
            </div>

            <div>
                <div class="flex flex-col w-full">
                    <div x-show="tab === 'tab1'">
                        <div class="xl:grid grid xl:grid-cols-5 gap-16">
                            <div class="xl:col-span-3 col-span-1 xl:order-none order-2">
                                <div
                                    class="max-h-[600px] overflow-y-scroll no-scrollbar font-inter bg-white border border-[#202020]/[0.13] dark:bg-[#808080]/[0.05] dark:border dark:border-white/15 rounded-[54px] overflow-hidden py-12 px-8">
                                    <div class="border-b border-[#313131] mb-6 pb-7">
                                        <span
                                            class="inline-block  mb-2 font-sfpro font-medium xl:text-xl text-[13px] text-white bg-[#202020] dark:bg-white/5 py-3 px-8 rounded-[100px]">Активные
                                            серверы</span>
                                    </div>

                                    <div class="flex flex-col gap-5 ">
                                        <div
                                            class="flex flex-col xl:flex-row xl:items-center items-start gap-5 justify-between dark:bg-[#808080]/[0.05] dark:border dark:border-white/15 border border-[000000]/[0.13] rounded-[54px] overflow-hidden py-12 px-8">
                                            <div class="flex flex-col items-start gap-4 ">
                                                <span
                                                    class="mb-2 flex justify-center items-center rounded-full bg-[#202020] w-11 h-11 font-inter font-medium text-2xl text-white">1</span>
                                                <div>
                                                    <span class="block text-xl font-medium dark:text-white">Конфигурация
                                                        №1</span>
                                                </div>
                                            </div>

                                            <div class="font-inter">
                                                <span class="block text-base font-medium dark:text-white">Процессор</span>
                                                <span class="block w-72 font-medium text-[13px] dark:text-white/60">Intel
                                                    Core
                                                    i9-9900K (8
                                                    ядер, 16 потоков). Benchmark:
                                                    18359.</span>
                                            </div>

                                            <div class="font-inter">
                                                <span class="block text-base font-medium dark:text-white">64 ГБ оперативной
                                                    памяти</span>
                                                <span class="block font-medium text-[13px] dark:text-white/60">2 TB SSD
                                                    накопителя</span>
                                            </div>

                                            <div class="font-inter">
                                                <span class="block text-base font-medium dark:text-white">Локация сервера -
                                                    Германия</span>
                                                <span class="block font-medium text-[13px] dark:text-white/60">Базовая
                                                    защита от
                                                    DDoS</span>
                                            </div>
                                            <div class="flex gap-3">
                                                <button type="button"
                                                    class="flex items-center justify-center  p-4 dark:bg-[#86DA2F] bg-[#202020] text-white rounded-[19px] font-medium text-[17px] dark:text-black">45.99$</button>
                                                <button type="button"
                                                    class="flex items-center justify-center  p-4 bg-[#202020] rounded-[19px] font-medium text-[17px] text-white">X</button>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="xl:col-span-2 col-span-1 xl:order-none order-1">
                                <div
                                    class="max-h-[600px] bg-white border border-[#202020]/[0.13] dark:bg-[#808080]/[0.05] dark:border dark:border-white/15 rounded-[54px] overflow-hidden py-12 px-8">
                                    <div class="">
                                        <a href="#" class="block mb-8">
                                            <img src="{{ asset('assets/images/Avatar-big.png') }}" alt="avatar">
                                        </a>
                                        <p
                                            class="font-inter font-medium xl:text-[45px] text-[25px] dark:text-white leading-[45px] mb-8">
                                            Кошкин
                                            Матвей Александрович
                                        </p>

                                        <div class="flex flex-wrap gap-7">
                                            <span
                                                class="block font-medium text-base dark:text-[#4A4A4A]">ID:357521377985</span>
                                            <span class="block font-medium text-base dark:text-[#4A4A4A]">Двухфакторная
                                                аунтефикация</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="xl:grid grid xl:grid-cols-1 mt-10">
                            <div
                                class="dark:border overflow-y-auto dark:border-white/15 border border-[#000000]/[0.13] rounded-[54px] px-[45px] py-[35px]">
                                <span
                                    class="inline-block mb-6 font-sfpro font-medium xl:text-xl text-[13px] dark:text-white dark:bg-white/5 text-white bg-[#292929]  py-3 px-8 rounded-[100px]">Последние
                                    операции </span>
                                <table class="w-full">
                                    <thead class="border-b py-4 dark:border-[#313131]">
                                        <tr class="">
                                            <th scope="col"
                                                class="px-6 py-7 text-base text-left dark:dark:text-white/[.70] font-sfpro font-medium">
                                                Описание товара</th>
                                            <th scope="col"
                                                class="px-6 py-7 text-base text-center dark:dark:text-white/[.70] font-sfpro font-medium">
                                                Срок действия</th>
                                            <th scope="col"
                                                class="px-6 py-7 text-base text-center dark:dark:text-white/[.70] font-sfpro font-medium">
                                                Итого:</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-b dark:border-[#313131]">
                                            <td class="flex px-6 font-medium py-7">
                                                <div class="flex items-center gap-2">
                                                    <span
                                                        class="mb-3 flex justify-center items-center rounded-full bg-[#202020] w-11 h-11 font-inter font-medium text-2xl text-white">1</span>
                                                    <span
                                                        class="inline-block xl:text-2xl text-xs font-medium dark:text-white font-inter">
                                                        Покупка виртуального сервера
                                                        <span class="block text-[#535353] text-[10px]">8 vCore/32GB
                                                            RAM/512
                                                            GB NVME</span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="px-6 text-center py-7">
                                                <div class="gap-2 font-inter">
                                                    <span
                                                        class="xl:text-2xl text-xs block dark:text-white/[0.87]">21.02.2024</span>
                                                </div>
                                            </td>
                                            <td class="px-6 text-center py-7"><span
                                                    class="xl:text-5xl text-base font-inter font-medium dark:text-white/[0.87]">1500$</span>
                                            </td>
                                        </tr>
                                        <tr class="border-b dark:border-[#313131]">
                                            <td class="flex px-6 font-medium py-7">
                                                <div class="flex items-center gap-2">
                                                    <span
                                                        class="mb-3 flex justify-center items-center rounded-full bg-[#202020] w-11 h-11 font-inter font-medium text-2xl text-white">1</span>
                                                    <span
                                                        class="inline-block xl:text-2xl text-xs font-medium dark:text-white font-inter">
                                                        Покупка виртуального сервера
                                                        <span class="block text-[#535353] text-[10px]">8 vCore/32GB
                                                            RAM/512
                                                            GB NVME</span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="px-6 text-center py-7">
                                                <div class="gap-2 font-inter">
                                                    <span
                                                        class="xl:text-2xl text-xs block dark:text-white/[0.87]">21.02.2024</span>
                                                </div>
                                            </td>
                                            <td class="px-6 text-center py-7"><span
                                                    class="xl:text-5xl text-base font-inter font-medium dark:text-white/[0.87]">1500$</span>
                                            </td>
                                        </tr>
                                        <tr class="border-b dark:border-[#313131]">
                                            <td class="flex px-6 font-medium py-7">
                                                <div class="flex items-center gap-2">
                                                    <span
                                                        class="mb-3 flex justify-center items-center rounded-full bg-[#202020] w-11 h-11 font-inter font-medium xl:text-2xl text-xs text-white">1</span>
                                                    <span
                                                        class="inline-block xl:text-2xl text-xs font-medium dark:text-white font-inter">
                                                        Покупка виртуального сервера
                                                        <span class="block text-[#535353] text-[10px]">8 vCore/32GB
                                                            RAM/512
                                                            GB NVME</span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="px-6 text-center py-7">
                                                <div class="gap-2 font-inter">
                                                    <span
                                                        class="xl:text-2xl text-xs block dark:text-white/[0.87]">21.02.2024</span>
                                                </div>
                                            </td>
                                            <td class="px-6 text-center py-7"><span
                                                    class="xl:text-5xl text-base font-inter font-medium dark:text-white/[0.87]">1500$</span>
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
