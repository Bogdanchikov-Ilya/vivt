let object = document.querySelector(".item__wrapper");
let content_out = document.querySelector(".content__body");



function addContent(){
    object.addEventListener("click", event =>{
        content_out.innerHTML = '';
        window.location.reload();
        
    })
}

addContent();










//sdfffff