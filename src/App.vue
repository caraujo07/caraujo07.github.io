<template>
  <div id="app">
    <SearchBar />
    <!-- <HelloWorld msg="Welcome to Your Vue.js App"/> -->
  </div>
</template>

<script>

import SearchBar from './components/SearchBar/SearchBar.vue'

export default {
  name: 'app',
  components: {
    SearchBar
  }
}
</script>

<style lang="scss" src="./SCSS/main.scss">

</style>
