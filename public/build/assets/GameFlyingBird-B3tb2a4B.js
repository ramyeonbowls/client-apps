import{A as u,T as m,S as b,G as h}from"./loadBitmapFont-C0Sa2hzz.js";import{S as p}from"./sweetalert2.all-BTEucekq.js";import{_ as w,c as d,a as r,t as c,i as l,o as n,x as f,y}from"./sweetalert2.min-C72B2ZMm.js";import"./_commonjsHelpers-DSXiPLDm.js";import"./__vite-browser-external-D7Ct-6yo.js";const v={name:"Game",data(){return{app:null,bird:null,pipes:[],score:0,birdVelocity:0,gravity:.2,pipeSpeed:4,pipeGap:150,pipeWidth:50,pipeInterval:null,gameOver:!1,gameStarted:!1,groundHeight:50,speedIncreaseInterval:null,speedIncreaseRate:.1,maxPipeSpeed:6,birdWidth:50,birdHeight:50,backgroundmusic:new Audio("game/flyingbird/background.mp3"),deathmusic:new Audio("game/flyingbird/gameover2.mp3"),scoremusic:new Audio("game/flyingbird/score.mp3")}},methods:{fetchData(){axios.get("/getParam").then(e=>{const i=e.data.additional_features;i==1||i==3?this.fetchBaca():p.fire({title:"Access Denied!",icon:"error",allowOutsideClick:!1,allowEscapeKey:!1,showCloseButton:!1,showCancelButton:!1}).then(s=>{window.location.href="/"})}).catch(e=>{console.error(e)})},fetchBaca(){axios.get("/getInfoBaca").then(e=>{const i=e.data;i.code==1?this.initGame():p.fire({icon:"warning",text:i.message,allowOutsideClick:!1,allowEscapeKey:!1,showCloseButton:!1,showCancelButton:!1}).then(s=>{window.location.href="/koleksi-buku"})}).catch(e=>{console.error(e)})},initGame(){this.app=new u({resizeTo:window,backgroundColor:8900331}),document.getElementById("game-content").appendChild(this.app.view),this.app.view.style.width="100%",this.app.view.style.height=`${this.getCanvasHeight()}px`;const i=m.from("game/flyingbird/bird.png");this.bird=new b(i),this.updateBirdSize(),this.bird.anchor.set(.5),this.bird.x=this.app.screen.width/4,this.bird.y=this.app.screen.height/2,this.app.stage.addChild(this.bird),window.addEventListener("click",this.flapBird),window.addEventListener("touchstart",this.flapBird),this.pipeInterval=setInterval(this.createPipe,1500),this.speedIncreaseInterval=setInterval(this.increaseDifficulty,5e3),this.addGround(),this.app.ticker.add(this.gameLoop),window.addEventListener("resize",this.onResize),this.backgroundmusic.loop=!0,this.backgroundmusic.play()},increaseDifficulty(){this.pipeSpeed<this.maxPipeSpeed&&(this.pipeSpeed+=this.speedIncreaseRate)},gameLoop(e){if(this.gameOver)return;this.birdVelocity+=this.gravity,this.bird.y+=this.birdVelocity;const i=this.bird.y+this.bird.height/2,s=this.app.screen.height-this.groundHeight;i>=s&&(this.bird.y=s-this.bird.height/2,this.endGame()),this.bird.y<0&&(this.bird.y=0),this.pipes.forEach(t=>{t.top.x-=this.pipeSpeed,t.bottom.x-=this.pipeSpeed}),this.pipes=this.pipes.filter(t=>t.top.x+t.top.width>0),this.pipes.forEach(t=>{this.bird.x+this.bird.width/2>t.top.x&&this.bird.x-this.bird.width/2<t.top.x+t.top.width&&(this.bird.y-this.bird.height/2<t.top.height||this.bird.y+this.bird.height/2>t.bottom.y)&&this.endGame()}),this.pipes.forEach(t=>{t.top.x+t.top.width<this.bird.x&&!t.scored&&(t.scored=!0,this.score++,this.playScoreMusic())})},flapBird(){this.gameOver||(this.birdVelocity=-5,this.gameStarted||(this.gameStarted=!0))},createPipe(){const e=Math.floor(Math.random()*(this.app.screen.height/2))+100,i=new h;i.beginFill(32768),i.drawRect(0,0,this.pipeWidth,e),i.endFill(),i.x=this.app.screen.width,i.y=0;const s=new h;s.beginFill(32768),s.drawRect(0,0,this.pipeWidth,this.app.screen.height-e-this.pipeGap),s.endFill(),s.x=this.app.screen.width,s.y=e+this.pipeGap,this.pipes.push({top:i,bottom:s,scored:!1}),this.app.stage.addChild(i),this.app.stage.addChild(s)},addGround(){const e=new h;e.beginFill(9127187),e.drawRect(0,this.app.screen.height-this.groundHeight,this.app.screen.width,this.groundHeight),e.endFill(),this.app.stage.addChild(e)},endGame(){this.gameOver=!0,clearInterval(this.pipeInterval),clearInterval(this.speedIncreaseInterval),this.backgroundmusic.pause(),this.deathmusic.play()},playScoreMusic(){this.scoremusic.play()},restartGame(){this.app.destroy(!0,{children:!0,texture:!0,baseTexture:!0}),this.pipes=[],this.score=0,this.gameOver=!1,this.gameStarted=!1,this.initGame(),this.backgroundmusic.currentTime=0,this.backgroundmusic.play()},onResize(){this.app.renderer.resize(window.innerWidth,window.innerHeight),this.app.view.style.height=`${this.getCanvasHeight()}px`,this.bird.x=this.app.screen.width/4,this.bird.y=this.app.screen.height/2,this.updateBirdSize(),this.groundHeight=50},updateBirdSize(){const e=window.innerWidth,i=window.innerHeight;e<600?(this.birdWidth=i*.08,this.birdHeight=i*.08):(this.birdWidth=50,this.birdHeight=50),this.bird.width=this.birdWidth,this.bird.height=this.birdHeight},getCanvasHeight(){return window.innerHeight*.8}},mounted(){this.fetchData()}},x=e=>(f("data-v-8bece335"),e=e(),y(),e),S={id:"game-content",class:"game-container-wrapper"},k={key:0,class:"game-over"},B=x(()=>r("h1",{class:"text-white"},"Permainan Berakhir!",-1)),I={key:1,class:"score"};function C(e,i,s,t,a,o){return n(),d("div",S,[a.gameOver?(n(),d("div",k,[B,r("p",null,"Skor Anda: "+c(a.score),1),r("button",{onClick:i[0]||(i[0]=(...g)=>o.restartGame&&o.restartGame(...g))},"Mulai Ulang Permainan")])):l("",!0),a.gameOver?l("",!0):(n(),d("div",I,[r("h2",null,"Skor: "+c(a.score),1)]))])}const O=w(v,[["render",C],["__scopeId","data-v-8bece335"]]);export{O as default};
//# sourceMappingURL=GameFlyingBird-B3tb2a4B.js.map
