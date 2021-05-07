<template>
    <ul>
        <contact-item
        v-for="cont in contact"
        :key="cont.id"
        :name="cont.name"
        :email="cont.email"
        :message="cont.message"
        ></contact-item>
    </ul>
</template>
<script>
import contactItem from '../components/contact/contactItem.vue'
export default {
    inject:['contact'],
    components:{
        contactItem
    }
}
</script>