<html lang=en>
<head>
  <link rel="stylesheet" type="text/css" href="stylesC.css">
  <link rel="shortcut icon" href="ico.png">
  <meta charset="utf-8">
  <meta  name="viewport" content="width=device-width, initial-scale=1">
  <title>Showing Buddies!</title>
  <style type="text/css">
  	strong {
  		color: cyan;
  	}
  	#buddys {
  		background-color: #cf4e32;
  		border-radius: 50px;
		border : 20px solid #cf4e32;
  	}
  </style>
</head>
<body>
<div class = "wrapp">
    <div id ="title">
      <header>
        JACK'S WORLD
      </header>
    </div>
    <div id="Menu">
      <nav>
        <ul>
          <li><a href="index.html">HOME-HOO!</a></li>
          <li><a href="products.php">Our Products!</a></li>
          <li><a href="contact.html">Contac a Jack Today!</a></li>
          <li><a href="mostrar.php">Our JACKY COSTUMERS!</a></li>
          <li><a href="update.html">Re Write a Jack Buddy</a></li>
          <li><a href="erase.html">Erase a Jack Buddy</a></li>
        </ul>
      </nav>
    </div>
    <div id="Mensage"> 
		<?php
		//Incluye la conexion. 
	
		include("conexion.php");
	
		//Muestra los datos de la tabla.
	
		$muestra = "select * from contacto";

    	//Hace la consulta.

		$consulta = mysqli_query($link,$muestra);

		// Crea una fila.

		$fila = mysqli_fetch_array($consulta);
		$A = 1;

		// Toma error.

		$error = mysqli_error($link);

		//Comprobacion y muestra.

		if (!empty($error)) {
	 		echo "owww there's an error-hoo...";
		}
		else {
			while ($fila=mysqli_fetch_array($consulta)) {
				echo "<div id = 'buddys'>";
				echo "<p>";
				echo "Buddy ".$A++;
				echo "<br> </br>";
				echo "Name: ".$fila["name"]." - ";
				echo "Age: ".$fila["age"]." - ";
				echo "Email: ".$fila["email"]." - ";
				echo "Cellphone: ".$fila["cellphone"];
				echo "<br> </br>";
				echo "<strong>HIS / HER COMMENT</strong>";
				echo "<br> </br>";
				echo "<center>";
				echo $fila["comment"];
				echo "</center>";
				echo "<br> </br>";
				echo "</p>";
				echo "</div>";
			}
		} 

		//Cerrar conexion.

		mysqli_close($link);
	?>     
    </div>
    <div id="POSITIONA">
      <img id="IMGA" src="1.gif" >
    </div>
  <div class= "Foot">
    <footer>
      <H4>Right's Reserved - Christian Ramirez. <a href="" title="Instagram"><img src="insta.png" width="20"></a><a href="" title="Facebook"><img src="face.png" width="20"></a><a href="https://www.twitter.com/" title="Twitter"><img src="twitter.png" width="20"></a></H4>
    </footer>
  </div>
  <audio src="persona.mp3" autoplay loop></audio>
</div>
</body>
</html>