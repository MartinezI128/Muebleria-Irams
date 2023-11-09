<?php
/*
	CRUD creado por Oscar Amado
	Contacto: oscarfamado@gmail.com
*/
class administratorController extends Administrator{

	function index(){
		require_once('views/all/header.php');
		require_once('views/all/nav.php');
		require_once('views/index/index.php');
		require_once('views/index/modals.php');
		require_once('views/all/footer.php');
	}

	function tbl_producto(){
		?>
		<table class="table table-bordered">
			<thead>
				<tr>
				<th>#</th>
				<th>Nombre</th>
				<th>marca</th>
				<th>categoria</th>
				<th>precio</th>
				<th>cantidadstock</th>
				<th>origen</th>
				<th>descripcion</th>
				</tr>
			</thead>
			<tbody >		
		<?php
		foreach (parent::get_view_users()	as $data) {
		?>
		<tr>
			<td><?php echo $data->id; ?> </td>
			<td><?php echo $data->nombre; ?> </td>
			<td><?php echo $data->marca; ?> </td>
			<td><?php echo $data->categoria; ?> </td>
			<td><?php echo $data->precio; ?> </td>
			<td><?php echo $data->cantidadstock; ?> </td>
			<td><?php echo $data->origen; ?> </td>
			<td><?php echo $data->descripcion; ?> </td>

			<td>
			  <div class="btn-group">
			    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
			    Seleccionar <span class="caret"></span></button>
			    <ul class="dropdown-menu" role="menu">
			      <li><a href="#" onclick="ModalUpdate('<?php echo $data->id; ?>','<?php echo $data->nombre; ?>','<?php echo $data->marca; ?>','<?php echo $data->categoria; ?>','<?php echo $data->precio; ?>','<?php echo $data->cantidadstock; ?>','<?php echo $data->origen; ?>','<?php echo $data->descripcion; ?>');">Actualizar</a></li>
			      <li><a href="#" onclick="deleteUser('<?php echo $data->id; ?>');">Borrar</a></li>
			    </ul>
			  </div>
			</td>
		</tr>
		<?php
		}
		?>
			</tbody>
		</table>	
	<?php	
    }
    
	function deleteuser(){		
			parent::set_delete_user($_REQUEST['id']);		
    }

	function registeruser(){
		$data = array(
					'id'		=> $_REQUEST['id'],
					'nombre' 		=> $_REQUEST['nombre'],
					'marca' => $_REQUEST['marca'],
					'categoria'		=> $_REQUEST['categoria'],
					'precio'		=> $_REQUEST['precio'],
					'cantidadstock'		=> $_REQUEST['cantidadstock'],
					'origen'		=> $_REQUEST['origen'],
					'descripcion'		=> $_REQUEST['descripcion']
					);		
					parent::set_register_user($data);		
    }    
    
	function updateuser(){
		$data = array(
					'id'		=> $_REQUEST['id'],
					'nombre' 		=> $_REQUEST['nombre'],
					'marca' => $_REQUEST['marca'],
					'categoria'		=> $_REQUEST['categoria'],
					'precio'		=> $_REQUEST['precio'],
					'cantidadstock'		=> $_REQUEST['cantidadstock'],
					'origen'		=> $_REQUEST['origen'],
					'descripcion'		=> $_REQUEST['descripcion']
					);		
			parent::set_update_user($data);		
	}    
    
}

