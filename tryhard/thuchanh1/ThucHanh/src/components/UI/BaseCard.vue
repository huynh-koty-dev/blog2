<template>
    <div class="base-card">
        <slot></slot>
    </div>
</template>
<style scoped>
.base-card{
    padding:0px;
    width: 400px;
    height: 500px;
    border: 1px solid #333;
    border-radius: 30px;
    box-shadow: 5px 5px 10px grey;
    
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
</style>