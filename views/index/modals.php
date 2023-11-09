<div id="addUser" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Agregar nuevo producto</h4>
      </div>
      <div class="modal-body">
		<form name="formUser" onsubmit="register(); return false">
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="nombre" type="text" class="form-control" name="nombre" placeholder="Nombre del producto" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="marca" type="text" class="form-control" name="marca" placeholder="marca" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		  	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="categoria" type="text" class="form-control" name="categoria" placeholder="categoria del producto" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="precio" type="text" class="form-control" name="precio" placeholder="precio" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="cantidadstock" type="text" class="form-control" name="cantidadstock" placeholder="cantidadstock" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="origen" type="text" class="form-control" name="origen" placeholder="origen" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="descripcion" type="text" class="form-control" name="descripcion" placeholder="descripcion" required autocomplete="off">
		  </div>
		  <br>				  
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Registrar</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
		</form>
      </div>
    </div>
  </div>
</div>


<div id="updateUser" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Actualizar informacion usuario </h4>        
      </div>
      <div class="modal-body">
		<form name="formUserUpdate" onsubmit="update(); return false">
		<input type="text" name="id" id="id" style="display: none;">
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="nombre" type="text" class="form-control" name="nombre" placeholder="Nombres" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="marca" type="text" class="form-control" name="marca" placeholder="marca" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		  	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="categoria" type="text" class="form-control" name="categoria" placeholder="categoria" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		  	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="precio" type="text" class="form-control" name="precio" placeholder="categoria" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		  	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="cantidadstock" type="text" class="form-control" name="cantidadstock" placeholder="cantidadstock" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		  	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="origen" type="text" class="form-control" name="origen" placeholder="origen" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		  	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="descripcion" type="text" class="form-control" name="descripcion" placeholder="descripcion" required autocomplete="off">
		  </div>		 	  
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Actualizar</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
		</form>
      </div>
    </div>
  </div>
</div>