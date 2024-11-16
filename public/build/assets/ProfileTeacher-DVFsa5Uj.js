import{_ as g,c as n,d as _,a as o,g as k,s as l,v as a,t as c,i as f,n as h,P as y,F as P,r as b,o as d,x as C,y as x}from"./sweetalert2.min-C72B2ZMm.js";import"./_commonjsHelpers-DSXiPLDm.js";const V={data(){return{menu:{menu_label:"Profil",menu_desc:"Profil Guru",permission:{create:!1,read:!1,update:!1,delete:!1,print:!1,approve:!1}},user:{},form:{field:{name:"",email:"",password:"",passwordConfirm:"",phone:"",gender:"",birthday:"",nik:"",avatar:""}},errors:{},configdate:{dateFormat:"Y-m-d",mode:"range"}}},mounted(){this.userinfo(),this.getProfile()},methods:{__MENU(){let i=this.$loading.show();window.axios.get("/web-access-log/"+this.$route.name).then(e=>{i.hide(),this.menu.menu_label=e.data.menu_label,this.menu.menu_desc=e.data.menu_desc,this.menu.permission=e.data.permission}).catch(e=>{i.hide(),console.error(e)})},userinfo(){this.user={},window.axios.get("/userinfo").then(i=>{this.user=i.data}).catch(i=>{console.error(i)})},getProfile(){let i=this.$loading.show();window.axios.get("/setting/profile-teacher").then(e=>{i.hide(),this.form.field.info=e.data,this.form.field.name=e.data.name,this.form.field.email=e.data.email,this.form.field.phone=e.data.phone,this.form.field.gender=e.data.gender,this.form.field.birthday=e.data.birthday,this.form.field.nik=e.data.nik}).catch(e=>{i.hide(),console.error(e)})},async handleUpdateProfile(){if(this.form.field.password!=""&&this.form.field.password!==this.form.field.passwordConfirm){this.errors.passwordConfirm=["Kata sandi tidak sesuai!"];return}if(this.form.field.password!=""){let i=this.$loading.show();await axios.post("/setting/profile-teacher",this.form.field).then(e=>{i.hide(),this.$swal({title:"Update Profile",text:e.data,icon:e.status===201?"success":"error",allowOutsideClick:!1,allowEscapeKey:!1,showCloseButton:!1,showCancelButton:!1}).then(m=>{location.reload()})}).catch(e=>{if(i.hide(),e.response&&e.response.status===400){this.errors=e.response.data.errors;let m="";for(let p in this.errors)this.errors.hasOwnProperty(p)&&(m+=`${this.errors[p][0]}
`);this.$swal({icon:"error",title:"Kesalahan",text:m})}else this.$swal({icon:"error",title:"Kesalahan",text:"Terjadi kesalahan, silakan coba lagi nanti."})})}}},computed:{cPermitted(){return this.menu.permission.create},rPermitted(){return this.menu.permission.read},uPermitted(){return this.menu.permission.update},dPermitted(){return this.menu.permission.delete},pPermitted(){return this.menu.permission.print},aPermitted(){return this.menu.permission.approve}},watch:{"form.field.password"(i,e){this.errors.password&&(this.errors.password=null),i!==this.form.field.passwordConfirm?this.errors.passwordConfirm=["Kata sandi tidak sesuai!"]:this.errors.passwordConfirm=null},"form.field.passwordConfirm"(i,e){this.errors.passwordConfirm&&(this.errors.passwordConfirm=null),i!==this.form.field.password?this.errors.passwordConfirm=["Kata sandi tidak sesuai!"]:this.errors.passwordConfirm=null}}},t=i=>(C("data-v-a658203d"),i=i(),x(),i),U={class:"section"},I={class:"row"},K={class:"col-12"},S={class:"card"},N=t(()=>o("div",{class:"card-header"},[o("h5",{class:"card-title"},"Profil Guru")],-1)),B={class:"card-body"},L={class:"row"},q={class:"col-md-6 mb-4"},E={class:"form-group"},F=t(()=>o("label",{for:"name-column"},"Nama Lengkap",-1)),M={class:"form-group position-relative has-icon-left mb-4"},j=t(()=>o("div",{class:"form-control-icon"},[o("i",{class:"bi bi-person"})],-1)),T={class:"form-group"},D=t(()=>o("label",{for:"no-hp-column"},"No. HP",-1)),G={class:"form-group position-relative has-icon-left mb-4"},H=t(()=>o("div",{class:"form-control-icon"},[o("i",{class:"bi bi-phone"})],-1)),O={class:"form-group"},z=t(()=>o("label",{for:"tanggal-lahir"},"Tanggal Lahir",-1)),J={class:"form-group position-relative has-icon-left mb-4"},Y=t(()=>o("div",{class:"form-control-icon"},[o("i",{class:"bi bi-calendar3"})],-1)),A={key:0,class:"text-danger"},Q={class:"form-group"},R=t(()=>o("label",{for:"password-column"},"Kata Sandi",-1)),W={class:"form-group position-relative has-icon-left mb-4"},X=t(()=>o("div",{class:"form-control-icon"},[o("i",{class:"bi bi-shield-lock"})],-1)),Z=t(()=>o("p",{class:"text-subtitle text-muted"},"Isi jika ingin ubah kata sandi",-1)),$={key:0,class:"invalid-feedback"},oo={class:"col-md-6 mb-4"},eo={class:"form-group"},so=t(()=>o("label",{for:"email-column"},"Email",-1)),io={class:"form-group position-relative has-icon-left mb-4"},ro=t(()=>o("div",{class:"form-control-icon"},[o("i",{class:"bi bi-envelope"})],-1)),to={key:0,class:"invalid-feedback"},lo={class:"form-group mb-4"},ao=t(()=>o("label",{for:"jenis-kelamin-floating"},"Jenis Kelamin",-1)),no=t(()=>o("option",{value:""},"--",-1)),mo=t(()=>o("option",{value:"L"},"Laki - Laki",-1)),co=t(()=>o("option",{value:"P"},"Perempuan",-1)),fo=[no,mo,co],po={class:"form-group"},ho=t(()=>o("label",{for:"nik"},"NIP",-1)),uo={class:"form-group position-relative has-icon-left mb-4"},_o=t(()=>o("div",{class:"form-control-icon"},[o("i",{class:"bi bi-credit-card"})],-1)),bo={class:"form-group"},vo=t(()=>o("label",{for:"password-confirm-column"},"Ulangi Kata Sandi",-1)),wo={class:"form-group position-relative has-icon-left mb-4"},go=t(()=>o("div",{class:"form-control-icon"},[o("i",{class:"bi bi-shield-lock"})],-1)),ko={key:0,class:"invalid-feedback"},yo=t(()=>o("div",{class:"col-md-12 mb-4"},[o("div",{class:"form-group my-2 d-flex justify-content-end"},[o("button",{type:"submit",class:"btn btn-primary"},"Simpan Perubahan")])],-1));function Po(i,e,m,p,s,u){const v=b("action-bar"),w=b("Flatpickr");return d(),n(P,null,[_(v,{data:s.menu,"menu-label":s.menu.menu_label},null,8,["data","menu-label"]),o("section",U,[o("div",I,[o("div",K,[o("div",S,[N,o("div",B,[o("form",{class:"form",onSubmit:e[10]||(e[10]=k((...r)=>u.handleUpdateProfile&&u.handleUpdateProfile(...r),["prevent"]))},[o("div",L,[o("div",q,[o("div",E,[F,o("div",M,[l(o("input",{type:"text",class:"form-control form-control-md",placeholder:"Nama Lengkap","onUpdate:modelValue":e[0]||(e[0]=r=>s.form.field.name=r),required:"",disabled:""},null,512),[[a,s.form.field.name]]),j])]),o("div",T,[D,o("div",G,[l(o("input",{type:"text",id:"phoneNumberInput",class:"form-control form-control-md",placeholder:"No. Handphone",maxlength:"15",required:"",disabled:"","onUpdate:modelValue":e[1]||(e[1]=r=>s.form.field.phone=r),onInput:e[2]||(e[2]=r=>i.filterInput(r,"phone"))},null,544),[[a,s.form.field.phone]]),H])]),o("div",O,[z,o("div",J,[_(w,{modelValue:s.form.field.birthday,"onUpdate:modelValue":e[3]||(e[3]=r=>s.form.field.birthday=r),class:"form-control flatpickr-range",config:s.configdate,placeholder:"Select date..",required:"",disabled:""},null,8,["modelValue","config"]),Y,s.errors.isBirthdayValid?(d(),n("span",A,c(s.errors.isBirthdayValid[0]),1)):f("",!0)])]),o("div",Q,[R,o("div",W,[l(o("input",{type:"password",class:h(["form-control form-control-md",{"is-invalid":s.errors.password}]),placeholder:"Kata Sandi","onUpdate:modelValue":e[4]||(e[4]=r=>s.form.field.password=r)},null,2),[[a,s.form.field.password]]),X,Z,s.errors.password?(d(),n("div",$,c(s.errors.password[0]),1)):f("",!0)])])]),o("div",oo,[o("div",eo,[so,o("div",io,[l(o("input",{type:"text",class:h(["form-control form-control-md",{"is-invalid":s.errors.email}]),placeholder:"Email","onUpdate:modelValue":e[5]||(e[5]=r=>s.form.field.email=r),required:"",disabled:""},null,2),[[a,s.form.field.email]]),ro,s.errors.email?(d(),n("div",to,c(s.errors.email[0]),1)):f("",!0)])]),o("div",lo,[ao,l(o("select",{class:"form-select",id:"gender","onUpdate:modelValue":e[6]||(e[6]=r=>s.form.field.gender=r),required:"",disabled:""},fo,512),[[y,s.form.field.gender]])]),o("div",po,[ho,o("div",uo,[l(o("input",{type:"text",id:"nikInput",class:"form-control form-control-md",placeholder:"Nomor Induk Kependudukan",maxlength:"20","onUpdate:modelValue":e[7]||(e[7]=r=>s.form.field.nik=r),onInput:e[8]||(e[8]=r=>i.filterInput(r,"nik")),disabled:""},null,544),[[a,s.form.field.nik]]),_o])]),o("div",bo,[vo,o("div",wo,[l(o("input",{type:"password",class:h(["form-control form-control-md",{"is-invalid":s.errors.passwordConfirm}]),placeholder:"Ulangi Kata Sandi","onUpdate:modelValue":e[9]||(e[9]=r=>s.form.field.passwordConfirm=r)},null,2),[[a,s.form.field.passwordConfirm]]),go,s.errors.passwordConfirm?(d(),n("div",ko,c(s.errors.passwordConfirm[0]),1)):f("",!0)])])])]),yo],32)])])])])])],64)}const Vo=g(V,[["render",Po],["__scopeId","data-v-a658203d"]]);export{Vo as default};
//# sourceMappingURL=ProfileTeacher-DVFsa5Uj.js.map
