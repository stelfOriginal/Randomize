<!-- PHP 7 -->

<?php

function generar_nombre_aleatorio(&$nombres, &$apellidos){
	$nombreAleatorio = $nombres[ mt_rand(0, count($nombres) -1) ];
	$apellidoAleatorio = $apellidos[ mt_rand(0, count($apellidos) -1) ];

	return "$nombreAleatorio - $apellidoAleatorio ";
}
?>

<!-- HTML 5 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!-- header -->
    <header>

    </header>
    <!-- section -->

    <section>
        <article></article>
    </section>
    

<?php


$nombres = ["jorge", "Julia", "Jose", "Mateo", "Jaume", "Petro", "Alejandro", ];
$apellidos = ["Fran","Adri","Lolo","Cristian","Jordi","Luis","David","Tony"];
 
$nombre = generar_nombre_aleatorio($nombres, $apellidos);
echo $nombre; // Salida de ejemplo -> pedro smith pérez
?>


    
    <!-- footer -->

    <footer>
    
    </footer>
</body>
</html>