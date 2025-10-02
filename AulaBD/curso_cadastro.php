<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso Cadastro</title>
</head>
<body>
    <h1> Cadastro de Cursos </h1>
    <form name="Enviar" method="POST" action="curso_cadastro.php">
        <fieldset>
            <p>Informe o nome do curso:</p>
            <input type="text" name="curso">

            <p>Informe o nome do coordenador:</p>
            <input type="text" name="coordenador">

            <br>
            <br>
            <input type="submit" name="Enviar" value="Cadastrar Curso"> 
        </fieldset>