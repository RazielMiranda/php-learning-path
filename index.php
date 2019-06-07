<?php

$link = mysqli_connect("127.0.0.1", "root", "database@LOCAL", "test");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}


		include	'header.php';
?>







	<body>
	
		<?php require 'menu.php'?>
		
		<h1>
			Minha lista de filmes: 
		</h1>


		<ul>	
				<?php
		   			$query = " SELECT * FROM  'filmes' ";
			     	$result = $link->query($query);

		    			while ($filme = $result->fetch()) {
		      				echo ("<li>".$filme->nome."<li>");
		      			}
      			
      			?>
      	</ul>
	
	</body>


<?php
		include 'footer.php'; 

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($link);

?>