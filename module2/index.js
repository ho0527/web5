let index=document.getElementById("index")
let view=document.getElementById("view")
let signup=document.getElementById("signup")
let button=[index,view,signup]

console.log(window.location.pathname);
function check(){
    button.forEach(function(buttons){
        buttons.classList.remove("selectbut")
    })

    if(window.location.pathname=="/module2/"||window.location.pathname=="/module2/index.php"){
        index.classList.add("selectbut")
    }else if(window.location.pathname=="/module2/post.php"){
        view.classList.add("selectbut")
    }else if(window.location.pathname=="/module2/login.php"){
        signup.classList.add("selectbut")
    }
}

check()

// login.onclick=function(){
//     logindiv.style.display="inline"
//     login.classList.add("selectbut")
// }
// signup.onclick=function(){
//     signupdiv.style.display="inline"
//     signup.classList.add("selectbut")
// }

// but.forEach(function(buttons){
//     buttons.onclick=function(){
//         logindiv.style.display="none"
//         signupdiv.style.display="none"
//         check()
//     }
// })

window.onbeforeunload="none"