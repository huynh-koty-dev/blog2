import Vue from 'vue'
import App from './App.vue'
import router from './router.js'
import BaseCard from './components/UI/BaseCard.vue'
import BaseButton from './components/UI/BaseButton.vue'
Vue.component('base-card',BaseCard);
Vue.component('base-button',BaseButton);
new Vue({
  router,
  el: '#app',
  render: h => h(App)
})
