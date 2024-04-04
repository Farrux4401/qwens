@extends('components.layouts.dashboard')

@section('main-content')
    <div class="right-part py-8 md:px-16 px-5 overflow-hidden rounded-[46px] bg-white dark:backdrop-blur-[100px]">
        <div class="dark:text-white flex justify-between mb-9 border-b pb-6 dark:border-[#313131]">
            <p class="md:text-2xl text-[13px] font-medium">
                Редактирование роли
            </p>
            <div class="lg:flex hidden items-center gap-3">
                <a href="#"><img src="{{ asset('assets/images/Avatar-big.png') }}" alt=""
                        class="h-[40px] w-[40px]"></a>
                <a href="#"
                    class="font-inter font-medium text-lg block bg-[#202020] text-white rounded-3xl px-5 py-2">Выйти</a>
            </div>
        </div>
        <div class="">
            <form>
                <div class="md:border md:border-white/[0.13] border-none py-8 px-11 rounded-none md:rounded-[54px] mb-9">
                    <h2 class="dark:text-white md:text-2xl text-[13px] font-medium border-b pb-4 mb-7 border-[#313131]">
                        Выберите полномочия</h2>

                    <div class="flex flex-wrap gap-3 justify-between ">
                        <div class="flex flex-col gap-5">
                            <label class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label>


                        </div>
                        <div class="flex flex-col gap-5">
                            <label class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label>


                        </div>
                        <div class="flex flex-col gap-5">
                            <label class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label
                                class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label
                                class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label
                                class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label
                                class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label
                                class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label
                                class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label
                                class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label
                                class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label>


                        </div>
                        <div class="flex flex-col gap-5">
                            <label class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label
                                class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label
                                class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label
                                class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label
                                class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label
                                class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label
                                class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label
                                class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label
                                class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label
                                class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label
                                class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label
                                class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label>
                        </div>
                        <div class="flex flex-col gap-5">
                            <label class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label
                                class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label
                                class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label
                                class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label
                                class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label
                                class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label
                                class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label
                                class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label
                                class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label
                                class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label
                                class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label><label
                                class="flex items-center gap-4 text-base font-medium dark:text-white font-inter">
                                <input type="checkbox"
                                    class="bg-amber-100 accent-[#1D1E1F] w-[24px] h-[24px] cursor-pointer bg" checked>
                                VIEW_CLIENTS
                            </label>
                        </div>
                    </div>

                </div>
                <div
                    class="max-w-[760px] rounded-[54px] dark:bg-form-gr w-full p-10 overflow-hidden border border-[#000000]/[0.13] dark:border dark:border-white/[0.13]">
                    <label for=""
                        class="block mb-6 pb-5 font-medium text-xl dark:text-white border-b border-[#313131]">Название
                        роли</label>
                    <label class="flex flex-wrap gap-8">
                        <input type="text" placeholder="Название..."
                            class="block dark:bg-[#0D0D0D] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg w-[460px] dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0">

                        <button type="submit"
                            class="dark:bg-[#86DA2F] bg-[#202020] text-white dark:text-black font-inter font-medium text-base py-3 px-7 rounded-[16px] ">
                            Сохранить роль
                        </button>
                        <button type="submit"
                            class="dark:bg-[#202020]  block md:hidden bg-[#202020] text-white font-inter font-medium text-base py-3 px-7 rounded-[16px] ">
                            Очистить
                        </button>
                    </label>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection
