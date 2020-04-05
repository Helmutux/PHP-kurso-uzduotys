<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body {
        margin-left: 19%;
        margin-right: 19%;
        width: 60%;
        font-size: 24px;
        font-family: arial;
        display: inline-block;
    }

    a {
        text-decoration: none;
        color: white;
        margin: 2em;
    }

    h2 {
        background: darkblue;
        margin: auto;
        margin-top: 0.5em;
        padding: 0.5em;
        text-align: center;
        border-radius: 10px;
    }

    @media (max-width: 400px) {
        body {
            margin-left: 5%;
            margin-right: 5%;
            width: 88%;

        }

        img {
            max-width: 300px;
        }
    </style>
    <title>Operacijos su masyvais</title>
</head>

<body>

    <?php
    echo "<a href=\"simple_array_operation.php\"><h2>Operacijos su paprastais masyvais</h2></a>";
    echo "<a href=\"associative_array_operation.php\"><h2>Operacijos su asociatyviais masyvais</h2></a>";
    echo "<a href=\"task_with_ass_array.php\"><h2>Užduotis naudojant asociatyvų masyvą</h2></a>";
    ?>
</body>

</html>