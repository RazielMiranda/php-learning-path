<?php
		$link = mysqli_connect('localhost','root','database@LOCAL');
		if(!$link){
				die('error'. mysqli_error());
		}
		$link->select_db("test");

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

		    			while ($filme=$result->fetch_object() ) {
		      				echo ("<li>".$filme->nome."<li>");
		      			}
      			
      			?>
      	</ul>
	
	</body>


<?php
		include 'footer.php'; 
		mysqli_close($link);
?>