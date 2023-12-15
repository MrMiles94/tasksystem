import './assets/main.css'
import './assets/style.css'

import { createApp } from 'vue'
import store from './stores';

import App from './App.vue';
import router from './router';



/* import the fontawesome core */
import { library } from '@fortawesome/fontawesome-svg-core'

/* import font awesome icon component */
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

/* import specific icons */
import { faUserSecret, faHome, faBell, fas} from '@fortawesome/free-solid-svg-icons'

/* add icons to the library */
library.add(faUserSecret, faHome, faBell, fas)

const app = createApp(App)

app.use(router).use(store)
.component('font-awesome-icon', FontAwesomeIcon)
.mount('#app')
