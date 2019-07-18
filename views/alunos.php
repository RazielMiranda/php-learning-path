<a href="?pagina=inserir_novo_aluno">inserir novo aluno</a>
<table style="border: 2px solid black; padding: 5px;">
	<tr>
		<th>Nome aluno:</th>
		<th>Data nascimento:</th>
		<th>Deletar</th>
		<th>Editar</th>
	</tr>

	<?php 


	while ($linha = mysqli_fetch_array($consulta_alunos)) {
		echo "<tr><td>".$linha['NOME_ALUNOS'].'</td>';
		echo "<td>".$linha['DATA_NASCIMENTO'].'</td>';
	 ?>


	<td><a href="deleta_aluno.php?ID_ALUNOS=<?php echo $linha['ID_ALUNOS']; ?>">Deletar</a></td></tr>


	<?php 
		
		}
	 
	 ?>


</table>