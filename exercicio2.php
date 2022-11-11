<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Faça um script que peça dois numeros e imprima a soma.</h1>

    <form action="exercicio2.php" method="get" >
        Digite um numero:<br/>
        <input type="text" name="exercicio1" id="">
        <br/>Digite outro numero:
        <br/><input type="text" name="exercicio2" id="">
        <br/><input type="submit" value="calcular">

    </form>
    <?php
   $n1 = $_GET["exercicio1"];
   $n2 = $_GET["exercicio2"];
   

   echo "a soma deu ".($n1 + $n2);


?>



</body>
</html>

