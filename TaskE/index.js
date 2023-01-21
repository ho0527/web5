let but=document.getElementsByClassName("close")
let div=document.getElementById("div")
let addsut=document.getElementById("addsut")
let form=document.getElementById("addsutsubmit")

div.style.display="none"

addsut.onclick=function(){
    div.style.display="inline"
}

but.onclick=function(){
    div.style.display="none"
}

let signupdb=indexedDB.open("user",1)
signupdb.onupgradeneeded=function(){
    let db=signupdb.result
    let store=db.createObjectStore("name",{keyPath:"id"})
    store.createIndex("name",{unique:true})
}

form.onsubmit=function(event){
    event.preventDefault()
    let username=document.getElementById("stuname").value
    let user={id:Date.now(),name:username}
    let openDB=indexedDB.open("user",1)
    openDB.onsuccess=function(){
        let db=openDB.result
        let tx=db.transaction("name","readwrite")
        let store=tx.objectStore("name")
        let index=store.index("name")
        let checkRequest=index.get(username)
        checkRequest.onsuccess=function(){
            if(checkRequest.result){
                alert("用戶已存在")
            }else{
                store.put(user)
                alert("新增成功")
            }
        }
    }
}

let readDB=indexedDB.open("user",1)
readDB.onsuccess=function(){
    let db=readDB.result
    let tx=db.transaction("name","readonly")
    let store=tx.objectStore("name")
    let cursor=store.openCursor()
    cursor.onsuccess=function(){
        let result=cursor.result
        if(result){
            console.log(result.value)
            result.continue()
        }
    }
}

//Sort students function
document.querySelector("#main .sort").addEventListener("change", function(){
    //code for sorting students by selected option
    //options: name, student_id, email
    var sortBy = this.value;
    //sort students and update main content
});

//Empty trash function
document.querySelector("#trash .empty").addEventListener("click", function(){
    //code for emptying trash
    //confirm action
    //delete all students in trash
});

//Restore student function
document.querySelector("#trash .students").addEventListener("click", function(event){
    if(event.target.matches(".restore")){
        //code for restoring student from trash
        //move student back to main student list
    }
});

//Permanently delete student function
document.querySelector("#trash .students").addEventListener("click", function(event){
    if(event.target.matches(".delete")){
        //code for permanently deleting student
        //confirm action
        //delete student from system
    }
});

//Function for handling when there are no students in the system
if(students.length === 0){
    //display message: "No students to display."
}

//Function for limiting number of students displayed to 20
if(students.length > 20){
    //display only the first 20 students
}

//Function for displaying scrollbar when necessary
if(students.length > 20){
    //display scrollbar
}

//Function for displaying student's address when mouse is hovered over student list item
document.querySelector("#main .students").addEventListener("mouseover", function(event){
    if(event.target.matches(".student")){
        //display student's address
    }
});

//Function for hiding student's address when mouse is not hovered over student list item
document.querySelector("#main .students").addEventListener("mouseout", function(event){
    if(event.target.matches(".student")){
        //hide student's address
    }
});