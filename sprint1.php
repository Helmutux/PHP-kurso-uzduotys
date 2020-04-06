<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body {
        font-family: courier;

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
        margin-left: 25%;
        margin-right: 25%;
    }
    .katalog{
        display: block;
        border: 1px solid #B3B898;
        width: 280px;
        background: #FEF6AB;
        color: #000619;
        padding: 0.2em;
        margin: 0;
        margin-block-start: 0.2em;
        margin-block-end: 0;
    }

    .files{
        display: block;
        border: 1px solid #B3B898;
        width: 280px;
        color: #000619;
        padding: 0.2em;
        margin: 0;
        margin-block-start: 0.2em;
        margin-block-end: 0;}
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
        <div class="task">
        <h4>Pateikta direktorija 'C:\Program Files\Ampps\www\PHP-kurso-uzduotys'</h4>
        <hr>
        <?php
            //panaudojame $_SERVER['REQUEST_URI'];
           echo "Dabar esame čia:<br>"; 
           echo $_SERVER['REQUEST_URI'];
           echo "<hr>";
           //nurodome vieta(kataloga/direktorija), su kurios turiniu dirbsime 
           $dir    = 'C:\Program Files\Ampps\www\PHP-kurso-uzduotys';
           $turinys = scandir($dir);//panaudojame scandir, suformuojame string'u masyva (kiekvienas failas ar katalogas patampa atskiru masyvo elementu) 
            
            echo "<br>";
            //atspausdiname suformuoto masyvo elementus ir gauname pasirinktos vietos turini
            foreach($turinys as $k => $v){
            //sukuriame salyga tikrindami ar elementas ne direktorija    
            if(is_dir($v)==true){
                print_r('<p class="katalog">'.$v.'</p>');//teigiamu atveju spausdindami paryskiname
            }
            //sukuriame salyga tikrindami ar elementas ne failas
            elseif(is_file($v)==true){
                print_r('<p class="files">'.$v.'</p>');//teigiamu atveju spausdindami suteikiame italic stiliu
            }
            $i++;//padidinam indeksa ir kartojam cikla tikrindami sekanti elementa
            }
           
        ?>
        <a href="#top"><b>Į puslapio viršų</b></a>
        </div>

    </div>


</body>

</html>