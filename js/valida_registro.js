with(document.registro){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok &&ci.value==""){
			ok=false;
			alert("Debe escribir la celula de identidad");
			ci.focus();
		}
		if(ok && nombres.value==""){
			ok=false;
			alert("Debe escribir el nombre");
			nombres.focus();
		}
		if(ok &&paterno.value==""){
			ok=false;
			alert("Debe escribir apellido paterno");
			paterno.focus();
		}
		if(ok &&materno.value==""){
			ok=false;
			alert("Debe escribir apellido materno");
			materno.focus();
		}
		if(ok &&fecha_nacimiento.value==""){
			ok=false;
			alert("Debe llenar la fechas de nacimiento");
			fecha_nacimiento.focus();
		}
		if(ok &&usuario.value==""){/////////////////
			ok=false;
			alert("Debe escribir el usuario");
			usuario.focus();
		}
		if(ok && correo.value==""){
			ok=false;
			alert("Debe escribir su correo electronico");
			correo.focus();
		}
		if(ok && password.value==""){
			ok=false;
			alert("Debe escribir su password");
			password.focus();
		}
		if(ok && confirm_password.value==""){
			ok=false;
			alert("Debe escribir su confirmacion de password");
			confirm_password.focus();
		}
		

		if(ok && password.value!= confirm_password.value){
			ok=false;
			alert("Los passwords no coinciden");
			confirm_password.focus();
		}
		if(ok &&item.value==""){
			ok=false;
			alert("Debe escribir item");
			item.focus();
		}

		if(ok){ submit(); }
	}
}
