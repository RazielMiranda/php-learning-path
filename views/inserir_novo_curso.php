<?php if (!isset($_GET['editar'])) { ?>

<h1>Inserir novo curso</h1>
<form method="post" action="processa_curso.php">
	<input type="text" name="nome_curso" placeholder="Inserir nome curso">
	<br>
	<input type="text" name="carga_horaria" placeholder="Inserir carga horaria">
	<br>
	<input type="submit" value="Inserir curso" >
</form>


<?php }else{ ?>
	<?php while ($linha = mysqli_fetch_array($consulta_cursos)) { ?>


<h1>Editar curso</h1>
<form method="post" action="edita_curso.php">
	<br>
	<input type="text" name="nome_curso" placeholder="Editar nome curso" value="<?php echo $linha['NOME_CURSOS']; ?>">
	<br>
	<input type="text" name="carga_horaria" placeholder="Editar carga horaria" value="<?php echo $linha['CARGA_HORARIA']; ?>">
	<br>
	<input type="submit" value="Editar curso" >
</form>



	<?php } ?>
<?php } ?>