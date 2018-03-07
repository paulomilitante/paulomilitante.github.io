$(document).ready(function(){
    $('.scrollspy').scrollSpy({scrollOffset : 0});
    $(".button-collapse").sideNav();

    var top = $('#mastHead').height();
    $('nav').pushpin({
    	top: top,
    	offset: 0
    });
});

var options = [
	{selector: '#about', offset: 400, callback: function() {
		Materialize.showStaggeredList($('#aboutList'));
	} },
	{selector: '#portfolio', offset: 400, callback: function() {
		Materialize.showStaggeredList($('#portfolioList'));
	} },
	{selector: '#ugf', offset: 400, callback: function() {
		Materialize.showStaggeredList($('#ugfList'));
	} },
	{selector: '#calzolaio', offset: 300, callback: function() {
		Materialize.showStaggeredList($('#calzolaioList'));
	} },
	{selector: '#myexpenses', offset: 300, callback: function() {
		Materialize.showStaggeredList($('#myexpensesList'));
	} },
	{selector: '#contact', offset: 400, callback: function() {
		Materialize.showStaggeredList($('#contactList'));
	} }
];
Materialize.scrollFire(options);

$('.side-nav').click(function(){
	console.log('test');
	$(this).sideNav('hide');
});

