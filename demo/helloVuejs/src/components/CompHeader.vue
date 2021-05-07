<template>
    <header><h1>{{titleheader}}</h1>
    <br>
    <button v-on:click="changeTitleHeader">Change title from CompHeader</button>
    </header>
</template>

<script>
export default {
    name: 'compheader',
    props:{
        titleheader:String,
    },
    data() {
        return {
            text: 'huynh'
        } 
    },
    methods:{
        changeTitleHeader(e){
            var data={
                titleheader:'huynh'
            }
            this.$emit('changeTitle',data);
        }
    }
}
</script>

<style>

</style>