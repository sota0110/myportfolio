<template>
  <a :href="url" class="work-wrapper">
    <img :src="img" alt="">
    <p class="work_title">{{ title }}</p>
  </a>
</template>

<script>
export default {
  name: 'WorksComp',
  props:{
    title: String,
    url: String,
    img: String
  }
}
</script>

<style scoped>
@import 'works-style.css';
</style>
