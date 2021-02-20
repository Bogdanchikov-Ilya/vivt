let massage = document.querySelector('.input');
let out = document.querySelector('.item__bar');
let color = document.querySelector('.input__color');




function addGrup(){
    
    if(massage.value != ''){
        var htmlCode = ` <div class="item__wrapper">
        <li class="list__item">
            <div class="color_list" style="background-color:${color.value};"></div>
            <span class="item__text">${massage.value}</span> 
        </li> <div id="item__del" onclick="itemDel()" alt="Удлить">×</div>
    </div>`;
        out.insertAdjacentHTML('beforeend', htmlCode);

        
        let items = document.querySelectorAll(".item__wrapper");
    
        

        items.forEach((item) => {
            item.addEventListener('click', () => {
                if (item.classList.contains('active')) {
                    // item.classList.toggle('active');
                    removeStyle(items, "active");
                    item.classList.add('active');
                }else {
                    removeStyle(items, "active");
                    item.classList.add('active');
                }
            })
        })

        function removeStyle(element, className) {
            element.forEach((item) => {
                item.classList.remove(className);
            })
        }

        
    }else{
        alert("Поле не заполнено")
    }
    
}   
function itemDel() {
    elem = document.querySelector(".item__bar");
  
    elem.addEventListener("click", event => {
      let el = event.target;
      content_out.innerHTML = 'Выберете сотрудника из списка';
        
    
      el.parentNode.remove()
      
    })
    
  }


  //FGDSDFSDFSDESFFDSD