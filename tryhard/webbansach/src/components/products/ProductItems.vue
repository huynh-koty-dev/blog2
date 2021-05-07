<template>
    <div class="col-sm-3">
        
        <div class="set-card">
            <div class="card" style="width: 18rem;">
                    <img :src="img" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{ title }}</h5>
                    <p class="card-text">{{description}}</p>
                    <h3 class="card-text">{{price}}</h3>
                    <div class="row">
                        <div class="col-sm-6">
                            <button @click="addToCart" class="btn btn-primary" >Add to cart</button>
                        </div>
                        <div class="col-sm-6">
                            <router-link :to="detailLink" class="btn btn-success">View detail</router-link>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
     </div>   
</template>
<script>

export default {
    inject: ['addProductToCart'],
    props:['id','img','title','price','description'],
    computed:{
        detailLink(){
            return { name:'detail-product',params: {teamId: this.id} }
        }
    },
    methods: {
    addToCart() {
      this.addProductToCart({
        id: this.id,
        img: this.img,
        title: this.title,
        price: this.price,
        description:this.description,
        qty:1,
      });
    },
  },
}
</script>
<style >
.set-card{
    padding: 15px;
    margin-right:20px ;
}
</style>