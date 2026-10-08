<?php
$x = 5;
$y = 6;
$z = 9;

$Posicion [0] = $x;
$Posicion [1] = $y;
$Posicion [2] = $z;
$Posicion [3] = $x+$y;
$Posicion [4] = $y*$z;
$Posicion [5] = $x/$z;
$Posicion [6] = $x+$y+$z;
$Posicion [7] = ($y+$z)/$x;
?>

<table Border="1">


<CENTER>
<TABLE BORDER = "1" CELLPADDING = "2">
    <TR>
        <TD>Posicion 0:</TD>
        <TD> <?php echo $Posicion[0] ?> </TD>
    </TR>
    <TR>
        <TD>Posicion 1:</TD>
        <TD> <?php echo $Posicion[1] ?> </TD>
    </TR>
    <TR>
        <TD>Posicion 2:</TD>
        <TD> <?php echo $Posicion[2] ?> </TD>
    </TR>
    <TR>
        <TD>Posicion 3:</TD>
        <TD> <?php echo $Posicion[3] ?> </TD>
    </TR>
    <TR>
        <TD>Posicion 4:</TD>
        <TD> <?php echo $Posicion[4] ?> </TD>
    </TR>
    <TR>
        <TD>Posicion 5:</TD>
        <TD> <?php echo $Posicion[5] ?> </TD>
    </TR>
    <TR>
        <TD>Posicion 6:</TD>
        <TD> <?php echo $Posicion[6] ?> </TD>
    </TR>
    <TR>
        <TD>Posicion 7:</TD>
        <TD> <?php echo $Posicion[7] ?> </TD>
    </TR>
</TABLE>
</CENTER>

