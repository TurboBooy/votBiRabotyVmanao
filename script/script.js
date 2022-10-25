"use strict";

const button = document.querySelector('.header__button')
button.onclick = function () {
	alert('На самом деле тут ничего нет :(')
}

const menuBody = document.querySelector('.menu');

document.addEventListener('click', menu);

function menu(event) {
	if (event.target.closest('.menu__button')) {
		menuBody.classList.toggle('_active');
	}
	if (!event.target.closest('.menu')) {
		menuBody.classList.remove('_active');
	}
}