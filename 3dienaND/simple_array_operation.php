
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>body{
        margin-left: 19%;
        margin-right:19%;
        width: 60%;
        font-size: 24px;
        font-family: arial;
        display: inline-block;
        }
        h3{
            background: blue;
            color: white;
            margin: auto;
            margin-top: 0.5em;
            padding: 0.5em;
            text-align: center;
            border-radius: 5px;
        }
        @media (max-width: 400px){
            body{
            margin-left: 5%;
            margin-right:5%;
            width: 88%;

            }
            img{
                max-width: 300px;
            }
        </style>
    <title>Operacijos su masyvais</title>
</head>
<body>
<?php
// Uzduotis:
// Pailiustruoti operacijas su masyvais naudojant vienmati masyva:

echo "<h3>OPERACIJOS SU VIENMAČIAIS MASYVAIS</h3>";
echo "<p><b>Vienmačio masyvo sukūrimas:</b></p>";
$array = [3, 12, 7, 2, 19];
echo ("\$array = [3, 12, 7, 2, 19];");//parodau ekrane panaudota koda
echo ("<hr>");

echo "<p><b>Masyvo pasirinkto (trečiojo) elemento reikšmės nustatymas:</b></p>";
echo ("print_r(\$array[2]);");//parodau ekrane panaudota koda
echo ("<br>");
print_r($array[2]);
echo ("<hr>");

echo "<p><b>Masyvo pasirinkto (trečiojo) elemento reikšmės pakeitimas:</b></p>";
$array[2] = 70;
echo ("\$array[2] = 70;");//parodau ekrane paanudota koda
echo "<p> Išvedu į ekraną pakeistą (trečiojo) elemento reikšmę (pasitikrinimui):</p>";
echo ("print_r(\$array[2]);");//parodau ekrane panaudota koda
echo ("<br>");
print_r($array[2]);
echo ("<hr>");

echo "<p><b>Naujos elemento įdėjimas į masyvo galą:</b></p>";
array_push($array, 125);
echo "array_push(\$array, 125);";//parodau ekrane panaudota koda
echo ("<br>");
echo "<p>Atsispausdinu masyvą iš naujo ir įsitikinu, kad naujas elementas pridėtas:</p>";
print_r($array);
echo ("<hr>");

echo "<p><b>Visų reikšmių pasiekimas / išvardinimas  naudojant ciklą  for() ir komandas print() }, print_r();</b></p>";
echo "<img src=\"img/for.jpg\" alt=\"for_ciklas\">";
//isvedu i ekrana panaudota koda
echo ("<br>");
for($i=0; $i<count($array); $i++){
    print_r($array[$i]);
    echo "<br>";
}
echo ("<hr>");

echo "<p><b>Narių kiekis masyve (jo ilgis): </b></p>";
echo "count(\$array);";//isvedu i ekrana panaudota koda
echo ("<br>");
echo count($array);
echo ("<hr>");

echo "<p><b>Masyvo elemento (pasirenkame 3-iąjį) ištrynimas:</b></p>";
echo "array_splice(\$array, 2, 1);";//isvedu i ekrana panaudota koda
array_splice($array, 2, 1);
echo "<p>Masyvo išvedimas į ekraną, pasitikrinant, kad elementas ištrintas:</p>";
print_r ($array);
echo ("<hr>");

echo "<p><b>Elemento paieška masyve (ieškosime 125):</b></p>";
echo "echo array_search(125, \$array, true);";//isvedu i ekrana panaudota koda
echo ("<br>");
echo array_search(125, $array, true);
echo ("<hr>");

echo "<p><b>Masyvo rikiavimas (po kiekvieno veiksmo grąžinama pirminis eiliškumas):</b></p>"; 
echo "<p>Masyvas prieš rikiavimą:</p>"; 
echo "\$array = [3, 12, 2, 19, 125];";

echo "<p>- nuo mažiausio iki didžiausio neišsaugant key/index</p>"; 
echo "sort(\$array);";//isvedu i ekrana panaudota koda
sort($array);
echo ("<br>");
print_r($array);
$array = [3, 12, 2, 19, 125];

echo "<p>- nuo didžiausio iki mažiausio neišsaugant key/index</p>"; 
echo "rsort(\$array);";//isvedu i ekrana panaudota koda
rsort($array);
echo ("<br>");
print_r($array);
$array = [3, 12, 2, 19, 125];

echo "<p>- nuo mažiausio iki didžiausio išsaugant turėtą key/index</p>"; 
echo "asort(\$array);";//isvedu i ekrana panaudota koda
asort($array);
echo ("<br>");
print_r($array);

echo "<p>- nuo mažiausio iki didžiausio pagal key/index</p>"; 
echo "ksort(\$array);";//isvedu i ekrana panaudota koda
ksort($array);
echo ("<br>");
print_r($array);

echo "<p>-  nuo didžiausio iki mažiausio išsaugant key/index</p>"; 
echo "arsort(\$array);";//isvedu i ekrana panaudota koda
arsort($array);
echo ("<br>");
print_r($array);

echo "<p>-  nuo didžiausio iki mažiausio pagal key/index</p>"; 
echo "krsort(\$array);";//isvedu i ekrana panaudota koda
krsort($array);
echo ("<br>");
print_r($array);
echo ("<hr>");

echo "<p><b>Masyvo filtravimas:</b></p>";
$array = [12, 3, 7, 85, 24, 100, 51, 53, 8];
echo "Duotas masyvas: <br> \$array = [12, 3, 7, 85, 24, 100, 51, 53, 8];";
echo "<br>";
echo "Kodo pagalba išfiltruoju lyginius ir nelyginius elementus:";
echo "<br>";
echo "<img src=\"img/array_search.jpg\" alt=\"array_search\">";//isvedu i ekrana panaudota koda
echo "<br>";
function odd($var)
{    // ar duotoji reiksme nelygine
    return $var & 1;
}
function even($var)
{    // ar duotoji reiksme lygine
    return !($var & 1);
}
echo "Nelyginiai masyvo elementai:\n";
echo "<br>";
print_r(array_filter($array, "odd"));
echo "<br>";
echo "Lyginiai masyvo elementai:\n";
echo "<br>";
print_r(array_filter($array, "even"));
echo ("<hr>");

echo "<p><b>Reikšmės įdėjimas į vidurį ar pradžią:</b></p>"; 
$array = ["red", "green", "yellow", "blue", "black"];
echo "Duotas masyvas: <br> \$array =  [\"red\", \"green\", \"yellow\", \"blue\", \"black\"];";
echo "<br>";
echo "Pakeičiame 2 masyvo elementą į \"silver\":";
echo "<br>";
echo "array_splice(\$array, 1, 1, \"silver\");";//isvedu i ekrana panaudota koda
array_splice($array, 1, 1, "silver");
echo "<br>";
echo "Išvedame pakeistą masyvą pasitikrinimui:";
echo "<br>";
print_r($array);
echo ("<hr>");

echo "<p><b>Masyvo elementų reikšmių suma:</b><p>"; 
$array = [12, 8, 17, 13, 24, 6, 20];
echo "Duotas masyvas: <br> \$array = [12, 8, 17, 13, 24, 6, 20];";
echo "<br>";
echo "Naudojame kodą: <br>array_sum(\$array);";//isvedu i ekrana panaudota koda
echo "<br>";
echo "Masyvo elementų suma yra lygi: ";
echo array_sum($array);
echo ("<hr>");

echo "<p><b>Masyvo elementų reikšmių minimumas ir maksimumas:</b><p>"; 
$array = [121, 52, 17, 9, 24, 6, 201, 3, 425, 54];
echo "Duotas masyvas: <br> \$array = [121, 52, 17, 9, 24, 6, 201, 3, 425, 54];";
echo "<br>";
echo "Surandame elementą su mažiausia reikšme";
echo "<br>";
echo "Naudojame kodą: <br>min(\$array);";//isvedu i ekrana panaudota koda
echo "<br>";
echo min($array); 
echo "<br>";
echo "Surandame elementą su didžiausia reikšme";
echo "<br>";
echo "Naudojame kodą: <br>max(\$array);";//isvedu i ekrana panaudota koda
echo "<br>";
echo max($array);


//  - Asociatyviu masyvu
//  - *Daugiamačiu masyvu
?>
</body>
</html>

