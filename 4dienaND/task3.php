<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body {
        font-family: courier;

    }

    a, input {
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

    table {
        border-collapse: collapse;
        margin: auto;
    }

    th,
    td {
        border: 2px solid darkred;
        text-align: center;
        font-size: 22px;
        width: 60px;
        height: 60px;
    }
    .red{
        background: brown;
        color: white;
        font-size: 28px;
        font-weight: bold;
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
    <title>Daugybos lentelė</title>
</head>

<body>
    <a href="index.php" id="top"><b>Sugrįžti į pradinį</b></a>
    <div class="container">
        <h1>3 užduotis</h1>
        <h2>Sukurti web puslapį, kuriame būtų sugeneruojama daugybos lentelė.
            <br>
            Pagalvokite, kaip ją pateikti gražiai vartotojui, kad būtų patogu naudotis.
            <br>
            Padarykite formą, kurioje vartotojas gali įrašyti skaičių ir PHP sugeneruoja visą daugybos lentelę iki tol
            kol pasieksite ribą, kuri bus skaičius padaugintas iš savęs (pvz: 15 - generuojame lentelę iki 15 x 15).
        </h2>
        <hr>
        <div class="task">
            <?php
            echo "<h2>Dinamiškai sugeneruota daugybos lentelė:</h2>";
            //susikuriu tuscia masyva (naudosiu 1 daugybos lenteles eilutei uzpildyti)
            $rows = array();

            //susikuriu kintamaji, nurodanti is kiek skaiciu pagal nutylejima (jei nenurodysime kitaip) generuojame daugybos lentele.
            if ($_SERVER["REQUEST_METHOD"] == "POST")//is karto apsirasome, kad reiksme galime gauti is uzklausos
            $keynumber = $_POST['number'];
            else
            $keynumber = 10;//jei is uzklausos reiksmes negavome ()nes nepildeme/nesiunteme), nustatome reiksme pagala nutylejima

            //kvieciu lenteles piesimo tag'a
            echo "<table>";
            
            //paleidziu cikla lentelei uzpildyti
            for($j=0; $j<=$keynumber; $j++){
                //pildau pirmaja eilute. tam susikurta masyva uzpildau skaiciais nuo 0 iki 9 ir ipinu tr, td tag'us 
                if($j==0){//salyga, kad uzpildytu tik pirmaja eilute toliau pateikto kodo deka
                echo "<tr>";//atidarantis tr tag'as
                for($i=0; $i<=$keynumber; $i++){
                    array_push($rows,$i);//uzpildau susikurta masyva reiksmemis
                    echo("<td class=\"red\">".$rows[$i]."</td>");//kiekviena susikurta reiksme ireminu td tag'uose
                }
                echo "</tr>";//uzdarau sukurta lenteles eilute tr tag'u
                }
                else//antroji ir sekancios eilutes bus kitokios nei pirmoji, tad pildysim kitaip
                {
                echo "<tr>";//atidarau nauja eilute su tr tag'u
                echo "<td class=\"red\">$j</td>";//kiekviena eilute pradedu j indeksu, kuris kas cikla dideja, taip gaunu stulpeli lenteles kaireje
                //paleidziu cikla lentelei uzpildyti
                for($i=1; $i<=$keynumber; $i++){
                    $tmp=$i*$j;//skaiciuoju sandauga i ir j indeksu (i - eilute lenteles virsuje, j - stulpelis kaireje)
                    echo ("<td>".$tmp."</td>");//iterpiu gauta reiksme i td tag'us ir taip pildau lntele
                }
                echo "</tr>";//uzdarau eilute su tr tag'u
                }
        
            }
            echo "</tr></table>";//uzdarau lentele table tag'u. Daugybos lentele suformuota
            echo "<br>";
            echo "<hr>";
        ?>
        </div>
        <!-- apsirasome uzklauso forma naudodami html -->
        <div class="task">
            <form action="task3.php" method="POST">
                <label for="number"><b>Galite sugeneruoti savo daugybos lentelę:</b></label><br>
                <input type="number" id="numeris" name="number" min="3" max="20" placeholder="Įveskite skaičių nuo 3 iki 20" style="width:250px; display:inline-block;"><br>
                <input type="submit" value="Generuoti naują">
            </form>
            <hr>
            <a href="#top"><b>Į puslapio viršų</b></a>
        </div>

    </div>


</body>

</html>