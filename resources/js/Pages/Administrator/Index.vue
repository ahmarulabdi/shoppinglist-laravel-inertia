<template>
   <div>
       <button class="btn btn-info">tes</button>
       <ul>
           <li>Title : {{ title }}</li>
           <li>Description : {{ description }}</li>
       </ul>
   </div>
</template>

<script>
    export default {
        name: "Index",
        props: {
            'title': String,
            'description' : String
        }
    }
</script>

<style scoped>

</style>