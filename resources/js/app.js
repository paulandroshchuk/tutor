
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

Vue.component('lesson-words-component', require('./components/Client/Courses/LessonWords.vue'));
Vue.component('admin-lesson-words-component', require('./components/Admin/Courses/LessonWords.vue'));

const app = new Vue({
    el: '#app'
});
