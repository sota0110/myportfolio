<template>
  <header>
    <a href="http://sota.starfree.jp/portfolio/">
      <img src="./assets/logo.png" alt="">
    </a>
    <ul>
      <li><a href="#top">top</a></li>
      <li><a href="#about">about me</a></li>
      <li><a href="#works">works</a></li>
      <li><a href="#career">career</a></li>
      <li><a href="#skill">skill</a></li>
      <li><a href="#contact">contact me</a></li>
    </ul>
  </header>
  <main>
    <div class="head">
      
    </div>
    <div class="container">
      <div class="top pb-50" id="top">
        <p>好きなことだけで、<br>生きていく</p>
        <img src="./assets/myphoto-beach.jpg" alt="image">
      </div>
      <div class="about_me pb-50" id="about">
        <h1 class="title">About me</h1>
        <div class="card h-about">
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
      <div class="works back pb-50" id="works">
        <h1 class="title">Works</h1>
        <p class="description">僕が作成したWebアプリや僕が出演した記事などをご紹介します！</p>
        <template v-for="content in contents" :key="content">
          <WorksComp :img="content.img" :url="content.url" :title="content.title" class="work"/>
        </template>
      </div>
      <div class="career pb-50" id="career">
        <h1 class="title">Career</h1>
        <p class="description">僕のインターン歴です！</p>
        <div class="card h-career">
          <ul class="left-card">
            <li>22年1月～22年9月</li>
            <li>23年2月～22年2月</li>
            <li>23年2月～現在</li>
          </ul>
          <ul class="right-card">
            <li>グローバルパートナーズ株式会社 インターン</li>
            <li>株式会社パブコ 短期インターン</li>
            <li>株式会社ハートビーツ インフラエンジニア</li>
          </ul>
        </div>
      </div>
      <div class="skill back pb-50" id="skill">
        <h1 class="title">Skill set</h1>
        <p class="description">僕が今まで勉強してきた技術たちです！スキルレベルをグラフで表しています！</p>
        <template v-for="graph in graphs" :key="graph">
          <Graph :skill="graph.skill" :number="graph.number" class="graph"/>
        </template>
      </div>
      <div class="contact pb-50" id="contact">
        <h1 class="title">Contact me</h1>
        <p class="description">最後までご覧いただきありがとうございます！<br>もしコメントがありましたら下記フォームよりお問い合わせください。</p>
        <transition>
          <p v-show="alert" class="sent_mail">メールを送信しました</p>
        </transition>
        <form action="components/send-mail.php" target="form" method="post">
          <p>Name</p>
          <input type="text" v-model="name">
          <p>Email</p>
          <input type="email" v-model="email">
          <p>Comment</p>
          <textarea cols="60" rows="6" v-model="comment"></textarea><br>
          <input type="submit" name="send" value="SEND" class="submit-btn" @click="sendMail">
          <input type="text" name="name" v-model="sendName" class="erase">
          <input type="email" name="email" v-model="sendEmail" class="erase">
          <textarea name="comment" cols="60" rows="6" v-model="sendComment" class="erase"></textarea>
        </form>
        <iframe name="form" scrolling="no" frameborder="no" class="erase"></iframe>
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
  methods:{
    sendMail(){
      if(this.name == "" || this.email == "" || this.comment == ""){
        alert("未入力の項目があります");
        return false;
      }
      this.sendName = this.name;
      this.sendEmail = this.email;
      this.sendComment = this.comment;
      this.name = "";
      this.email = "";
      this.comment = "";
      this.alert = true;
      document.form.submit();
      return false;
    }
  },
  watch: {
    alert: function(){
      setTimeout(() => {
        this.alert = false;
      }, 10000);
    }
  },
  data(){
    return{
      name:"",
      email:"",
      comment:"",
      sendName:"",
      sendEmail:"",
      sendComment:"",
      alert:false,
      contents:[
        {
          title:"ちずアプリ",
          url:"http://sota.starfree.jp/gmap-api/",
          img:require("./assets/gmap-app.png")
        },{
          title:"タイピングゲーム",
          url:"https://sota0110.github.io/typingGame-vue/",
          img:require("./assets/typing-game.png")
        },{
          title:"BEAULABOディレクター紹介",
          url:"https://note.com/insidebeau/n/ne503efaf52ca?magazine_key=m57f040bca237",
          img:require("./assets/beau.png")
        },{
          title:"Teenz Discuss(YouTube)",
          url:"https://www.youtube.com/watch?v=roaMO1Sx1wk&t=1s",
          img:require("./assets/discuss.png")
        },{
          title:"気になる10代名鑑",
          url:"https://steenz.jp/n/nea1cc5738b86",
          img:require("./assets/steenz.png")
        },{
          title:"CLUB CEO(ラジオ)",
          url:"https://audee.jp/voice/show/52854",
          img:require("./assets/clubceo.jpg")
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
          number:4
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
