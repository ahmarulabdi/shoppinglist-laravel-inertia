<template>
    <div>
        <table border="1">
            <tr>
                <th>Name</th>
                <th>Description</th>
            </tr>
            <tr v-for="item in items">
                <td>{{ item.name }}</td>
                <td>{{ item.description }}</td>
            </tr>
        </table>
    </div>
</template>

<script>
    import Layout from '../../Shared/Layout'
    export default {
        name: "Index",
        layout: Layout,
        props: {
            'items': Array
        }
    }
</script>

<style scoped>

</style>