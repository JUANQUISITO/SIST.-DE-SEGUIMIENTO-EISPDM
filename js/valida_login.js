with (document.login) {
	onsubmit = function (e) {
		e.preventDefault();
		ok = true;
		var usuario = document.getElementById('usuario');
		if (ok && usuario.value == "") {
			ok = false;
			alert("Debe escribir un nombre de usuario");
			usuario.focus();
		}
		if (ok && password == "") {
			ok = false;
			alert("Debe escribir su password");
			password.focus();
		}
		if (ok) { submit(); }
	}
}