<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Exercicio de PHP</h1>

<form action="exercicio1.php" name="Enviar" method= "POST">

<p>
    Digite o nome do cliente <br>
    <input type="radio" name="sexo" value="F">Feminino <br>
    <input type="radio" name="sexo" value="M">Masculino<br>
</p>
 
<p>
    Digite o valor da compra <br>
    <input type="text" name="valorcompra">
</p>

<p>
    <input type="submit" name= "Enviar" value="Calcular">
</p>

</form>

<?php 
if(isset($_REQUEST["Enviar"])){
    $cliente = $_REQUEST["cliente"];
    $sexo = $_REQUEST["sexo"];
    $valorcompra = $_REQUEST["valorcompra"];

    if ($sexo = "H")
    $desconto = ($valorcompra*5)/100;
    $sexo = "Masculino";

    if ($sexo = "F")
    $desconto = ($valorcompra*20)/100;
    $sexo = "Feminino";

    echo "Nome do cliente: $cliente";
    echo "<br>Sexo: $sexo";
    echo "<br> Valor da compra: $valorcompra";
    echo "<br>Valor do desconto: $desconto";




}
?>

</body>
</html>