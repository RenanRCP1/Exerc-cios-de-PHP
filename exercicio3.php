<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Faça um script que peça as 3 notas de um aluno e mostre a média.</h1>

    <form action="exercicio3.php" method="get" >
        Digite a primeira nota:<br/>
        <input type="text" name="exercicio1" id="">
        <br/>Digite a segunda nota:
        <br/><input type="text" name="exercicio2" id="">
        <br/>Digite a terceira nota
        <br/><input type="text" name= "exercicio3" id="">
        <br/><input type="submit" value="calcular">

    </form>
    <?php
   $n1 = $_GET["exercicio1"];
   $n2 = $_GET["exercicio2"];
   $n3 = $_GET["exercicio3"];
   

   echo "a média deu ".($n1 + $n2 + $n3) / 3;


?>



</body>
</html>
