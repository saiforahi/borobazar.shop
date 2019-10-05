/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import BootstrapVue from 'bootstrap-vue' //Importing
Vue.use(BootstrapVue); // Telling Vue to use this in whole application

window.Vue = require('vue');

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
Vue.component('search-div', require('./components/search-div.vue').default);
Vue.component('donators-view-div', require('./components/donators-view.vue').default);
Vue.component('donators-view-row', require('./components/donators-row.vue').default);
Vue.component('donator-view', require('./components/donator-view.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const searchAppRoot = new Vue({
    el: '#search-app-root',
    data : {
        selectedBloodGroup:'',
        selectedDistrict:'',
        selectedSubdistrict:''
    },

});

