<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professor Cadastro</title>
</head>
<body>
    <h1> Cadastro de Professores </h1>
    <form name="Enviar" method="POST" action="professor_cadastro.php">
        <fieldset>
            <p>Informe o nome do professor:</p>
            <input type="text" name="professor">

            <br>
            <br>
            <input type="submit" name="Enviar" value="Cadastrar Professor"> 
        </fieldset>