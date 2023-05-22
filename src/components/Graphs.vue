<template>
    <div class="container">
      <p>{{ skill }}</p>
      <div class="skillGraph-wrapper">
        <div :style="gauge" class="skillGraph"></div>
      </div>
      <div class="border">
        
      </div>
    </div>
</template>
  
<script>
  export default {
    name: 'performance-graph',
    props:{
      skill: String,
      number: String
    },
    computed:{
      gauge:function(){
        return{
          'width':20*this.number+"%"
        }
      }
    }
  }
</script>

<style scoped>
@import 'graphs-style.css';
</style>