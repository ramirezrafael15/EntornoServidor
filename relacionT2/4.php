<?php
$nombre = "Sira";
$familia = "Ramírez";
$raza = "Mastín";
$color = "Beige";
$peso = 30;
$altura = 50;
$edad = 13;

$Posicion ['nombre'] = $nombre;
$Posicion ['familia'] = $familia;
$Posicion ['raza'] = $raza;
$Posicion ['color'] = $color;
$Posicion ['peso'] = $peso;
$Posicion ['altura'] = $altura;
$Posicion ['edad'] = $edad;
?>
<CENTER>
<TABLE BORDER = "1" CELLPADDING = "2">
    <TR ALING = "center" BGCOLOR = "yellow">
        <TD></TD>
        <TD>Nombre</TD> <TD>Familia</TD> <TD>Raza</TD>
        <TD>Color</TD> <TD>Peso</TD> <TD>Altura</TD>
        <TD>Edad</TD>
    </TR>
    <TR ALING = "center">
        <TD BGCOLOR = "yellow">Matriz 1</TD>
        <TD> <?php echo $Posicion['nombre'] ?> </TD>
        <TD> <?php echo $Posicion['familia'] ?> </TD>
        <TD> <?php echo $Posicion['raza'] ?> </TD>
        <TD> <?php echo $Posicion['color'] ?> </TD>
        <TD> <?php echo $Posicion['peso'] ?> </TD>
        <TD> <?php echo $Posicion['altura'] ?> </TD>
        <TD> <?php echo $Posicion['edad'] ?> </TD>
    </TR>
</TABLE></CENTER>

