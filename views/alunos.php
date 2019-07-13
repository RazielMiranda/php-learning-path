<table>
	<tr>
		<td>NOME ALUNOS</td>
		<td>DATA NASCIMENTO</td>
	</tr>

	<?php 


	while ($linha = mysqli_fetch_array($consulta_alunos)) {
		echo "<tr><td>".$linha['NOME_ALUNOS'].'</td>';
		echo "<td>".$linha['DATA_NASCIMENTO'].'</td></tr>';
	}


	 ?>


</table>