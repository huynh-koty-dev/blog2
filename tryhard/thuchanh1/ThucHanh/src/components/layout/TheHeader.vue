<template>
    <div>
        <ul>
            <li><router-link to="/login">{{isSuccess?'login':'logout'}}</router-link></li>
            
        </ul>
    </div>
</template>
<script>
export default {
    data(){
        return{
            isSuccess:false
        }
    },
    
}
</script>