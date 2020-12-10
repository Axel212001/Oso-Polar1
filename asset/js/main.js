(function($) {

	"use strict";

	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	$('#sidebarCollapse').on('click', function () {
      $('#sidebar').toggleClass('active');
  });

})(jQuery);

function Login(){ 
	var done=0; 
	var usuario=document.container-login2.nombreUsuario.value; 
	var password=document.container-login2.contra.value; 

	if (usuario=="AMS212001" && password=="12345") { 
		window.location="homeUusario.html"; 
	} 
	if (usuario=="vendedor" && password=="123456") { 
		window.location="TU_PAGINA_WEB.HTML"; 
	} 
	if (usuario=="administrador" && password=="1234567") { 
		window.location="errorpopup.html"; 
	} 
}