<!-- 
UZDUOTIS
Naudojant PHP sukurti failų naršyklę. Reikalavimai jai: 
1. Galimybė matyti failus ir/ar direktorijas. //done
2. Galimybė vaikščioti po katalogus bei matyti jų turinį. //done
3. Galimybė sukurti naujas direktorijas. //done
4. Galimybė ištrinti failus (direktorijų trinti nereikia). //done
5. Galimybė įkelti failus.
6. Aplikacija yra apsaugota autentikacijos mechanizmu (reikia prisijungti). //done
7. Galimybė parsisiųsti failus. 
-->

<?php
    //startuoja sesija
    session_start();
    
    $error = false; //loginis kintamasis, kuri naudosime, noredami aktyvuoti salyga autorizacijos su netinkamais duomenimis atveju. Pirmine reiksme - klaidos nera, tam kad dar neissiuntus username ir password negautume pranesimo apie klaida

    //login'o algoritmas
    if(isset($_POST['auth'])) {//jei gauname davinius is post ivesties lauko, priskiriame juos kintamiesiems ir aktyvuojame sesija
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['password'] = md5($_POST['password']);//pastaba: md5 sifravima naudoti nerekomenduojama, bet tai geriau nei 'nuogas' slaptazodis
            $error = true; //suveiks, jei duomenys bus blogi. salyga aprasyta zemiau
    }
    
    //logout'o algoritmas
    if(isset($_GET['f']) && $_GET['f'] == 'logout') {
       unset($_SESSION['username']);
       unset($_SESSION['password']);
    };

    $login = 'admin';//tinkamas prisijingimo vardas
    $password = '81dc9bdb52d04dc20036dbd8313ed055';//md5 uzkoduotas slaptazodis (123)
    
    $auth = false;//pradineje stadijoje (iki prisijungimo vardo ir slaptazodzio ivedimo) autorizacija neivykus

    //siekiant sutrumpinti koda, susikuriu papildoma kintamaji su boolean tipo kintamuoju. aprasytas tikrinimas ar sesija ivyko ir username, bei password gauti.
    $arYraToks = isset($_SESSION['username']) && isset($_SESSION['password']);
    //panaudoju salygoje susikurta kintamaji ir taip pat patikrinu ar ivesti username bei password sutampa su sistemoje ivestaisiais
    if($arYraToks && $_SESSION['username'] === $login && $_SESSION['password'] == $password){
        $auth = true;//sekmes atmeju autentifikacijos procesas sekmingas
        $error = false;//klaidu nera
    }

    //--------------------------------------------------
    // direktorijos sukurimo algoritmas
    if(isset($_GET["create_dir"])){
        if($_GET["create_dir"] != ""){
            $dir_to_create = './' . $_GET["path"] . $_GET["create_dir"];
            if (!is_dir($dir_to_create)) mkdir($dir_to_create, 0777, true);
        }
        $url = preg_replace("/(&?|\??)create_dir=(.+)?/", "", $_SERVER["REQUEST_URI"]);
        header('Location: ' . urldecode($url));
    }

    //bylu trynimo algoritmas
    if(isset($_POST['delete'])){
        $objToDelete = './' . $_GET["path"] . $_POST['delete'];
        $objToDeleteEscaped = str_replace("&nbsp;", " ", htmlentities($objToDelete, null, 'utf-8'));
        if (is_file($objToDeleteEscaped)) {
            if(file_exists($objToDeleteEscaped)){
                unlink($objToDeleteEscaped);
            }
        }
    }

    // bylos ikelimo i atverta kataloga algoritmas;
    if(isset($_FILES['byla'])){
        $errors= array();
        $file_name = $_FILES['byla']['name'];
        $file_size = $_FILES['byla']['size'];
        $file_tmp = $_FILES['byla']['tmp_name'];
        $file_type = $_FILES['byla']['type'];
    
        $file_ext = strtolower(end(explode('.',$_FILES['byla']['name'])));
        $extensions = array("jpeg","jpg","png","xlsx", "xls", "pdf","txt", "docx", "doc", "gif", "rtf", "html", "css", "php", "ini");
        if(in_array($file_ext,$extensions)=== false){
            $errors[]="extension not allowed, please choose correct file.";
        }
        if($file_size > 2097152) {
            $errors[]='File size must be under 2 MB';
        }
        if(empty($errors)==true) {
            move_uploaded_file($file_tmp,"./".$file_name);
            echo "Success";
        }else{
            print_r($errors);
        }
    }
