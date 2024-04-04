@extends('components.layouts.dashboard')

@section('main-content')
    <div class="light">
        <div x-data="{ tab: 'tab1' }" class="right-part py-8 md:px-16 px-5 rounded-[46px] bg-white dark:backdrop-blur-[100px]">
            <div class="dark:text-white flex justify-between mb-9 border-b pb-6 dark:border-[#313131]">

                <div class="font-sfpro">
                    <ul class="flex w-full px-5 gap-x-11">
                        <li @click="tab = 'tab1'"
                            class="md:text-2xl text-[13px] font-medium cursor-pointer text-[#000]/[0.22] dark:text-[#fff]/[0.25]"
                            x-bind:class="{ 'text-[#000] dark:text-[#fff]': tab === 'tab1' }">
                            Главная
                        </li>
                    </ul>
                </div>
                <div class="lg:flex hidden items-center gap-3">
                    <a href="#"><img src="{{ asset('assets/images/Avatar-big.png') }}" alt=""
                            class="h-[40px] w-[40px]"></a>
                    <a href="#"
                        class="font-inter font-medium text-lg block bg-[#202020] text-white rounded-3xl px-5 py-2">1094$</a>
                    <a href="#"
                        class="font-inter font-medium text-lg block bg-[#202020] text-white rounded-3xl px-5 py-2">Выйти</a>
                </div>
            </div>

            <div>
                <div class="flex flex-col w-full">
                    <div x-show="tab === 'tab1'">
                        <div class="xl:grid grid-cols-1 gap-16">

                            <div class="xl:col-span-1">
                                <div
                                    class="xl:grid xl:grid-cols-5 gap-8 dark:bg-[#808080]/[0.05] dark:border dark:border-white/15 border border-[000000]/[0.13] rounded-[54px]  overflow-hidden py-12 px-8">
                                    <div class="xl:col-span-2 col-span-1 mb-8 xl:mb-0">
                                        <a href="#" class="block mb-8">
                                            <img src="{{ asset('assets/images/Avatar-big.png') }}" alt="avatar">
                                        </a>
                                        <p
                                            class="font-inter font-medium md:text-[45px] text-[25px] dark:text-white leading-[45px] mb-8">
                                            Кошкин
                                            Матвей Александрович
                                        </p>

                                        <div class="flex gap-7">
                                            <span class="block font-medium text-base text-[#4A4A4A]">ID:357521377985</span>
                                            <span class="block font-medium text-base text-[#4A4A4A]">Двухфакторная
                                                аунтефикация <div
                                                    class="inline-block w-[10px] h-[10px] bg-[#86DA2F] ml-3 rounded-full">
                                                </div>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="xl:col-span-3 col-span-1">
                                        <div class="flex flex-col gap-7">
                                            <div
                                                class="flex items-center justify-between dark:bg-[#808080]/[0.05] dark:border dark:border-white/15 border border-[000000]/[0.13] rounded-[29px] py-6 px-8">
                                                <div>
                                                    <p class="md:text-2xl text-[14px] font-inter dark:text-white/75">Сумма
                                                        всех платежей
                                                    </p>
                                                    <span class="text-sm font-light font-inter dark:text-white/15">было
                                                        потрачено</span>
                                                </div>
                                                <span class="inline-block w-[105px] h-[1px] bg-[#3F3F3F]"></span>
                                                <p class="md:text-5xl text-[30px] font-medium dark:text-white font-inter">
                                                    1500$</p>
                                            </div>

                                            <div
                                                class="flex items-center justify-between dark:bg-[#808080]/[0.05] dark:border dark:border-white/15 border border-[000000]/[0.13] rounded-[29px] py-6 px-8">
                                                <div>
                                                    <p class="md:text-2xl text-[14px] font-inter dark:text-white/75">Дата
                                                        регистрации</p>

                                                </div>
                                                <span class="inline-block w-[105px] h-[1px] bg-[#3F3F3F]"></span>
                                                <p class="md:text-5xl text-[30px] font-medium dark:text-white font-inter">
                                                    13.02.2024</p>
                                            </div>

                                            <div
                                                class="flex items-center justify-between dark:bg-[#808080]/[0.05] dark:border dark:border-white/15 border border-[000000]/[0.13] rounded-[29px] py-6 px-8">
                                                <div>
                                                    <p class="md:text-2xl text-[14px] font-inter dark:text-white/75">Всего
                                                        серверов</p>
                                                    <span class="text-sm font-light font-inter text-white/15">было
                                                        приобретено</span>
                                                </div>
                                                <span class="inline-block w-[105px] h-[1px] bg-[#3F3F3F]"></span>
                                                <p class="md:text-5xl text-[30px] font-medium dark:text-white font-inter">
                                                    256 шт</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 mt-10">
                            <div
                                class="dark:bg-[#808080]/[0.05] dark:border  overflow-x-scroll dark:border-white/15 border border-[000000]/[0.13] rounded-[54px] px-[45px] py-[35px]">
                                <div class="flex items-center md:gap-16 gap-6 border-b border-[#313131]/[0.22] pb-5">
                                    <span
                                        class="inline-block font-sfpro font-medium md:text-xl  xl:text-[15px] dark:bg-[#808080]/[0.05] dark:border dark:border-white/15 border border-[000000]/[0.13] dark:text-white py-3 px-8 rounded-[100px]  border-[#313131]/[0.22]">Операции
                                        за всё время</span>

                                    <span class="block text-base text-left dark:text-white/[.70] font-sfpro font-medium">
                                        месяц
                                    </span>
                                    <span class="block text-base text-left dark:text-white/[.70] font-sfpro font-medium">
                                        год
                                    </span>
                                </div>
                                <table class="w-full overflow-x-scroll">
                                    <thead class="border-b py-4 dark:border-[#313131]">
                                        <tr class="">
                                            <th scope="col"
                                                class="px-6 py-7 text-base text-left dark:text-white/[.70] font-sfpro font-medium">
                                                Описание товара</th>
                                            <th scope="col"
                                                class="px-6 py-7 text-base text-center dark:text-white/[.70] font-sfpro font-medium">
                                                Срок действия</th>
                                            <th scope="col"
                                                class="px-6 py-7 text-base text-center dark:text-white/[.70] font-sfpro font-medium">
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
                                                        class="inline-block md:text-2xl text-[15px] font-medium dark:text-white font-inter">
                                                        Покупка виртуального сервера
                                                        <span class="block text-[#535353] text-[10px]">8 vCore/32GB
                                                            RAM/512
                                                            GB NVME</span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="px-6 text-center py-7">
                                                <div class="gap-2 font-inter">
                                                    <span class="text-2xl block dark:text-white/[0.87]">21.02.2024</span>
                                                </div>
                                            </td>
                                            <td class="px-6 text-center py-7"><span
                                                    class="md:text-5xl text-[15px] font-inter font-medium dark:text-white/[0.87]">1500$</span>
                                            </td>
                                        </tr>
                                        <tr class="border-b dark:border-[#313131]">
                                            <td class="flex px-6 font-medium py-7">
                                                <div class="flex items-center gap-2">
                                                    <span
                                                        class="mb-3 flex justify-center items-center rounded-full bg-[#202020] w-11 h-11 font-inter font-medium text-2xl text-white">1</span>
                                                    <span
                                                        class="inline-block md:text-2xl text-[15px] font-medium dark:text-white font-inter">
                                                        Покупка виртуального сервера
                                                        <span class="block text-[#535353] text-[10px]">8 vCore/32GB
                                                            RAM/512
                                                            GB NVME</span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="px-6 text-center py-7">
                                                <div class="gap-2 font-inter">
                                                    <span class="text-2xl block dark:text-white/[0.87]">21.02.2024</span>
                                                </div>
                                            </td>
                                            <td class="px-6 text-center py-7"><span
                                                    class="md:text-5xl text-[15px font-inter font-medium dark:text-white/[0.87]">1500$</span>
                                            </td>
                                        </tr>
                                        <tr class="border-b dark:border-[#313131]">
                                            <td class="flex px-6 font-medium py-7">
                                                <div class="flex items-center gap-2">
                                                    <span
                                                        class="mb-3 flex justify-center items-center rounded-full bg-[#202020] w-11 h-11 font-inter font-medium text-2xl text-white">1</span>
                                                    <span
                                                        class="inline-block md:text-2xl text-[15px] font-medium dark:text-white font-inter">
                                                        Покупка виртуального сервера
                                                        <span class="block text-[#535353] text-[10px]">8 vCore/32GB
                                                            RAM/512
                                                            GB NVME</span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="px-6 text-center py-7">
                                                <div class="gap-2 font-inter">
                                                    <span class="text-2xl block dark:text-white/[0.87]">21.02.2024</span>
                                                </div>
                                            </td>
                                            <td class="px-6 text-center py-7"><span
                                                    class="md:text-5xl text-[15px] font-inter font-medium dark:text-white/[0.87]">1500$</span>
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
