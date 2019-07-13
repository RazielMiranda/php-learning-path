<table>
	<tr>
		<th>
			<td>ALUNO MATRICULADO</td>
		</th>
	</tr>

	<tr>
		<th>
			<td>CURSO MATRICULADO</td>
		</th>
	</tr>

	<?php 

	while ($linha = mysqli_fetch_array($consulta_matriculas)) {
		echo "<tr><td>".$linha['ID_ALUNOS'].'</td>';
		echo "<td>".$linha['ID_CURSOS'].'</td></tr>';
	}

	 ?>

</table>