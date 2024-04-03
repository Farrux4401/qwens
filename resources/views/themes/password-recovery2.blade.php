<!DOCTYPE html>
<html lang="en" class="light">

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
        <div class="h-full px-5 md:px-16 overflow-hidden py-8 right-part ">
            <div class="md:flex hidden justify-center mb-32">
                <img src="{{ asset('assets/images/logo.svg') }}" alt="">
            </div>
            <div
                class="md:w-[600px] mx-auto dark:bg-[#808080]/[0.05] md:dark:border md:dark:border-white/15 md:border md:border-[000000]/[0.13] md:rounded-[54px] rounded-none border-none bg-[#fff] md:colored-bordered-block md:active-border py-12 md:px-14 px-9">
                <h3
                    class="font-sfpro flex items-center justify-between text-[25px] dark:text-white border-b border-[#313131] pb-5 mb-6">
                    Восстановление пароля
                    <img class="block md:hidden" src="{{ asset('assets/images/logo.svg') }}" alt="">
                </h3>

                <p class="font-inter text-[15px] font-medium text-[#616161] mb-8">На вашу почту было отправлено письмо с
                    инструкцией для восстановления доступа. Если
                    письмо не
                    <span class="text-[#939393]">пришло</span>
                    - нажмите на кнопку ниже.
                </p>



                <div class="flex mb-5">
                    <button
                        class="font-sfpro font-medium dark:text-[#000000] text-center dark:bg-[#86DA2F] bg-[#202020] text-white rounded-xl py-4 px-12"
                        type="submit">Вернуться на Главную</button>
                </div>
            </div>
        </div>

    </div>
</body>

</html>
