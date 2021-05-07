<template>
  <div id="app">
    <the-header></the-header>
    <router-view></router-view>
    
  </div>
</template>

<script>
import TheHeader from './components/nav/TheHeader.vue'

export default {
  name: 'app',
  components:{
    TheHeader,
    
  },
  data(){
    return{
      products:[
        {
          id:1,
          title:'Bạn Không Ổn Thì Có Làm Sao',
          img:'https://product.hstatic.net/1000237375/product/bia_truoc_7555f9eb779349f598e261a008e5fe1b_large.jpg',
          price:'88000',
          description:'',
        },
        {
          id:2,
          title:'Hiểu Bản Thân, Quên Bản Thân',
          img:'https://product.hstatic.net/1000237375/product/1080x1080_hieu_ban_than_quen_ban_than_33d29ca904304bdc948d32c048036871_large.jpg',
          price:'84000',
          description:'',
        },
        {
          id:3,
          title:'Rồi Một Ngày Bạn Sẽ Hiểu...',
          img:'https://product.hstatic.net/1000237375/product/1080x1080_roi_mot_ngay_ban_se_hieu_f60a7dc042844e0aaf83f790ce6ee62c_large.jpg',
          price:'104000',
          description:'',
        },
        {
          id:4,
          title:'Sách: Diễn Thuyết Dễ Hơn Bạn Tưởng',
          img:'https://product.hstatic.net/1000237375/product/1080x1080_dien_thuyet_de_dang_hon_ban_tuong_4f3001899ddd4f3d9f1f3baa16e7b564_large.jpg',
          price:'109000',
          description:'',
        },
        {
          id:5,
          title:'Sách: Lãnh Đạo Mất Thăng Bằng',
          img:'https://product.hstatic.net/1000237375/product/lanh_dao_mat_thang_bang_cfae4626544e43d2a12762496613c3f3_large.jpg',
          price:'52000',
          description:'',
        },
      ],
      cart: { items: [], total: 0, qty: 0 },
      contact:[]
    }
  },
  methods:{
    addProductToCart(productData){
      const productInCartIndex = this.cart.items.findIndex(
        (ci) => ci.productId === productData.id
      );

      if (productInCartIndex >= 0) {
        this.cart.items[productInCartIndex].qty++;
      } else {
        const newItem = {
          productId: productData.id,
          title: productData.title,
          img: productData.img,
          price: productData.price,
          description:productData.description,
          qty: productData.qty,
        };
        this.cart.items.push(newItem);
      }
      this.cart.qty+=productData.qty;
      this.cart.total += parseInt(productData.price*productData.qty);
    },
    removeProductFromCart(prodId) {
      const productInCartIndex = this.cart.items.findIndex(
        (cartItem) => cartItem.productId === prodId
      );
      const prodData = this.cart.items[productInCartIndex];
      this.cart.items.splice(productInCartIndex, 1);
      this.cart.qty -= prodData.qty;
      this.cart.total -= prodData.price * prodData.qty;
    },
    addContact(contactData){
      const newContact = {
        name: contactData.name,
        email: contactData.email,
        message: contactData.message
      }
      this.contact.push(newContact);
    }
  },

  provide(){
    return{
      products : this.products,
      cart: this.cart,
      total: this.cart.total,
      addProductToCart:this.addProductToCart,
      removeProductFromCart:this.removeProductFromCart,
      contact:this.contact,
      addContact:this.addContact
    }
  }
}
</script>

<style>

</style>
