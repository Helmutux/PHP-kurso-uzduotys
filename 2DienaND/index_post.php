<!DOCTYPE html>
<html>

<head>
    <title>POST naudojimas</title>
</head>

<body>
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
          $name = $_POST['vardas'];
        }
        print($name);
      ?>
    <a href="post.php">
        <button>Panaudoti POST formą</button>
    </a>
    <?php 
        if(empty($name))
            echo "Įvesties forma tuščia. Užpildykite"; 
        else 
            echo ""; 
    ?>
</body>

</html>