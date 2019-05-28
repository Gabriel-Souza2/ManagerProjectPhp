<template>
    <v-layout id="sections-container" row wrap>
        <v-flex xs3 v-for="n in 4" :key="n">
            <v-card>
                <v-card-title primary-title class="light-blue darken-1 white--text">
                    <div class="headline">Sessão {{ n }}</div>
                </v-card-title>
                <v-card-text>
                    Descrição da sessão
                </v-card-text>
                <v-card-text>
                    <tasks/>
                </v-card-text>
                <v-card-text>
                    <create-task/>
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
    components: {
        create,
        tasks,
        'create-task': createTask
    }
}
</script>

