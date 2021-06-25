<template>
   <article class="cc_intro_main px-6 h-screen intro">
        <h2 class="font-semibold cc_intro-font cc_headline_scroll_1">Fahrtwind</h2>
        <h2 class="font-semibold cc_intro-font cc_intro-font_animation cc_headline_scroll_2">Media</h2>
        <svg class="mt-4 cc_arrow-icon animate-bounce w-6 h-6 justify-center w-full cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 justify-center w-full" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
            </svg>
        </svg>

        <div id="cc_vantajs-bg"></div>

        <div class="cc_conversation_banner-wrapper">          
          <div id="cc_conversation_banner"
                class="p-5 rounded-lg shadow-lg  text-center animate-pulse bg-white">
                <a href="/team" class="no-underline hover:underline">Nimm Kontakt mit uns auf!</a>
                ✍️
            </div>
        </div>
    </article>
</template>

<script>
    export default {
        mounted() {
            console.log('intro-vue-component mounted.')
        }
    }
</script>
