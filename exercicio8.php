<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Faça um script que peça a temperatura em graus Celsius, transforme e mostre em graus Farenheit.</h1>

    <form action="exercicio8.php" method="get" >
        Diga a temperatura em celsius:<br/>
        <input type="text" name="exercicio1" id="">
        <br/><input type="submit" value="calcular">

    </form>
    <?php
   $n1 = $_GET["exercicio1"];

   

   echo "a temperatura em celsius é ".$n1 * (9 / 5) + 32 ;


?>



</body>
</html>