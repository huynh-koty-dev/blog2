<template>
<div class="">
    <div class="row">
        
        <product-items
        v-for="prod in products"
        :key="prod.id"
        :id="prod.id"
        :title="prod.title"
        :price="prod.price"
        :description="prod.description"
        :img="prod.img"
        ></product-items>
        </div>
 </div>   
     
</template>
<script>
import ProductItems from '../components/products/ProductItems.vue'
export default {
    inject:['products'],
    components:{
        ProductItems
    }
}
</script>
