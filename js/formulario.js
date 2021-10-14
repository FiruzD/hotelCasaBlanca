function validar(){
	if (document.getElementById("txtName").value==""){		
		document.getElementById("txtName").focus();
		return false;
	}
	if (document.getElementById("txtCellphone").value==""){		
		document.getElementById("txtCellphone").focus();
		return false;
	}
	if (document.getElementById("txtGmail").value==""){		
		document.getElementById("txtGmail").focus();
		return false;
	}
	document.getElementById("formulario").submit();
}

window.onload = function(){	
	document.getElementById("btnEnviar").onclick = validar;	
}