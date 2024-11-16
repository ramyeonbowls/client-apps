import{F as g,a as w,E as x}from"./vee-validate.esm-Nlz2O7Po.js";import{_ as P,c as n,d as k,a as t,s as u,P as m,F as h,b,e as _,D as L,r as y,o as r,t as f}from"./sweetalert2.min-C72B2ZMm.js";import"./_commonjsHelpers-DSXiPLDm.js";let c;const K={components:{VeeForm:g,Field:w,ErrorMessage:x},data(){return{menu:{menu_label:"",menu_desc:"",permission:{create:!1,read:!1,update:!1,delete:!1,print:!1,approve:!1}},option:{optProv:"",optKab:"",optWL:""},filter:{provinsi:"",kabupaten:"",wl:""}}},mounted(){this.__MENU(),this.$root.web_access_log(),this.getProvinsi(),c=$("#data_rst").DataTable({paging:!0,pagingType:"full_numbers",lengthMenu:[[10,25,50,100,500],[10,25,50,100,500]],pageLength:25,processing:!0,ajax:"/report/library-officer-rpt?nodata=yes",columns:[{data:"wl_name",class:"text-center text-nowrap"},{data:"provinsi_name",class:"text-center text-nowrap"},{data:"kabupaten_name",class:"text-center text-nowrap"},{data:"nip",class:"text-center text-nowrap"},{data:"name",class:"text-center text-nowrap"},{data:"position",class:"text-center"}],language:{lengthMenu:"_MENU_",search:"_INPUT_",searchPlaceholder:"Pencarian..",info:'<span class="fs-sm">Menampilkan _START_ sampai _END_ dari _TOTAL_ entri</span>',infoEmpty:'<span class="fs-sm">Menampilkan 0 sampai 0 dari 0 entri</span>',infoFiltered:'<span class="fs-sm">(disaring dari _MAX_ total entri)</span>',zeroRecords:'<span class="fs-sm">Tidak Ada Data</span>',paginate:{first:'<i class="bi bi-chevron-double-left"></i>',previous:'<i class="bi bi-chevron-left"></i>',next:'<i class="bi bi-chevron-right"></i>',last:'<i class="bi bi-chevron-double-right"></i>'}}})},methods:{__MENU(){let s=this.$loading.show();window.axios.get("/web-access-log/"+this.$route.name).then(e=>{s.hide(),this.menu.menu_label=e.data.menu_label,this.menu.menu_desc=e.data.menu_desc,this.menu.permission=e.data.permission}).catch(e=>{s.hide(),console.error(e)})},getProvinsi(){this.option.optProv="",this.option.optKab="",this.option.optWL="";let s=this.$loading.show();window.axios.post("/getOpt",{opt:"Provinsi"}).then(e=>{s.hide(),this.option.optProv=e.data,this.option.optProv.length==1&&(this.filter.provinsi=this.option.optProv[0].provinsi_id,this.getKabupaten())}).catch(e=>{s.hide(),console.error(e)})},getKabupaten(){this.option.optKab="",this.option.optWL="",window.axios.post("/getOpt",{opt:"Kabupaten",PROVINSI:this.filter.provinsi}).then(s=>{this.option.optKab=s.data,this.option.optKab.length==1&&(this.filter.kabupaten=this.option.optKab[0].kabupaten_id,this.getWhiteLabel())}).catch(s=>{console.error(s)})},getWhiteLabel(){this.option.optWL="",window.axios.post("/getOpt",{opt:"WhiteLabel",PROVINSI:this.filter.provinsi,KABUPATEN:this.filter.kabupaten}).then(s=>{this.option.optWL=s.data,this.option.optWL.length==1&&(this.filter.wl=this.option.optWL[0].instansi_name)}).catch(s=>{console.error(s)})},openExecute(){let s=!0,e="";if(this.filter.provinsi==""&&(s=!1,e+=" Provinsi, "),this.filter.kabupaten==""&&(s=!1,e+=" Kabupaten, "),this.filter.wl==""&&(s=!1,e+=" White Label, "),!s)this.$swal({toast:!0,icon:"warning",text:"Silahkan Isi"+e.slice(0,-2)+"!"});else{let l="PROVINSI="+this.filter.provinsi;l+="&KABUPATEN="+this.filter.kabupaten,l+="&WL="+this.filter.wl,c.ajax.url("/report/library-officer-rpt?menufn="+this.$route.name+"&"+l).load()}},openXLS(){let s=!0,e="";if(this.filter.provinsi==""&&(s=!1,e+=" Provinsi, "),this.filter.kabupaten==""&&(s=!1,e+=" Kabupaten, "),this.filter.wl==""&&(s=!1,e+=" White Label, "),!s)this.$swal({toast:!0,icon:"warning",text:"Silahkan Isi"+e.slice(0,-2)+"!"});else{let l=this.$loading.show();window.axios({url:"/report/library-officer-xls",method:"POST",responseType:"blob",data:{PROVINSI:this.filter.provinsi,KABUPATEN:this.filter.kabupaten,WL:this.filter.wl}}).then(p=>{l.hide();const a=window.URL.createObjectURL(new Blob([p.data])),o=document.createElement("a");o.href=a,o.setAttribute("download","Laporan Petugas Perpustakaan "+this.filter.wl+".xlsx"),document.body.appendChild(o),o.click()}).catch(p=>{console.error(p),l.hide()})}}},computed:{cPermitted(){return this.menu.permission.create},rPermitted(){return this.menu.permission.read},uPermitted(){return this.menu.permission.update},dPermitted(){return this.menu.permission.delete},pPermitted(){return this.menu.permission.print},aPermitted(){return this.menu.permission.approve}},beforeRouteLeave(s,e,l){c&&(c.destroy(),c=null),l()}},S={class:"modal fade text-left modal-borderless",id:"border-less",tabindex:"-1",role:"dialog","aria-labelledby":"myModalLabel1","aria-hidden":"true"},N={class:"modal-dialog modal-lg modal-dialog-scrollable",role:"document"},W={class:"modal-content"},E=t("div",{class:"modal-header"},[t("h5",{class:"modal-title"},"Filter"),t("button",{type:"button",class:"close rounded-pill","data-bs-dismiss":"modal","aria-label":"Close"},[t("i",{"data-feather":"x"})])],-1),T={class:"modal-body"},I={class:"row"},U={class:"col-md-6 col-6"},V={class:"row"},A={class:"col-md-12 mb-12"},M={class:"form-group"},O=t("label",{for:"basicSelect1",class:"form-label"},"Provinsi",-1),R=t("option",{value:""},"--",-1),F=["value"],B={class:"col-md-12 mb-12"},C={class:"form-group"},D=t("label",{for:"basicSelect2",class:"form-label"},"Kabupaten/Kota",-1),X=t("option",{value:""},"--",-1),j=["value"],q={class:"col-md-6 col-6"},z={class:"row"},J={class:"col-md-12 mb-12"},G={class:"form-group"},H=t("label",{for:"basicSelect3",class:"form-label"},"White Label",-1),Q=t("option",{value:""},"--",-1),Y=["value"],Z={class:"modal-footer"},ee=t("i",{class:"bi bi-file-earmark-excel-fill"},null,-1),te=t("i",{class:"bi bi-file-earmark-excel-fill"},null,-1),se=L('<section class="section"><div class="card"><div class="card-header"><div class="buttons"><a href="#" class="btn icon icon-left btn-primary" data-bs-toggle="modal" data-bs-target="#border-less"><i class="bi bi-filter-square-fill"></i> Filter</a></div></div><div class="card-body"><table class="table table-striped" id="data_rst"><thead><tr><th>Nama WL</th><th>Provinsi</th><th>Kab/Kota</th><th>NIP</th><th>Nama</th><th>Jabatan</th></tr></thead></table></div></div></section>',1);function ie(s,e,l,p,a,o){const v=y("action-bar");return r(),n(h,null,[k(v,{data:a.menu,"menu-label":a.menu.menu_label},null,8,["data","menu-label"]),t("div",S,[t("div",N,[t("div",W,[E,t("div",T,[t("div",I,[t("div",U,[t("div",V,[t("div",A,[t("div",M,[O,u(t("select",{class:"form-select",id:"basicSelect1","onUpdate:modelValue":e[0]||(e[0]=i=>a.filter.provinsi=i),onChange:e[1]||(e[1]=(...i)=>o.getKabupaten&&o.getKabupaten(...i))},[R,(r(!0),n(h,null,b(a.option.optProv,(i,d)=>(r(),n("option",{key:d,value:i.provinsi_id},f(i.provinsi_id+" "+i.provinsi_name),9,F))),128))],544),[[m,a.filter.provinsi]])])]),t("div",B,[t("div",C,[D,u(t("select",{class:"form-select",id:"basicSelect2","onUpdate:modelValue":e[2]||(e[2]=i=>a.filter.kabupaten=i),onChange:e[3]||(e[3]=(...i)=>o.getWhiteLabel&&o.getWhiteLabel(...i))},[X,(r(!0),n(h,null,b(a.option.optKab,(i,d)=>(r(),n("option",{key:d,value:i.kabupaten_id},f(i.kabupaten_id+" "+i.kabupaten_name),9,j))),128))],544),[[m,a.filter.kabupaten]])])])])]),t("div",q,[t("div",z,[t("div",J,[t("div",G,[H,u(t("select",{class:"form-select",id:"basicSelect3","onUpdate:modelValue":e[4]||(e[4]=i=>a.filter.wl=i)},[Q,(r(!0),n(h,null,b(a.option.optWL,(i,d)=>(r(),n("option",{key:d,value:i.instansi_name},f(i.instansi_name),9,Y))),128))],512),[[m,a.filter.wl]])])])])])])]),t("div",Z,[t("button",{type:"button",class:"btn btn-primary ms-1","data-bs-dismiss":"modal",onClick:e[5]||(e[5]=(...i)=>o.openExecute&&o.openExecute(...i))},[ee,_(" Proses Data ")]),t("button",{type:"button",class:"btn btn-success ms-1","data-bs-dismiss":"modal",onClick:e[6]||(e[6]=(...i)=>o.openXLS&&o.openXLS(...i))},[te,_(" Export ")])])])])]),se],64)}const ne=P(K,[["render",ie]]);export{ne as default};
//# sourceMappingURL=ReportLibraryOfficers-W45z9-q9.js.map