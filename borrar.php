<html lang=en>
<head>
  <link rel="stylesheet" type="text/css" href="stylesC.css">
  <link rel="shortcut icon" href="ico.png">
  <meta charset="utf-8">
  <meta  name="viewport" content="width=device-width, initial-scale=1">
  <title>Erase a jacky :C</title>
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
			//importar el archivo de conexión
			include("conexion.php");

			$name=(string)$_POST["Name"];
			$borrar = "delete  from contacto where name='$name'";

			//Ejecución de la instrucción
			$consulta= mysqli_query($link,$borrar);

			//Función para tomar un error 
			$error=mysqli_error($link);

			if(!empty($error))
				echo "owww there's an error-hoo...";
			else
				echo "The data of a buddy was erased succesfull";
			//Cerrar la conexión
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
 

