const timer=document.getElementById("timer")
const startButton=document.getElementById("start-button")
const stopButton=document.getElementById("stop-button")
const resetButton=document.getElementById("reset-button")
let timerInterval
let seconds1=0
let seconds2=0
let centiseconds1=0
let centiseconds2=0
let minutes=0
//訂定變數

startButton.addEventListener("click",() =>{//做start的監聽器
    timerInterval = setInterval(updateTimer, 10)//執行updateTimer 等10秒
})

stopButton.addEventListener("click",() =>{//做stop的監聽器
    clearInterval(timerInterval)//暫停執行
})

resetButton.addEventListener("click",() =>{
    seconds1=0
    seconds2=0
    centiseconds1=0
    centiseconds2=0
    minutes=0
    //訂定變數
    //寫入innerHTML
    timer.innerHTML=`
        <div class="digit">0</div>
        <div class="digit">:</div>
        <div class="digit">0</div>
        <div class="digit">0</div>
        <div class="digit">.</div>
        <div class="digit">0</div>
        <div class="digit">0</div>
    `
})

function updateTimer(){
    centiseconds1=centiseconds1+1
    //將微秒數+1
    if(centiseconds1==9&&centiseconds2==9){//當微秒=99時..
        centiseconds1=0//微秒=00
        centiseconds2=0
        seconds1=seconds1+1//秒數+1
    }
    if(seconds2==6){//當第2位的秒數=6時..
        seconds1=0//秒數=00
        seconds2=0
        minutes=minutes+1//分鐘數+1
    }
    if(minutes==9&&seconds2==5&&seconds1==9&&centiseconds2==9&&centiseconds1==9){//當時間=9:59.99時..
        stopButton.click()//暫停(避免溢位)
    }
    if(seconds1==10){//當第1位秒數=10時..
        seconds1=0//第1位秒數=0
        seconds2=seconds2+1//第2位+1
    }
    if(centiseconds1==10){//當第1位微秒數=10時..
        centiseconds1=0//第1為微秒數=0
        centiseconds2=centiseconds2+1//第2位+1
    }
    //寫入innerHTML
    timer.innerHTML=`
        <div class="digit">${minutes}</div>
        <div class="digit">:</div>
        <div class="digit">${seconds2}</div>
        <div class="digit">${seconds1}</div>
        <div class="digit">.</div>
        <div class="digit">${centiseconds2}</div>
        <div class="digit">${centiseconds1}</div>
    `
}

