<header x-data="{ mobileMenuOpen : false }"
        class="cc_navigation navigation flex flex-wrap flex-row justify-between md:items-center md:space-x-4 bg-white py-6 pt-5 px-6 relative">
        <button @click="mobileMenuOpen = !mobileMenuOpen"
            class="inline-block md:hidden w-8 h-8 bg-gray-200 text-gray-600 p-1">
            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
        <nav class="absolute md:relative top-16 left-0 md:top-0 z-20 md:flex flex-col md:flex-row md:space-x-6 font-semibold w-full md:w-auto bg-white shadow-md rounded-lg md:rounded-none md:shadow-none md:bg-transparent p-6 pt-0 md:p-0"
            :class="{ 'flex' : mobileMenuOpen , 'hidden' : !mobileMenuOpen}" @click.away="mobileMenuOpen = false">
            <p data-aos="zoom-in-down" data-aos-delay="500" href="#" class="ocip1 cc_gradient block py-1 text-indigo-600 hover:underline cc_a_1">Home</p>
            <a data-aos="zoom-in-down" data-aos-delay="600" href="/team" class="ocip1 block py-1 text-gray-600 hover:underline cc_a_2">Team</a>
            <a data-aos="zoom-in-down" data-aos-delay="700" href="/impressum" class="ocip1 block py-1 text-gray-600 hover:underline cc_a_3">Impressum</a>
        </nav>
    </header>