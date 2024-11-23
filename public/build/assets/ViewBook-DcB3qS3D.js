import{S as x,a as B,N as T,P as C,b as S,A as E}from"./scrollbar-ByqcctOX.js";import{_ as j,c as m,a as e,i as h,e as u,F as b,t as a,n as v,d as w,w as _,r as p,o as r,b as N,f as P,x as D,y as R}from"./sweetalert2.min-C72B2ZMm.js";import"./_commonjsHelpers-DSXiPLDm.js";const K={components:{Swiper:x,SwiperSlide:B},props:{isAuthenticated:{type:Boolean,required:!0}},setup(){return{onSwiper:l=>{},onSlideChange:()=>{},modules:[T,C,S,E]}},data(){return{idb:"",limit:200,isExpanded:!1,buku_populer:[],detail:{},activeTab:"sinopsis",swiperBreakpoints:{320:{slidesPerView:2,spaceBetween:10},640:{slidesPerView:2,spaceBetween:10},768:{slidesPerView:4,spaceBetween:10},1024:{slidesPerView:6,spaceBetween:10}}}},created(){this.getBukuPopuler(),this.initializeSubMenu()},mounted(){this.idb=this.$route.params.idb,this.getDetail()},methods:{toggleText(){this.isExpanded=!this.isExpanded},bacaBuku(){if(!this.isAuthenticated)this.$router.push("/mlogin");else{let t=this.$loading.show();window.axios.get("/ReadCheck",{params:{pdfToken:encodeURIComponent(this.detail.book_id),age:this.detail.age}}).then(s=>{if(s.data.code==1){const l=this.$router.resolve({name:"appreader",query:{pdfToken:encodeURIComponent(this.detail.book_id)}});t.hide(),window.location.assign(l.href)}else t.hide(),this.$swal({text:s.data.message,icon:s.data.code=="2"?"warning":"error",allowOutsideClick:!1,allowEscapeKey:!1,showCloseButton:!1,showCancelButton:!1})}).catch(s=>{t.hide(),this.$swal({title:s.response.data.message,text:"Silahkan verifikasi email, jika klik Kirim Email jika ingin kirim ulang email verifikasi",icon:"warning",showCancelButton:!0,confirmButtonText:"Kirim Email",cancelButtonText:"Tutup"}).then(async l=>{if(l.isConfirmed)try{const n=await window.axios.post("/email/resend");this.$swal({title:"Email Terkirim!",text:n.data.message,icon:"success"})}catch(n){this.$swal({title:"Gagal!",text:n.response.data.message||"Terjadi kesalahan saat mengirim email.",icon:"error"})}})})}},pinjamBuku(){let t=this.$loading.show();window.axios.post("/RentBook",{pdfToken:encodeURIComponent(this.detail.book_id),age:this.detail.age}).then(s=>{t.hide(),this.$swal({text:s.data.message,icon:s.data.code==1?"success":"warning",allowOutsideClick:!1,allowEscapeKey:!1,showCloseButton:!1,showCancelButton:!1}).then(l=>{s.data.code==1&&location.reload()})}).catch(s=>{t.hide(),s.response.data.message=="Email anda belum terverifikasi."?this.$swal({title:s.response.data.message,text:"Silahkan verifikasi email, jika klik Kirim Email jika ingin kirim ulang email verifikasi",icon:"warning",showCancelButton:!0,confirmButtonText:"Kirim Email",cancelButtonText:"Tutup"}).then(async l=>{if(l.isConfirmed)try{const n=await window.axios.post("/email/resend");this.$swal({title:"Email Terkirim!",text:n.data.message,icon:"success"})}catch(n){this.$swal({title:"Gagal!",text:n.response.data.message||"Terjadi kesalahan saat mengirim email.",icon:"error"})}}):this.$swal({text:"Terjadi kesalahan saat pinjam buku, silahkan coba kembali",icon:"error",showCancelButton:!1})})},kembaliBuku(){let t=this.$loading.show();window.axios.post("/ReturnBook",{pdfToken:encodeURIComponent(this.detail.book_id)}).then(s=>{t.hide(),this.$swal({text:s.data.message,icon:s.data.code==1?"success":"error",allowOutsideClick:!1,allowEscapeKey:!1,showCloseButton:!1,showCancelButton:!1}).then(l=>{location.reload()})}).catch(s=>{t.hide(),this.$swal({text:"Terjadi kesalahan saat pinjam buku, silahkan coba kembali",icon:"error",showCancelButton:!1})})},getBukuPopuler(){this.buku_populer=[],window.axios.get("/getBukuPopuler").then(t=>{this.buku_populer=t.data}).catch(t=>{console.error(t)})},async getDetail(){try{let t=this.$loading.show();axios.get("/getDetail",{params:{id:this.idb}}).then(s=>{this.detail=s.data,t.hide()}).catch(s=>{t.hide(),console.error(s)})}catch(t){loader.hide(),console.error(t)}},scrollTo(t){const s=document.getElementById(t);if(this.activeTab=t,s){const l=s.getBoundingClientRect().top+window.pageYOffset;window.scrollTo({top:l-200,behavior:"smooth"})}},async refreshData(){this.idb=this.$route.params.idb,await this.getDetail(),await this.getBukuPopuler(),this.initializeSubMenu(),this.activeTab="sinopsis",window.scrollTo({top:0,behavior:"smooth"})},initializeSubMenu(){document.querySelectorAll(".submenu-item").forEach(s=>{s.querySelector(".submenu-link").addEventListener("click",l=>{let n=document.querySelector(".main-navbar");n.classList.contains("active")&&n.classList.remove("active"),l.preventDefault()})})}},computed:{truncatedText(){return this.detail.sinopsis?this.detail.sinopsis.length>this.limit?this.detail.sinopsis.slice(0,this.limit)+"...":this.detail.sinopsis:""},needsReadMore(){return this.detail.sinopsis&&this.detail.sinopsis.length>this.limit}},watch:{"$route.params.idb":"refreshData"}},c=t=>(D("data-v-8aab3b48"),t=t(),R(),t),I={class:"page-content"},V={class:"row"},U={class:"col-12 col-lg-4 card-cover"},A={class:"sticky-section h-100"},q={class:"card h-100"},L={class:"card-body"},M={class:"card-content text-center mb-2"},O=["src","alt"],z={class:"buttons mt-3"},F=c(()=>e("i",{class:"bi bi-book-fill"},null,-1)),G=c(()=>e("i",{class:"bi bi-bookmarks"},null,-1)),Y=c(()=>e("i",{class:"bi bi-bookmarks"},null,-1)),H={class:"col-12 col-lg-8"},J={class:"card h-100"},Q={class:"card-header"},W={class:"text-subtitle text-muted"},X={class:"mt-1"},Z={class:"nav nav-tabs",id:"myTab",role:"tablist"},$={class:"nav-item",role:"presentation"},ee=["aria-selected"],se={class:"nav-item",role:"presentation"},te=["aria-selected"],ie={class:"card-body"},oe=c(()=>e("div",{class:"divider divider-left"},[e("div",{class:"divider-text"},"Deskripsi Buku")],-1)),ae={class:"my-2 tab-pane",id:"sinopsis"},le={key:0},ne={key:1},ce=c(()=>e("div",{class:"divider divider-left"},[e("div",{class:"divider-text"},"Detail")],-1)),de={class:"row tab-pane details",id:"details"},re={class:"col-md-6 mb-1 mt-0"},me={class:"form-group"},he={class:"comment-body"},ue=c(()=>e("div",{class:"comment-profileName mb-0"},"Copy ",-1)),_e={class:"comment-time mt-0"},pe={class:"form-group"},be={class:"comment-body"},ve=c(()=>e("div",{class:"comment-profileName mb-0"},"Jumlah Halaman ",-1)),we={class:"comment-time mt-0"},ke={class:"form-group"},ge={class:"comment-body"},fe=c(()=>e("div",{class:"comment-profileName mb-0"},"Kategori ",-1)),ye={class:"comment-time mt-0"},xe={class:"form-group"},Be={class:"comment-body"},Te=c(()=>e("div",{class:"comment-profileName mb-0"},"ISBN ",-1)),Ce={class:"comment-time mt-0"},Se={class:"col-md-6 mb-1 mt-0"},Ee={class:"form-group"},je={class:"comment-body"},Ne=c(()=>e("div",{class:"comment-profileName mb-0"},"Penulis ",-1)),Pe={class:"comment-time mt-0"},De={class:"form-group"},Re={class:"comment-body"},Ke=c(()=>e("div",{class:"comment-profileName mb-0"},"Tahun Terbit ",-1)),Ie={class:"comment-time mt-0"},Ve={class:"form-group"},Ue={class:"comment-body"},Ae=c(()=>e("div",{class:"comment-profileName mb-0"},"Batas Umur ",-1)),qe={class:"comment-time mt-0"},Le={class:"form-group"},Me={class:"comment-body"},Oe=c(()=>e("div",{class:"comment-profileName mb-0"},"Penerbit ",-1)),ze={class:"comment-time mt-0"},Fe={class:"row mt-4"},Ge={class:"col-12 col-lg-12"},Ye={class:"card"},He={class:"row mb-2 py-0 px-0 mx-0 my-0"},Je=c(()=>e("div",{class:"divider divider-left-center"},[e("h2",null,"BUKU TERPOPULER")],-1)),Qe={class:"col-12"},We={class:"row"},Xe={class:"card"},Ze={class:"product-image"},$e=["src","alt"],es={class:"card-body py-2"},ss={class:"card-title mb-0"},ts={href:"#"},is=["title"];function os(t,s,l,n,i,d){const k=p("router-link"),g=p("swiper-slide"),f=p("swiper");return r(),m("div",I,[e("section",V,[e("div",U,[e("div",A,[e("div",q,[e("div",L,[e("div",M,[i.detail.image?(r(),m("img",{key:0,src:i.detail.image.replace("&","&"),class:"img-fluid img-detail",alt:i.detail.title,height:"80%",width:"80%",style:{"border-radius":"10px 10px 10px 10px !important"}},null,8,O)):h("",!0)]),e("div",z,[e("button",{class:"btn btn-primary btn-md me-2",onClick:s[0]||(s[0]=(...o)=>d.bacaBuku&&d.bacaBuku(...o))},[F,u(" Baca")]),l.isAuthenticated?(r(),m(b,{key:0},[i.detail.rent=="Y"?(r(),m("button",{key:0,class:"btn btn-warning text-white btn-md me-2",onClick:s[1]||(s[1]=(...o)=>d.kembaliBuku&&d.kembaliBuku(...o))},[G,u(" Kembalikan")])):(r(),m("button",{key:1,class:"btn btn-warning text-white btn-md me-2",onClick:s[2]||(s[2]=(...o)=>d.pinjamBuku&&d.pinjamBuku(...o))},[Y,u(" Pinjam")]))],64)):h("",!0)])])])])]),e("div",H,[e("div",J,[e("div",Q,[e("p",W,a(i.detail.writer),1),e("h3",X,a(i.detail.title),1)]),e("ul",Z,[e("li",$,[e("button",{class:v(["nav-link",{active:i.activeTab==="sinopsis"}]),onClick:s[3]||(s[3]=o=>d.scrollTo("sinopsis")),id:"sinopsis-tab",type:"button",role:"tab","aria-controls":"sinopsis","aria-selected":i.activeTab==="sinopsis"}," Sinopsis ",10,ee)]),e("li",se,[e("button",{class:v(["nav-link",{active:i.activeTab==="details"}]),onClick:s[4]||(s[4]=o=>d.scrollTo("details")),id:"detail-tab",type:"button",role:"tab","aria-controls":"details","aria-selected":i.activeTab==="details"}," Detail ",10,te)])]),e("div",ie,[oe,e("p",ae,[i.isExpanded?(r(),m("span",ne,a(i.detail.sinopsis),1)):(r(),m("span",le,a(d.truncatedText),1))]),d.needsReadMore?(r(),m("a",{key:0,class:"my-2 d-flex justify-content-end",role:"button",id:"toggleDescription",onClick:s[5]||(s[5]=(...o)=>d.toggleText&&d.toggleText(...o))},a(i.isExpanded?"Ringkas Deskripsi":"Baca Selengkapnya"),1)):h("",!0),ce,e("div",de,[e("div",re,[e("div",me,[e("div",he,[ue,e("div",_e,a(i.detail.remaining)+"/"+a(i.detail.copy),1)])]),e("div",pe,[e("div",be,[ve,e("div",we,a(i.detail.page),1)])]),e("div",ke,[e("div",ge,[fe,e("div",ye,a(i.detail.category),1)])]),e("div",xe,[e("div",Be,[Te,e("div",Ce,a(i.detail.isbn),1)])])]),e("div",Se,[e("div",Ee,[e("div",je,[Ne,e("div",Pe,a(i.detail.writer),1)])]),e("div",De,[e("div",Re,[Ke,e("div",Ie,a(i.detail.year),1)])]),e("div",Ve,[e("div",Ue,[Ae,e("div",qe,a(i.detail.age)+" Tahun",1)])]),e("div",Le,[e("div",Me,[Oe,e("div",ze,a(i.detail.publisher),1)])])])])])])])]),e("section",Fe,[e("div",Ge,[e("div",Ye,[e("div",He,[Je,e("div",Qe,[e("div",We,[w(f,{modules:n.modules,"slides-per-view":6,"space-between":0,breakpoints:i.swiperBreakpoints,navigation:"",scrollbar:{draggable:!0},onSwiper:n.onSwiper,onSlideChange:n.onSlideChange,autoplay:{delay:3e3},class:"swiper-container",loop:""},{default:_(()=>[(r(!0),m(b,null,N(i.buku_populer,(o,y)=>(r(),P(g,{key:y,class:"col-md-3 col-6"},{default:_(()=>[w(k,{to:{name:"detail-buku",params:{idb:o.isbn}}},{default:_(()=>[e("div",Xe,[e("div",Ze,[e("img",{src:o.image.replace("&","&"),class:"img-fluid",alt:o.alt,style:{width:"150px",height:"220px"}},null,8,$e)]),e("div",es,[e("p",ss,a(o.writer),1),e("a",ts,[e("h6",{class:"card-title","data-bs-toggle":"tooltip","data-bs-placement":"bottom",style:{display:"-webkit-box","line-clamp":"2","-webkit-box-orient":"vertical",overflow:"hidden","text-overflow":"ellipsis"},title:o.title},a(o.title),9,is)])])])]),_:2},1032,["to"])]),_:2},1024))),128))]),_:1},8,["modules","breakpoints","onSwiper","onSlideChange"])])])])])])])])}const cs=j(K,[["render",os],["__scopeId","data-v-8aab3b48"]]);export{cs as default};
//# sourceMappingURL=ViewBook-DcB3qS3D.js.map