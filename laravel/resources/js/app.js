/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require ('./cookieconsent/cookieconsent.js');
require('./bootstrap');
require ('./animations.js');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
* Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('intro', require('./components/intro.vue').default);
Vue.component('hello', require('./components/hello.vue').default);
Vue.component('hero-team', require('./components/hero-team.vue').default);
Vue.component('teaser-team', require('./components/teaser-team.vue').default);
Vue.component('team-mm-lebenslauf', require('./components/team-mm-lebenslauf.vue').default);
Vue.component('team-mm-stack', require('./components/team-mm-stack.vue').default);
Vue.component('team-mm-hero', require('./components/team-mm-hero.vue').default);
Vue.component('team-mm-links', require('./components/team-mm-links.vue').default);
Vue.component('team-jg-links', require('./components/team-jg-links.vue').default);
Vue.component('team-jg-lebenslauf', require('./components/team-jg-lebenslauf.vue').default);
Vue.component('team-jg-stack', require('./components/team-jg-stack.vue').default);
Vue.component('team-jg-hero', require('./components/team-jg-hero.vue').default);
Vue.component('team-jg-werdegang', require('./components/team-jg-werdegang.vue').default);
Vue.component('imprint-hero', require('./components/imprint-hero.vue').default);
Vue.component('imprint-text', require('./components/imprint-text.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
