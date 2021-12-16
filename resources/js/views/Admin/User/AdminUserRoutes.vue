<template>
    <component :is="componentName"></component>
</template>

<script>
    import Index from "./Index.vue";
    import Create from "./Create.vue";
    import Edit from "./Edit.vue";
    import NotFound from '@/views/errors/NotFound';

    export default {
        name: "App",

        props: ['url'],

        components: {
            Index, Create, Edit, NotFound
        },

        computed: {
            componentName() {
                return ['create', 'edit'].includes(this.url) ? this.url : 'not-found'
            }
        }
    }
</script>

<style scoped>

</style>
