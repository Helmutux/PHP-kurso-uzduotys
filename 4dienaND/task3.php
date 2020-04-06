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
        border: 1px solid green;
        font-size: 18px;
        color: green;
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
    table{
        border-collapse: collapse;
    }
    th, td{
        border: 1px solid black;
        text-align: center;
        font-size: 22px;
        width: 60px;
        height: 60px;

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
        <h1>3 užduotis</h1>
        <h2>Sukurkti web puslapį, kuriame būtų sugeneruojama daugybos lentelė.
            <br>
            Pagalvokite, kaip ją pateikti gražiai vartotojui, kad būtų patogu naudotis.
            <br>
            Padarykite formą, kurioje vartotojas gali įrašyti skaičių ir PHP sugeneruoja visą daugybos lentelę iki tol
            kol pasieksite ribą, kuri bus skaičius padaugintas iš savęs (pvz: 15 - generuojame lentelę iki 15 x 15).
        </h2>
        <hr>
        <div class="task">
            <?php
            //susikuriu tuscia masyva (naudosiu 1 daugybos lenteles eilutei uzpildyti)
            $rows = array();

            //kvieciu lenteles piesimo tag'a
            echo "<table>";

            //paleidziu cikla lentelei uzpildyti
            for($j=0; $j<10; $j++){
                //pildau pirmaja eilute. tam susikurta masyva uzpildau skaiciais nuo 0 iki 9 ir ipinu tr, td tag'us 
                if($j==0){//salyga, kad uzpildytu tik pirmaja eilute toliau pateikto kodo deka
                echo "<tr>";//atidarantis tr tag'as
                for($i=0; $i<10; $i++){
                    array_push($rows,$i);//uzpildau susikurta masyva reiksmemis
                    echo("<td>".$rows[$i]."</td>");//kiekviena susikurta reiksme ireminu td tag'uose
                }
                echo "</tr>";//uzdarau sukurta lenteles eilute tr tag'u
                }
                else//antroji ir sekancios eilutes bus kitokios nei pirmoji, tad pildysim kitaip
                {
                echo "<tr>";//atidarau nauja eilute su tr tag'u
                echo "<td>$j</td>";
                echo "</tr>";//uzdarau eilute su tr tag'u
                }
        
            }
            echo "</tr></table>";
            
           
        ?>
            <a href="#top"><b>Į puslapio viršų</b></a>
        </div>

    </div>


</body>

</html>