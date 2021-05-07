import Vue from 'vue'
import VueRouter from 'vue-router'
import TheDescription from './page/TheDescription.vue'
import ProductsList from './page/ProductList.vue'
import detailProduct from './page/detailProduct.vue'
import CartList from './page/CartList.vue'
import Contact from './page/Contact.vue'
import contactDetail from './page/contactDetail.vue'
Vue.use(VueRouter)
const routes = [
    {  path:'/',    redirect:'/home' },
    {  path:'/home',    component:TheDescription   },
    {  path:'/product', component:ProductsList},
    {  path:'/cart',component: CartList},
    {  name:'detail-product', path: '/product/:teamId', component: detailProduct,props:true,children:[
        {  path:'/product/cart',redirect:'/cart'}
    ]},
    {  path:'/contact', component: Contact},
    
];
const router = new VueRouter({
    routes,
    mode:'history'
});
export default router;