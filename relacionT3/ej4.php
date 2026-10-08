<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario</title>
    <style>
        table { border-collapse: collapse; margin-bottom: 20px; font-family: Arial, sans-serif; }
        th, td { border: 1px solid red; padding: 6px 12px; text-align: center; }
        th { background-color: #e6b8b7; }
    </style>
</head>
<body>
   <?php
    $meses = ["Enero" => 31, "Febrero" => 28, "Marzo" => 31, "Abril" => 30, "Mayo" => 31, "Junio" => 30, "Julio" => 31, "Agosto" => 31, "Septiembre" => 30, "Octubre" => 31, "Noviembre" => 30, "Diciembre" => 31]; 
    $semana = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"];
    $inicio = 0;

    foreach($meses as $mes => $dias){
        echo "<table>";
        echo "<tr><th colspan='7'>" . $mes . "</th></tr>";

        echo "<tr>";
        foreach ($semana as $dia){
            echo "<th>" . $dia . "</th>";
        }
        echo "</tr>";

        echo "<tr>";
        for ($i = 0; $i < $inicio; $i++){
            echo "<td>";
            echo "</td>";
        }

        $columna = $inicio;
        for ($d = 1; $d<=$dias; $d++){
            echo "<td>" . $d . "</td>";
            $columna++;
            if($columna == 7 && $d < $dias){
                echo "</tr>";
                echo "<tr>";
                $columna = 0;
            }
        }
        echo "</tr>";
        echo "</table>";

    $inicio = ($inicio + $dias) % 7;
    }
    ?>
</body>
</html>