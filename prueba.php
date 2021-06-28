<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
<?php
     $alumnos = [];
            $alumnos[]= "Nombre: Carolina";
            $alumnos[]= "Apellido: Andrade";
            $alumnos[]= "Edad: 48";
            $alumnos[]= "Hobbie: Leer";
            $alumnos[]= "Editor preferido: VSC";
            $alumnos[]= "Sistema Operativo: Windows";

     foreach ($alumnos as $uno_por_uno) {
        echo $uno_por_uno. "</br>"; 

     }
     ?>
    </h1>

</body>
</html>