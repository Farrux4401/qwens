<aside id="sidebar"
    class="fixed top-0 left-0 z-20 flex flex-col flex-shrink-0 hidden w-64 h-full pt-16 duration-75 lg:flex transition-width"
    aria-label="Sidebar">

    <div class="relative flex flex-col flex-1 min-h-0 pt-0 bg-white dark:bg-black">

        <div class="flex flex-col h-full pt-5 overflow-y-auto">
            <div class="flex flex-col justify-between h-full px-3 bg-white dark:bg-black ">

                <div class="flex flex-col gap-y-4">
                    <a href="/"
                        class="w-[220px] text-xl pb-10 mx-auto text-center justify-center font-bold flex items-center lg:ml-2.5">
                        <img src="{{ asset('assets/images/logo.svg') }}" class="w-[68px] h-[60px] mr-2" alt="Logo">
                    </a>
                    <ul
                        class="rounded-[34px] p-3 bg-[#808080]/[.12] backdrop:blur-[100px] bg-gradient-to-b from-[#040404]/[0.01] to-[#4A4A4A]/[0.01] colored-bordered-block active-border">
                        <li>
                            <a href="/"
                                class="text-[19px] font-medium dark:text-white/[.23] text-black/25 hover:text-black rounded-full flex items-center p-3 hover:p-3  dark:hover:bg-[#5E5E5E] hover:bg-white group">
                                <span
                                    class="border-2 w-[24px] h-[24px] border-white/[.23] border-dashed rounded"></span>
                                <span class="ml-3">Главная</span>
                            </a>
                        </li>
                        <li>
                            <a href="/virtual"
                                class="text-[19px] font-medium dark:text-white/[.23] text-black/25 hover:text-black rounded-full flex items-center p-3 hover:p-3  dark:hover:bg-[#5E5E5E] hover:bg-white group">
                                <span
                                    class="border-2 w-[24px] h-[24px] border-white/[.23] border-dashed rounded"></span>
                                <span class="ml-3">Виртуальные</span>
                            </a>
                        </li>
                        <li>
                            <a href="/"
                                class="text-[19px] font-medium dark:text-white/[.23] text-black/25 hover:text-black rounded-full flex items-center p-3 hover:p-3  dark:hover:bg-[#5E5E5E] hover:bg-white group">
                                <span
                                    class="border-2 w-[24px] h-[24px] border-white/[.23] border-dashed rounded"></span>
                                <span class="ml-3">Выделенные</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="rounded-[34px] p-3 bg-[#808080]/[.12] colored-bordered-block active-border">
                        <li>
                            <a href="/"
                                class="text-[19px] font-medium dark:text-white/[.23] text-black/25 hover:text-black rounded-full flex items-center p-3 hover:p-3  dark:hover:bg-[#5E5E5E] hover:bg-white group">
                                <span
                                    class="border-2 w-[24px] h-[24px] border-white/[.23] border-dashed rounded"></span>
                                <span class="ml-3">Финансы</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/profile') }}"
                                class="text-[19px] font-medium dark:text-white/[.23] text-black/25 hover:text-black rounded-full flex items-center p-3 hover:p-3  dark:hover:bg-[#5E5E5E] hover:bg-white group">
                                <span
                                    class="border-2 w-[24px] h-[24px] border-white/[.23] border-dashed rounded"></span>
                                <span class="ml-3">Профиль</span>
                            </a>
                        </li>
                        <li>
                            <a href="/"
                                class="text-[19px] font-medium dark:text-white/[.23] text-black/25 hover:text-black rounded-full flex items-center p-3 hover:p-3  dark:hover:bg-[#5E5E5E] hover:bg-white group">
                                <span
                                    class="border-2 w-[24px] h-[24px] border-white/[.23] border-dashed rounded"></span>
                                <span class="ml-3">Настройки</span>
                            </a>
                        </li>
                        <li>
                            <a href="/"
                                class="text-[19px] font-medium dark:text-white/[.23] text-black/25 hover:text-black rounded-full flex items-center p-3 hover:p-3  dark:hover:bg-[#5E5E5E] hover:bg-white group">
                                <span
                                    class="border-2 w-[24px] h-[24px] border-white/[.23] border-dashed rounded"></span>
                                <span class="ml-3">Обьявления</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="rounded-[34px] p-3 dark:bg-[#808080]/[.12] border border-[#C6C6C6] ">
                        <li>
                            <a href="/"
                                class="text-[19px] font-medium bg-[#F1F1F1]  dark:bg-[#808080]/[0.12] dark:text-white/[.23] text-black/25 hover:text-black rounded-full flex items-center p-3 hover:p-3 dark:hover:bg-[#5E5E5E] hover:bg-[#fff] group">
                                <span
                                    class="dark:border-2 w-[24px] h-[24px] dark:border-white/[.23] border-dashed rounded"></span>
                                <span class="ml-3">Админ-панель</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="pt-2 space-y-2">
                    <ul class="rounded-[34px] p-3">
                        <li>
                            <a href="/"
                                class="text-[19px] font-medium dark:text-white/[.23] text-[#6D6D6D] rounded-full flex items-center p-3 ">
                                <span
                                    class="border-2 w-[24px] h-[24px] border-white/[.23] border-dashed rounded"></span>
                                <span class="ml-3">Жалоба</span>
                            </a>
                        </li>
                        <li>
                            <a href="/"
                                class="text-[19px] font-medium dark:text-white/[.23] text-[#6D6D6D] rounded-full flex items-center p-3  ">
                                <span
                                    class="border-2 w-[24px] h-[24px] border-white/[.23] border-dashed rounded"></span>
                                <span class="ml-3">Поддержка</span>
                            </a>
                        </li>
                        <li>
                            <a href="/"
                                class="text-[19px] font-medium dark:text-white/[.23] text-[#6D6D6D] rounded-full flex items-center p-3 ">
                                <span
                                    class="border-2 w-[24px] h-[24px] border-white/[.23] border-dashed rounded"></span>
                                <span class="ml-3">Контакты</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</aside>
