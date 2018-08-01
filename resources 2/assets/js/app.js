
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('sidebar', require('./components/sidebar/sidebar.vue'));
Vue.component('sidebar-item', require('./components/sidebar/sidebar-item.vue'));

Vue.component('tabs', require('./components/tabs/tabs.vue'));
Vue.component('tab', require('./components/tabs/tab.vue'));

//Setting Component
Vue.component('setting',require('./components/settings/settings.vue'))
// Vue.component('profileimage',require('./components/settings/profileimage.vue'))


const app = new Vue({
    el: '#app'
});
