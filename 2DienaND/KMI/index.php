<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="icon.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/17e3549c29.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500&display=swap&subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Kūno masės indeksas</title>
</head>

<body>

    <header class="container-flex">
        <h1 class="text-center">
            Kūno masės indekso apskaičiavimas. <br>
            Rekomendacijos užklausos davėjui
        </h1>
    </header>
    <main>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST")
                $height = $_REQUEST['ugis'];   
            if ($_SERVER["REQUEST_METHOD"] == "POST")
                $weight = $_REQUEST['svoris'];   
        ?>
        <div id="div" class="col-lg-4 col-md-6 col-sm-12">
            <div>
                <a href="form.php">
                    <button class="btn btn-primary">Paskaičiuoti KMI</button>
                </a>
            </div>    
        
            <div>
                <p>
                    <?php 
                        if(empty($height) || empty($height))
                            {echo "Paspaude mygtuka suveskite duomenis";} 
                        else {
                        $kmi = $weight/($height*$height);

                        if($kmi <= 16){
                            print('Kritinis svorio trūkumas. Nedelsiant kreipkitės į gydytojus');
                        }
                        if ($kmi > 16 && $kmi <= 18.5) {
                                    print('Svorio trūkumas. Turite daugiau ir kokybiškai maitintis. Pasitarkite su gydytoju');
                                }
                        if ($kmi > 18.5 && $kmi <= 24.99) {
                            print('Jūsų svoris normalus');
                                }
                        if ($kmi >= 25 && $kmi <= 30) {
                                    print('Turite antsvorį. Maitinkitės saikingiau');
                                }
                        if ($kmi > 30 && $kmi <= 35) {
                                    print('Esate nutukęs. Turite susirūpinti');
                                }
                        if ($kmi > 35 && $kmi <= 40) {
                                    print('Esate žymiai nutukęs. Pasikonsultuokite su gydytoju');
                                }
                        if ($kmi > 40) {
                                    print('Kritinis nutukimas. Nedelsdami kreipkitės į gydytoją');
                                }
                            }
                    ?>
                </p>
            </div>
        </div>
    </main>
    <footer class="container-flex">
        <ul class="list-group list-group-horizontal">
            <li class="list-group-item"><a href="https://www.facebook.com/kulvinskas"><i class="fab fa-facebook-square">
                        kulvinskas</i></a></li>
            <li class="list-group-item">&copy; Platinimas ir kopijavimas neribojamas</li>
            <li class="list-group-item">2020-04-01</li>
        </ul>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <!-- <script src="script.js"></script> -->

</body>

</html>
