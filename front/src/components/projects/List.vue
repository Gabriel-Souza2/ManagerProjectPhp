<template>
    <v-layout row wrap>
        <v-flex xs3 v-for="n in 7" :key="n">
            <v-card color="light-blue darken-1" class="white--text">
            <v-card-title primary-title>
                <div class="headline">App SON Mobile</div>
            </v-card-title>
            <v-card-text>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</v-card-text>
            <v-card-actions>
                <v-btn flat dark :to="'/projects/' + n">Ver +</v-btn>
            </v-card-actions>
            </v-card>
        </v-flex>

        <v-flex xs3>
            <projects-create></projects-create>
        </v-flex>
    </v-layout>
</template>

<script>
import ProjetoCreate from './Create';
export default {
    components: {
        'projects-create': ProjetoCreate
    }
}
</script>
