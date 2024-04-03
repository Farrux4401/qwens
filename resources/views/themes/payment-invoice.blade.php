@extends('components.layouts.dashboard')

@section('main-content')
    <div class="bg-white dark:bg-black">
        <div class="block w-[690px] bg-form-gr mx-auto py-28 px-16 border border-white/15 rounded-3xl">
            <img class="mb-16" src="{{ asset('assets/images/logo.svg') }}" alt="logo">

            <h2 class="text-xl font-medium text-white font-inter">New invoice - payment #81278</h2>
            <p class="font-inter font-medium text-base text-white/[0.70]">Новая транзакция по покупке виртуального сервера
            </p>

            <div class="mt-12">
                <table class="w-full font-inter ">
                    <thead class="">
                        <tr class="border-y border-[#313131] ">
                            <th class="py-5 text-lg font-medium text-left text-white">Product</th>
                            <th class="py-5 text-lg font-medium text-right text-white">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-y border-[#313131]">
                            <td class="py-5">
                                <span class="block font-medium text-white/70">Server №1 (2024-02-15 - 2024-03-15)</span>
                            </td>
                            <td class="py-5 text-right">
                                <button type="button"
                                    class="bg-[#86DA2F] rounded-[19px] font-medium text-sm py-2 px-3">45.99$</button>
                            </td>
                        </tr>
                        <tr class="border-y border-[#313131]">
                            <td class="py-5">
                                <span class="block font-medium text-white/70">Server №1 (2024-02-15 - 2024-03-15)</span>
                            </td>
                            <td class="py-5 text-right">
                                <button type="button"
                                    class="bg-[#86DA2F] rounded-[19px] font-medium text-sm py-2 px-3">45.99$</button>
                            </td>
                        </tr>
                        <tr class="border-y border-[#313131]">
                            <td class="py-5">
                                <span class="block font-medium text-white/70">Server №1 (2024-02-15 - 2024-03-15)</span>
                            </td>
                            <td class="py-5 text-right">
                                <button type="button"
                                    class="bg-[#86DA2F] rounded-[19px] font-medium text-sm py-2 px-3">45.99$</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="flex justify-center mt-14">
                    <button type="button" class="bg-[#86DA2F] rounded-[19px] font-medium text-xl py-4 px-6 flex">Pay
                        now</button>
                </div>
            </div>

            <div class="font-medium font-inter text-white/70 mt-28">
                <span class="block">Thanks,</span>
                <span class="block">QWINS.CO 2024</span>
            </div>
        </div>
    </div>
@endsection
