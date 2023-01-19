let but=document.querySelectorAll("#X")
let logindiv=document.getElementById("logindiv")
let signupdiv=document.getElementById("signupdiv")
let login=document.getElementById("login")
let signup=document.getElementById("signup")

logindiv.style.display="none"
signupdiv.style.display="none"

login.onclick=function(){
    logindiv.style.display="inline"
}
signup.onclick=function(){
    signupdiv.style.display="inline"
}

but.forEach(function(buttons){
    buttons.onclick=function(){
        logindiv.style.display="none"
        signupdiv.style.display="none"
    }
})

// window.onbeforeunload = function(){return false }