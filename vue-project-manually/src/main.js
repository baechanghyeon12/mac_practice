import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import mixins from './mixins'

window.Kakao.init("9abea084b391e97658a9380c837b9608");
createApp(App).use(store).use(router).mixin(mixins).mount('#app')