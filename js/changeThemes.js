const changeButton = document.querySelector('.toggle__switch');
let slideToggle = document.querySelector('.slider');


changeButton.addEventListener("click", function changeToggler(){
    changeButton.classList.toggle("active__toggler");
    slideToggle.classList.toggle('active__slideToggle');

    if(changeButton.classList.contains('active__toggler')){
        localStorage.setItem('class', 'active');
    }else{
        localStorage.removeItem('class');
    }

    if(document.documentElement.hasAttribute('data-theme')){
        document.documentElement.removeAttribute('data-theme');
        localStorage.removeItem('theme')
    }else{
        document.documentElement.setAttribute('data-theme', 'dark');
        localStorage.setItem('theme', 'dark')
    }
 
})

if(localStorage.getItem('theme') !== null){
    document.documentElement.setAttribute('data-theme', 'dark');
}

if(localStorage.getItem('class') !== null){
    changeButton.classList.toggle("active__toggler");
    slideToggle.classList.toggle('active__slideToggle');
}