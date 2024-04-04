@extends('components.layouts.dashboard')

@section('main-content')
    <div class="light">
        <div x-data="{ tab: 'tab1' }" class="right-part py-8 md:px-16 px-5 rounded-[46px] bg-white dark:backdrop-blur-[100px]">
            <div class="dark:text-white flex justify-between mb-9 border-b pb-6 dark:border-[#313131]">
                <div class="font-sfpro">
                    <ul class="flex w-full px-5 gap-x-11">
                        <li class="md:text-2xl text-[13px] font-medium cursor-pointer text-[#000]/[0.22] dark:text-[#fff]/[0.25]"
                            x-bind:class="{ 'text-[#000] dark:text-[#fff]': tab === 'tab1' }">
                            Cписок всех заказов
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
                                        <div class="">
                                            <table class="w-full">
                                                <thead class="border-b py-4 dark:border-[#313131]">
                                                    <tr class="">
                                                        <th scope="col"
                                                            class="px-6 py-7 text-base text-left dark:text-white/[.70] font-sfpro font-medium">
                                                            ID аккаунта </th>
                                                        <th scope="col"
                                                            class="px-6 py-7 text-base text-center dark:text-white/[.70] font-sfpro font-medium">
                                                            Заказ</th>
                                                        <th scope="col"
                                                            class="px-6 py-7 text-base text-center dark:text-white/[.70] font-sfpro font-medium">
                                                            Дата совершения</th>
                                                        <th scope="col"
                                                            class="px-6 py-7 text-base text-right dark:text-white/[.70] font-sfpro font-medium">
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="border-b dark:border-[#313131]">
                                                        <td class="flex px-6 font-medium py-7">
                                                            <div class="flex items-center w-full gap-5">
                                                                <img class="w-10 h-10 rounded-xl"
                                                                    src="{{ asset('assets/images/Avatar-2.png') }}"
                                                                    alt="avatar">
                                                                <div class="font-sfpro">
                                                                    <p
                                                                        class="md:text-2xl text-xs font-medium dark:text-white">
                                                                        Sssnnnmmm</p>
                                                                    <span
                                                                        class="inline-block text-sm dark:text-[#535353]/[0.87]">sssnnnmmm@gmail.com</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 text-center py-7">
                                                            <div class="gap-2 font-inter">
                                                                <span
                                                                    class="md:text-2xl text-xs block dark:text-white/[0.87]">Server
                                                                    1</span>

                                                            </div>
                                                        </td>
                                                        <td class="px-6 text-center py-7">
                                                            <div class="flex items-center justify-center gap-2 font-inter">
                                                                <span
                                                                    class="md:text-2xl text-xs block dark:text-white/[0.87]">15.02</span>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 text-right py-7">
                                                            <div class="flex justify-end gap-3">
                                                                <a class="block font-inter bg-[#202020] rounded-[19px] py-3 px-5 text-white font-medium"
                                                                    href="#">Выдать</a>
                                                                <a class="block bg-[#202020] rounded-[19px] py-3 px-5"
                                                                    href="#">
                                                                    <img class=""
                                                                        src="{{ asset('assets/images/settings.svg') }}"
                                                                        alt="">
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="border-b dark:border-[#313131]">
                                                        <td class="flex px-6 font-medium py-7">
                                                            <div class="flex items-center w-full gap-5">
                                                                <img class="w-10 h-10 rounded-xl"
                                                                    src="{{ asset('assets/images/Avatar-2.png') }}"
                                                                    alt="avatar">
                                                                <div class="font-sfpro">
                                                                    <p
                                                                        class="md:text-2xl text-xs font-medium dark:text-white">
                                                                        Sssnnnmmm</p>
                                                                    <span
                                                                        class="inline-block text-sm dark:text-[#535353]/[0.87]">sssnnnmmm@gmail.com</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 text-center py-7">
                                                            <div class="gap-2 font-inter">
                                                                <span
                                                                    class="md:text-2xl text-xs block dark:text-white/[0.87]">Server
                                                                    1</span>

                                                            </div>
                                                        </td>
                                                        <td class="px-6 text-center py-7">
                                                            <div class="flex items-center justify-center gap-2 font-inter">
                                                                <span
                                                                    class="md:text-2xl text-xs block dark:text-white/[0.87]">15.02</span>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 text-right py-7">
                                                            <div class="flex justify-end gap-3">
                                                                <a class="block font-inter bg-[#202020] rounded-[19px] py-3 px-5 text-white font-medium"
                                                                    href="#">Выдать</a>
                                                                <a class="block bg-[#202020] rounded-[19px] py-3 px-5"
                                                                    href="#">
                                                                    <img src="{{ asset('assets/images/settings.svg') }}"
                                                                        alt="">
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="border-b dark:border-[#313131]">
                                                        <td class="flex px-6 font-medium py-7">
                                                            <div class="flex items-center w-full gap-5">
                                                                <img class="w-10 h-10 rounded-xl"
                                                                    src="{{ asset('assets/images/Avatar-2.png') }}"
                                                                    alt="avatar">
                                                                <div class="font-sfpro">
                                                                    <p
                                                                        class="md:text-2xl text-xs font-medium dark:text-white">
                                                                        Sssnnnmmm</p>
                                                                    <span
                                                                        class="inline-block text-sm text-[#535353]/[0.87]">sssnnnmmm@gmail.com</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 text-center py-7">
                                                            <div class="gap-2 font-inter">
                                                                <span
                                                                    class="md:text-2xl text-xs block dark:text-white/[0.87]">Server
                                                                    1</span>

                                                            </div>
                                                        </td>
                                                        <td class="px-6 text-center py-7">
                                                            <div class="flex items-center justify-center gap-2 font-inter">
                                                                <span
                                                                    class="md:text-2xl text-xs block dark:text-white/[0.87]">15.02</span>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 text-right py-7">
                                                            <div class="flex justify-end gap-3">
                                                                <a class="block font-inter bg-[#202020] rounded-[19px] py-3 px-5 text-white font-medium"
                                                                    href="#">Выдать</a>
                                                                <a class="block bg-[#202020] rounded-[19px] py-3 px-5"
                                                                    href="#">
                                                                    <img src="{{ asset('assets/images/settings.svg') }}"
                                                                        alt="">
                                                                </a>
                                                            </div>
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
