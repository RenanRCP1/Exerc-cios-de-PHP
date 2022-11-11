<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Faça um script que peça 2 números inteiros e um número real. Calcule e mostre:

     •o produto do dobro do primeiro com metade do segundo .

     •a soma do triplo do primeiro com o terceiro.

     •o terceiro elevado ao cubo.</h1>

    <form action="exercicio9.php" method="get" >
        Digite o primeiro numero inteiro:<br/>
        <input type="text" name="exercicio1" id="">
        Digite o segundo numero inteiro:<br/>
        <input type="text" name="exercicio2" id="">
        Digite o numero real:<br/>
        <input type="text" name="exercicio3" id="">
        <br/><input type="submit" value="calcular">

    </form>
    <?php
   $n1 = $_GET["exercicio1"];
   $n2 = $_GET["exercicio2"];
   $n3 = $_GET["exercicio3"];

   

   echo " produto do dobro do primeiro com metade do segundo ".($n1 * 2) * ($n2 / 2);
   echo " <br/> soma do triplo do primeiro com o terceiro ".($n1 * 3) + $n3;
   echo " <br/> o terceiro elevado ao cubo ".($n3** 3);


?>



</body>
</html>