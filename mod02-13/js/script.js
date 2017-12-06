var toggleIcon = document.querySelector('#toggleIcon');

toggleIcon.addEventListener('click', function() {

	console.log('toggleIcon is working');

	var nav = document.querySelector('header');
	nav.style.left = '-20vw';

	var main = document.querySelector('main.wrapper');
	main.style.width = '100vw';

	var toggleIcon = document.querySelector('#toggleIcon');
	toggleIcon.setAttribute('hidden', 'hidden');

	var toggleIcon = document.querySelector('#toggleIcon1');
	toggleIcon1.removeAttribute('hidden');

});

var toggleIcon1 = document.querySelector('#toggleIcon1');

toggleIcon1.addEventListener('click', function() {

	console.log('toggleIcon1 is working');

	var nav = document.querySelector('header');
	nav.style.left = '0';

	var main = document.querySelector('main.wrapper');
	main.style.width = '80vw';

	var toggleIcon1 = document.querySelector('#toggleIcon1');
	toggleIcon1.setAttribute('hidden','hidden');

	var toggleIcon1 = document.querySelector('#toggleIcon');
	toggleIcon.removeAttribute('hidden');
	
});
