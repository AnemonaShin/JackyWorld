<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=divice-width,initial-scale=0">
	<link rel="shortcut icon" href="ico.png">
	<link rel="stylesheet" type="text/css" href="stylesA.css">
	<title>Our Jacky Products!</title>
</head>
<body>
	<div class="wrapp">
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
		<div class="products">
			<?php
        
          		if ($gestor= opendir('images')){
              
             		$i=0;
             		while(false !==($archivo = readdir($gestor))){
                
                 		if($archivo!="."&& $archivo!=".."){
                     		if($i==4){
                         		$i=0;          		
                     	}
                  $i++;
                  echo "<div id='IMAGES'>";
                  echo "<tr>";
                  echo "<a href=images/$archivo><img src=images/$archivo></a>";
                  echo "</tr>";
                  echo "</div>";
                }
            }
             
             closedir($gestor); 
          }
          
                         
          ?>
		</div>	
		<div id="POSITIONA">
			<img src="1.gif">
		</div>
	</div>
	<div class= "Foot">
		<footer>
			<H4>Right's Reserved - Christian Ramirez. <a href="" title="Instagram"><img src="insta.png" width="20"></a><a href="" title="Facebook"><img src="face.png" width="20"></a><a href="https://www.twitter.com/" title="Twitter"><img src="twitter.png" width="20"></a></H4>
		</footer>
	</div>
	<audio src="persona.mp3" autoplay loop></audio>
</body>
</html>