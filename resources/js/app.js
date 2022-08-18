import {createApp} from 'vue';
import App from './App.vue';
import ClockButton from './components/ClockButton.vue';
import TimeLogTable from './components/TimeLogTable.vue';
import WeeksTable from './components/WeeksTable.vue';

window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

const app = createApp({});

app.component('v-app', App);

app.component('v-clockButton', ClockButton);
app.component('v-timeLogTable', TimeLogTable);
app.component('v-weeksTable', WeeksTable);

app.mount('#app');
