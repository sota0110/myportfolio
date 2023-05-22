<template>
  <header>
    <img src="./assets/logo.png" alt="">
    <ul>
      <li><a href="#top">top</a></li>
      <li><a href="#about">about me</a></li>
      <li><a href="#works">works</a></li>
      <li><a href="#skill">skill</a></li>
    </ul>
  </header>
  <main>
    <div class="head">
      
    </div>
    <div class="container">
      <div class="top mb-50" id="top">
        <p>好きなことだけで、<br>生きていく</p>
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
            <li>早稲田大学創造理工学部経営システム工学科 2年</li>
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
      <div class="skill mb-50" id="skill">
        <h1 class="title">Skill set</h1>
        <template v-for="graph in graphs" :key="graph">
          <Graph :skill="graph.skill" :number="graph.number" class="graph"/>
        </template>
      </div>
    </div>
  </main>
  <footer>
    <h1>Thank You !!</h1>
  </footer>
</template>

<script>
import WorksComp from './components/Works.vue'
import Graph from './components/Graphs.vue'

export default {
  name: 'App',
  components: {
    WorksComp,
    Graph
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
      ],
      graphs:[
        {
          skill:"Python",
          number:5
        },{
          skill:"HTML/CSS",
          number:4
        },{
          skill:"Javascript",
          number:3
        },{
          skill:"Vue.js",
          number:5
        },{
          skill:"PHP",
          number:4
        },{
          skill:"CakePHP",
          number:5
        },{
          skill:"MySQL",
          number:4
        },{
          skill:"PostgreSQL",
          number:3
        },{
          skill:"R",
          number:1
        },{
          skill:"C",
          number:3
        },{
          skill:"C#",
          number:1
        },{
          skill:"Unity",
          number:1
        },{
          skill:"Git",
          number:5
        },{
          skill:"Linux",
          number:3
        },{
          skill:"Docker",
          number:2
        }
      ]
    }
  }
}
</script>

<style scoped>
@import 'style.css';
</style>
