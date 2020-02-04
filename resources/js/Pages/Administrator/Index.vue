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
    import Layout from './../../Shared/Layout'
    export default {
        name: "Index",
        layout: Layout,
        props: {
            'title': String,
            'description' : String
        }
    }
</script>

<style scoped>

</style>