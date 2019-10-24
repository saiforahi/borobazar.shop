/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import BootstrapVue from 'bootstrap-vue' //Importing
import VueRouter from 'vue-router'

window.Vue = require('vue');
window.axios = require('axios');
Vue.use(BootstrapVue); // Telling Vue to use this in whole application
Vue.use(VueRouter);

//vue session importing
import VueSession from 'vue-session'
Vue.use(VueSession);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('search-app-root-component', require('./components/search-app-root.vue').default);
Vue.component('searchDiv', require('./components/searchDiv.vue').default);
Vue.component('donatorsView', require('./components/donatorsView.vue').default);
Vue.component('donatorsRow', require('./components/donatorsRow.vue').default);
Vue.component('donator-view', require('./components/donator-view.vue').default);
Vue.component('request-list', require('./components/RequestList.vue').default);
Vue.component('request-view', require('./components/Request.vue').default);
Vue.component('donator-modal', require('./components/donator-modal.vue').default);

//paginator registration using laravel-vue-pagination
//Vue.component('pagination',require('laravel-vue-pagination'));
//passport components

Vue.component(
    'passport-clients',
    require('./components/passport/Clients.vue').default
);

Vue.component(
    'passport-authorized-clients',
    require('./components/passport/AuthorizedClients.vue').default
);

Vue.component(
    'passport-personal-access-tokens',
    require('./components/passport/PersonalAccessTokens.vue').default
);




/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
const searchAppRoot = new Vue({
    el: '#search-app-root'
});

const requestList = new Vue({
    el: '#request-list-root'
});
