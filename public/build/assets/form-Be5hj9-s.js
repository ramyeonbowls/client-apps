import{_ as U,r as V,o as i,c as d,a as e,d as t,w as k,g as P,s as y,C as w,F as f,b,t as g,i as C,e as n,v as I,D as K,j as F,k as j,l as B,m as E,p as S,q as R}from"./sweetalert2.min-C72B2ZMm.js";import{_ as D}from"./_routes-BvLrOQag.js";import{F as M,a as z,E as L}from"./vee-validate.esm-Nlz2O7Po.js";import"./_commonjsHelpers-DSXiPLDm.js";const O={components:{VeeForm:M,Field:z,ErrorMessage:L},data(){return{keyword:"",submitted:!1,option:{fprovinsi:[],fkabupaten:[],fkecamatan:[],fkelurahan:[],fkategori:[]},form:{supplier:!1,distributor:!1,nama_perusahaan:!1,email_perusahaan:"",password:"",password_confirmation:"",negara:"",provinsi:"",kabupaten:"",kecamatan:"",keluarahan:"",kode_pos:"",alamat:"",telepon:"",handphone:"",pimpinan:"",jabatan:"",hpimpinan:"",pic:"",hpic:"",imprint:[],kuasa:[],kategori:[],rekening:[],file:"",current_file:""}}},mounted(){this.__clearForm()},methods:{__clearForm(){this.$refs.form.resetForm(),this.keyword="",this.submitted=!1,this.option.fprovinsi=[],this.option.fkabupaten=[],this.option.fkecamatan=[],this.option.fkelurahan=[],this.option.fkategori=[],this.form.supplier=!1,this.form.distributor=!1,this.form.nama_perusahaan="",this.form.email_perusahaan="",this.form.password="",this.form.password_confirmation="",this.form.negara="",this.form.negara="",this.form.provinsi="",this.form.kabupaten="",this.form.kecamatan="",this.form.keluarahan="",this.form.kode_pos="",this.form.alamat="",this.form.telepon="",this.form.handphone="",this.form.pimpinan="",this.form.jabatan="",this.form.hpimpinan="",this.form.pic="",this.form.hpic="",this.form.file="",this.form.current_file="",this.$refs.banner_files.value=""},getProvinsi(){this.form.provinsi="",this.form.kabupaten="",this.form.kecamatan="",this.form.keluarahan="";let c=this.$loading.show();window.axios.get("/form-regis/x0y0z0",{params:{param:"provinsi-mst"}}).then(s=>{c.hide(),this.option.fprovinsi=s.data}).catch(s=>{console.error(s)})},getKabupaten(){this.form.kabupaten="",this.form.kecamatan="",this.form.keluarahan="";let c=this.$loading.show();window.axios.get("/form-regis/x0y0z0",{params:{param:"kabupaten-mst",provinsi:this.form.provinsi}}).then(s=>{c.hide(),this.option.fkabupaten=s.data}).catch(s=>{console.error(s)})},getKecamatan(){this.form.kecamatan="",this.form.keluarahan="";let c=this.$loading.show();window.axios.get("/form-regis/x0y0z0",{params:{param:"kecamatan-mst",provinsi:this.form.provinsi,kabupaten:this.form.kabupaten}}).then(s=>{c.hide(),this.option.fkecamatan=s.data}).catch(s=>{console.error(s)})},getKelurahan(){this.form.keluarahan="";let c=this.$loading.show();window.axios.get("/form-regis/x0y0z0",{params:{param:"kelurahan-mst",provinsi:this.form.provinsi,kabupaten:this.form.kabupaten,kecamatan:this.form.kecamatan}}).then(s=>{c.hide(),this.option.fkelurahan=s.data}).catch(s=>{console.error(s)})},addImp(){this.form.imprint.push({nama:""})},delImp(c){this.form.imprint.splice(this.form.imprint.indexOf(c),1)},addKuasa(){this.form.kuasa.push({nama:""})},delKuasa(c){this.form.kuasa.splice(this.form.kuasa.indexOf(c),1)},getKategori(){new bootstrap.Modal(document.getElementById("mdl-kategori")).show(),window.axios.get("/form-regis/x0y0z0",{params:{param:"kategori-mst"}}).then(c=>{this.option.fkategori=c.data,this.option.fkategori.length==0&&Swal.fire({toast:!0,position:"center",icon:"info",title:"No data to add",buttonsStyling:!1,customClass:{confirmButton:"btn btn-sm btn-primary"}}).then(s=>{s.value&&bootstrap.Modal.getInstance(document.getElementById("mdl-kategori")).hide()})})},delKategori(c){this.form.kategori.splice(this.form.kategori.indexOf(c),1)},addRekening(){this.form.rekening.push({npwp:"",norek:"",bank:"",nama:"",kota:""})},delRekening(c){this.form.rekening.splice(this.form.rekening.indexOf(c),1)},async onChangeBanner(c){this.form.file=this.$refs.banner_files.files[0]},submit(){this.submitted||(this.submitted=!0,this.$refs.form.validate().then(c=>{if(c.valid){this.submitted=!1;let s=this.$loading.show(),v=new FormData;Object.keys(this.form).forEach(u=>{let o=this.form[u];typeof o=="object"&&o!==null?v.append(u,JSON.stringify(o)):v.append(u,o)}),window.axios.post("/form-regis?form=register",v).then(u=>{s.hide(),this.close(),this.$swal({title:"Register",text:u.data,icon:u.status===201?"success":"error",allowOutsideClick:!1,allowEscapeKey:!1,showCloseButton:!1,showCancelButton:!0,confirmButtonText:'<i class="bi bi-printer-fill"></i> Print',cancelButtonText:'<i class="bi bi-x-circle-fill"></i> Cancel'}).then(o=>{o.value&&window.open("/agreement-letter?uuid="+u.uuid+"_blank")})}).catch(u=>{s.hide(),this.submitted=!1,u.response.status===422&&this.$refs.form.setErrors(u.response.data.errors)})}else this.submitted=!1}))},close(){this.__clearForm()}},computed:{kategoriView(){return this.keyword&&this.keyword!=""?this.option.fkategori.filter(c=>c.id.toLowerCase().includes(this.keyword.toLowerCase())||c.name.toLowerCase().includes(this.keyword.toLowerCase())):this.option.fkategori}}},T={id:"auth"},H={class:"row h-100"},A=e("div",{class:"col-lg-2 d-none d-lg-block"},[e("div",{id:"auth-right"})],-1),W={class:"col-lg-8 col-12"},J={id:"auth-left"},q=K('<div class="auth-logo"><a href="#"><img src="images/logo/logo.svg" alt="Logo"></a></div><h1 class="auth-title text-center">Form Pendaftaran</h1><p class="auth-subtitle mb-5 text-center">Form Pendaftaran Supplier &amp; Distributor</p>',3),G=["onSubmit"],Q={class:"row"},X={class:"col-12"},Y={class:"card"},Z=e("div",{class:"card-header"},[e("h5",{class:"card-title"},"Kategori Pendaftaran")],-1),$={class:"card-body"},ee=e("p",null,[n("Daftar Sebagai "),e("span",{class:"text-danger"},"*")],-1),ae={class:"form-check"},se={class:"checkbox"},oe=e("label",{for:"supplier"},"Supplier",-1),te={class:"checkbox"},le=e("label",{for:"distributor"},"Distributor",-1),ne=e("div",{class:"form-group my-2 d-flex justify-content-end"},null,-1),ie={class:"col-12"},de={class:"card"},re=e("div",{class:"card-header"},[e("h5",{class:"card-title"},"Data Perusahaan")],-1),ce={class:"card-body"},me={class:"form-group my-2"},pe=e("label",{for:"nama_perusahaan",class:"form-label"},[n("Nama Perusahaan "),e("span",{class:"text-danger"},"*")],-1),he={class:"form-group my-2"},ue=e("label",{for:"email_perusahaan",class:"form-label"},[n("Email Perusahaan "),e("span",{class:"text-danger"},"*")],-1),_e={class:"form-group my-2"},fe=e("label",{for:"password",class:"form-label"},[n("Password "),e("span",{class:"text-danger"},"*")],-1),be={class:"form-group my-2"},ke=e("label",{for:"password_confirmation",class:"form-label"},[n("Confirm Password "),e("span",{class:"text-danger"},"*")],-1),ge={class:"col-12"},ve={class:"card"},ye=e("div",{class:"card-header"},[e("h5",{class:"card-title"},"Alamat Perusahaan")],-1),xe={class:"card-body"},Ve={class:"row form-group my-2"},we={class:"col-md-6 col-12"},Ce={class:"form-group my-2"},Pe=e("label",{for:"negara",class:"form-label"},[n("Negara "),e("span",{class:"text-danger"},"*")],-1),Ne=e("option",{value:""},"--",-1),Ue=e("option",{value:"id"},"INDONESIA",-1),Ie={class:"col-md-6 col-12"},Ke={class:"form-group my-2"},Fe=e("label",{for:"provinsi",class:"form-label"},[n("Provinsi "),e("span",{class:"text-danger"},"*")],-1),je=e("option",{value:""},"--",-1),Be=["value"],Ee={class:"col-md-6 col-12"},Se={class:"form-group my-2"},Re=e("label",{for:"kabupaten",class:"form-label"},[n("Kabupaten/Kota "),e("span",{class:"text-danger"},"*")],-1),De=e("option",{value:""},"--",-1),Me=["value"],ze={class:"col-md-6 col-12"},Le={class:"form-group my-2"},Oe=e("label",{for:"kecamatan",class:"form-label"},[n("Kecamatan "),e("span",{class:"text-danger"},"*")],-1),Te=e("option",{value:""},"--",-1),He=["value"],Ae={class:"col-md-6 col-12"},We={class:"form-group my-2"},Je=e("label",{for:"keluarahan",class:"form-label"},[n("Keluarahan "),e("span",{class:"text-danger"},"*")],-1),qe=e("option",{value:""},"--",-1),Ge=["value"],Qe={class:"col-md-6 col-12"},Xe={class:"form-group my-2"},Ye=e("label",{for:"kode_pos",class:"form-label"},[n("Kode Pos "),e("span",{class:"text-danger"},"*")],-1),Ze={class:"form-group my-2"},$e=e("label",{for:"alamat",class:"form-label"},[n("Alamat "),e("span",{class:"text-danger"},"*")],-1),ea={class:"form-group my-2"},aa=e("label",{for:"telepon",class:"form-label"},[n("No. Telepon "),e("span",{class:"text-danger"},"*")],-1),sa={class:"form-group my-2"},oa=e("label",{for:"handphone",class:"form-label"},[n("No. Hp/Wa "),e("span",{class:"text-danger"},"*")],-1),ta={class:"col-12"},la={class:"card"},na=e("div",{class:"card-header"},[e("h5",{class:"card-title"},"Profile Perusahaan")],-1),ia={class:"card-body"},da={class:"form-group my-2"},ra=e("label",{for:"pimpinan",class:"form-label"},[n("Nama Pimpinan "),e("span",{class:"text-danger"},"*")],-1),ca={class:"form-group my-2"},ma=e("label",{for:"jabatan",class:"form-label"},[n("Jabatan "),e("span",{class:"text-danger"},"*")],-1),pa={class:"form-group my-2"},ha=e("label",{for:"hpimpinan",class:"form-label"},[n("No. Hp Pimpinan "),e("span",{class:"text-danger"},"*")],-1),ua={class:"form-group my-2"},_a=e("label",{for:"pic",class:"form-label"},[n("Nama Pic "),e("span",{class:"text-danger"},"*")],-1),fa={class:"form-group my-2"},ba=e("label",{for:"hpic",class:"form-label"},[n("No. Hp Pic "),e("span",{class:"text-danger"},"*")],-1),ka={key:0,class:"col-12"},ga={class:"card"},va=e("div",{class:"card-header"},[e("h5",{class:"card-title"},"Data Imprint")],-1),ya={class:"card-body"},xa={class:"table-responsive-sm"},Va={class:"table table-sm mb-0"},wa=e("th",{class:"text-center",style:{width:"70%"}},"Nama",-1),Ca={class:"text-center"},Pa=e("i",{class:"bi bi-plus"},null,-1),Na=[Pa],Ua={class:"text-center"},Ia={class:"text-center"},Ka=["onClick"],Fa=e("i",{class:"bi bi-x"},null,-1),ja=[Fa],Ba={key:1},Ea=e("td",{colspan:"2",class:"text-center"},[n("klik tombol plus untuk menambahkan ( "),e("i",{class:"bi bi-plus-circle text-success"}),n(" )")],-1),Sa=[Ea],Ra={key:1,class:"col-12"},Da={class:"card"},Ma=e("div",{class:"card-header"},[e("h5",{class:"card-title"},"Penerbit Pemberi Kuasa")],-1),za={class:"card-body"},La={class:"table-responsive"},Oa={class:"table table-sm mb-0"},Ta=e("th",{class:"text-center",style:{width:"70%"}},"Nama",-1),Ha={class:"text-center"},Aa=e("i",{class:"bi bi-plus"},null,-1),Wa=[Aa],Ja={class:"text-center"},qa={class:"text-center"},Ga=["onClick"],Qa=e("i",{class:"bi bi-x"},null,-1),Xa=[Qa],Ya={key:1},Za=e("td",{colspan:"2",class:"text-center"},[n("klik tombol plus untuk menambahkan ( "),e("i",{class:"bi bi-plus-circle text-success"}),n(" )")],-1),$a=[Za],es={key:2,class:"col-12"},as={class:"card"},ss=e("div",{class:"card-header"},[e("h5",{class:"card-title"},"Kategori Terbitan")],-1),os={class:"card-body"},ts={class:"table-responsive"},ls={class:"table table-sm mb-0"},ns=e("th",{class:"text-center",style:{width:"70%"}},"Kategori",-1),is={class:"text-center"},ds=e("i",{class:"bi bi-plus"},null,-1),rs=[ds],cs={class:"text-center"},ms={class:"text-center"},ps=["onClick"],hs=e("i",{class:"bi bi-x"},null,-1),us=[hs],_s={key:1},fs=e("td",{colspan:"2",class:"text-center"},[n("klik tombol plus untuk menambahkan ( "),e("i",{class:"bi bi-plus-circle text-success"}),n(" )")],-1),bs=[fs],ks={class:"card"},gs=e("div",{class:"card-header"},[e("h5",{class:"card-title"},"Rekening Bank")],-1),vs={class:"card-body"},ys={class:"table-responsive-sm"},xs={class:"table table-sm p-3 mb-0"},Vs=e("th",{class:"text-center"},"NPWP",-1),ws=e("th",{class:"text-center"},"Nomor Rekening",-1),Cs=e("th",{class:"text-center"},"Nama Bank",-1),Ps=e("th",{class:"text-center"},"Nama Rekening",-1),Ns=e("th",{class:"text-center"},"Kota Bank",-1),Us={class:"text-center"},Is=e("i",{class:"bi bi-plus"},null,-1),Ks=[Is],Fs={class:"text-center"},js={class:"text-center"},Bs={class:"text-center"},Es={class:"text-center"},Ss={class:"text-center"},Rs={class:"text-center"},Ds=["onClick"],Ms=e("i",{class:"bi bi-x"},null,-1),zs=[Ms],Ls={key:1},Os=e("td",{colspan:"6",class:"text-center"},[n("klik tombol plus untuk menambahkan ( "),e("i",{class:"bi bi-plus-circle text-success"}),n(" )")],-1),Ts=[Os],Hs={class:"card"},As=e("div",{class:"card-header"},[e("h5",{class:"card-title"},"Logo Perusahaan")],-1),Ws={class:"card-body"},Js={class:"form form-horizontal"},qs={class:"form-body"},Gs={class:"row"},Qs={class:"col-md-12 form-group"},Xs=e("br",null,null,-1),Ys=e("small",{class:"text-muted"},"Max. size: 1 MB (1980x750 pixels) File types: png, jpg, jpeg",-1),Zs={class:"card"},$s={class:"card-body"},eo=e("div",{class:"alert alert-danger"},[e("p",null,"Saya menyatakan bahwa semua data telah diisi dengan data yang benar dan apabila ada perubahan saya akan mengisi ulang formulir ini sebagai data perbaikan. Saya bertanggungjawab terhadap kebenaran data ini, dan dokumen akan otomatis terbentuk tanda tangan elektronik atas dasar persetujuan saya.")],-1),ao={class:"col-12 d-flex justify-content"},so=e("i",{class:"bi bi-send-check"},null,-1),oo=e("div",{class:"col-lg-2 d-none d-lg-block"},[e("div",{id:"auth-right"})],-1),to={class:"modal fade text-left",id:"mdl-kategori",tabindex:"-1",role:"dialog","aria-labelledby":"modal-kategori","aria-hidden":"true"},lo={class:"modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md",role:"document"},no={class:"modal-content"},io={class:"modal-header"},ro=e("h4",{class:"modal-title",id:"modal-kategori"},"Kategori",-1),co=e("i",{"data-feather":"x"},null,-1),mo=[co],po={class:"modal-body"},ho={class:"form-group my-2"},uo={class:"form-group my-2"},_o={class:"form-check"},fo={class:"checkbox"},bo=["id","name","value"],ko=["for"],go={class:"modal-footer"},vo=e("i",{class:"bx bx-x d-block d-sm-none"},null,-1),yo=e("span",{class:"d-none d-sm-block"},"Close",-1),xo=[vo,yo];function Vo(c,s,v,u,o,m){const p=V("ErrorMessage"),r=V("Field"),N=V("VeeForm");return i(),d(f,null,[e("div",T,[e("div",H,[A,e("div",W,[e("div",J,[q,t(N,{ref:"form",as:"div"},{default:k(({handleSubmit:_})=>[e("form",{class:"form form-horizontal",onSubmit:P(a=>_(a,m.submit),["prevent"])},[e("div",Q,[e("div",X,[e("div",Y,[Z,e("div",$,[ee,e("div",ae,[e("div",se,[y(e("input",{type:"checkbox",name:"supplier",id:"supplier","onUpdate:modelValue":s[0]||(s[0]=a=>o.form.supplier=a),class:"form-check-input"},null,512),[[w,o.form.supplier]]),oe,t(p,{name:"supplier",class:"invalid-feedback animated fadeIn mt-0 mb-1",style:{display:"block"}})]),e("div",te,[y(e("input",{type:"checkbox",name:"distributor",id:"distributor","onUpdate:modelValue":s[1]||(s[1]=a=>o.form.distributor=a),class:"form-check-input"},null,512),[[w,o.form.distributor]]),le,t(p,{name:"distributor",class:"invalid-feedback animated fadeIn mt-0 mb-1",style:{display:"block"}})])]),ne])])]),e("div",ie,[e("div",de,[re,e("div",ce,[e("div",me,[pe,t(r,{type:"text",name:"nama_perusahaan",id:"nama_perusahaan",modelValue:o.form.nama_perusahaan,"onUpdate:modelValue":s[2]||(s[2]=a=>o.form.nama_perusahaan=a),class:"form-control",placeholder:"Nama Perusahaan"},null,8,["modelValue"]),t(p,{name:"nama_perusahaan",class:"invalid-feedback animated fadeIn mt-0 mb-1",style:{display:"block"}})]),e("div",he,[ue,t(r,{type:"email",name:"email_perusahaan",id:"email_perusahaan",modelValue:o.form.email_perusahaan,"onUpdate:modelValue":s[3]||(s[3]=a=>o.form.email_perusahaan=a),class:"form-control",placeholder:"Email Perusahaan"},null,8,["modelValue"]),t(p,{name:"email_perusahaan",class:"invalid-feedback animated fadeIn mt-0 mb-1",style:{display:"block"}})]),e("div",_e,[fe,t(r,{type:"password",name:"password",id:"password",modelValue:o.form.password,"onUpdate:modelValue":s[4]||(s[4]=a=>o.form.password=a),class:"form-control",placeholder:"Enter new password"},null,8,["modelValue"]),t(p,{name:"password",class:"invalid-feedback animated fadeIn mt-0 mb-1",style:{display:"block"}})]),e("div",be,[ke,t(r,{type:"password",name:"password_confirmation",id:"password_confirmation",modelValue:o.form.password_confirmation,"onUpdate:modelValue":s[5]||(s[5]=a=>o.form.password_confirmation=a),class:"form-control",placeholder:"Enter confirm password"},null,8,["modelValue"]),t(p,{name:"password_confirmation",class:"invalid-feedback animated fadeIn mt-0 mb-1",style:{display:"block"}})])])])]),e("div",ge,[e("div",ve,[ye,e("div",xe,[e("div",Ve,[e("div",we,[e("div",Ce,[Pe,t(r,{as:"select",name:"negara",id:"negara",modelValue:o.form.negara,"onUpdate:modelValue":s[6]||(s[6]=a=>o.form.negara=a),class:"form-control",onChange:m.getProvinsi},{default:k(()=>[Ne,Ue]),_:1},8,["modelValue","onChange"]),t(p,{name:"negara",class:"invalid-feedback animated fadeIn mt-0 mb-1",style:{display:"block"}})])]),e("div",Ie,[e("div",Ke,[Fe,t(r,{as:"select",name:"provinsi",id:"provinsi",modelValue:o.form.provinsi,"onUpdate:modelValue":s[7]||(s[7]=a=>o.form.provinsi=a),class:"form-control",onChange:m.getKabupaten},{default:k(()=>[je,(i(!0),d(f,null,b(o.option.fprovinsi,(a,l)=>(i(),d("option",{key:l,value:a.id},g(a.name),9,Be))),128))]),_:1},8,["modelValue","onChange"]),t(p,{name:"provinsi",class:"invalid-feedback animated fadeIn mt-0 mb-1",style:{display:"block"}})])]),e("div",Ee,[e("div",Se,[Re,t(r,{as:"select",name:"kabupaten",id:"kabupaten",modelValue:o.form.kabupaten,"onUpdate:modelValue":s[8]||(s[8]=a=>o.form.kabupaten=a),class:"form-control",onChange:m.getKecamatan},{default:k(()=>[De,(i(!0),d(f,null,b(o.option.fkabupaten,(a,l)=>(i(),d("option",{key:l,value:a.id},g(a.name),9,Me))),128))]),_:1},8,["modelValue","onChange"]),t(p,{name:"kabupaten",class:"invalid-feedback animated fadeIn mt-0 mb-1",style:{display:"block"}})])]),e("div",ze,[e("div",Le,[Oe,t(r,{as:"select",name:"kecamatan",id:"kecamatan",modelValue:o.form.kecamatan,"onUpdate:modelValue":s[9]||(s[9]=a=>o.form.kecamatan=a),class:"form-control",onChange:m.getKelurahan},{default:k(()=>[Te,(i(!0),d(f,null,b(o.option.fkecamatan,(a,l)=>(i(),d("option",{key:l,value:a.id},g(a.name),9,He))),128))]),_:1},8,["modelValue","onChange"]),t(p,{name:"kecamatan",class:"invalid-feedback animated fadeIn mt-0 mb-1",style:{display:"block"}})])]),e("div",Ae,[e("div",We,[Je,t(r,{as:"select",name:"keluarahan",id:"keluarahan",modelValue:o.form.keluarahan,"onUpdate:modelValue":s[10]||(s[10]=a=>o.form.keluarahan=a),class:"form-control"},{default:k(()=>[qe,(i(!0),d(f,null,b(o.option.fkelurahan,(a,l)=>(i(),d("option",{key:l,value:a.id},g(a.name),9,Ge))),128))]),_:1},8,["modelValue"]),t(p,{name:"keluarahan",class:"invalid-feedback animated fadeIn mt-0 mb-1",style:{display:"block"}})])]),e("div",Qe,[e("div",Xe,[Ye,t(r,{type:"text",name:"kode_pos",id:"kode_pos",modelValue:o.form.kode_pos,"onUpdate:modelValue":s[11]||(s[11]=a=>o.form.kode_pos=a),class:"form-control",placeholder:"Kode Pos"},null,8,["modelValue"]),t(p,{name:"kode_pos",class:"invalid-feedback animated fadeIn mt-0 mb-1",style:{display:"block"}})])])]),e("div",Ze,[$e,t(r,{as:"textarea",name:"alamat",id:"alamat",modelValue:o.form.alamat,"onUpdate:modelValue":s[12]||(s[12]=a=>o.form.alamat=a),class:"form-control",placeholder:"Alamat Perusahaan"},null,8,["modelValue"]),t(p,{name:"alamat",class:"invalid-feedback animated fadeIn mt-0 mb-1",style:{display:"block"}})]),e("div",ea,[aa,t(r,{type:"text",name:"telepon",id:"telepon",modelValue:o.form.telepon,"onUpdate:modelValue":s[13]||(s[13]=a=>o.form.telepon=a),class:"form-control",placeholder:"No. Telepon"},null,8,["modelValue"]),t(p,{name:"telepon",class:"invalid-feedback animated fadeIn mt-0 mb-1",style:{display:"block"}})]),e("div",sa,[oa,t(r,{type:"text",name:"handphone",id:"handphone",modelValue:o.form.handphone,"onUpdate:modelValue":s[14]||(s[14]=a=>o.form.handphone=a),class:"form-control",placeholder:"No. Hp/Wa"},null,8,["modelValue"]),t(p,{name:"handphone",class:"invalid-feedback animated fadeIn mt-0 mb-1",style:{display:"block"}})])])])]),e("div",ta,[e("div",la,[na,e("div",ia,[e("div",da,[ra,t(r,{type:"text",name:"pimpinan",id:"pimpinan",modelValue:o.form.pimpinan,"onUpdate:modelValue":s[15]||(s[15]=a=>o.form.pimpinan=a),class:"form-control",placeholder:"Nama Pimpinan"},null,8,["modelValue"]),t(p,{name:"pimpinan",class:"invalid-feedback animated fadeIn mt-0 mb-1",style:{display:"block"}})]),e("div",ca,[ma,t(r,{type:"text",name:"jabatan",id:"jabatan",modelValue:o.form.jabatan,"onUpdate:modelValue":s[16]||(s[16]=a=>o.form.jabatan=a),class:"form-control",placeholder:"Jabatan"},null,8,["modelValue"]),t(p,{name:"jabatan",class:"invalid-feedback animated fadeIn mt-0 mb-1",style:{display:"block"}})]),e("div",pa,[ha,t(r,{type:"text",name:"hpimpinan",id:"hpimpinan",modelValue:o.form.hpimpinan,"onUpdate:modelValue":s[17]||(s[17]=a=>o.form.hpimpinan=a),class:"form-control",placeholder:"No. Hp Pimpinan"},null,8,["modelValue"]),t(p,{name:"hpimpinan",class:"invalid-feedback animated fadeIn mt-0 mb-1",style:{display:"block"}})]),e("div",ua,[_a,t(r,{type:"text",name:"pic",id:"pic",modelValue:o.form.pic,"onUpdate:modelValue":s[18]||(s[18]=a=>o.form.pic=a),class:"form-control",placeholder:"Nama Pic"},null,8,["modelValue"]),t(p,{name:"pic",class:"invalid-feedback animated fadeIn mt-0 mb-1",style:{display:"block"}})]),e("div",fa,[ba,t(r,{type:"text",name:"hpic",id:"hpic",modelValue:o.form.hpic,"onUpdate:modelValue":s[19]||(s[19]=a=>o.form.hpic=a),class:"form-control",placeholder:"No. Hp Pic"},null,8,["modelValue"]),t(p,{name:"hpic",class:"invalid-feedback animated fadeIn mt-0 mb-1",style:{display:"block"}})])])])]),o.form.supplier?(i(),d("div",ka,[e("div",ga,[va,e("div",ya,[e("div",xa,[e("table",Va,[e("thead",null,[e("tr",null,[wa,e("th",Ca,[e("button",{type:"button",class:"btn icon btn-success",onClick:s[20]||(s[20]=(...a)=>m.addImp&&m.addImp(...a))},Na)])])]),e("tbody",null,[o.form.imprint.length>0?(i(!0),d(f,{key:0},b(o.form.imprint,(a,l)=>(i(),d("tr",{key:l},[e("td",Ua,[t(r,{type:"text",name:"imprint_"+(l+1),id:"imprint_"+(l+1),modelValue:a.nama,"onUpdate:modelValue":h=>a.nama=h,class:"form-control",placeholder:"Nama Imprint "+(l+1)},null,8,["name","id","modelValue","onUpdate:modelValue","placeholder"])]),e("td",Ia,[e("button",{type:"button",class:"btn icon btn-danger",onClick:h=>m.delImp(a)},ja,8,Ka)])]))),128)):(i(),d("tr",Ba,Sa))])])])])])])):C("",!0),o.form.supplier?(i(),d("div",Ra,[e("div",Da,[Ma,e("div",za,[e("div",La,[e("table",Oa,[e("thead",null,[e("tr",null,[Ta,e("th",Ha,[e("button",{type:"button",class:"btn icon btn-success",onClick:s[21]||(s[21]=(...a)=>m.addKuasa&&m.addKuasa(...a))},Wa)])])]),e("tbody",null,[o.form.kuasa.length>0?(i(!0),d(f,{key:0},b(o.form.kuasa,(a,l)=>(i(),d("tr",{key:l},[e("td",Ja,[t(r,{type:"text",name:"kuasa_"+(l+1),id:"kuasa_"+(l+1),modelValue:a.nama,"onUpdate:modelValue":h=>a.nama=h,class:"form-control",placeholder:"Nama Penerbit Pemberi Kuasa "+(l+1)},null,8,["name","id","modelValue","onUpdate:modelValue","placeholder"])]),e("td",qa,[e("button",{type:"button",class:"btn icon btn-danger",onClick:h=>m.delKuasa(a)},Xa,8,Ga)])]))),128)):(i(),d("tr",Ya,$a))])])])])])])):C("",!0),o.form.supplier?(i(),d("div",es,[e("div",as,[ss,e("div",os,[e("div",ts,[e("table",ls,[e("thead",null,[e("tr",null,[ns,e("th",is,[e("button",{type:"button",class:"btn icon btn-success",onClick:s[22]||(s[22]=(...a)=>m.getKategori&&m.getKategori(...a))},rs)])])]),e("tbody",null,[o.form.kategori.length>0?(i(!0),d(f,{key:0},b(o.form.kategori,(a,l)=>(i(),d("tr",{key:l},[e("td",cs,g(a.desc),1),e("td",ms,[e("button",{type:"button",class:"btn icon btn-danger",onClick:h=>m.delKategori(a)},us,8,ps)])]))),128)):(i(),d("tr",_s,bs))])])])])])])):C("",!0),e("div",ks,[gs,e("div",vs,[e("div",ys,[e("table",xs,[e("thead",null,[e("tr",null,[Vs,ws,Cs,Ps,Ns,e("th",Us,[e("button",{type:"button",class:"btn icon btn-success",onClick:s[23]||(s[23]=(...a)=>m.addRekening&&m.addRekening(...a))},Ks)])])]),e("tbody",null,[o.form.rekening.length>0?(i(!0),d(f,{key:0},b(o.form.rekening,(a,l)=>(i(),d("tr",{key:l},[e("td",Fs,[t(r,{type:"text",name:"npwp_"+(l+1),id:"npwp_"+(l+1),modelValue:a.npwp,"onUpdate:modelValue":h=>a.npwp=h,class:"form-control",placeholder:"NPWP "+(l+1)},null,8,["name","id","modelValue","onUpdate:modelValue","placeholder"])]),e("td",js,[t(r,{type:"text",name:"norek_"+(l+1),id:"norek_"+(l+1),modelValue:a.norek,"onUpdate:modelValue":h=>a.norek=h,class:"form-control",placeholder:"Nomor Rekening "+(l+1)},null,8,["name","id","modelValue","onUpdate:modelValue","placeholder"])]),e("td",Bs,[t(r,{type:"text",name:"bank_"+(l+1),id:"bank_"+(l+1),modelValue:a.bank,"onUpdate:modelValue":h=>a.bank=h,class:"form-control",placeholder:"Nama Bank "+(l+1)},null,8,["name","id","modelValue","onUpdate:modelValue","placeholder"])]),e("td",Es,[t(r,{type:"text",name:"nama_"+(l+1),id:"nama_"+(l+1),modelValue:a.nama,"onUpdate:modelValue":h=>a.nama=h,class:"form-control",placeholder:"Nama Rekening "+(l+1)},null,8,["name","id","modelValue","onUpdate:modelValue","placeholder"])]),e("td",Ss,[t(r,{type:"text",name:"kota_"+(l+1),id:"kota_"+(l+1),modelValue:a.kota,"onUpdate:modelValue":h=>a.kota=h,class:"form-control",placeholder:"Kota Bank "+(l+1)},null,8,["name","id","modelValue","onUpdate:modelValue","placeholder"])]),e("td",Rs,[e("button",{type:"button",class:"btn icon btn-danger",onClick:h=>m.delRekening(a)},zs,8,Ds)])]))),128)):(i(),d("tr",Ls,Ts))])])])])]),e("div",Hs,[As,e("div",Ws,[e("div",Js,[e("div",qs,[e("div",Gs,[e("div",Qs,[e("input",{type:"file",ref:"banner_files",id:"file",name:"file",onChange:s[24]||(s[24]=(...a)=>m.onChangeBanner&&m.onChangeBanner(...a)),accept:".png,.jpg,.jpeg"},null,544),t(p,{name:"file",class:"invalid-feedback animated fadeIn mt-0 mb-1",style:{display:"block"}}),Xs,Ys])])])])])]),e("div",Zs,[e("div",$s,[eo,e("div",ao,[e("button",{class:"btn icon icon-left btn-primary",onClick:s[25]||(s[25]=P((...a)=>m.submit&&m.submit(...a),["prevent"]))},[so,n(" Submit")])])])])])],40,G)]),_:1},512)])]),oo])]),e("div",to,[e("div",lo,[e("div",no,[e("div",io,[ro,e("button",{type:"button",class:"close","data-bs-dismiss":"modal","aria-label":"Close",onClick:s[26]||(s[26]=_=>o.keyword="")},mo)]),e("div",po,[e("div",ho,[y(e("input",{type:"text","onUpdate:modelValue":s[27]||(s[27]=_=>o.keyword=_),class:"form-control form-control-sm font-sdeal",placeholder:"Type here for searching"},null,512),[[I,o.keyword]])]),e("div",uo,[e("div",_o,[(i(!0),d(f,null,b(m.kategoriView,(_,a)=>(i(),d("div",fo,[y(e("input",{type:"checkbox",class:"form-check-input","onUpdate:modelValue":s[28]||(s[28]=l=>o.form.kategori=l),id:"ktgcode_"+a,name:"ktgcode_"+a,value:{id:_.id,desc:_.name}},null,8,bo),[[w,o.form.kategori]]),e("label",{for:"ktgcode_"+a},g(_.id+" "+_.name),9,ko)]))),256))])])]),e("div",go,[e("button",{type:"button",class:"btn btn-light-secondary","data-bs-dismiss":"modal",onClick:s[29]||(s[29]=_=>o.keyword="")},xo)])])])])],64)}const wo=U(O,[["render",Vo]]),Co=F({history:j(),linkActiveClass:"active",routes:D}),Po={enforceFocus:!1,canCancel:!1,loader:"spinner",color:"#8080ff",backgroundColor:"#111111",width:110,height:110,opacity:.4,zIndex:1999};B.replace();const x=E(wo);x.use(S);x.use(R.LoadingPlugin,Po);x.use(Co);x.mount("#form-register-container");
//# sourceMappingURL=form-Be5hj9-s.js.map
