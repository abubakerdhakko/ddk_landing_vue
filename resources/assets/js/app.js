
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window.VueRouter =  require('vue-router').default;
window.VueResource = require('vue-resource');

Vue.http.interceptors.push(function (request, next) {
    request.headers['X-CSRF-TOKEN'] = document.querySelector("meta[name='csrf-token']").attributes.content.value;
    next();
});
window.myheaders = {
    "Authorization": "bearer "+  document.querySelector("meta[name='csrf-token']").attributes.content.value,
    'X-CSRF-TOKEN': document.querySelector("meta[name='csrf-token']").attributes.content.value,
    "Accept": "application/json",
    "cache-control": "no-cache"
  };
  
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

BannerComponent = Vue.component('banner-component', require('./components/MainComponent.vue'));
AboutComponent = Vue.component('banner-component', require('./components/AboutComponent.vue'));
RoadmapComponent = Vue.component('banner-component', require('./components/RoadmapComponent.vue'));
TokensaleComponent = Vue.component('banner-component', require('./components/TokensaleComponent.vue'));
ContactComponent = Vue.component('banner-component', require('./components/ContactComponent.vue'));
TeamComponent = Vue.component('banner-component', require('./components/TeamComponent.vue'));
var router = new VueRouter(
    {
        mode: 'history',
        routes: [
            {path: '', name: 'main', component: BannerComponent},
            {path: '/admin', name: 'banner',  component: BannerComponent},
            {path: '/admin/about', name: 'about',  component: AboutComponent},
            {path: '/admin/roadmap', name: 'roadmap',  component: RoadmapComponent},
            {path: '/admin/tokensale', name: 'tokensale',  component: TokensaleComponent},
            {path: '/admin/contact', name: 'contact',  component: ContactComponent},
            {path: '/admin/team', name: 'team',  component: TeamComponent},
        ]
    }
);

const app = new Vue({
    el: '#app',
    router: router
});
