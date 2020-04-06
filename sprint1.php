<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body {
        font-family: arial;

    }
    h4{
        display: inline-block;
        width: 100%;
        background: silver;
        padding: 1em;
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
        margin-left: 15%;
        margin-right: 15%;
    }
    table {
        border-collapse: collapse;
        margin: auto;
    }

    th,
    td {
        border: 1px solid darkgrey;
        text-align: left;
        font-size: 20px;
        width: 400px;
        height: 40px;
        padding-left: 0.5em;
    }
    th{
        background: green;
        color: white;
        font-weight: bold;
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
    <title>PHP failų naršyklė</title>
</head>

<body>
    <a href="4dienaND/index.php" id="top"><b>Sugrįžti į pradinį</b></a>
    <div class="container">
        <h1>Sprintas No1</h1>
        <h2>
        Sukurkite PHP failų naršyklę, kuri suteikia galimybę matyti failus ir/ar direktorijas.
        </h2>
        <hr>
        <div class="task">
        <h2>Directory contents: /Ampps/www/PHP-kurso-uzduotys'</h2>
        <hr>
        <table>
            <tr>
                <th>Type</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
            <?php
           //nurodome vieta(kataloga/direktorija), su kurios turiniu dirbsime 
            $dir = 'C:\Program Files\Ampps\www\PHP-kurso-uzduotys';
            $turinys = scandir($dir);//panaudojame scandir, suformuojame string'u masyva (kiekvienas failas ar katalogas patampa atskiru masyvo elementu) 
            
            echo "<br>";
            //atspausdiname i lentele suformuoto masyvo elementus
            foreach($turinys as $k => $v){
                echo "<tr>";
            //sukuriame salyga tikrindami ar elementas ne direktorija    
            if(is_dir($v)==true){
                print_r('<td>Directory</td>');//teigiamu atveju nurodome apie tai celeje
                print_r('<td>'.$v.'</td>');//teigiamu atveju spausdindami paryskiname
                print_r('<td></td>');//kol kas pasiliekam tuscia, panaudosime veliau
            }
            //sukuriame salyga tikrindami ar elementas ne failas
            elseif(is_file($v)==true){
                print_r('<td>File</td>');//teigiamu atveju nurodome apie tai celeje
                print_r('<td>'.$v.'</td>');//teigiamu atveju spausdindami suteikiame italic stiliu
                print_r('<td></td>');//kol kas pasiliekam tuscia, panaudosime veliau
            }
            echo "</tr>";
            $i++;//padidinam indeksa ir kartojam cikla tikrindami sekanti elementa
            }
           
        ?>
        </table>
        
        <a href="#top"><b>Į puslapio viršų</b></a>
        </div>

    </div>


</body>

</html>