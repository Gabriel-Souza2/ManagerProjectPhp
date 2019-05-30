<template>
    <v-dialog v-model="dialog" width="500">
        <v-card>
            <v-toolbar card dark color="light-blue darken-1">
                <v-btn icon dark @click.native="dialog = false">
                    <v-icon>close</v-icon>
                </v-btn>
                <v-toolbar-title>{{ task.title }}</v-toolbar-title>
            </v-toolbar>
            <v-card-text>
                <p v-if="task.description">{{ task.description }}</p>
                <p v-if="task.due_date">{{ task.due_date }}</p>
                <p>{{ task.done == 1 ? 'tarefa finalizada' : 'tarefa pendente' }}</p>
            </v-card-text>
        </v-card>
    </v-dialog>
</template>
<script>
import { eventHub } from '../../eventHub';
export default {
    data(){
        return {
            dialog: false,
            task: {} 
        }
    },
    created() {
        eventHub.$on('open-task', (task) => {
            this.dialog = true;
            this.task = task;
        });
    }
}
</script>
