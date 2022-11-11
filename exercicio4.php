<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Faça um script que converta metros para centimetros.</h1>

    <form action="exercicio4.php" method="get" >
        quanto metros vc quer converter para cm?:<br/>
        <input type="text" name="exercicio1" id="">
        <br/><input type="submit" value="calcular">

    </form>
    <?php
   $n1 = $_GET["exercicio1"];

   

   echo "a converção em centimetros deu ".($n1 * 100);


?>



</body>
</html>
