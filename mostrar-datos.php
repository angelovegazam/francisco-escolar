<?php 

	//MOTRAR DATOS DE REGISTROS EN PAGINA
	$conn=mysqli_connect(
	'localhost',
	'root',
	'',
	'francisco_escolar'
	);
?>



<div class="contenedor-tablas">





    <table class="tablas">
		<tr>
			<td>ID</td>
			<td>Nombres</td>
			<td>Apellidos</td>
			<td>Cedula de Identidad</td>
			<td>Opciones</td>
		</tr>

		<?php
			$sql="SELECT * from registro_estudiantes";
			$result=mysqli_query($conn,$sql);

			while($mostrar=mysqli_fetch_array($result)){
		?>

		<tr>
			<td><?php echo $mostrar['id'] ?></td>
			<td><?php echo $mostrar['nombres'] ?></td>
			<td><?php echo $mostrar['apellidos'] ?></td>
			<td><?php echo $mostrar['cedula_identidad'] ?></td>
			<td>
			<a href="edit.php?id=<?php echo $mostrar['id']?>" class="btn btn-secondary" style="color:white;">
                Editar<i class="fas fa-marker" style="color:white;"></i>
              </a>
              <a href="delete_task.php?id=<?php echo $mostrar['id']?>" class="btn btn-danger" style="color:white;">
                Eliminar<i class="far fa-trash-alt" style="color:white;"></i>
              </a>
			</td>
		</tr>

		<?php
		}
	 	?>
	</table>
</div>

