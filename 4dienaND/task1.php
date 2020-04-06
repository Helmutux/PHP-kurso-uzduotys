<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body {
        font-family: courier;

    }

    a {
        display: inline-block;
        margin: 0.5em 0 0.5em 1em;
        text-decoration: none;
        border: 1px solid coral;
        font-size: 18px;
        color: coral;
        padding: 0.5em;
        border-radius: 5px;
    }

    .container {
        margin-left: 25%;
        margin-right: 25%;
    }

    .task {
        font-size: 20px;
    }

    @media (max-width: 400px) {
        .container {
            margin-left: 5%;
            margin-right: 5%;
        }

        img {
            max-width: 300px;
        }
    }
    </style>
    <title>Kableliai atvaizduojant masyvo elementus</title>
</head>

<body>
    <a href="index.php" id="top"><b>Sugrįžti į pradinį</b></a>
    <div class="container">
        <h1>1 užduotis</h1>
        <h2>Susikurti 2 masyvus: indeksinį ir asociatyvų.
            <br>
            Išvardinti (išvesti į ekraną) visus masyvo narius, atskiriant
            juos kableliais (pvz: 1, 2, 3) taip, kad nebūtų
            nereikalingų kablelių pradžioje (pvz: , 1, 2, 3) bei pabaigoje (pvz: 1, 2, 3, )
        </h2>
        <hr>
        <div class="task">
            <?php
            //susikuriu indeksini masyva
            $array1 = array(125, 589, 524, 157, 95, 6, 45, 830, 48, 90, 100, 250);
            echo "<b>Sukurtas indeksinis masyvas:</b>";
            echo "<br>";
            
            //isvedu masyvo sukurimo koda i ekrana
            echo "\$array1 = array(125, 589, 524, 157, 95, 6, 45, 830, 48, 90, 100, 250);";
            echo "<br>";
            echo "<br>";
            echo "<b>Spausdinu masyvo elementus pagal užduoties sąlygą:</b>";
            echo "<br>";

            for($i=0; $i<count($array1); $i++){
                if($i<(count($array1))-1){
                print_r($array1[$i]);
                print(", ");
                } 
                else 
                {
                print_r($array1[$i]);
                print(".");
                }
            }
            echo "<br>";
            echo "<br>";
            //parodau vartotojui ekrane panaodota koda
            echo "<b>Panaudotas kodas:</b>";
            echo "<br>";
            echo "<img src=\"img/index_array_print.jpg\" alt=\"Indeksinio masyvo išvedimo kodas\">";
            echo "<hr>";

            //susikuriu asociatyvu masyva
            $car = array(
            "tipas"=>"lengvasis",
            "gamintojas"=>"ford",
            "modelis"=>"mondeo",
            "kėbulas"=>"sedanas",
            "variklis"=>"EcoBoost",
            "spalva"=>"raudona",
            "pavarų_dėžė"=>"automatinė",
            "pagaminta"=>"2012"
            );
            echo "<b>Sukurtas asociatyvus masyvas:</b>";
            echo "<br>";
            //isvedu masyvo sukurimo koda i ekrana
            echo <<<EOT
                \$car = array(<br>
                "tipas"=>"lengvasis",<br>
                "gamintojas"=>"ford",<br>
                "modelis"=>"mondeo",<br>
                "kėbulas"=>"sedanas",<br>
                "variklis"=>"EcoBoost",<br>
                "spalva"=>"raudona",<br>
                "pavarų_dėžė"=>"automatinė",<br>
                "pagaminta"=>"2012"<br>
                );"
                EOT;
            echo "<br>";
            echo "<br>";
            echo "<b>Spausdinu masyvo elementus pagal užduoties sąlygą:</b>";
            echo "<br>";
            $i=0;
            foreach($car as $k => $v){
                if($i<count($car)-1){
                print_r($k.'=>'.$v.', <br>');
                }
                else
                {
                print_r($k.'=>'.$v.'. <br>');
                }
                $i++;
            }
            //parodau vartotojui ekrane panaodota koda
            echo "<b>Panaudotas kodas:</b>";
            echo "<br>";
            echo "<img src=\"img/ass_array_print.jpg\" alt=\"Asociatyvinio masyvo išvedimo kodas\">";
            echo "<hr>";
                        
        ?>
        <a href="#top"><b>Į puslapio viršų</b></a>
        </div>

    </div>


</body>

</html>