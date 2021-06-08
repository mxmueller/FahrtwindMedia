<template>
    <article class="px-6 pb-20 h-96 intro cc_gradient-left-to-right">
        <div class="container mx-auto flex flex-col px-5 py-24 justify-center items-center">
            <div class="w-full md:w-2/3 flex flex-col items-center text-center">
                <p class="leading-relaxed text-gray-100 mb-5">MAXIMILIAN MÜLLER</p>
                <h1 class="title-font text-9xl mb-4 font-semibold text-white">Vita</h1>
                <svg class="mt-4 cc_arrow-icon text-white animate-bounce w-6 h-6 justify-center w-full cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 justify-center w-full" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                    </svg>
                </svg>
            </div>
        </div>
    </article>
</template>

<script>
    export default {
        mounted() {
            console.log('hero-team-vue-component mounted.')
        }
    }

</script>
