@extends('components.layouts.dashboard')

@section('main-content')
    <div class="">
        <div class="right-part py-8 px-5 md:px-16 overflow-hidden rounded-[46px] bg-white dark:backdrop-blur-[100px]">
            <div class="dark:text-white flex justify-between mb-9 border-b pb-6 dark:border-[#313131]">
                <p class="md:text-2xl text-[13px] font-medium">
                    Роли
                </p>
                <div class="lg:flex hidden items-center gap-3">
                    <a href="#"><img src="{{ asset('assets/images/Avatar-big.png') }}" alt=""
                            class="h-[40px] w-[40px]"></a>
                    <a href="#"
                        class="font-inter font-medium text-lg block bg-[#202020] text-white rounded-3xl px-5 py-2">Выйти</a>
                </div>
            </div>

            <div class="">
                <div class="flex w-full flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <table class="min-w-full text-sm font-light text-left dark:text-white">
                                    <thead class="border-b py-4 dark:border-[#313131]">
                                        <tr class="">
                                            <th scope="col"
                                                class="px-6 py-7 text-xs md:text-sm dark:text-white/[.70] font-inter font-medium">
                                                ID
                                                название</th>

                                            <th scope="col"
                                                class="px-6 py-7 text-xs md:text-sm dark:text-white/[.70] font-inter font-medium text-left">
                                                Дата создания</th>
                                            <th scope="col" class="px-6 text-right py-7">
                                                <a href="{{ url('/create-roles') }}"
                                                    class="dark:bg-[#86DA2F] bg-[#202020] dark:text-black text-white font-inter font-medium md:text-base text-xs py-3 px-7 rounded-[16px]">Создать</a>
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr class="border-b dark:border-[#313131]">
                                            <td class="px-6 font-medium whitespace-nowrap py-7"><span
                                                    class="hidden md:inline-block mr-10 text-2xl font-medium font-inter">1</span>
                                                <span
                                                    class="inline-block text-base md:text-xl font-medium font-inter">Admin</span>
                                            </td>

                                            <td class="px-6 text-left whitespace-nowrap py-7 "><span
                                                    class="md:text-2xl text-base font-inter dark:text-white/[0.87]">15.02.2024</span>
                                            </td>
                                            <td class="px-6 text-right whitespace-nowrap py-7"><a href="#"
                                                    class="md:text-base text-xs font-medium font-inter bg-[#202020] text-white py-3 px-4 rounded-2xl">Редактировать</a>
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
