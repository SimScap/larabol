
window.Vue = require('vue');
window.axios = require('axios');

// importiamo il componente App
import App from './views/App';

const app = new Vue({
    el: '#root',
    render: h => h(App) // mostriamo App all'avvio di Vue
});