import {createApp} from 'vue'

require('./bootstrap')
import App from './App.vue'
import axios from 'axios'
import router from './router'

import SlideMenu from "./components/SlideMenu.vue";
import VuePagination from './components/Pagination.vue';

import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';

//import DataTable from 'laravel-vue-datatable';

//import VuejsDatatableFactory from 'vuejs-datatable';

//import Vuetify from 'vuetify'
//import 'vuetify/dist/vuetify.min.css'

//import VueDataTables from 'vue-data-tables'

//import ElementUI from 'element-ui'
//import 'element-ui/lib/theme-chalk/index.css'

//import pagination from 'vue-laravel-vue-pagination';

import VueProgressBar from "@aacassandra/vue3-progressbar";

const options = {
  color: "#bffaf3",
  failedColor: "#874b4b",
  thickness: "5px",
  transition: {
    speed: "0.2s",
    opacity: "0.6s",
    termination: 300,
  },
  autoRevert: true,
  location: "top",
  inverse: false,
};

const app = createApp(App)
app.config.globalProperties.$axios = axios;
app.use(router)
app.use(VueProgressBar, options)
app.component("slide-menu", SlideMenu);
app.component("vuePagination", VuePagination);
app.use(VueSweetalert2);
//app.use(DataTable)
//app.use(Vuetify)
///app.use(pagination);
app.mount('#app')