let object = document.querySelector("#item__del");
let content_out = document.querySelector(".content__body");



function addContent(){
    object.addEventListener("click", event =>{
        content_out.innerHTML = '';
        location.reload();
        
    })
    // window.location.reload();
    
}

addContent();










//sdfffff