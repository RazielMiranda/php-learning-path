<a href="?pagina=inserir_novo_curso">inserir novo curso</a>
<table style="border: 1px solid black; padding: 2px;">
	<tr>
		<th>Nome curso</th>
		<th>Carga horaria</th>
		<th>Deletar</th>
		<th>Editar</th>
	</tr>
	<?php 

	while ($linha = mysqli_fetch_array($consulta_cursos)) {
		echo "<tr><td>".$linha['NOME_CURSOS'].'</td>';
		echo "<td>".$linha['CARGA_HORARIA'].'</td>';
	
	?>


	<td><a href="?pagina=inserir_novo_curso&editar=<?php echo $linha['ID_CURSOS']; ?>">Editar</a></td>
	<td><a href="deleta_curso.php?ID_CURSOS=<?php echo $linha['ID_CURSOS']; ?>">Deletar</a></td></tr>


	<?php 
		
		}
	 
	 ?>

</table>