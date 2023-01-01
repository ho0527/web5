let but=document.getElementById("X")
let div=document.getElementById("div")
let addsut=document.getElementById("addsut")

div.style.display="none"

addsut.onclick=function(){
    div.style.display="inline"
}

but.onclick=function(){
    div.style.display="none"
}

window.onbeforeunload = function(){return false }