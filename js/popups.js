const popup = document.querySelector('.button__add-wrapper');
const content = document.querySelector('.popup__content')
const csslose = document.querySelector('#close')

popup.addEventListener("click", function open(elem){
	document.querySelector('.popup').classList.toggle('open');
	document.querySelector('.popup__content').classList.toggle('open-content');
})

csslose.addEventListener("click", function open(elem){
	document.querySelector('.popup').classList.toggle('open');
	document.querySelector('.popup__content').classList.toggle('open-content');
})