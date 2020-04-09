<!-- 
1. Sukurti 2 kintamuosius: viena - sveiko skaiciaus, kita - supriesaga (double, float).

2. Isveskite rezultata su sudeties, atimties, daugybos, dalybos i ekrana.

3. Istraukite kubine sakni ir sveiko skaiciaus ir pateikite rezultata.

4. Padarykite inkrementacija kintamojo su sveiku skaiciumi ir pateikite rezultata.

5. Padarykite dekrementacija kintamojo su sveiku skaiciumi ir pateikite rezultata.
-->
<?php
    $sveikas_skaicius = 100;
    $float_skaicius = 3.4528;
    $suma  = $sveikas_skaicius + $float_skaicius;
    $atimtis = $sveikas_skaicius - $float_skaicius;
    $daugyba = $sveikas_skaicius * $float_skaicius;
    $dalyba = $sveikas_skaicius / $float_skaicius;
    $pakelimas_skaiciumi = $sveikas_skaicius ** $float_skaicius;//nauja! nezinota!
    $inkrementas = ++$sveikas_skaicius;//nezinota! inkrementacija vadinama skaiciaus padidinimas 1-tu. Tai ka iprastai darome cikluose
    $dekrementas = --$sveikas_skaicius;//dekrementacija - sumazinimas vienetu
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matematines operacijos</title>
</head>
<body>
<?php
    echo '<hr>';
    echo ('Sveikas skaicius = ' . $sveikas_skaicius.';<br>');
    echo ('Nesveikas skaicius = '.$float_skaicius.';<br>');
    echo ('Skaiciu suma = '.$suma.';<br>');
    echo ('Skaiciu atimtis = '.$atimtis.';<br>');
    echo ('Skaiciu daugyba = '.$daugyba.';<br>');
    echo ('Skaiciu dalyba = '.$dalyba.';<br>');
    echo('Sveiko skaiciaus pakelimas 3-iuoju laipsniu = '.($sveikas_skaicius**3).';<br>');
    echo ('Kubine saknis is sveiko skaiciaus = '.($sveikas_skaicius**(1/3)).';<br>');//nauja! nezinota!
    echo('Inkrementas sveiko skaiciaus = '.$inkrementas.';<br>');
    echo('Dekrementas sveiko skaiciaus = '.$dekrementas.';<br>');
?>
</body>
</html>