<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplicaciones</title>
    <style>
        table { border-collapse: collapse; }
        td {
            border: 1px solid red;
            padding: 4px 40px;
        }
        td:first-child { font-weight: bold; }
        tr:nth-child(odd) { background-color: #f2dcdb; }
        tr:nth-child(even) { background-color: #e6b8b7; }
    </style>
</head>
<body>
    <?php
    for($j = 1; $j <= 10; $j++) {
        echo "<table>";
        for($i = 1; $i <=10; $i++){
            echo "<tr>";
            echo "<td>" . $j . "x" . $i . "</td>";
            echo "<td>" . ($j * $i) . "</td>";
            echo "</tr>"; 
            }
            echo "</table>";
        }
    ?>
</body>
</html>