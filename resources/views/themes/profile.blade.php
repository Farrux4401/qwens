@extends('components.layouts.dashboard')

@section('main-content')
    <div class="light">
        <div x-data="{ tab: 'tab1' }"
            class="right-part py-8 md:px-16 overflow-hidden px-5 rounded-[46px] bg-white dark:backdrop-blur-[100px]">
            <div class="dark:text-white flex justify-between mb-9 border-b pb-6 dark:border-[#313131]">

                <div class="font-sfpro">
                    <ul class="flex w-full px-5 gap-x-11">
                        <li @click="tab = 'tab1'"
                            class="lg:text-2xl text-[13px] font-medium cursor-pointer text-[#000]/[0.22] dark:text-[#fff]/[0.25]"
                            x-bind:class="{ 'text-[#000] dark:text-[#fff]': tab === 'tab1' }">
                            Панель управления
                        </li>
                        <li @click="tab = 'tab2'"
                            class="lg:text-2xl text-[13px] font-medium cursor-pointer text-[#000]/[0.22] dark:text-white/25"
                            x-bind:class="{ 'text-[#000] dark:text-[#fff]': tab === 'tab2' }">
                            Заказы
                        </li>
                        <li @click="tab = 'tab3'"
                            class="lg:text-2xl text-[13px] font-medium cursor-pointer text-[#000]/[0.22] dark:text-white/25"
                            x-bind:class="{ 'text-[#000] dark:text-[#fff]': tab === 'tab3' }">
                            Платежи
                        </li>
                        <li @click="tab = 'tab4'"
                            class="lg:text-2xl text-[13px] font-medium cursor-pointer text-[#000]/[0.22] dark:text-white/25"
                            x-bind:class="{ 'text-[#000] dark:text-[#fff]': tab === 'tab4' }">
                            Клиенты
                        </li>
                        <li @click="tab = 'tab5'"
                            class="lg:text-2xl text-[13px] font-medium cursor-pointer text-[#000]/[0.22] dark:text-white/25"
                            x-bind:class="{ 'text-[#000] dark:text-[#fff]': tab === 'tab5' }">
                            Тикеты
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
                        <div class="dark:text-white">
                            <div class="md:grid grid md:grid-cols-5 gap-16">
                                <div class="md:col-span-3 col-span-1">
                                    <div
                                        class="dark:bg-[#000] border border-[#000000]/[0.13] dark:border dark:border-white/15 rounded-[54px] px-[45px] py-[35px]">
                                        <div class="mb-24">
                                            <div x-data="app()" x-cloak class="px-4">
                                                <div class="py-2 mx-auto">
                                                    <div class="rounded-lg shadow">
                                                        <div class="md:flex md:justify-between md:items-center">
                                                            <div>
                                                                <h2 class="text-base dark:text-white/50">
                                                                    01 - 25 Января, 2024</h2>
                                                            </div>
                                                        </div>

                                                        <div class="relative my-8 line">
                                                            <!-- Tooltip -->
                                                            <template x-if="tooltipOpen == true">
                                                                <div x-ref="tooltipContainer"
                                                                    class="absolute z-10 block h-auto p-0 m-0 rounded-lg shadow-lg"
                                                                    :style="`bottom: ${tooltipY}px; left: ${tooltipX}px`">
                                                                    <div class="p-2 bg-white rounded-lg shadow-xs">
                                                                        <div
                                                                            class="flex items-center justify-between text-sm">
                                                                            <div class="text-black">Sales:</div>
                                                                            <div class="ml-2 font-bold text-black">
                                                                                <span x-html="tooltipContent"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </template>


                                                            <!-- Bar Chart -->
                                                            <div class="flex -mx-2 items-end mb-2 bg-[#0D0D0D]">
                                                                <template x-for="data in chartData">
                                                                    <div class="w-1/6 px-2">
                                                                        <div :style="`height: ${data}px`"
                                                                            class="transition ease-in duration-200 bg-[#979797] hover:bg-[#fff] relative"
                                                                            @mouseenter="showTooltip($event); tooltipOpen = true"
                                                                            @mouseleave="hideTooltip($event)">
                                                                            <div x-text="data"
                                                                                class="absolute top-0 left-0 right-0 -mt-6 text-sm text-center dark:text-white">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </template>
                                                            </div>

                                                            <!-- Labels -->
                                                            <div class="mx-auto border-t border-gray-400"
                                                                :style="`height: 1px; width: ${ 100 - 1/chartData.length*100 + 3}%`">
                                                            </div>
                                                            <div class="flex items-end -mx-2">
                                                                <template x-for="data in labels">
                                                                    <div class="w-1/6 px-2">
                                                                        <div class="relative bg-red-600">
                                                                            <div class="absolute top-0 left-0 right-0 h-2 mx-auto -mt-px text-center bg-gray-400"
                                                                                style="width: 1px"></div>
                                                                            <div x-text="data"
                                                                                class="absolute top-0 left-0 right-0 mt-3 text-sm text-center dark:text-white/60">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </template>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-6 font-sfpro">
                                            <p class="font-medium text-7xl">1091,54$</p>
                                            <span class="text-lg text-white/30">с начала месяца, вы потратили</span>
                                        </div>
                                        <div class="flex flex-wrap gap-4">
                                            <a class="block font-inter font-medium dark:text-black text-white text-center py-[9px] px-4 dark:bg-[#86DA2F] bg-[#292929] rounded-[19px]"
                                                href="#">Открыть список
                                                всех
                                                заказов</a>
                                            <a class="block font-inter font-medium text-white text-center py-[9px] px-4 dark:bg-[#292929] bg-[#292929] rounded-[19px]"
                                                href="#">Открыть “Финансы”</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="md:col-span-2 col-span-1">
                                    <div
                                        class="dark:border dark:border-white/15 border border-[#000000]/[0.13] rounded-[54px] px-[45px] py-[35px]">
                                        <span
                                            class="inline-block mb-6 font-sfpro font-medium text-xl dark:text-white bg-white/5 py-3 px-8 rounded-[100px]">Активные
                                            тикеты</span>
                                        <div class="flex flex-col w-full">
                                            <div
                                                class="flex w-full items-center justify-between  border-y border-[#313131] py-6">
                                                <div class="flex items-center w-full gap-5">
                                                    <img class="w-10 h-10 rounded-xl"
                                                        src="{{ asset('assets/images/Avatar-2.png') }}" alt="avatar">
                                                    <div class="font-sfpro">
                                                        <p class="text-2xl font-medium dark:text-white">Sssnnnmmm</p>
                                                        <span
                                                            class="inline-block text-sm dark:text-[#535353]/[0.87]">sssnnnmmm@gmail.com</span>
                                                    </div>
                                                </div>
                                                <a class="block font-inter font-medium dark:text-black text-white text-center py-[9px] px-4 dark:bg-[#86DA2F] bg-[#292929] rounded-[19px]"
                                                    href="#">Открыть</a>
                                            </div>
                                            <div
                                                class="flex w-full items-center justify-between gap-5 border-y border-[#313131] py-6">
                                                <div class="flex items-center w-full gap-5">
                                                    <img class="w-10 h-10 rounded-xl"
                                                        src="{{ asset('assets/images/Avatar-2.png') }}" alt="avatar">
                                                    <div class="font-sfpro">
                                                        <p class="text-2xl font-medium dark:text-white">Sssnnnmmm</p>
                                                        <span
                                                            class="inline-block text-sm dark:text-[#535353]/[0.87]">sssnnnmmm@gmail.com</span>
                                                    </div>
                                                </div>
                                                <a class="block font-inter font-medium dark:text-black text-white text-center py-[9px] px-4 dark:bg-[#86DA2F] bg-[#292929] rounded-[19px]"
                                                    href="#">Открыть</a>
                                            </div>
                                            <div
                                                class="flex w-full items-center justify-between gap-5 border-y border-[#313131] py-6">
                                                <div class="flex items-center w-full gap-5">
                                                    <img class="w-10 h-10 rounded-xl"
                                                        src="{{ asset('assets/images/Avatar-2.png') }}" alt="avatar">
                                                    <div class="font-sfpro">
                                                        <p class="text-2xl font-medium dark:text-white">Sssnnnmmm</p>
                                                        <span
                                                            class="inline-block text-sm dark:text-[#535353]/[0.87]">sssnnnmmm@gmail.com</span>
                                                    </div>
                                                </div>
                                                <a class="block font-inter font-medium dark:text-black text-white text-center py-[9px] px-4 dark:bg-[#86DA2F] bg-[#292929] rounded-[19px]"
                                                    href="#">Открыть</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 mt-10">
                                <div
                                    class="dark:border dark:border-white/15 overflow-x-auto border border-[#000000]/[0.13] rounded-[54px] px-[45px] py-[35px]">
                                    <span
                                        class="inline-block mb-6 font-sfpro font-medium text-xl dark:text-white dark:bg-white/5 text-white bg-[#292929]  py-3 px-8 rounded-[100px]">Последние
                                        операции пользователей</span>
                                    <table class="w-full">
                                        <thead class="border-b py-4 dark:border-[#313131]">
                                            <tr class="">
                                                <th scope="col"
                                                    class="px-6 py-7 md:text-base text-xs text-left dark:dark:text-white/[.70] font-sfpro font-medium">
                                                    Описание товара</th>
                                                <th scope="col"
                                                    class="px-6 py-7 md:text-base text-xs text-center dark:dark:text-white/[.70] font-sfpro font-medium">
                                                    Срок действия</th>
                                                <th scope="col"
                                                    class="px-6 py-7 md:text-base text-xs text-center dark:dark:text-white/[.70] font-sfpro font-medium">
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
                                                            class="inline-block md:text-2xl text-xs font-medium dark:text-white font-inter">
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
                                                            class="md:text-2xl text-xs block dark:text-white/[0.87]">21.02.2024</span>
                                                    </div>
                                                </td>
                                                <td class="px-6 text-center py-7"><span
                                                        class="md:text-5xl text-xl font-inter font-medium dark:text-white/[0.87]">1500$</span>
                                                </td>
                                            </tr>
                                            <tr class="border-b dark:border-[#313131]">
                                                <td class="flex px-6 font-medium py-7">
                                                    <div class="flex items-center gap-2">
                                                        <span
                                                            class="mb-3 flex justify-center items-center rounded-full bg-[#202020] w-11 h-11 font-inter font-medium text-2xl text-white">1</span>
                                                        <span
                                                            class="inline-block md:text-2xl text-xs font-medium dark:text-white font-inter">
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
                                                            class="md:text-2xl text-xs block dark:text-white/[0.87]">21.02.2024</span>
                                                    </div>
                                                </td>
                                                <td class="px-6 text-center py-7"><span
                                                        class="md:text-5xl text-xl font-inter font-medium dark:text-white/[0.87]">1500$</span>
                                                </td>
                                            </tr>
                                            <tr class="border-b dark:border-[#313131]">
                                                <td class="flex px-6 font-medium py-7">
                                                    <div class="flex items-center gap-2">
                                                        <span
                                                            class="mb-3 flex justify-center items-center rounded-full bg-[#202020] w-11 h-11 font-inter font-medium text-2xl text-white">1</span>
                                                        <span
                                                            class="inline-block md:text-2xl text-xs font-medium dark:text-white font-inter">
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
                                                            class="md:text-2xl text-xs block dark:text-white/[0.87]">21.02.2024</span>
                                                    </div>
                                                </td>
                                                <td class="px-6 text-center py-7"><span
                                                        class="md:text-5xl text-xl font-inter font-medium dark:text-white/[0.87]">1500$</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div x-show="tab === 'tab2'">

                    </div>
                    <div x-show="tab === 'tab3'">

                    </div>

                </div>
            </div>


        </div>
    </div>


    <script>
        function app() {
            return {
                chartData: [112, 10, 225, 134, 101, 80, 50, 100, 200],
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
                tooltipContent: '',
                tooltipOpen: false,
                tooltipX: 0,
                tooltipY: 0,
                showTooltip(e) {
                    console.log(e);
                    this.tooltipContent = e.target.textContent
                    this.tooltipX = e.target.offsetLeft - e.target.clientWidth;
                    this.tooltipY = e.target.clientHeight + e.target.clientWidth;
                },
                hideTooltip(e) {
                    this.tooltipContent = '';
                    this.tooltipOpen = false;
                    this.tooltipX = 0;
                    this.tooltipY = 0;
                }
            }
        }
    </script>
@endsection
