$(document).ready(function () {
	$(".btn-canjear").click(function () {
		var valores = "";

		// Obtenemos todos los valores contenidos en los <td> de la fila
		// seleccionada
		$(this).parents("tr").find(".id").each(function () {
				valores += $(this).html() + "\n";
			});
		console.log(valores);
		
		document.getElementById('showId').value=document.getElementById('food').value;
	});
});
