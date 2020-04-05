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
        font-size: 20px;
        font-family: arial;
        display: inline-block;
    }

    a {
        text-decoration: none;
        color: white;
    }

    h3 {
        background: green;
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
    <title>Užduotis</title>
</head>

<body>

    <a href="index.php" title="Grįžti į pradinį">
        <h3>Užduotis</h3>
    </a>
    <p><b>Sukurkite asociatyvūjį masyvą, kuris reprezentuotų žmogų ir jo svorį ( “vardas” => “svoris”) ir:</b></p>
    <ol>
        <li>Raskite lengviausią žmogų (minimumas);</li>
        <li>Sunkiausią (maximumas);</li>
        <li>Atspausdinkite surikiuotus žmones (pagal svorį);</li>
        <li>Susumuokite visų žmonių svorį ir nustatykite ar jie gali kilti liftu (500kg ar kita riba);</li>
    </ol>
    <hr>
    <?php
    $people = array(
        "Petras" => "75",
        "Sauliukas" => "40",
        "Vytas" => "105",
        "Jonas" => "94",
        "Algis" => "110",
        "Kostas"=>"80"
    );
    print_r($people);
    echo "<br>";
    echo "<br>";
    echo "1. Lengviausias iš žmonių: ";
    echo $key = array_search(min($people), $people);
    echo "<br>";
    echo "<br>";
    echo "2. Sunkiausias iš žmonių: ";
    echo $key = array_search(max($people), $people);
    echo "<br>";
    echo "<br>";
    echo "3. Eiliškumas pagal svorį: ";
    echo "<br>";
    asort($people);
    foreach ($people as $key => $val) {
        echo "$key = $val";
        echo "<br>";
    }
    echo "<br>";
    echo "<br>";
    
    echo "4. Patikrinti ar jie gali kilti liftu(kelia 500kg): ";
    echo "<br>";
    if(array_sum($people) <= 500){
        echo "Visų žmonių svoris yra ";
        echo array_sum($people);
        echo ", tad jie gali kilti liftu";
    }
    else
    {
        echo "Bendras svoris per didelis, liftas nepritaikytas visų kėlimui iš karto.";
    }
  
    
    ?>
</body>

</html>