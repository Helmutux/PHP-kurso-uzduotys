<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body {
        margin-left: 19%;
        margin-right: 19%;
        width: 60%;
        font-size: 24px;
        font-family: arial;
        display: inline-block;
    }

    a {
        text-decoration: none;
        color: white;
    }

    h3 {
        background: coral;
        margin: auto;
        margin-top: 0.5em;
        padding: 0.5em;
        text-align: center;
        border-radius: 5px;
    }

    @media (max-width: 400px) {
        body {
            margin-left: 5%;
            margin-right: 5%;
            width: 88%;

        }

        img {
            max-width: 300px;
        }
    </style>
    <title>Operacijos su asociatyviais masyvais</title>
</head>

<body>
    <?php
// Uzduotis:
// Pailiustruoti operacijas su masyvais naudojant asociatyvius masyvus:

echo "<a href=\"index.php\" title=\"Grįžti į pradinį\"><h3>OPERACIJOS SU ASOCIATYVIAIS MASYVAIS</h3></a>";
echo "<p><b>Asociatyvaus masyvo sukūrimas:</b></p>";
$array = array(
    "name"=>"John",
    "surname"=>"Smith",
    "age"=>"35",
    "gender"=>"male"
);
//parodau ekrane panaudota koda
echo ("\$array = array(
    \"name\"=>\"John\",
    \"surname\"=>\"Smith\",
    \"age\"=>\"35\",
    \"gender\"=\"male\");
    ");

echo ("<hr>");

echo "<p><b>Masyvo pasirinktinių elementų reikšmės (value) nustatymas pasitelkiant elementų raktažodžius:</b></p>";
echo ("print_r(\$array[\"name\"]);");//parodau ekrane panaudota koda
echo ("<br>");
print_r($array["name"]);
echo ("<br>");
echo ("print_r(\$array[\"surname\"]);");//parodau ekrane panaudota koda
echo ("<br>");
print_r($array["surname"]);
echo ("<br>");
echo ("print_r(\$array[\"gender\"]);");//parodau ekrane panaudota koda
echo ("<br>");
print_r($array["gender"]);
echo ("<hr>");

echo "<p><b>Masyvo pasirinkto elemento reikšmės (value) pakeitimas:</b></p>";
$array["surname"] = "Johnson";
echo ("\$array[\"surname\"] = \"Johnson\";");//parodau ekrane paanudota koda
echo "<p> Išvedu į ekraną pakeistą elemento reikšmę (value) pasitikrinimui:</p>";
echo ("print_r(\$array);");//parodau ekrane panaudota koda
echo ("<br>");
print_r($array);
echo ("<hr>");

echo "<p><b>Naujos elemento(key+value) įdėjimas į masyvo galą:</b></p>";
$array["city"] = "Chicago";
echo "\$array[\"city\"] = \"Chicago\";";//parodau ekrane panaudota koda
echo ("<br>");
echo "<p>Atsispausdinu masyvą iš naujo ir įsitikinu, kad naujas elementas pridėtas:</p>";
print_r($array);
echo ("<hr>");

echo "<p><b>Visų reikšmių pasiekimas / išvardinimas  naudojant ciklą  foreach() ir komanda print_r();</b></p>";
echo "<img src=\"img/foreach.jpg\" alt=\"for_ciklas\">";
//isvedu i ekrana panaudota koda
echo ("<br>");
foreach($array as $k => $v){
    print_r($k.'=>'.$v.'');
    echo "<br>";
}
echo ("<hr>");

echo "<p><b>Masyvo ilgio (narių  kiekio) nustatymas: </b></p>";
echo "count(\$array);";//isvedu i ekrana panaudota koda
echo ("<br>");
echo count($array);
echo ("<hr>");

echo "<p><b>Masyvo elemento (pasirenkame \"gender\") ištrynimas:</b></p>";
echo "unset(\$array[\"gender\"]);";//isvedu i ekrana panaudota koda
unset($array["gender"]);
echo "<p>Masyvo išvedimas į ekraną, pasitikrinant, kad elementas ištrintas:</p>";
print_r ($array);
echo ("<hr>");

echo "<p><b>Elemento key paieška masyve žinant reikšmę (value):</b></p>";
echo "echo \$key = array_search(\"Chicago\", \$array);";//isvedu i ekrana panaudota koda
echo ("<br>");
echo $key = array_search("Chicago", $array);
echo ("<hr>");

echo "<p><b>Masyvo rikiavimas:</b></p>"; 
echo "\$array = array(
    \"Petras\" => \"75\",
    \"Sauliukas\" => \"40\",
    \"Vytas\" => \"105\",
    \"Jonas\" => \"94\",
    \"Algis\" => \"110\",
    \"Kostas\"=>\"80\");";
$array = array(
    "Petras" => "75",
    "Sauliukas" => "40",
    "Vytas" => "105",
    "Jonas" => "94",
    "Algis" => "110",
    "Kostas"=>"80"
);
echo "<p>- nuo mažiausios value iki didžiausios neišsaugant key/index:</p>"; 
echo "sort(\$array);";//isvedu i ekrana panaudota koda
sort($array);
echo ("<br>");
print_r($array);


echo "<p>- nuo didžiausios value reik6m4s iki mažiausios neišsaugant key/index</p>"; 
echo "rsort(\$array);";//isvedu i ekrana panaudota koda
rsort($array);
echo ("<br>");
print_r($array);

$array = array(
    "Petras" => "75",
    "Sauliukas" => "40",
    "Vytas" => "105",
    "Jonas" => "94",
    "Algis" => "110",
    "Kostas"=>"80"
);
echo "<p>- nuo mažiausios value iki didžiausios išsaugant turėtą key(panaudotas pirminis nerūšiuotas masyvas):</p>"; 
echo "asort(\$array);";//isvedu i ekrana panaudota koda
asort($array);
echo ("<br>");
print_r($array);

echo "<p>-  nuo didžiausios value iki mažiausios išsaugant key:</p>"; 
echo "arsort(\$array);";//isvedu i ekrana panaudota koda
arsort($array);
echo ("<br>");
print_r($array);

echo "<p>- nuo mažiausio iki didžiausio pagal key:</p>"; 
echo "ksort(\$array);";//isvedu i ekrana panaudota koda
ksort($array);
echo ("<br>");
print_r($array);

echo "<p>-  nuo didžiausio iki mažiausio pagal key/index</p>"; 
echo "krsort(\$array);";//isvedu i ekrana panaudota koda
krsort($array);
echo ("<br>");
print_r($array);
echo ("<hr>");

// echo "<p><b>Masyvo filtravimas:</b></p>";
// $array = [12, 3, 7, 85, 24, 100, 51, 53, 8];
// echo "Duotas masyvas: <br> \$array = [12, 3, 7, 85, 24, 100, 51, 53, 8];";
// echo "<br>";
// echo "Kodo pagalba išfiltruoju lyginius ir nelyginius elementus:";
// echo "<br>";
// echo "<img src=\"img/array_search.jpg\" alt=\"array_search\">";//isvedu i ekrana panaudota koda
// echo "<br>";
// function odd($var)
// {    // ar duotoji reiksme nelygine
//     return $var & 1;
// }
// function even($var)
// {    // ar duotoji reiksme lygine
//     return !($var & 1);
// }
// echo "Nelyginiai masyvo elementai:\n";
// echo "<br>";
// print_r(array_filter($array, "odd"));
// echo "<br>";
// echo "Lyginiai masyvo elementai:\n";
// echo "<br>";
// print_r(array_filter($array, "even"));
// echo ("<hr>");

// echo "<p><b>Reikšmės įdėjimas į vidurį ar pradžią:</b></p>"; 
// $array = ["red", "green", "yellow", "blue", "black"];
// echo "Duotas masyvas: <br> \$array =  [\"red\", \"green\", \"yellow\", \"blue\", \"black\"];";
// echo "<br>";
// echo "Pakeičiame 2 masyvo elementą į \"silver\":";
// echo "<br>";
// echo "array_splice(\$array, 1, 1, \"silver\");";//isvedu i ekrana panaudota koda
// array_splice($array, 1, 1, "silver");
// echo "<br>";
// echo "Išvedame pakeistą masyvą pasitikrinimui:";
// echo "<br>";
// print_r($array);
// echo ("<hr>");

// echo "<p><b>Masyvo elementų reikšmių suma:</b><p>"; 
// $array = [12, 8, 17, 13, 24, 6, 20];
// echo "Duotas masyvas: <br> \$array = [12, 8, 17, 13, 24, 6, 20];";
// echo "<br>";
// echo "Naudojame kodą: <br>array_sum(\$array);";//isvedu i ekrana panaudota koda
// echo "<br>";
// echo "Masyvo elementų suma yra lygi: ";
// echo array_sum($array);
// echo ("<hr>");

echo "<p><b>Masyvo elementų reikšmių minimumas ir maksimumas:</b><p>"; 
$array = array(
    "John"=>"65",
    "Harold"=>"47",
    "Arnold"=>"90",
    "Carl"=>"72",
    "Jack"=>"18"
);
//parodau ekrane panaudota koda
echo ("\$array = array(
    \"John\"=>\"65\",
    \"Harold\"=>\"47\",
    \"Arnold\"=>\"90\",
    \"Carl\"=>\"72\",
    \"Jack\"=>\"18\"
);");
echo "<br>";
echo "Surandame elementą (value) su mažiausia reikšme";
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

?>
</body>

</html>