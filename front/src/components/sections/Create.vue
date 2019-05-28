<template>
    <v-card color="light-blue lighten-1">
        <v-card-title primary-title class="white--text">
            <div class="headline">Adicionar Sessão</div>
        </v-card-title>
        <v-container>
            <v-form v-model="valid" ref="form">
                <v-text-field
                    id="section-title"
                    v-model="data.title"
                    :rules="validation.title"
                    label="Titulo da sessão"
                    required
                    dark
                ></v-text-field>
                
                <v-text-field
                    v-model="data.description"
                    label="descrição"
                    outline
                    dark
                ></v-text-field>

                <v-btn flat :disabled="!valid" @click="submit()" color="white">Salvar</v-btn>
            </v-form>
        </v-container>
    </v-card>
</template>

<script>
export default {
    data()
    {
        return {
            valid: false,
            data: {},
            validation: {
                title: [
                    v => !!v || "É um campo obrigatorio"
                ]
            }
        }
    },
    methods: {
        submit(){
            console.log(this.data);
        }
    }
}
</script>

