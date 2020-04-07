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
    input.create{
        background: lightgreen;
        border: 1px solid green;
        color: darkgreen;
        border-radius: 5px;
    }
    input.delete{
        background: red;
        border: 1px solid darkred;
        color: white;
        border-radius: 5px;
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
    <div class="container">
     <?php
        //nurodome vieta(kataloga/direktorija), su kurios turiniu dirbsime 
        $path = './'.$_GET["path"];
        
        //panaudojame scandir, suformuojame string'u masyva (kiekvienas failas ar katalogas patampa atskiru masyvo elementu) 
        $turinys = scandir($path);
        
        //isvedame i ekrana informacija, kurio katalogo turini vaizduojame
        print('<h2>Directory contents: '.str_replace('?path=','',$_SERVER['REQUEST_URI']).'</h2>');
    
        //pradedu lentele. Suvedu virsutine eilute (bus ne dinamiska)
        print('<table><tr><th>Type</th><th>Name</th><th>Actions</th></tr>');
        
        //issikvieciu dali kodo (reikalingas funkcijas) is kito failo
        require 'function.php';
        //atspausdiname i lentele suformuoto masyvo elementus
        foreach($turinys as $value){
            if($value !=".." && $value !="."){
                print ('<tr>');

                print ('<td>'.(is_dir($path.$value) ? "Directory" : "File").'</td>');//pirmame stulpelyje nurodom ar tai direktorija ar failas

                print ('<td>'.(is_dir($path.$value) ? '<a href="'.(isset($_GET['path'])
                                ? $_SERVER['REQUEST_URI'].$value.'/' 
                                : $_SERVER['REQUEST_URI'].'?path='.$value.'/').'">'.$value.'</a>'
                            :$value)
                        .'</td>');
                print('<td><form action="function.php" method="GET">'.(is_dir($path.$value) ? '<input class="create" type="submit" class="button" name="create" value="create dir"/></form></td>'
                            : '<input class="delete" type="submit" class="button" name="delete" value="delete file"/></form></td>').'</tr>');
                
                }
        }
        print('</table>');
    ?>
    </div>
    <button ></button>
</body>
</html>