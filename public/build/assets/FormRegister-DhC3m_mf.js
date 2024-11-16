import{_ as w,c as n,a as s,g as b,s as r,v as l,n as h,t as c,i as m,P as k,d as u,e as f,w as y,r as _,o as a}from"./sweetalert2.min-C72B2ZMm.js";import"./_commonjsHelpers-DSXiPLDm.js";const C={data(){return{name:"",email:"",password:"",passwordConfirm:"",phone:"",gender:"",birthday:"",nik:"",errors:{},csrfToken:"",configdate:{dateFormat:"Y-m-d",disableMobile:!0}}},mounted(){this.csrfToken=document.head.querySelector('meta[name="csrf-token"]').content},watch:{password(i,o){this.errors.password&&(this.errors.password=null),i!==this.passwordConfirm?this.errors.passwordConfirm=["Kata sandi tidak sesuai!"]:this.errors.passwordConfirm=null},passwordConfirm(i,o){this.errors.passwordConfirm&&(this.errors.passwordConfirm=null),i!==this.password?this.errors.passwordConfirm=["Kata sandi tidak sesuai!"]:this.errors.passwordConfirm=null}},methods:{filterInput(i,o){o=="nik"?this.nik=i.target.value.replace(/\D/g,""):o=="phone"&&(this.phone=i.target.value.replace(/\D/g,""))},async handleRegister(){if(this.password!==this.passwordConfirm){this.errors.passwordConfirm=["Kata sandi tidak sesuai!"];return}if(this.birthday==""){this.errors.isBirthdayValid=["Pilih Tanggal Lahir"];return}let i=this.$loading.show();await axios.post("/mregist",{_token:this.csrfToken,name:this.name,email:this.email,password:this.password,phone:this.phone,gender:this.gender,nik:this.nik,birthday:this.birthday,password_confirmation:this.passwordConfirm,role:"member"}).then(o=>{i.hide(),this.$swal({title:"Pendaftaran",text:o.data,icon:o.status===201?"success":"error",allowOutsideClick:!1,allowEscapeKey:!1,showCloseButton:!1,showCancelButton:!1}).then(p=>{window.location="/mlogin"})}).catch(o=>{let p=o.response.data.message?o.response.data.message:o.response.data?o.response.data:o.message;i.hide(),this.$swal({title:"Pendaftaran",text:p,icon:"error",allowOutsideClick:!1,allowEscapeKey:!1,showCloseButton:!1,showCancelButton:!1})})}}},x={class:"page-heading"},V={class:"row"},K=s("h1",{class:"auth-title"},"Daftar Member",-1),N=s("p",{class:"auth-subtitle mb-4"},"Masukkan data untuk jadi member perpustakaan",-1),B={class:"row"},S={class:"col-md-6 col-12"},U={class:"form-group"},I=s("label",{for:"name-column"},"Nama Lengkap",-1),q={class:"form-group position-relative has-icon-left mb-4"},L=s("div",{class:"form-control-icon"},[s("i",{class:"bi bi-person"})],-1),M={class:"col-md-6 col-12"},P={class:"form-group"},T=s("label",{for:"email-column"},"Email",-1),D={class:"form-group position-relative has-icon-left mb-4"},E=s("div",{class:"form-control-icon"},[s("i",{class:"bi bi-envelope"})],-1),F={key:0,class:"invalid-feedback"},R={class:"col-md-6 col-12"},j={class:"form-group"},H=s("label",{for:"no-hp-column"},"No. HP",-1),O={class:"form-group position-relative has-icon-left mb-4"},z=s("div",{class:"form-control-icon"},[s("i",{class:"bi bi-phone"})],-1),J={class:"col-md-6 col-12"},Y={class:"form-group"},A=s("label",{for:"jenis-kelamin-floating"},"Jenis Kelamin",-1),G=s("option",{value:""},"--",-1),Q=s("option",{value:"L"},"Laki - Laki",-1),W=s("option",{value:"P"},"Perempuan",-1),X=[G,Q,W],Z={class:"col-md-6 col-12"},$={class:"form-group"},ss=s("label",{for:"tanggal-lahir"},"Tanggal Lahir",-1),os={class:"form-group position-relative has-icon-left mb-4"},es=s("div",{class:"form-control-icon"},[s("i",{class:"bi bi-calendar3"})],-1),ts={key:0,class:"text-danger"},is={class:"col-md-6 col-12"},rs={class:"form-group"},ls=s("label",{for:"nik"},"Nomor Identitas",-1),ns={class:"form-group position-relative has-icon-left mb-4"},as=s("div",{class:"form-control-icon"},[s("i",{class:"bi bi-credit-card"})],-1),ds={class:"col-md-6 col-12"},cs={class:"form-group"},ms=s("label",{for:"password-column"},"Kata Sandi",-1),ps={class:"form-group position-relative has-icon-left mb-4"},hs=s("div",{class:"form-control-icon"},[s("i",{class:"bi bi-shield-lock"})],-1),fs={key:0,class:"invalid-feedback"},us={class:"col-md-6 col-12"},_s={class:"form-group"},vs=s("label",{for:"password-confirm-column"},"Ulangi Kata Sandi",-1),gs={class:"form-group position-relative has-icon-left mb-4"},ws=s("div",{class:"form-control-icon"},[s("i",{class:"bi bi-shield-lock"})],-1),bs={key:0,class:"invalid-feedback"},ks=s("div",{class:"col-md-6 col-12"},[s("button",{type:"submit",class:"btn btn-primary btn-block btn-md shadow-md mt-3"},"Daftar")],-1),ys={class:"col-12 d-flex justify-content-start mt-3"},Cs={class:"text-center text-md fs-10"},xs={class:"text-gray-600"};function Vs(i,o,p,Ks,e,d){const v=_("Flatpickr"),g=_("router-link");return a(),n("div",x,[s("div",V,[K,N,s("form",{class:"form",onSubmit:o[10]||(o[10]=b((...t)=>d.handleRegister&&d.handleRegister(...t),["prevent"]))},[s("div",B,[s("div",S,[s("div",U,[I,s("div",q,[r(s("input",{type:"text",class:"form-control form-control-md",placeholder:"Nama Lengkap","onUpdate:modelValue":o[0]||(o[0]=t=>e.name=t),required:""},null,512),[[l,e.name]]),L])])]),s("div",M,[s("div",P,[T,s("div",D,[r(s("input",{type:"text",class:h(["form-control form-control-md",{"is-invalid":e.errors.email}]),placeholder:"Email","onUpdate:modelValue":o[1]||(o[1]=t=>e.email=t),required:""},null,2),[[l,e.email]]),E,e.errors.email?(a(),n("div",F,c(e.errors.email[0]),1)):m("",!0)])])]),s("div",R,[s("div",j,[H,s("div",O,[r(s("input",{type:"text",id:"phoneNumberInput",class:"form-control form-control-md",placeholder:"No. Handphone",maxlength:"15",required:"","onUpdate:modelValue":o[2]||(o[2]=t=>e.phone=t),onInput:o[3]||(o[3]=t=>d.filterInput(t,"phone"))},null,544),[[l,e.phone]]),z])])]),s("div",J,[s("div",Y,[A,r(s("select",{class:"form-select",id:"gender","onUpdate:modelValue":o[4]||(o[4]=t=>e.gender=t),required:""},X,512),[[k,e.gender]])])]),s("div",Z,[s("div",$,[ss,s("div",os,[u(v,{modelValue:e.birthday,"onUpdate:modelValue":o[5]||(o[5]=t=>e.birthday=t),class:"form-control flatpickr-range",config:e.configdate,placeholder:"Select date..",required:""},null,8,["modelValue","config"]),es,e.errors.isBirthdayValid?(a(),n("span",ts,c(e.errors.isBirthdayValid[0]),1)):m("",!0)])])]),s("div",is,[s("div",rs,[ls,s("div",ns,[r(s("input",{type:"text",id:"nikInput",class:"form-control form-control-md",placeholder:"Nomor Induk Kependudukan",maxlength:"20","onUpdate:modelValue":o[6]||(o[6]=t=>e.nik=t),onInput:o[7]||(o[7]=t=>d.filterInput(t,"nik"))},null,544),[[l,e.nik]]),as])])]),s("div",ds,[s("div",cs,[ms,s("div",ps,[r(s("input",{type:"password",class:h(["form-control form-control-md",{"is-invalid":e.errors.password}]),placeholder:"Kata Sandi","onUpdate:modelValue":o[8]||(o[8]=t=>e.password=t),required:""},null,2),[[l,e.password]]),hs,e.errors.password?(a(),n("div",fs,c(e.errors.password[0]),1)):m("",!0)])])]),s("div",us,[s("div",_s,[vs,s("div",gs,[r(s("input",{type:"password",class:h(["form-control form-control-md",{"is-invalid":e.errors.passwordConfirm}]),placeholder:"Ulangi Kata Sandi","onUpdate:modelValue":o[9]||(o[9]=t=>e.passwordConfirm=t)},null,2),[[l,e.passwordConfirm]]),ws,e.errors.passwordConfirm?(a(),n("div",bs,c(e.errors.passwordConfirm[0]),1)):m("",!0)])])]),ks,s("div",ys,[s("div",Cs,[s("p",xs,[f(" Sudah punya akun? "),u(g,{to:{name:"mlogin"},class:"font-bold"},{default:y(()=>[f("Masuk")]),_:1}),f(" . ")])])])])],32)])])}const Ss=w(C,[["render",Vs]]);export{Ss as default};
//# sourceMappingURL=FormRegister-DhC3m_mf.js.map