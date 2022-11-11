<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tendo como dados de entrada a altura de uma pessoa, construa um script que calcule seu peso ideal, usando a seguinte fórmula: (72.7\*altura) – 58.</h1>

    <form action="exercicio10.php" method="get" >
        Qual a altura da pessoa?<br/>
        <input type="text" name="exercicio1" id="">
        <br/><input type="submit" value="calcular">

    </form>
    <?php
   $n1 = $_GET["exercicio1"];

   

   echo "O peso ideal é ".(72.7 * $n1) - 58;


?>



</body>
</html>
