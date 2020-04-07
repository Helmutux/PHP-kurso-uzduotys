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
        border: 2px solid green;
        text-align: center;
        font-size: 22px;
        width: 60px;
        height: 60px;
    }
    .red{
        background: lightgreen;
        color: darkgreen;
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
    </style>
    <title>Daugybos lentelės kūrimas panaudojant funkciją</title>
</head>

<body>
    <a href="index.php" id="top"><b>Sugrįžti į pradinį</b></a>
    <div class="container">
        <h1>3 užduotis</h1>
        <h2>Perdaryti 4 dienos užduotį su daugybos lentele panaudojant kitame faile laikomą susikurtą funkciją
        </h2>
        <hr>
        <div class="task">
        <?php
            echo "<h2>Dinamiškai sugeneruota daugybos lentelė.</h2>";
            echo "<h3>(sukurta išsikviečiant funkciją iš kito failo)</h3>";
            
            if ($_SERVER["REQUEST_METHOD"] == "POST")
            $keynumber = $_POST['number'];
            else
            $keynumber = 10;//jei is uzklausos reiksmes negavome ()nes nepildeme/nesiunteme), nustatome reiksme pagala nutylejima
            
            //issikvieciame kodo dali (su funkcija) is kito failo          
            require 'function_for_task2.php'; 
            
            //funkcijos pagalba atvaizduojame daugbos lentele
            daugyba($keynumber);
        ?>
        </div>
        <div class="task">
            <form action="task2.php" method="POST">
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