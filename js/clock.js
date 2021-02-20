let clock_string = document.querySelector(".time")
let date = document.querySelector(".date")

function clockTime(){
    let time = new Date()
    let h = time.getHours().toString()
    let m = time.getMinutes().toString()

    if(h.length < 2){h = '0' + h}
    if(m.length < 2){m = '0' + m}


    clock_string.innerHTML = h +':'+ m 
}
setInterval(clockTime, 1000)


function checkDays(){
    function getWeekDay(dates) {
        let days = ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'];
        return days[dates.getDay()];
    }
    
    let dates = new Date();
    console.log(getWeekDay(dates));

    let td = document.getElementsByTagName('td')
    let arrTD = []
    
    for(i=0; i < td.length; i++){
        if(td[i].textContent == getWeekDay(dates)){
            td[i].classList.add('this__day')
        }
    }
}
checkDays()