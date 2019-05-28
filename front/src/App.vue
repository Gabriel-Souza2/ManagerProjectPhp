<template>
  <v-app>
    <p-header/>
    <v-content>
      <v-container grid-list-md>
        <router-view/>
      </v-container>
    </v-content>
    <v-footer app>
      <span>&copy; <a href="https://github.com/Gabriel-Souza2">Meu github</a> </span>
    </v-footer>
  </v-app>
</template>

<script>
import Header from './partials/Header';

export default {
  name: 'App',
  components: {
    'p-header': Header 
  }
}
</script>
