const afhaalbtn=document.querySelector("#afhaaloptie"),bestelbtn=document.querySelector("#besteloptie");afhaalbtn.addEventListener("click",()=>{afhaalbtn.classList.add("activeselection"),bestelbtn.classList.remove("activeselection"),document.querySelector("#bestelcontent").style.display="none",document.querySelector("#afhalencontent").style.display="block"}),bestelbtn.addEventListener("click",()=>{bestelbtn.classList.add("activeselection"),afhaalbtn.classList.remove("activeselection"),document.querySelector("#afhalencontent").style.display="none",document.querySelector("#bestelcontent").style.display="block"});