?>

<!-- jei autorizacija nesekminga, apsirasom veiksmus klaidos atveju -->
<?php if($error) { ?> <p style="margin-left:30%;">Neteisingas prisijungimo vardas ir/arba slaptazodis</p> <?php } ?>

<!-- jei autorizacija pavyko atidarome turini, skirta registruotiems vartotojams -->
<?php if($auth) { ?>

<!-- atidarome pagrindini puslapi su html struktura -->
<!DOCTYPE html>
<html lang="lt">

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
    h2{
        display: inline-block;
        width: 97%;
        background: silver;
        padding: 0.75em;
        border-radius: 5px;
    }
    .container {
        margin-left: 20%;
        margin-right: 20%;
    }
    table {
        border-collapse: collapse;
        margin: auto;
        margin-bottom: 1em;
    }

    th,
    td {
        border: 1px solid darkgrey;
        text-align: left;
        font-size: 18px;
        width: 34vw;
        height: 40px;
        padding-left: 0.5em;
    }
    th{
        background: green;
        color: white;
        font-weight: bold;
    }
    form{
        display: inline-block;
    }
    .back, .logout, .kurti{
        display: inline-block;
        background: green;
        color: white;
        border: 1px solid darkgrey;
        text-decoration: none;
        padding: 0.5em;
        margin-bottom: 0.5em;
        border-radius: 3px;
    }
    .logout{
        background: darkgrey;
        color: black;
        border: 1px solid black;
    }
    .delete{
        background: pink;
        color: black;
        padding: 0.5em;
        border: 1px solid darkred;
        border-radius: 3px;
    }
    .kurti{
        background: lightgreen;
        color: darkgreen;
        border: 1px solid darkgreen;
    }
    .directfield{
        display: inline-block;
        border: 1px solid darkgreen;
        padding: 0.5em;
        margin-bottom: 0.5em;
        border-radius: 3px;
        width: 200px;
    }
    @media (max-width: 400px) {
        .container {
            margin-left: 5%;
            margin-right: 5%;
        }
        h2{
            font-size: 16px;
        }
        th,td, .back{
            font-size: 14px;
        }
    }
    </style>
    <title>PHP failų naršyklė</title>
</head>

<body>
    <div class="container">
   
     <?php
        //formuojame kintamaji path, kuriam priskiriame einamojo katalogo adresa
        $path = './'.$_GET["path"];
        
        //panaudojame scandir, suformuojame string'u masyva (kiekvienas failas ar katalogas patampa atskiru masyvo elementu) 
        $turinys = scandir($path);
        
        //isvedame i ekrana informacija, kurio katalogo turini vaizduojame
        print('<h2>Directory contents: '.str_replace('?path=','',$_SERVER['REQUEST_URI']).'</h2>');
    
        //pradedu lentele. Suvedu virsutine eilute (bus ne dinamiska)
        print('<table><tr><th>Type</th><th>Name</th><th>Actions</th></tr>');
    ?>
        <!-- apsirasome grizimo i ankstesni puslapi nuorodą  -->
        <a class="back" href="<?php
            $q_string = explode('/', rtrim($_SERVER['QUERY_STRING'], '/'));
            array_pop($q_string);
            count($q_string)==0
            ? print('?path=/')
            : print('?'.implode('/', $q_string).'/');
            ?>">Grįžti atgal</a>
        
    <?php    
        //atspausdiname i lentele suformuoto masyvo elementus
        foreach($turinys as $value){
            if($value !=".." && $value !="."){//jei masyvo elementas nera '..' arba '.' pradedame pildyma
                print ('<tr>');//atidarome eilute 

                print ('<td>'.(is_dir($path.$value) ? "Directory" : "File").'</td>');//pirmame stulpelyje nurodom ar tai direktorija (jei true) ar failas (jei is_dir grazina false)

                print ('<td>'.(is_dir($path.$value) ? '<a href="'.(isset($_GET['path'])//jei aptinkame direktorija, pridedame nuoroda su 'a' tag'u
                                ? $_SERVER['REQUEST_URI'].$value.'/' 
                                : $_SERVER['REQUEST_URI'].'?path='.$value.'/').'">'.$value.'</a>'
                            :$value)
                        .'</td>');
                print('<td>'//pridedame trynimo mygtuka
                    . (is_dir($path . $value)//klausiame ar tai direktorija
                    ? ''//jei true, nieko nepridedame
                        //jei false, vadinas susiduriame su failu ir formuojame trynimo mygtuka: 
                    : '<form action="" method="POST">
                       <input type="hidden" name="delete" value='.str_replace(' ', '&nbsp;', $value) . '>
                       <input class="delete" type="submit" value="Delete">
                       </form>'
                )
                    . "</form></td>");
                print ('</tr>');
            }
        }
        print('</table>');//uzbaigiame lentele
    ?>
    
    <nav>
       
        <!-- apsirasome naujos direktorijos kurimo forma. algoritma susikuriame php kodo pagalba auksciau -->
        <p>Galite sukurti naują katalogą matomoje srityje:</p>
        <form action="./" method="get">
            <input type="hidden" name="path" value="<?php print($_GET['path']) ?>" />
            <input class="directfield" type="text" name="create_dir" id="create_dir" placeholder="Naujos direktorijos pavadinimas"/>
            <input class="kurti" type="submit" value="Sukurti">
        </form>
        <p>
            <a class="logout" href="index.php?f=logout">Palikti katalogą</a>
        </p>
        <!-- apsirasome failo pridejimo i kataloga forma -->
        <div>
            <p>Galite pridėti failą į matomą katalogą:</p>
            <form action = "./" method = "POST" enctype = "multipart/form-data">
                <input type = "file" name = "byla" />
                <input type = "submit"/>
            </form>
            <?php if(isset($_FILES['byla']) == true) {?>
                <ul>
                    <li>Sent file: <?php echo $_FILES['byla']['name']; ?>
                    <li>File size: <?php echo $_FILES['byla']['size']; ?>
                    <li>File type: <?php echo $_FILES['byla']['type'] ?>
                </ul>
            <?php } ?>
        </div>
    </nav>
  
</body>
</html>

   
<?php } 
//jei autorizacija nepavyko, iskvieciame(toliau rodome) slaptazodzio uzklausos forma 
else 
{ ?>
<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prisijungimas prie katalogų sistemos</title>
    <style>
        body{
            font-family: courier;
        }
        .container {
            margin-left: 30%;
            margin-right: 30%;
            display: block;
            padding: 1em;
            border: 3px solid darkgreen;
            border-radius: 5px;
            margin-top: 1em;
        }
        div{
            font-weight: bold;
            display: inline-block;
            width: 30vw;
    
        }
        input{
            margin-bottom: 5px;
        }
        .goon{
            display: inline-block;
            background: green;
            color: white;
            border: 1px solid darkgrey;
            /* text-decoration: none; */
            padding: 0.5em;
            margin-top: 0.5em;
            margin-bottom: 0.5em;
            border-radius: 3px;
        }
        @media (max-width: 400px) {
        .container {
            margin-left: 5%;
            margin-right: 5%;
            display: block;
            padding: 0.5em;
            border: 2px solid darkgreen;
            border-radius: 3px;
            margin-top: 0.75em;
        }
        h2{
            font-size: 15px;
        }
        p{
            font-weight: normal;   
        }
        .back{
            display: inline-block;
            background: green;
            color: white;
            border: 1px solid darkgrey;
            text-decoration: none;
            padding: 0.5em;
            margin-bottom: 0.5em;
            border-radius: 3px;
        }

    }
    </style>
</head>
<body>
    
</body>
</html>

<div class="container">
<h2>PHP katalogų sistema</h2>
<form name="auth" method="post" action="index.php">
    <div>
        <label for="username">Prisijungimo vardas: </label>
    </div>
    <div>
        <input type="text" name="username" id="username">
    </div>
    <div>
        <label for="passw">Prisijungimo slaptažodis: </label>
    </div>
    <div>
        <input type="password" name="password" id="passw">
    </div>
    <div>
    <input class="goon" type="submit" name ="auth" value="Atidaryti katalogą">
    </div>

    
</form>
</div>
<?php } ?>

