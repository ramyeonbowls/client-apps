import{_ as v,c as o,a as t,t as d,i as c,F as _,b as m,r as y,o as i,d as p,w as u,e as b}from"./sweetalert2.min-C72B2ZMm.js";import"./_commonjsHelpers-DSXiPLDm.js";const k={props:{isAuthenticated:{type:Boolean,required:!0}},data(){return{idart:"",displayedCount:6,articles:[]}},mounted(){this.idart=this.$route.params.idart,this.getArtikel()},methods:{async getArtikel(){try{let r=this.$loading.show();axios.get("/getArticle",{params:{id:this.idart}}).then(a=>{this.articles=a.data,r.hide()}).catch(a=>{r.hide(),console.error(a)})}catch(r){loader.hide(),console.error(r)}},async refreshData(){this.idart=this.$route.params.idart,await this.getArtikel()},loadMore(){this.displayedCount+=6}},computed:{displayedContents(){return this.articles.slice(0,this.displayedCount)},showLoadMore(){return this.articles.length>this.displayedCount}},watch:{"$route.params.idart":"refreshData"}},w={class:"page-content"},x={class:"col-12"},g={key:0,class:"row"},f={class:"card h-100"},C={class:"card-content d-flex flex-column"},L={key:1,class:"row"},M={class:"card h-100 px-2 mb-1 hover-shadow"},T={class:"d-flex justify-content-center align-items-center flex-column mt-3"},A={class:"avatar"},B=["src"],F={class:"card-body pb-0"},H={href:"#"},D=["title"],N={class:"m-top-sm m-bottom-sm mt-2","data-bs-toggle":"tooltip","data-bs-placement":"bottom",style:{display:"-webkit-box","line-clamp":"3","-webkit-box-orient":"vertical",overflow:"hidden","text-overflow":"ellipsis"}},R=["innerHTML"],V=t("a",{href:"#"},[t("h6",null,"Lanjutkan Membaca ")],-1),j={key:2,class:"row"},P={class:"card h-100 mb-0 hover-shadow"},U={class:"card-content d-flex flex-column"},W={class:"product-image mb-0 pb-0"},q=["src"],E={class:"card-body"},O={class:"card-title"},S={href:"#"},z=["title"],G={key:0},I={class:"text-muted"},J={class:"m-top-sm m-bottom-sm mt-2","data-bs-toggle":"tooltip","data-bs-placement":"bottom",style:{display:"-webkit-box","line-clamp":"4","-webkit-box-orient":"vertical",overflow:"hidden","text-overflow":"ellipsis"}},K=["innerHTML"],Q={key:3,class:"divider"},X={class:"divider-text bg-transparent"};function Y(r,a,Z,$,s,l){const h=y("router-link");return i(),o("div",w,[t("div",x,[l.displayedContents<=0?(i(),o("div",g,[t("div",f,[t("div",C," Tidak Ada Data "+d(s.idart=="TU"?"Tajuk Utama":s.idart=="WA"?"Wawasan":s.idart=="FR"?"Frasa":s.idart=="RB"?"Review Buku":s.idart=="LP"?"Layar Penulis":s.idart=="TF"?"Titik Fokus":"Humoria"),1)])])):c("",!0),s.idart=="LP"?(i(),o("div",L,[(i(!0),o(_,null,m(l.displayedContents,(e,n)=>(i(),o("div",{key:n,class:"col-12 col-lg-4 mb-2 mt-2"},[p(h,{to:{name:"detail-artikel",params:{idart:s.idart,detail:e.id}}},{default:u(()=>[t("div",M,[t("div",T,[t("div",A,[t("img",{src:e.image,style:{height:"90px",width:"90px"}},null,8,B)])]),t("div",F,[t("a",H,[t("h5",{"data-bs-toggle":"tooltip","data-bs-placement":"bottom",style:{display:"-webkit-box","line-clamp":"2","-webkit-box-orient":"vertical",overflow:"hidden","text-overflow":"ellipsis"},title:e.title},d(e.title),9,D)]),t("p",N,[t("span",{innerHTML:e.content},null,8,R)]),V])])]),_:2},1032,["to"])]))),128))])):(i(),o("div",j,[(i(!0),o(_,null,m(l.displayedContents,(e,n)=>(i(),o("div",{key:n,class:"col-12 col-lg-4 mb-2 mt-2"},[p(h,{to:{name:"detail-artikel",params:{idart:s.idart,detail:e.id}}},{default:u(()=>[t("div",P,[t("div",U,[t("div",W,[t("img",{src:e.image,class:"img-fluid",style:{"border-radius":"5px 5px 0 0 !important"}},null,8,q)]),t("div",E,[t("div",O,[t("a",S,[t("h5",{"data-bs-toggle":"tooltip","data-bs-placement":"bottom",style:{display:"-webkit-box","line-clamp":"3","-webkit-box-orient":"vertical",overflow:"hidden","text-overflow":"ellipsis"},title:e.title},d(e.title),9,z)])]),s.idart=="TU"||s.idart=="RB"?(i(),o("div",G,[t("small",I,[b("Oleh "),t("strong",null,d(e.author),1),b(" | "+d(e.published_at),1)])])):c("",!0),t("p",J,[t("span",{innerHTML:e.content},null,8,K)])])])])]),_:2},1032,["to"])]))),128))])),l.showLoadMore?(i(),o("div",Q,[t("div",X,[t("button",{class:"btn btn-secondary mt-3 rounded-pill",onClick:a[0]||(a[0]=(...e)=>l.loadMore&&l.loadMore(...e))},"Load More")])])):c("",!0)])])}const st=v(k,[["render",Y]]);export{st as default};
//# sourceMappingURL=Artikel-D1K_qGKS.js.map
