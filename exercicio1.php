<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercício de php</h1>

    <form action="exercicio1a.php" name="Enviar" method="Post">
    <p>
        Digite o nome do cliente <br>
        <input type="text" name="Cliente">
    </p>

    <p>
        Escolha o sexo do cliente <br>
        <input type="radio" name="Sexo" value="feminino"> Feminino <br>
        <input type="radio" name="Sexo" value="masculino"> Masculino <br>
    </p>

<p>
    Digite o valor da compra <br>
    <input type="number" name="ValorCompra">
</p>

<p>
    <input type="submit" name = "Enviar" value="Enviar">
</p>
</body>
</html>