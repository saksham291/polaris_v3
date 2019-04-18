$(document).ready(function() {

    var section = $('.section'); 

    section.on('scrollSpy:enter', function() {
		  $(this).addClass('section--show animated fadeInUp');
    });

    section.scrollSpy(); 
});

$(window).load(function(){
  $('.page-loader').fadeOut();
});