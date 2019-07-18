<a href="?pagina=inserir_novo_curso">inserir novo curso</a>
<table style="border: 1px solid black; padding: 2px;">
	<tr>
		<th>Nome curso</th>
		<th>Carga horaria</th>
		<th>Deletar</th>
	</tr>
	<?php 

	while ($linha = mysqli_fetch_array($consulta_cursos)) {
		echo "<tr><td>".$linha['NOME_CURSOS'].'</td>';
		echo "<td>".$linha['CARGA_HORARIA'].'</td>';
	}

	?>

	<td><a href="deleta_curso.php?id=<?php echo $linha['ID_CURSO']; ?>">Deletar</a></td></tr>

	<?php 
	 ?>

</table>