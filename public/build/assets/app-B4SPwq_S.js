const __vite__mapDeps=(i,m=__vite__mapDeps,d=(m.f||(m.f=["./404-Ot4IH1TX.js","./sweetalert2.min-C72B2ZMm.js","./_commonjsHelpers-DSXiPLDm.js","./sweetalert2-CrFDNqdC.css","./Home-D7I4AUHS.js","./Home-C2jsL6oz.css","./Profile-BgPl59hh.js","./Profile-DQ4SzO25.css","./RoleMenu-C_5A80Ao.js","./vee-validate.esm-Nlz2O7Po.js","./Banner-BFNEJrIw.js","./v4-DvF23Exx.js","./ReportReadBook-GhbbEGbV.js","./ReportReadBookUsers-BbmDtf9p.js","./ReportReadBookContents-DsEkbQZ7.js","./ReportReadNews-RTbNY2zc.js","./ReportBooks-B5c4A9s5.js","./ReportMembers-0svBKkTZ.js","./ReportLoans-CKTWpVvF.js","./ReportVisitors-CuKAd_tR.js","./ReportLibraryOfficers-W45z9-q9.js","./MasterBooks-DFawTPVq.js","./MasterMembers-Iqpu28Iy.js","./choices-BjfNYglD.css","./ReportPO-C7lK3RRe.js","./MasterLibraryOfficers-DoSB9amR.js","./TajukUtama-Dte7teHW.js","./quill-DIRzVCzf.js","./quill-D3eoGaYv.css","./Wawasan-nmOcq2Bb.js","./ReviewBuku-D-LV8pXJ.js","./TitikFokus-B3wK2lyy.js","./Humoria-BjTC2-aX.js","./LayarPenulis-WmZ3xp6-.js","./Frasa-B_98HPBa.js","./ReportOfflineVisitors-DQ2Iz7Yd.js","./Parameter-BCwmk7hE.js","./Quiz-B8pg8caA.js","./MasterTeachers-CF-2fIZf.js","./ProfileTeacher-DVFsa5Uj.js","./ProfileTeacher-3sNVV9C_.css","./ReportQuiz-BIMJJpUw.js","./Video-pDNwGUb1.js"])))=>i.map(i=>d[i]);
import{_ as f,r as c,o as r,c as n,a as e,F as k,b as $,n as w,t as l,d,w as v,e as b,f as x,g as L,h as t,i as y,j as I,k as A,l as P,m as T,p as V,q as O}from"./sweetalert2.min-C72B2ZMm.js";import{C as R}from"./component-DpQEOCBu.js";import"./_commonjsHelpers-DSXiPLDm.js";import"./jquery-h873QoHk.js";const D={name:"sidebarItems",data(){return{webmenus:[]}},mounted(){this.myWebMenu()},methods:{myWebMenu(){this.webmenus=[],window.axios.get("/my-web-menu").then(o=>{this.webmenus=o.data,setTimeout(()=>{const i=document.getElementById("sidebar");i&&(window.onFirstLoad(i),new window.Sidebar(i))},1e3)}).catch(o=>{console.error(o)})}},computed:{}},C={class:"sidebar-wrapper active"},M={class:"sidebar-header position-relative"},B={class:"d-flex justify-content-between align-items-center"},j={class:"logo"},S={href:"/admin"},z=["src"],q=e("div",{class:"theme-toggle d-flex gap-2 align-items-center mt-2"},[e("svg",{xmlns:"http://www.w3.org/2000/svg","xmlns:xlink":"http://www.w3.org/1999/xlink","aria-hidden":"true",role:"img",class:"iconify iconify--system-uicons",width:"20",height:"20",preserveAspectRatio:"xMidYMid meet",viewBox:"0 0 21 21"},[e("g",{fill:"none","fill-rule":"evenodd",stroke:"currentColor","stroke-linecap":"round","stroke-linejoin":"round"},[e("path",{d:"M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2",opacity:".3"}),e("g",{transform:"translate(-210 -1)"},[e("path",{d:"M220.5 2.5v2m6.5.5l-1.5 1.5"}),e("circle",{cx:"220.5",cy:"11.5",r:"4"}),e("path",{d:"m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"})])])]),e("div",{class:"form-check form-switch fs-6"},[e("input",{class:"form-check-input me-0",type:"checkbox",id:"toggle-dark",style:{cursor:"pointer"}}),e("label",{class:"form-check-label"})]),e("svg",{xmlns:"http://www.w3.org/2000/svg","xmlns:xlink":"http://www.w3.org/1999/xlink","aria-hidden":"true",role:"img",class:"iconify iconify--mdi",width:"20",height:"20",preserveAspectRatio:"xMidYMid meet",viewBox:"0 0 24 24"},[e("path",{fill:"currentColor",d:"m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z"})])],-1),F=e("div",{class:"sidebar-toggler x"},[e("a",{href:"#",class:"sidebar-hide d-xl-none d-block"},[e("i",{class:"bi bi-x bi-middle"})])],-1),N={class:"sidebar-menu"},W={class:"menu"},Y={key:0,class:"sidebar-item has-sub"},H={href:"javascript:void(0)",class:"sidebar-link"},K={class:"submenu"};function Z(o,i,s,g,_,u){const m=c("router-link");return r(),n("div",C,[e("div",M,[e("div",B,[e("div",j,[e("a",S,[e("img",{src:"/storage/images/logo/logo.png?"+Math.floor(Math.random()*900)+100,alt:"Logo",srcset:""},null,8,z)])]),q,F])]),e("div",N,[e("ul",W,[(r(!0),n(k,null,$(_.webmenus,a=>(r(),n(k,null,[a.childs.length>0||a.menu_link==="N"?(r(),n("li",Y,[e("a",H,[e("i",{class:w(a.menu_icon)},null,2),e("span",null,l(a.menu_label),1)]),e("ul",K,[(r(!0),n(k,null,$(a.childs,(h,E)=>(r(),n("li",{class:w(["submenu-item",{active:h.menu_fn===o.$route.name}]),key:E},[d(m,{to:{name:h.menu_fn},class:"submenu-link"},{default:v(()=>[b(l(h.menu_label),1)]),_:2},1032,["to"])],2))),128))])])):(r(),n("li",{key:1,class:w(["sidebar-item",{active:a.menu_fn===o.$route.name}])},[d(m,{to:{name:a.menu_fn},class:"sidebar-link"},{default:v(()=>[e("i",{class:w(a.menu_icon)},null,2),e("span",null,l(a.menu_label),1)]),_:2},1032,["to"])],2))],64))),256))])])])}const G=f(D,[["render",Z]]),J={props:{user:{type:Object,required:!0}},name:"headerItems",mounted(){},methods:{logout(){let o=this.$loading.show();window.axios.post("/logout").then(i=>{o.hide(),window.location="/admin"})}},computed:{}},Q={class:"navbar navbar-expand navbar-light navbar-top"},U={class:"container-fluid"},X=e("a",{href:"javascript:void(0)",class:"burger-btn d-block"},[e("i",{class:"bi bi-justify fs-3"})],-1),ee=e("button",{class:"navbar-toggler",type:"button","data-bs-toggle":"collapse","data-bs-target":"#navbarSupportedContent","aria-controls":"navbarSupportedContent","aria-expanded":"false","aria-label":"Toggle navigation"},[e("span",{class:"navbar-toggler-icon"})],-1),te={class:"collapse navbar-collapse",id:"navbarSupportedContent"},oe=e("ul",{class:"navbar-nav ms-auto mb-lg-0"},null,-1),re={class:"dropdown"},ae={href:"#","data-bs-toggle":"dropdown","aria-expanded":"false"},se={class:"user-menu d-flex"},ne={class:"user-name text-end me-3"},ie={class:"mb-0 text-gray-600"},me={class:"mb-0 text-sm text-gray-600"},le={class:"user-img d-flex align-items-center"},_e={class:"avatar avatar-md"},ce=["src"],de={class:"dropdown-menu dropdown-menu-end","aria-labelledby":"dropdownMenuButton",style:{"min-width":"11rem"}},pe={class:"dropdown-header"},ue=e("i",{class:"icon-mid bi bi-person me-2"},null,-1),he=e("i",{class:"icon-mid bi bi-person me-2"},null,-1),be=e("i",{class:"icon-mid bi bi-box-arrow-left me-2"},null,-1);function ve(o,i,s,g,_,u){const m=c("router-link");return r(),n("nav",Q,[e("div",U,[X,ee,e("div",te,[oe,e("div",re,[e("a",ae,[e("div",se,[e("div",ne,[e("h6",ie,l(s.user.name),1),e("p",me,l(s.user.email),1)]),e("div",le,[e("div",_e,[e("img",{src:"/storage/images/logo/logo_small.png?"+Math.floor(Math.random()*900)+100},null,8,ce)])])])]),e("ul",de,[e("li",null,[e("h6",pe,l(s.user.name),1)]),e("li",null,[s.user.role=="teacher"?(r(),x(m,{key:0,to:{name:"teacher_account"},class:"dropdown-item"},{default:v(()=>[ue,b(" Profil")]),_:1})):(r(),x(m,{key:1,to:{name:"my_account"},class:"dropdown-item"},{default:v(()=>[he,b(" Profil Perpustakaan")]),_:1}))]),e("li",null,[e("a",{class:"dropdown-item",href:"javascript:void(0);",onClick:i[0]||(i[0]=L((...a)=>u.logout&&u.logout(...a),["prevent"]))},[be,b(" Keluar")])])])])])])])}const fe=f(J,[["render",ve]]),ge={name:"footerItems",data(){return{}},mounted(){},methods:{},computed:{}},we={class:"footer clearfix mb-0 text-muted"},Ee=e("div",{class:"float-start"},[e("p",null,"v 1.0.0")],-1),ke=e("div",{class:"float-end"},null,-1),$e=[Ee,ke];function xe(o,i,s,g,_,u){return r(),n("div",we,$e)}const Le=f(ge,[["render",xe]]),ye={components:{sidebarItems:G,headerItems:fe,footerItems:Le},data(){return{user:{role:""}}},mounted(){this.userinfo(),document.addEventListener("DOMContentLoaded",()=>{let o=this.$loading.show();setTimeout(()=>{o.hide()},1e3)})},methods:{userinfo(){this.user={},window.axios.get("/userinfo").then(o=>{this.user=o.data}).catch(o=>{console.error(o)})}},computed:{}},Ie={id:"app"},Ae={id:"sidebar"},Pe={id:"main",class:"layout-navbar navbar-fixed"},Te={id:"main-content"};function Ve(o,i,s,g,_,u){const m=c("sidebarItems"),a=c("headerItems"),h=c("router-view"),E=c("footerItems");return r(),n("div",Ie,[e("div",Ae,[d(m)]),e("div",Pe,[e("header",null,[d(a,{user:_.user},null,8,["user"])]),e("div",Te,[d(h,{user:_.user},null,8,["user"])]),e("footer",null,[d(E)])])])}const Oe=f(ye,[["render",Ve]]),Re=[{path:"/:pathMatch(.*)*",name:"NotFound",component:()=>t(()=>import("./404-Ot4IH1TX.js"),__vite__mapDeps([0,1,2,3]),import.meta.url)},{path:"/admin",name:"home",component:()=>t(()=>import("./Home-D7I4AUHS.js"),__vite__mapDeps([4,2,1,3,5]),import.meta.url),props:o=>({user:o.meta.user})},{path:"/my-account",name:"my_account",component:()=>t(()=>import("./Profile-BgPl59hh.js"),__vite__mapDeps([6,1,2,3,7]),import.meta.url)},{path:"/setting/role-menu",name:"role_menu",component:()=>t(()=>import("./RoleMenu-C_5A80Ao.js"),__vite__mapDeps([8,9,1,2,3]),import.meta.url)},{path:"/setting/banner",name:"banner",component:()=>t(()=>import("./Banner-BFNEJrIw.js"),__vite__mapDeps([10,9,1,2,3,11]),import.meta.url)},{path:"/report/report-read-book",name:"report_read_book",component:()=>t(()=>import("./ReportReadBook-GhbbEGbV.js"),__vite__mapDeps([12,1,2,3]),import.meta.url)},{path:"/report/report-read-book-users",name:"report_read_book_users",component:()=>t(()=>import("./ReportReadBookUsers-BbmDtf9p.js"),__vite__mapDeps([13,1,2,3]),import.meta.url)},{path:"/report/report-read-book-contents",name:"report_read_book_contents",component:()=>t(()=>import("./ReportReadBookContents-DsEkbQZ7.js"),__vite__mapDeps([14,1,2,3]),import.meta.url)},{path:"/report/report-read-news",name:"report_read_news",component:()=>t(()=>import("./ReportReadNews-RTbNY2zc.js"),__vite__mapDeps([15,9,1,2,3]),import.meta.url)},{path:"/report/report-books",name:"report_books",component:()=>t(()=>import("./ReportBooks-B5c4A9s5.js"),__vite__mapDeps([16,1,2,3]),import.meta.url)},{path:"/report/report-members",name:"report_members",component:()=>t(()=>import("./ReportMembers-0svBKkTZ.js"),__vite__mapDeps([17,1,2,3]),import.meta.url)},{path:"/report/report-loans",name:"report_loans",component:()=>t(()=>import("./ReportLoans-CKTWpVvF.js"),__vite__mapDeps([18,1,2,3]),import.meta.url)},{path:"/report/report-visitors",name:"report_visitors",component:()=>t(()=>import("./ReportVisitors-CuKAd_tR.js"),__vite__mapDeps([19,1,2,3]),import.meta.url)},{path:"/report/report-Libraryl-officers",name:"report_library_officers",component:()=>t(()=>import("./ReportLibraryOfficers-W45z9-q9.js"),__vite__mapDeps([20,9,1,2,3]),import.meta.url)},{path:"/master/master-books",name:"master_books",component:()=>t(()=>import("./MasterBooks-DFawTPVq.js"),__vite__mapDeps([21,9,1,2,3]),import.meta.url)},{path:"/master/master-members",name:"master_members",component:()=>t(()=>import("./MasterMembers-Iqpu28Iy.js"),__vite__mapDeps([22,9,1,2,3,23]),import.meta.url)},{path:"/report/report-po",name:"report_po",component:()=>t(()=>import("./ReportPO-C7lK3RRe.js"),__vite__mapDeps([24,9,1,2,3]),import.meta.url)},{path:"/master/master-library-officers",name:"master_library_officers",component:()=>t(()=>import("./MasterLibraryOfficers-DoSB9amR.js"),__vite__mapDeps([25,9,1,2,3]),import.meta.url)},{path:"/setting/tajuk-utama",name:"tajuk_utama",component:()=>t(()=>import("./TajukUtama-Dte7teHW.js"),__vite__mapDeps([26,9,1,2,3,27,11,28]),import.meta.url)},{path:"/setting/wawasan",name:"wawasan",component:()=>t(()=>import("./Wawasan-nmOcq2Bb.js"),__vite__mapDeps([29,9,1,2,3,27,11,28]),import.meta.url)},{path:"/setting/review-buku",name:"review_buku",component:()=>t(()=>import("./ReviewBuku-D-LV8pXJ.js"),__vite__mapDeps([30,9,1,2,3,27,11,28]),import.meta.url)},{path:"/setting/titik-fokus",name:"titik_fokus",component:()=>t(()=>import("./TitikFokus-B3wK2lyy.js"),__vite__mapDeps([31,9,1,2,3,27,11,28]),import.meta.url)},{path:"/setting/humoria",name:"humoria",component:()=>t(()=>import("./Humoria-BjTC2-aX.js"),__vite__mapDeps([32,9,1,2,3,27,11,28]),import.meta.url)},{path:"/setting/layar-penulis",name:"layar_penulis",component:()=>t(()=>import("./LayarPenulis-WmZ3xp6-.js"),__vite__mapDeps([33,9,1,2,3,27,11,28]),import.meta.url)},{path:"/setting/frasa",name:"frasa",component:()=>t(()=>import("./Frasa-B_98HPBa.js"),__vite__mapDeps([34,9,1,2,3,11]),import.meta.url)},{path:"/report/report-offline-visitors",name:"report_offline_visitors",component:()=>t(()=>import("./ReportOfflineVisitors-DQ2Iz7Yd.js"),__vite__mapDeps([35,1,2,3]),import.meta.url)},{path:"/parameter",name:"parameter",component:()=>t(()=>import("./Parameter-BCwmk7hE.js"),__vite__mapDeps([36,1,2,3]),import.meta.url)},{path:"/setting/quiz",name:"quiz",component:()=>t(()=>import("./Quiz-B8pg8caA.js"),__vite__mapDeps([37,9,1,2,3,11]),import.meta.url)},{path:"/master/master-teachers",name:"master_teachers",component:()=>t(()=>import("./MasterTeachers-CF-2fIZf.js"),__vite__mapDeps([38,9,1,2,3,23]),import.meta.url)},{path:"/teacher-account",name:"teacher_account",component:()=>t(()=>import("./ProfileTeacher-DVFsa5Uj.js"),__vite__mapDeps([39,1,2,3,40]),import.meta.url)},{path:"/report/report-quiz",name:"report_quiz",component:()=>t(()=>import("./ReportQuiz-BIMJJpUw.js"),__vite__mapDeps([41,1,2,3]),import.meta.url)},{path:"/setting/video",name:"video",component:()=>t(()=>import("./Video-pDNwGUb1.js"),__vite__mapDeps([42,9,1,2,3,11]),import.meta.url)}],De={props:{menuLabel:{type:String,default:""},data:{type:Object,default:()=>({})}}},Ce={class:"page-heading"},Me={class:"page-title"},Be={class:"row"},je={class:"col-12 col-md-6 order-md-1 order-last"},Se={class:"text-subtitle text-muted"},ze={class:"col-12 col-md-6 order-md-2 order-first"},qe={"aria-label":"breadcrumb",class:"breadcrumb-header float-start float-lg-end"},Fe={class:"breadcrumb"},Ne={class:"breadcrumb-item"},We=["textContent"];function Ye(o,i,s,g,_,u){const m=c("router-link");return r(),n("div",Ce,[e("div",Me,[e("div",Be,[e("div",je,[e("h3",null,l(s.data.menu_label),1),e("p",Se,l(s.data.menu_desc),1)]),e("div",ze,[e("nav",qe,[e("ol",Fe,[e("li",Ne,[d(m,{to:{name:"home"}},{default:v(()=>[b("Beranda")]),_:1})]),s.menuLabel?(r(),n("li",{key:0,class:"breadcrumb-item active","aria-current":"page",textContent:l(s.menuLabel)},null,8,We)):y("",!0)])])])])])])}const He=f(De,[["render",Ye]]),Ke=I({history:A(),linkActiveClass:"active",routes:Re}),Ze={enforceFocus:!1,canCancel:!1,loader:"spinner",color:"#8080ff",backgroundColor:"#111111",width:110,height:110,opacity:.4,zIndex:1999},Ge={buttonsStyling:!1,customClass:{htmlContainer:"mx-2 fs-sm",confirmButton:"btn btn-sm btn-primary me-2",cancelButton:"btn btn-sm btn-secondary"}};P.replace();const p=T(Oe);p.mixin({methods:{web_access_log(o=null){return window.axios.post("/web-access-log",{url:this.$route.path,full_url:this.$route.fullPath,name:o||this.$route.name})}}});p.component("action-bar",He);p.component("Flatpickr",R);p.use(V,Ge);p.use(O.LoadingPlugin,Ze);p.use(Ke);p.mount("#page-container");
//# sourceMappingURL=app-B4SPwq_S.js.map
