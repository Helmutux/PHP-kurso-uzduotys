<!DOCTYPE html>
<html>

<head>
    <title>GET naudojimas</title>
</head>

<body>
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "GET"){
          $name = $_GET['vardas'];
        }
        print($name);
    ?>
    <a href="get.php">
        <button>Panaudoti GET formą</button>
    </a>
    <?php 
        if(empty($name))
            echo "Įvesties forma tuščia. Užpildykite"; 
        else 
            echo ""; 
    ?>
</body>

</html>