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
        border: 1px solid darkblue;
        font-size: 18px;
        color: darkblue;
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
    <title>Bubblesort funkcijos sukūrimas ir panaudojimas</title>
</head>

<body>
    <a href="index.php" id="top"><b>Sugrįžti į pradinį</b></a>
    <div class="container">
        <h1>1 užduotis</h1>
        <h2>Masyvo rikiavimas custom bubble sort metodu.
            <br>
            Apsirašytą funkciją deklaruoti kitame faile (pvz.: lib.php), bet iškvieskite šiame (index.php)
        </h2>
        <hr>
        <div class="task">
            <?php
            //susikuriu indeksini masyva
            $array2 = array(125, 589, 524, 157, 95, 6, 45, 830, 48, 90, 100, 250);
            echo "<b>Sukurtas indeksinis masyvas:</b>";
            echo "<br>";
            
            //isvedu masyvo sukurimo koda i ekrana
            print ("\$array = array(125, 589, 524, 157, 95, 6, 45, 830, 48, 90, 100, 250);");
            echo "<br>";
            echo "<br>";
            echo "<b>Pritaikau užduoties sąlygą ir spausdinu masyvo elementus:</b>";
            echo "<br>";

            //rikiuoju masyvą
                //išsikviečiu kodą iš kito failo, kuriame esu apsirašęs funkciją
            require 'function_for_task1.php'; 
            bubblesort($array2);
          
            
            echo "<br>";
            echo "<br>";
            // parodau vartotojui ekrane panaudotą kodą
            echo "<b>Panaudotas kodas (atskirame funkcijų faile):</b>";
            echo "<br>";
            echo "<img src=\"img/bubblesort.jpg\" alt=\"bubblesort kodas\">";
            echo "<hr>";
            
        ?>
        </div>

    </div>


</body>

</html>