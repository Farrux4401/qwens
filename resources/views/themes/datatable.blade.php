@extends('components.layouts.dashboard')

@section('main-content')
    <div class="">
        <div class="right-part py-8 md:px-16 px-5 overflow-hidden bg-white dark:rounded-[46px] ">
            <div class="dark:text-white flex justify-between mb-9 border-b pb-6 dark:border-[#313131]">
                <p class="md:text-2xl text-[13px] font-medium">
                    Настраивамые параметры
                </p>
                <div class="lg:flex hidden items-center gap-3">
                    <a href="#"><img src="{{ asset('assets/images/Avatar-big.png') }}" alt=""
                            class="h-[40px] w-[40px]"></a>
                    <a href="#"
                        class="font-inter font-medium text-lg block text-white bg-[#202020] rounded-3xl px-5 py-2">Выйти</a>
                </div>
            </div>

            <div class="">
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <table class="min-w-full text-sm font-light text-left text-surface dark:text-white">
                                    <thead class="border-b py-4 dark:border-[#313131]">
                                        <tr class="">
                                            <th scope="col"
                                                class="px-6 py-7 text-xs md:text-sm dark:text-white/[.70] font-inter font-medium">
                                                ID
                                                название</th>
                                            <th scope="col"
                                                class="px-6 py-7 text-xs md:text-sm dark:text-white/[.70] font-inter font-medium text-center">
                                                Описание</th>
                                            <th scope="col"
                                                class="px-6 py-7 text-xs md:text-sm dark:text-white/[.70] font-inter font-medium text-center">
                                                Дата создания</th>
                                            <th scope="col" class="px-6 text-right py-7">
                                                <a href="{{ url('/create-parameter') }}"
                                                    class="dark:bg-[#86DA2F] bg-[#202020] dark:text-black text-white font-inter font-medium text-xs md:text-base py-3 px-7 rounded-[16px]">Создать</a>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-b dark:border-[#313131]">
                                            <td class="px-6 font-medium whitespace-nowrap py-7">
                                                <span
                                                    class="hidden md:inline-block mr-10 text-2xl font-medium font-inter">1</span>
                                                <span
                                                    class="inline-block text-base md:text-xl font-medium font-inter">Параметр
                                                    1</span>
                                            </td>
                                            <td class="px-6 text-center py-7"><span
                                                    class="md:text-lg text-[10px]  md:text-white text-[#535353]/[.87] max-w-[200px] block mx-auto">Редактирование
                                                    главной
                                                    страницы</span>
                                            </td>
                                            <td class="px-6 text-center whitespace-nowrap py-7"><span
                                                    class="md:text-2xl text-xs font-inter dark:text-white/[0.87]">15.02.2024</span>
                                            </td>
                                            <td class="px-6 text-right whitespace-nowrap py-7"><a href="#"
                                                    class="text-xs  md:text-base font-medium font-inter text-white bg-[#202020] py-3 px-4 rounded-2xl">Редактировать</a>
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
