<?php
    session_start(); 

    //login logic
    $msg='';
    if(isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])){
        if($_POST['username'] == 'Donatas' && $_POST['password'] == '55555'){
            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = 'Donatas';
        } else {
            $msg = 'Neteisingas prisijungimo vardas arba slaptažodis';
        }
    }


    // logout logic
    if(isset($_GET['action']) and $_GET['action'] == 'logout'){
        session_start();
        unset($_SESSION['username']);
        unset($_SESSION['password']);
        unset($_SESSION['logged_in']);
        // print('Logged out!');
    }

    //directory creation logic
    if(isset($_GET["create_dir"])){
        if($_GET["create_dir"] != ""){
            $dir_to_create = './' . $_GET["path"] . $_GET["create_dir"];
            if (!is_dir($dir_to_create)) mkdir($dir_to_create, 0777, true);
        }
        $url = preg_replace("/(&?|\??)create_dir=(.+)?/", "", $_SERVER["REQUEST_URI"]);
        header('Location: ' . urldecode($url));
    }

    //directory deletion logic
    if(isset($_POST['delete'])){
        $objToDelete = './' . $_GET["path"] . $_POST['delete'];
        $objToDeleteEscaped = str_replace("&nbsp;", " ", htmlentities($objToDelete, null, 'utf-8'));
        if (is_file($objToDeleteEscaped)) {
            if(file_exists($objToDeleteEscaped)){
                unlink($objToDeleteEscaped);
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body {
        font-family: arial;

    }
    nav{
        display: inline-block;
    }
    h4{
        display: inline-block;
        width: 100%;
        background: silver;
        padding: 1em;
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
    form{
        display: inline-block;
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
    button{
        display: block;
        width: 100%;
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
        if(!$_SESSION['logged_in'] == true){
            print('<form action = "" method="POST">');
            print('<h4>'.$msg.'</h4>');
            print('<input type="text" name="username" placeholder="Įveskite vartotojo vardą" required autofocus>');
            print('<input type="password" name="password" placeholder="Įveskite slaptažodį" required>');
            print('<button type="submit" name="login">Prisijungti</button>');
            print('</form>');
            die();
        }




        //nurodome vieta(kataloga/direktorija), su kurios turiniu dirbsime 
        $path = './'.$_GET["path"];
        
        //panaudojame scandir, suformuojame string'u masyva (kiekvienas failas ar katalogas patampa atskiru masyvo elementu) 
        $turinys = scandir($path);
        
        //isvedame i ekrana informacija, kurio katalogo turini vaizduojame
        print('<h2>Directory contents: '.str_replace('?path=','',$_SERVER['REQUEST_URI']).'</h2>');
    
        //pradedu lentele. Suvedu virsutine eilute (bus ne dinamiska)
        print('<table><tr><th>Type</th><th>Name</th><th>Actions</th></tr>');
        
        
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
                print('<td>'
                    . (is_dir($path . $value)
                    ? ''
                    : '<form action="" method="POST">
                       <input type="hidden" name="delete" value='.str_replace(' ', '&nbsp;', $value) . '>
                       <input type="submit" value="Delete">
                       </form>'
                )
                    . "</form></td>");
                print ('</tr>');
            }
        }
        print('</table>');
    ?>
    <br>
    <br>
    <nav>
        <button>
            <a href="<?php
            $q_string = explode('/', rtrim($_SERVER['QUERY_STRING'], '/'));
            array_pop($q_string);
            count($q_string)==0
            ? print('?path=/')
            : print('?'.implode('/', $q_string).'/');
            ?>">Grįžti atgal</a>
        </button>
        <br>
        <form action="/Sprint1" method="get">
            <input type="hidden" name="path" value="<?php print($_GET['path']) ?>" />
            <input type="text" name="create_dir" id="create_dir" placeholder="Naujos direktorijos pavadinimas"/>
            <button type="submit">Sukurti</button>
        </form>
        Norėdami išeiti spauskite<a href="index.php?action=logout"> čia
    </nav>
    </div>
    <button ></button>
</body>
</html>