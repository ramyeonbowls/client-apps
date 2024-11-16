import{_ as P,c as n,d as g,a as e,s as b,P as f,F as u,b as _,e as w,D as k,r as x,o as r,t as v}from"./sweetalert2.min-C72B2ZMm.js";import"./_commonjsHelpers-DSXiPLDm.js";let p;const L={data(){return{menu:{menu_label:"",menu_desc:"",permission:{create:!1,read:!1,update:!1,delete:!1,print:!1,approve:!1}},configdate:{dateFormat:"Y-m-d",mode:"range",onClose:(s,t,l)=>{s.length===1&&(l.clear(),this.filter.date="")}},option:{optProv:"",optKab:"",optWL:""},filter:{date:"",provinsi:"",kabupaten:"",wl:""}}},mounted(){this.__MENU(),this.$root.web_access_log(),this.getProvinsi(),p=$("#data_rst").DataTable({paging:!0,pagingType:"full_numbers",lengthMenu:[[10,25,50,100,500],[10,25,50,100,500]],pageLength:25,processing:!0,ajax:"/report/visitors-rpt?nodata=yes",columns:[{data:"wl_name",class:"text-center text-nowrap"},{data:"provinsi_name",class:"text-center text-nowrap"},{data:"kabupaten_name",class:"text-center text-nowrap"},{data:"visitor",class:"text-center text-nowrap"}],language:{lengthMenu:"_MENU_",search:"_INPUT_",searchPlaceholder:"Pencarian..",info:'<span class="fs-sm">Menampilkan _START_ sampai _END_ dari _TOTAL_ entri</span>',infoEmpty:'<span class="fs-sm">Menampilkan 0 sampai 0 dari 0 entri</span>',infoFiltered:'<span class="fs-sm">(disaring dari _MAX_ total entri)</span>',zeroRecords:'<span class="fs-sm">Tidak Ada Data</span>',paginate:{first:'<i class="bi bi-chevron-double-left"></i>',previous:'<i class="bi bi-chevron-left"></i>',next:'<i class="bi bi-chevron-right"></i>',last:'<i class="bi bi-chevron-double-right"></i>'}}})},methods:{__MENU(){let s=this.$loading.show();window.axios.get("/web-access-log/"+this.$route.name).then(t=>{s.hide(),this.menu.menu_label=t.data.menu_label,this.menu.menu_desc=t.data.menu_desc,this.menu.permission=t.data.permission}).catch(t=>{s.hide(),console.error(t)})},getProvinsi(){this.option.optProv="",this.option.optKab="",this.option.optWL="";let s=this.$loading.show();window.axios.post("/getOpt",{opt:"Provinsi"}).then(t=>{s.hide(),this.option.optProv=t.data,this.option.optProv.length==1&&(this.filter.provinsi=this.option.optProv[0].provinsi_id,this.getKabupaten())}).catch(t=>{s.hide(),console.error(t)})},getKabupaten(){this.option.optKab="",this.option.optWL="",window.axios.post("/getOpt",{opt:"Kabupaten",PROVINSI:this.filter.provinsi}).then(s=>{this.option.optKab=s.data,this.option.optKab.length==1&&(this.filter.kabupaten=this.option.optKab[0].kabupaten_id,this.getWhiteLabel())}).catch(s=>{console.error(s)})},getWhiteLabel(){this.option.optWL="",window.axios.post("/getOpt",{opt:"WhiteLabel",PROVINSI:this.filter.provinsi,KABUPATEN:this.filter.kabupaten}).then(s=>{this.option.optWL=s.data,this.option.optWL.length==1&&(this.filter.wl=this.option.optWL[0].instansi_name)}).catch(s=>{console.error(s)})},openExecute(){let s=!0,t="";if(this.filter.provinsi==""&&(s=!1,t+=" Provinsi, "),this.filter.kabupaten==""&&(s=!1,t+=" Kabupaten, "),this.filter.wl==""&&(s=!1,t+=" White Label, "),(this.filter.date===""||this.filter.date===null)&&(s=!1,t+=" Tanggal, "),!s)this.$swal({toast:!0,icon:"warning",text:"Silahkan Isi"+t.slice(0,-2)+"!"});else{let l=this.filter.date.split(" to ")[0]??"",h=this.filter.date.split(" to ")[1]??"",a="PROVINSI="+this.filter.provinsi;a+="&KABUPATEN="+this.filter.kabupaten,a+="&WL="+this.filter.wl,a+="&START_DATE="+l,a+="&END_DATE="+h,p.ajax.url("/report/visitors-rpt?menufn="+this.$route.name+"&"+a).load()}},openXLS(){let s=!0,t="";if(this.filter.provinsi==""&&(s=!1,t+=" Provinsi, "),this.filter.kabupaten==""&&(s=!1,t+=" Kabupaten, "),this.filter.wl==""&&(s=!1,t+=" White Label, "),(this.filter.date===""||this.filter.date===null)&&(s=!1,t+=" Tanggal, "),!s)this.$swal({toast:!0,icon:"warning",text:"Silahkan Isi"+t.slice(0,-2)+"!"});else{let l=this.$loading.show(),h=this.filter.date.split(" to ")[0]??"",a=this.filter.date.split(" to ")[1]??"";window.axios({url:"/report/visitors-xls",method:"POST",responseType:"blob",data:{PROVINSI:this.filter.provinsi,KABUPATEN:this.filter.kabupaten,WL:this.filter.wl,START_DATE:h,END_DATE:a}}).then(o=>{l.hide();const m=window.URL.createObjectURL(new Blob([o.data])),d=document.createElement("a");d.href=m,d.setAttribute("download","Laporan Pengunjung "+this.filter.date+".xlsx"),document.body.appendChild(d),d.click()}).catch(o=>{console.error(o),l.hide()})}}},computed:{cPermitted(){return this.menu.permission.create},rPermitted(){return this.menu.permission.read},uPermitted(){return this.menu.permission.update},dPermitted(){return this.menu.permission.delete},pPermitted(){return this.menu.permission.print},aPermitted(){return this.menu.permission.approve}},beforeRouteLeave(s,t,l){p&&(p.destroy(),p=null),l()}},T={class:"modal fade text-left modal-borderless",id:"border-less",tabindex:"-1",role:"dialog","aria-labelledby":"myModalLabel1","aria-hidden":"true"},S={class:"modal-dialog modal-lg modal-dialog-scrollable",role:"document"},K={class:"modal-content"},E=e("div",{class:"modal-header"},[e("h5",{class:"modal-title"},"Filter"),e("button",{type:"button",class:"close rounded-pill","data-bs-dismiss":"modal","aria-label":"Close"},[e("i",{"data-feather":"x"})])],-1),y={class:"modal-body"},N={class:"row"},W={class:"col-md-6 col-6"},A={class:"row"},V={class:"col-md-12 mb-12"},D={class:"form-group"},U=e("label",{for:"basicSelect1",class:"form-label"},"Provinsi",-1),R=e("option",{value:""},"--",-1),I=["value"],M={class:"col-md-12 mb-12"},O={class:"form-group"},C=e("label",{for:"basicSelect2",class:"form-label"},"Kabupaten/Kota",-1),F=e("option",{value:""},"--",-1),B=["value"],j={class:"col-md-6 col-6"},X={class:"row"},q={class:"col-md-12 mb-12"},z={class:"form-group"},J=e("label",{for:"basicSelect3",class:"form-label"},"White Label",-1),Y=e("option",{value:""},"--",-1),G=["value"],H={class:"col-md-12 mb-12"},Q={class:"form-group"},Z=e("label",{for:"sdate",class:"form-label"},"Tanggal",-1),tt={class:"modal-footer"},et=e("i",{class:"bi bi-file-earmark-excel-fill"},null,-1),st=e("i",{class:"bi bi-file-earmark-excel-fill"},null,-1),it=k('<section class="section"><div class="card overflow-auto"><div class="card-header"><div class="buttons"><a href="#" class="btn icon icon-left btn-primary" data-bs-toggle="modal" data-bs-target="#border-less"><i class="bi bi-filter-square-fill"></i> Filter</a></div></div><div class="card-body"><table class="table table-striped" id="data_rst"><thead><tr><th class="text-center">Nama WL</th><th class="text-center">Provinsi</th><th class="text-center">Kab/Kota</th><th class="text-center">Jumlah Pengunjung</th></tr></thead></table></div></div></section>',1);function at(s,t,l,h,a,o){const m=x("action-bar"),d=x("Flatpickr");return r(),n(u,null,[g(m,{data:a.menu,"menu-label":a.menu.menu_label},null,8,["data","menu-label"]),e("div",T,[e("div",S,[e("div",K,[E,e("div",y,[e("div",N,[e("div",W,[e("div",A,[e("div",V,[e("div",D,[U,b(e("select",{class:"form-select",id:"basicSelect1","onUpdate:modelValue":t[0]||(t[0]=i=>a.filter.provinsi=i),onChange:t[1]||(t[1]=(...i)=>o.getKabupaten&&o.getKabupaten(...i))},[R,(r(!0),n(u,null,_(a.option.optProv,(i,c)=>(r(),n("option",{key:c,value:i.provinsi_id},v(i.provinsi_id+" "+i.provinsi_name),9,I))),128))],544),[[f,a.filter.provinsi]])])]),e("div",M,[e("div",O,[C,b(e("select",{class:"form-select",id:"basicSelect2","onUpdate:modelValue":t[2]||(t[2]=i=>a.filter.kabupaten=i),onChange:t[3]||(t[3]=(...i)=>o.getWhiteLabel&&o.getWhiteLabel(...i))},[F,(r(!0),n(u,null,_(a.option.optKab,(i,c)=>(r(),n("option",{key:c,value:i.kabupaten_id},v(i.kabupaten_id+" "+i.kabupaten_name),9,B))),128))],544),[[f,a.filter.kabupaten]])])])])]),e("div",j,[e("div",X,[e("div",q,[e("div",z,[J,b(e("select",{class:"form-select",id:"basicSelect3","onUpdate:modelValue":t[4]||(t[4]=i=>a.filter.wl=i)},[Y,(r(!0),n(u,null,_(a.option.optWL,(i,c)=>(r(),n("option",{key:c,value:i.instansi_name},v(i.instansi_name),9,G))),128))],512),[[f,a.filter.wl]])])]),e("div",H,[e("div",Q,[Z,g(d,{modelValue:a.filter.date,"onUpdate:modelValue":t[5]||(t[5]=i=>a.filter.date=i),class:"form-control flatpickr-range",config:a.configdate,placeholder:"Select date.."},null,8,["modelValue","config"])])])])])])]),e("div",tt,[e("button",{type:"button",class:"btn btn-primary ms-1","data-bs-dismiss":"modal",onClick:t[6]||(t[6]=(...i)=>o.openExecute&&o.openExecute(...i))},[et,w(" Proses Data ")]),e("button",{type:"button",class:"btn btn-success ms-1","data-bs-dismiss":"modal",onClick:t[7]||(t[7]=(...i)=>o.openXLS&&o.openXLS(...i))},[st,w(" Export ")])])])])]),it],64)}const nt=P(L,[["render",at]]);export{nt as default};
//# sourceMappingURL=ReportVisitors-CuKAd_tR.js.map
