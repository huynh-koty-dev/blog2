<template>
    <ul>
        <li v-for="user,index in users" :key="index">
            <p>{{user.nameUser}}</p>
            <p>{{user.email}}</p>
        </li>
    </ul>
</template>
<script>
export default {
    inject:['users']
}
</script>