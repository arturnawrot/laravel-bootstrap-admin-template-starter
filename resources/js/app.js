require('./bootstrap');

require('bootstrap/dist/js/bootstrap.bundle');

require('chart.js');

require('jquery.easing');

require('datatables.net-bs4');

require('./sb-admin-2');

window.Vue = require('vue');

const app = new Vue({
    el: '#app',
});