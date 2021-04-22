/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
Vue.use(BootstrapVue)
Vue.use(IconsPlugin)


Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('admin-navigation', require('./components/admin/AdminNavigation.vue').default);

Vue.component('article-index', require('./components/articles/Index.vue').default);

Vue.component('coupon-index', require('./components/coupons/Index.vue').default);
Vue.component('coupon-form', require('./components/coupons/Form.vue').default);

Vue.component('user-index', require('./components/users/Index.vue').default);
Vue.component('user-form', require('./components/users/Form.vue').default);

Vue.component('supermarket-index', require('./components/supermarkets/Index.vue').default);
Vue.component('supermarket-form', require('./components/supermarkets/Form.vue').default);

Vue.component('country-index', require('./components/countries/Index.vue').default);
Vue.component('country-form', require('./components/countries/Form.vue').default);

Vue.component('food-index', require('./components/food/Index.vue').default);
Vue.component('food-form', require('./components/food/Form.vue').default);

Vue.component('point-index', require('./components/points/Index.vue').default);
Vue.component('point-form', require('./components/points/Form.vue').default);

Vue.component('cashier-index', require('./components/cashiers/Index.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
