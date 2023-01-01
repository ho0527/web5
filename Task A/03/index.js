let mod=document.getElementById("change")
let buttons=document.querySelectorAll('button')
let output=document.getElementById("output")
//訂定變數

output.value=""//將output清空

//變換value
mod.onclick=function(){
	if(mod.value=="後兩位模式"){
		mod.value="全部模式"
	}else{
		mod.value="後兩位模式"
	}
}

if(mod.value=="後兩位模式"){
	buttons.forEach(function(button){
		button.addEventListener('click',function(){
			if (this.id=='c') {
				output.value=""//將output清空
			} else if(this.id=='calc='){
				let result=eval(output.value)
				output.value=Math.round(result * 100) / 100;//四捨五入
			} else {
				output.value=output.value+this.textContent//加字串
			}
		})
	})
}else{
	buttons.forEach(function(button){
		button.addEventListener('click',function(){
			if (this.id=='c') {
				output.value=""//將output清空
			} else if(this.id=='calc='){
				output.value=eval(output.value)//印出結果
			} else {
				output.value=output.value+this.textContent//加字串
			}
		})
	})
}