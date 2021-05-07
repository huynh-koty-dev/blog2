<template>
    
</template>
<template>
    <div>
        <li>
            <div>
                <h3>name:   {{name}} </h3>
                <p>email:   {{email}}</p>
                <p>message: {{message}}</p>
            </div>
        </li>
    </div>
</template>
<script>
export default {
    props:['name','email','message']
}
</script>