<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aluno Cadastro</title>
</head>
<body>
    <h1> Cadastro de Alunos </h1>
    <form name="Enviar" method="POST" action="aluno_cadastro.php">
        <fieldset>
            <p>Informe o nome do aluno:</p>
            <input type="text" name="curso">

            <p>Escolha o curso</p>
            <select name="curso">
            <option value="Escolha o curso">Escolha o curso</option>
          
            </select>

            <br>
            <br>
            <input type="submit" name="Enviar" value="Cadastrar Aluno"> 
        </fieldset>