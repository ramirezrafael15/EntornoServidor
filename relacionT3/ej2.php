<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {border-collapse: collapse;}
        th, td { padding: 12px 10px; text-align: left; color: white; }        
        th {background-color: black;}
        tr:nth-child(even) {
            background-color: #77933c;
            color: white;
        }
        tr:nth-child(odd) {
            background-color: #9bbb59;
            color: white;
        }
    </style>
</head>
<body>
    <?php
    $array = [3, 8, 7, -6];

    echo "<table>";
        echo "<tr>";
        echo "<th>Número</th>";
        echo "<th>Cuadrado</th>";
        echo "<th>Cubo</th>";
        echo "</tr>";

        foreach($array as $numero){
            echo "<tr>";
            echo "<td>" . $numero . "</td>";
            echo "<td>" . $numero * $numero . "</td>";
            echo "<td>" . $numero * $numero * $numero . "</td>";
            echo "</tr>";
        }
    echo "</table>";
?>
</body>
</html>