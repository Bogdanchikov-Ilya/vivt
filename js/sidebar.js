let items = document.querySelectorAll(".item__wrapper");

function removeStyle(element, className) {
    element.forEach((item) => {
        item.classList.remove(className);
    })
}

items.forEach((item) => {
    item.addEventListener('click', () => {
        if (item.classList.contains('active')) {
            item.classList.toggle('active');
        }else {
            removeStyle(items, "active");
            item.classList.add('active');        
        }
    })
})
