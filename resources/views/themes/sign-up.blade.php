<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white dark:bg-black">
    <button x-data={darkMode=true} @click="$store.darkMode.toggle()" class="text-white bg-red-400">Toggle
        Dark
        Mode</button>
    <div class="w-full h-full bg-white dark:bg-black">

        <div class="h-full md:px-16 px-5 overflow-hidden py-8 right-part ">
            <div class="md:flex hidden justify-center mb-32">
                <img src="{{ asset('assets/images/logo.svg') }}" alt="">
            </div>
            <form action="https://api.form-data.com/f/bqtxth46icif4r4ot1p5qn" method="post"
                class="md:w-[600px] mx-auto dark:bg-[#808080]/[0.05] md:dark:border md:dark:border-white/15 md:border md:border-[000000]/[0.13] md:rounded-[54px] rounded-none border-none p-3 bg-[#fff] md:colored-bordered-block md:active-border py-12 px-14">
                <h3
                    class="font-sfpro flex items-center justify-between text-[25px] dark:text-white border-b border-[#313131] pb-5 mb-6">
                    Регистрация
                    <img class="block md:hidden" src="{{ asset('assets/images/logo.svg') }}" alt="">
                </h3>

                <div class="mb-8">
                    <label class="block mb-2 text-sm font-sfpro dark:text-white/50">Логин или E-mail</label>
                    <input
                        class="md:w-[460px] w-full dark:bg-[#202020] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0"
                        type="email">
                </div>

                <div class="mb-8">
                    <label class="block mb-2 text-sm font-sfpro dark:text-white/50">Пароль</label>
                    <input
                        class="md:w-[460px] w-full dark:bg-[#202020] bg-[#000000]/[0.22] text-[#000000]/[0.22] px-4 py-5 rounded-lg dark:text-white font-sfpro text-lg dark:placeholder:text-[#FFFFFF]/[0.22] placeholder:text-[#000]/[0.22] focus:outline-0"
                        type="password">
                </div>
                <div class="w-full mb-8">
                    <div class="w-full g-recaptcha" data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR"></div>
                </div>
                <div class="mb-5">
                    <p class="font-inter text-[13px] dark:text-[#5B5B5B]"><span class="dark:text-[#8F8F8F]">Создавая
                            аккаунт,
                            Вы
                            соглашаетесь с</span>
                        Политикой
                        конфиденциальности и
                        условиями
                        пользования.</p>
                </div>

                <div class="mb-5">
                    <button class="font-sfpro text-[#FFFFFF] text-center bg-[#202020] rounded-xl py-4 px-6 w-full"
                        type="submit">Зарегестрироваться</button>
                </div>
                <div class="flex justify-center gap-5 mb-8">
                    <p class="font-sfpro font-medium text-xs text-[#383838]">Есть аккаунт?</p>
                    <a class="font-sfpro font-medium text-xs text-[#FFFFFF]" href="#">Войти</a>
                </div>

                <div class="flex flex-wrap justify-center gap-4">
                    <a href="#"
                        class="flex items-center justify-center gap-3 rounded-xl bg-[#86DA2F] py-4 px-8 font-inter font-medium text-[14px] text-black">
                        <img src="{{ asset('assets/images/vk.svg') }}" alt="Vk">
                        <span>ВК</span>
                    </a>
                    <a href="#"
                        class="flex items-center justify-center gap-3 rounded-xl bg-[#86DA2F] py-4 px-8 font-inter font-medium text-[14px] text-black">
                        <img src="{{ asset('assets/images/telegram.svg') }}" alt="Vk">
                        <span>Telegram</span>
                    </a>
                    <a href="#"
                        class="flex items-center justify-center gap-3 rounded-xl bg-[#86DA2F] py-4 px-8 font-inter font-medium text-[14px] text-black">
                        <img src="{{ asset('assets/images/google.svg') }}" alt="Vk">
                    </a>
                </div>
            </form>
        </div>

    </div>
</body>

</html>
