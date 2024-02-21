<!-- ====== Navbar Section Start -->
<header x-data="{MobileNavOpen: false}">
    <nav x-data="navigation"  x-effect="changeNavBg"  :class="scrollBg ? 'bg-light-primary dark:bg-dark-primary' : 'bg-white dark:bg-gray-900'" class="w-full fixed z-20 border-gray-200 dark:bg-gray-900 px-2" >
        <div class="max-w-screen-2xl flex flex-wrap items-center justify-between mx-auto p-3">
            <a href="https://github.com/jedjose2000" class="flex items-center space-x-3 rtl:space-x-reverse">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">JL</span>
                <h4>.dev</h4>
            </a>
            <button @click="MobileNavOpen =! MobileNavOpen" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
            <div class="w-full md:block md:w-auto" :class="MobileNavOpen || 'hidden'">
                <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg  md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0  dark:bg-gray-800 dark:border-gray-700">
                    <template x-for="nav in navigations">
                        <li>
                            <a :href="nav.link" class="block py-2 px-3 text-cyan-950 dark:text-dark rounded md:p-0 md:dark:text-blue-500" aria-current="page" x-text="nav.name"></a>
                        </li>
                    </template>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- ====== Navbar Section End -->
