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
    /* a {
        display: inline-block;
        margin: 0.5em 0 0.5em 1em;
        text-decoration: none;
        border: 1px solid green;
        font-size: 18px;
        color: green;
        padding: 0.5em;
        border-radius: 5px;
    } */

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
    <!-- <a href="4dienaND/index.php" id="top"><b>Sugrįžti į pradinį</b></a>
    <div class="container"> -->
        <!-- <h1>Sprintas No1</h1>
        <h2>
        Sukurkite PHP failų naršyklę, kuri suteikia galimybę matyti failus ir/ar direktorijas.
        </h2>
        <hr>
        <div class="task"> -->
        <?php
            //nurodome vieta(kataloga/direktorija), su kurios turiniu dirbsime 
            $path = './'.$_GET["path"];
            
            $turinys = scandir($path);//panaudojame scandir, suformuojame string'u masyva (kiekvienas failas ar katalogas patampa atskiru masyvo elementu) 
            
            print_r($_SERVER['REQUEST_URI'].$turinys[3]);
            
            print('<h2>Directory contents: '.str_replace('?path=','',$_SERVER['REQUEST_URI']).'</h2>');
        
            //pradedu lentele. Suvedu virsutine eilute (bus ne dinamiska)
            print('<table><tr><th>Type</th><th>Name</th><th>Actions</th></tr>');
                        

            //atspausdiname i lentele suformuoto masyvo elementus
            foreach($turinys as $value){
                if($value !=".." && $value !="."){
                    print ('<tr>');

                    print ('<td>'.(is_dir($path.$value) ? "Directory" : "File").'</td>');

                    print ('<td>'.(is_dir($path.$value) ? '<a href="'.(isset($_GET['path'])
                                    ? $_SERVER['REQUEST_URI'].$value.'/' 
                                    : $_SERVER['REQUEST_URI'].'?path='.$value.'/').'">'.$value.'</a>'
                                :$value)
                            .'</td>');
                    print('<td></td>'); //kol kas pasiliekam tuscia, panaudosime veliau
                    print ('</tr>');
                    }
                    if($value ==".."){
                    print ('<tr>');
                    print('<td>back</td>');
                    print('<td><a href="../'.$_SERVER['REQUEST_URI'].$_GET['path'].'">..</a></td>');
                    print('<td></td>');
                    }
            }
            print('</table>');
        ?>
        
        
        <!-- <a href="#top"><b>Į puslapio viršų</b></a> -->
        <!-- </div>

    </div> -->


</body>

</html>