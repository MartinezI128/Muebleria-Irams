function objectAjax(){
	var xmlhttp = false;
	try{
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e){
		try{
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");			
		} catch (E){
			xmlhttp = false;	
		}		
	}
	if(!xmlhttp && typeof XMLHttpRequest!='undefined'){
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}
//Inicializo automaticamente la funcion read al entrar a la pagina o recargar la pagina;
addEventListener('load', read, false);

function read(){
        $.ajax({        
        		type: 'POST',
                url:   '?c=administrator&m=tbl_producto',               
                beforeSend: function () {
                        $("#information").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#information").html(response);
                }
        });
}

function register(){
	id 		= document.formUser.id.value;
	nombre 		= document.formUser.nombre.value;
	marca 	= document.formUser.marca.value;
	categoria 		= document.formUser.categoria.value;
	precio 		= document.formUser.precio.value;
	cantidadstock 		= document.formUser.cantidadstock.value;
	origen 		= document.formUser.origen.value;
	descripcion 		= document.formUser.descripcion.value;

	ajax = objectAjax();
	ajax.open("POST", "?c=administrator&m=registeruser", true);
	ajax.onreadystatechange=function() {
		if(ajax.readyState==4	){			
			read();			
			alert('Los datos guardaron correctamente.');			
			$('#addUser').modal('hide');
			document.formUser.reset();
		}
	}
ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
ajax.send("nombre="+nombre+"&marca="+marca+"&categoria="+categoria+"&precio="+precio+"&cantidadstock="+cantidadstock+"&origen="+origen+"&descripcion="+descripcion+"&id="+id);
}	

function update(){
	id 			= document.formUserUpdate.id.value;
	nombre 		= document.formUserUpdate.nombre.value;
	marca 	= document.formUserUpdate.marca.value;
	categoria 		= document.formUserUpdate.categoria.value;
	precio 		= document.formUserUpdate.precio.value;
	cantidadstock 		= document.formUserUpdate.cantidadstock.value;
	origen 		= document.formUserUpdate.origen.value;
	descripcion 		= document.formUserUpdate.descripcion.value;

	ajax = objectAjax();
	ajax.open("POST", "?c=administrator&m=updateuser", true);
	ajax.onreadystatechange=function() {
		if(ajax.readyState==4){
			if (ajax.status==200){
				read();
				alert("Los datos se han actualizado");
				$('#updateUser').modal('hide');
			}
		}
	}
ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
ajax.send("nombre="+nombre+"&marca="+marca+"&categoria="+categoria+"&precio="+precio+"&cantidadstock="+cantidadstock+"&origen="+origen+"&descripcion="+descripcion+"&id="+id);

}

function deleteUser(id){	
	if(confirm('¿Esta seguro de eliminar este registro?')){						
	ajax = objectAjax();
	ajax.open("POST", "?c=administrator&m=deleteuser", true);
	ajax.onreadystatechange=function() {
		if(ajax.readyState==4){			
			read();		
		}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("id="+id);
	}
}

function ModalRegister(){
	$('#addUser').modal('show');
}

function ModalUpdate(id,nombre,marca,categoria,precio,cantidadstock,origen,descripcion){			
	document.formUserUpdate.id.value 			= id;
	document.formUserUpdate.nombre.value 			= nombre;
	document.formUserUpdate.marca.value 	= marca;
	document.formUserUpdate.categoria.value 		= categoria;
	document.formUserUpdate.precio.value 		= precio;
	document.formUserUpdate.cantidadstock.value 		= cantidadstock;
	document.formUserUpdate.origen.value 		= origen;
	document.formUserUpdate.descripcion.value 		= descripcion;


	$('#updateUser').modal('show');
}

/*
	CRUD creado por Oscar Amado
	Contacto: oscarfamado@gmail.com
*/