<template>
  <header>
    <ul>
      <li><a href="#top">top</a></li>
      <li><a href="#about">about me</a></li>
      <li><a href="#works">works</a></li>
    </ul>
  </header>
  <main>
    <div class="container">
      <div class="top mb-50" id="top">
        <p><span>好き</span>なことだけで、<br><span>生き</span>ていく</p>
        <img src="./assets/myphoto-beach.jpg" alt="image">
      </div>
      <div class="about_me mb-50" id="about">
        <h1 class="title">About me</h1>
        <div class="card">
          <ul class="left-card">
            <li>名前</li>
            <li>所属</li>
            <li>生年月日</li>
            <li>趣味</li>
          </ul>
          <ul class="right-card">
            <li>住井奏太</li>
            <li>早稲田大学創造理工学部経営システム工学科2年</li>
            <li>2004年1月10日</li>
            <li>旅、勉強、寝ること</li>
          </ul>
        </div>
      </div>
      <div class="works mb-50" id="works">
        <h1 class="title">Works</h1>
        <template v-for="content in contents" :key="content">
          <WorksComp :img="content.img" :url="content.url" :title="content.title" class="work"/>
        </template>
      </div>
    </div>
  </main>
</template>

<script>
import WorksComp from './components/Works.vue'

export default {
  name: 'App',
  components: {
    WorksComp
  },
  data(){
    return{
      contents:[
        {
          title:"ちずアプリ",
          url:"http://sota.starfree.jp/gmap-api/",
          img:require("./assets/gmap-app.png")
        },{
          title:"タイピングゲーム",
          url:"https://sota0110.github.io/typingGame-vue/",
          img:require("./assets/typing-game.png")
        }
      ]
    }
  }
}
</script>

<style scoped>
@import 'style.css';
</style>
