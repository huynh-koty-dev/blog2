<template>
    <footer><h1>{{title}}</h1></footer>
</template>
<script>
export default {
    name: 'comp-footer',
    props:{
        title:{
            type:String,
            default:'this is footer'
        }
    },
    data(){
        return {
            text:'footer'
        }
    }
}
</script>

<style>

</style>