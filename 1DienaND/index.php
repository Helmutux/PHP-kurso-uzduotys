<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pavyzdziai su operatoriais</title>
</head>
<body>
    <?php
        //susikuriu keleta integer tipo kintamuju
        $number1=25;
        $number2=30;
        $number3=50;
        $text= <<<EOT
        Siame pavyzdyje naudojame 3 integer tipo kintamuosius. Ju reiksmes:<br>
        1. Pirmasis - $number1 <br>
        2. Antrasis - $number2 <br>
        3. Treciasis - $number3 <br>
        Jie panaudoti pavyzdyje su salygos if panaudojimu, bei ciklu<br>
        EOT;
        print($text);
        //pasirasau salyga
        if ($number1+$number2 > $number3){
            //priklausomai nuo salygos isvedu teksta si
            print('geras<br>'); 
        }else{
            //..arba si
            printf('negeras<br>');
        }
        //pasirasau cikla ir jo pagalba i ekrana isvedu trecio kintamojo pokyti priklausomai nuo esancio cikle priskyrimo operatoriaus 
        for($i = 0; $i < 10; $i++){
            $number3 *=5;
            print($number3.'<br>');
        }

        
    ?>
    
</body>
</html>