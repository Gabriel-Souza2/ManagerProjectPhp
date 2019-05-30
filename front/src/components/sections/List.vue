<template>
    <v-layout id="sections-container" row wrap>
        <v-flex xs3 v-for="section in sections" :key="section.id">
            <v-card>
                <v-card-title primary-title class="light-blue darken-1 white--text">
                    <div class="headline">Sessão {{ section.title }}</div>
                </v-card-title>
                <v-card-text>
                    {{ section.description }}
                </v-card-text>
                <v-card-text>
                    <tasks :section="section.id"/>
                </v-card-text>
                <v-card-text>
                    <create-task :section="section.id"/>
                </v-card-text>
            </v-card>
        </v-flex>
        <v-flex xs3>
            <create/>
        </v-flex>
    </v-layout>
</template>

<script>
import create from './Create';
import tasks from '../tasks/List';
import createTask from '../tasks/Create';

export default {
    computed: {
        sections(){
            return this.$store.state.sections.all;
        }
    },
    components: {
        create,
        tasks,
        'create-task': createTask
    },
    mounted(){
        this.$store.dispatch('sections/getAll', this.$route.params.id);
    }
}
</script>

