elem = document.querySelector(".item__bar");

elem.addEventListener("click", function(e) {
    let knowID = e.target.id;
    console.log(+knowID);
})