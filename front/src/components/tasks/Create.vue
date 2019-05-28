<template>
    <v-form v-model="valid" ref="form">
        <v-text-field
            v-model="data.title"
            label="Nova tarefa"
            :rules="validation.title"
            required
            @keyup.native.enter="submit()"
        ></v-text-field>
    </v-form>
</template>

<script>
export default {
    data() {
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
            console.log(this.data)
        }
    }
}
</script>

