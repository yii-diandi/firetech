<template>
  <div id="app">
    4864515
    <img alt="Vue logo" src="https://gitee.com/static/images/logo-black.svg?t=158106664">
    <HelloWorld msg="Welcome to Your Vue.js App"/>
  </div>
</template>

<script>
console.log('lailailai666')
import HelloWorld from './components/HelloWorld.vue'
export default {
  name: 'App',
  components: {
    HelloWorld
  },
  created () {
    console.log('HelloWorld',HelloWorld)
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
