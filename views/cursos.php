<table>
	<tr>
		<th>Nome curso</th>
		<th>Carga horaria</th>
	</tr>

	<?php 

	while ($linha = mysqli_fetch_array($consulta)) {
		echo "<tr><td>".$linha['NOME_CURSOS'].'</td>';
		echo "<td>".$linha['CARGA_HORARIA'].'</td></tr>';
	}

	?>

</table>