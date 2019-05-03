<?php
$host="localhost"; // ubicación de la base de datos
$user="root";//usuario por defecto de la BD
$pass="";//pwd de la BD
$dbname="sitio"; //Nombre de la BD

//Conexión a la BD
$link= mysqli_connect($host,$user,$pass) 
       or die("No se puede conectar a la BD");
//Seleccionar la BD
mysqli_select_db($link,"$dbname")
 or die("No se puede seleccionar la BD");    	   
