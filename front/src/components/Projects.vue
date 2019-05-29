<template>
    <v-layout row wrap>
        <v-flex xs12> 
            <h1 class="display-1 mb-4">Projetos</h1>
        </v-flex>
        <v-container grid-list-md>
            <router-view/>
        </v-container>
    </v-layout>
</template>

<script>
export default {
    mounted() {
        this.$store.dispatch('projects/getAll');
    }
}
</script>
