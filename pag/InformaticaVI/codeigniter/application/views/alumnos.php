<div id="content">
			<a href="<?= base_url('index.php/admin_controller/add'); ?>">Alta Alumnos</a>
			<table width="700px" border="2px">
			<br>
			<br>
				<tr>
					<td>id Alumno</td>
					<td>Numero Cta</td>
					<td>Nombre</td>
					<td>Ap. Paterno</td>
					<td>Ap. Materno</td>
					<td>Borrar</td>
				  <td>Editar</td>
				</tr>
				<?php
				foreach($alumnos->result() as $alumno):
					echo "<tr>";
					echo "<td>".$alumno->idalumno."</td>";
					echo "<td>".$alumno->nocta."</td>";
					echo "<td>".$alumno->noalumno ."</td>";
					echo "<td>".$alumno->appaterno ."</td>";
					echo "<td>".$alumno->apmaterno ."</td>";
			echo '<td><a href="'.base_url("index.php/admin_controller/borrarAlumno/".$alumno->idalumno).'"><img src="assets/img/bote.png"></a></td>';
			echo '<td><a href="'.base_url("index.php/admin_controller/editAlumno/".$alumno->idalumno).'"><img src="assets/img/pencil.png"></a></td>';
					echo "</tr>";
				endforeach;
				?>
			</table>
</div>
