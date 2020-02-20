/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue' //Importing
import VueRouter from 'vue-router'
import Popover  from 'vue-js-popover'
import VueProgressBar from 'vue-progressbar'
//vue session importing
import VueSession from 'vue-session'
import PortalVue from 'portal-vue'

window.Vue = require('vue');
window.axios = require('axios');
window.$ = require('jquery');
window.JQuery = require('jquery');
Vue.use(BootstrapVue); // Telling Vue to use this in whole application
Vue.use(PortalVue);
Vue.use(VueRouter);
Vue.use(Popover);
Vue.use(VueProgressBar, {
    color: 'rgb(143, 255, 199)',
    failedColor: 'red',
    height: '50px'
  })

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

Vue.component('donator-view', require('./components/donator-view.vue').default);
Vue.component('request-list', require('./components/RequestList.vue').default);
Vue.component('request-view', require('./components/Request.vue').default);
Vue.component('donator-modal', require('./components/donator-modal.vue').default);
Vue.component('notification-panel', require('./components/notification.vue').default);
Vue.component('notification-icon', require('./components/notification-icon.vue').default);
Vue.component('notification-modal', require('./components/notification-modal.vue').default);
Vue.component('donar-search', require('./components/donar-search.vue').default);
Vue.component('donar-search-result', require('./components/donar-search-result.vue').default);
Vue.component('personal-details', require('./components/profile-components/personal-details.vue').default);
Vue.component('personal-address', require('./components/profile-components/personal-address.vue').default);
Vue.component('personal-education', require('./components/profile-components/personal-education.vue').default);
Vue.component('personal-training', require('./components/profile-components/personal-training.vue').default);
Vue.component('personal-skills', require('./components/profile-components/personal-skills.vue').default);
Vue.component('personal-payment-details', require('./components/profile-components/personal-payment-details.vue').default);
Vue.component('borobazar-chatbox', require('./components/borobazar-chat/chatbox.vue').default);
Vue.component('nav-messages-badge', require('./components/nav_messages_badge.vue').default);
Vue.component('nav-messages', require('./components/nav_messages.vue').default);
Vue.component('submitted-blood-requests', require('./components/BloodService/submitted_blood_requests.vue').default);
Vue.component('old-requests', require('./components/BloodService/old_requests.vue').default);
Vue.component('registration-page', require('./components/registration.vue').default);
Vue.component('donar-info', require('./components/BloodService/donar_info.vue').default);
Vue.component('complete-request', require('./components/BloodService/complete_request.vue').default);
//mini views
Vue.component('wants-to-be-donar', require('./components/miniViews/wantsToBeDonar.vue').default);






/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

