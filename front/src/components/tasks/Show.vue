<template>
    <v-dialog v-model="dialog" width="500">
        <v-card>
            <v-toolbar card dark color="light-blue darken-1">
                <v-btn icon dark @click.native="dialog = false">
                    <v-icon>close</v-icon>
                </v-btn>
                <v-toolbar-title>Tarefa {{ n }}</v-toolbar-title>
            </v-toolbar>
            <v-card-text>
                <h3>Hello World</h3>
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
            n: 0
        }
    },
    created() {
        eventHub.$on('open-task', (n) => {
            this.dialog = true;
            this.n = n;
        });
    }
}
</script>
