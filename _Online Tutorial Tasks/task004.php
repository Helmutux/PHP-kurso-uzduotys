<?php
//sukurti kintamaji 'a' su bet kokia reiksme. sukurti kintamaji 'b', kurios reiksme - griezta nuoroda i 'a'
$a = 8;
$b = & $a; //simbolis reiskia griezta sarysi. keiciant b pasikeis a reiksme
//pakeisti 'b' reiksme ir isvesti a ir b reiksmes echo pagalba. paaiskinkite sau rezultata
$b = 15;
echo '<br>';
echo "\$a = $a";
echo '<br>';
echo  "\$b = $b";
echo '<br>';
//sukurti kintamaji 'c'. Sukurti kintamaji 'd' ir priskirti jam 'c' reiksme per simboline nuoroda
$c = 100;
$d = 'c';
//isvesti 'd' echo pagalba naudojant simboline nuoroda i 'c'
echo "d="; echo $$d;
?>
