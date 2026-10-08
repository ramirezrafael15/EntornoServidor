<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3</title>
</head>
<body>
<?php
$notas = ["Juan" => 10, "Aitana" => 5, "Lucas" => 3, "Lucía" => 9, "Ana" => 8, "Daniel" => 6, "Nadia" => 0];

echo "<table border = 1>";
    echo "<tr>";
    echo "<td>Nombre</td>";
    echo "<td>Nota</td>";
    echo "<td>Calificación</td>";
    echo "</tr>";

    foreach($notas as $nombre => $nota) {
        if($nota < 5) {
            $texto = "Suspenso";
        } elseif ($nota == 5){
            $texto = "Aprobado";
        } elseif ($nota == 6){
            $texto = "Bien";
        }elseif ($nota == 7 || $nota == 8){
            $texto = "Notable";
        }elseif ($nota == 9){
            $texto = "Sobresaliente";
        }elseif ($nota == 10){
            $texto = "Matrícula de honor";
        }

        echo "<tr>";
        echo "<td>" . $nombre . "</td>";
        echo "<td>". $nota . "</td>"; 
        echo "<td>" . $texto . "</td>";
        echo "</tr>";
    }
echo "</table>";
?>
</body>
</html>