import Vue from 'vue'
import VueRouter from 'vue-router'
import Login from './components/login/Login.vue'
import Register from './components/login/Register.vue'
import Main from './components/mainContent/Main.vue'
Vue.use(VueRouter)
const routes = [
    {path:'/', redirect:'/login'},
   {path:'/login',component: Login },
   {path:'/register',component: Register },
   {path:'/main',component: Main },
]
const router = new VueRouter({
    routes,
    mode:'history'
})
export default router;