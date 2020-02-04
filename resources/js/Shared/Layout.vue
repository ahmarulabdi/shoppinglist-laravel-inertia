<template>
    <div>
        <navbar></navbar>
        <slot/>
    </div>
</template>

<script>
    import Navbar from "./Navbar"
    export default {
        components :{
            Navbar,
        },
        name: "Layout"
    }
</script>

<style scoped>

</style>