document.querySelector(".deleteById").addEventListener("click",(function(e){e.preventDefault(),console.log("Работаеи");let t=document.forms.idcake.id.value,n=new URLSearchParams;n.set("id",t),fetch("/delcake",{method:"post",body:n}).then((e=>e.text())).then((e=>{console.log(e),document.querySelector(".waring").innerHTML=`<p>${e}</p>`}))}));