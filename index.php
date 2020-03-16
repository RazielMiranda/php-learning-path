<?php include 'ContaBancaria.class.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>BANCO PHP</title>
</head>
<body>
<main>
	<section>
		<h1>Crie sua conta no banco php!</h1><hr>
	</section>
	<form method="post" action="script.php">
		BANCO:<input type="text" name="banco"><br><br>
		<br>
		NOME TITULAR:<input type="text" name="nomeTitular"><br><br>
		<br>
		AGENCIA:<input type="text" name="numeroAgencia"><br><br>
		<br>
		CONTA:<input type="text" name="numeroConta"><br><br>
		<br>
		<input type="submit">
	</form>
</main>
</body>
</html>