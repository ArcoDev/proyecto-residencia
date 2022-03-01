/*=============================================
navegacion
=============================================*/

$("#btnCategorias").click(function(){

	if(window.matchMedia("(max-width:767px)").matches){

		$("#btnCategorias").after($("#categorias").slideToggle("fast"))

	}else{

		$("#navegacion").after($("#categorias").slideToggle("fast"))
		
	}

		
})