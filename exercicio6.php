<!DOCTYPE html>
<html lang="pt-br">
<head> 
    <meta charset="utf-8">
    <title>FORMULARIO 6</title>
    <style>
        body {
            font-family: 'Gotham', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: rgb(255, 255, 255);
            background-color: #ffffff;
            background-image: url('https://i.pinimg.com/originals/d4/56/a9/d456a94cfc4f1cf76dceb26a3b99eba6.gif');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        .container {
            text-align: center;
            max-width: 400px;
            margin: 0 auto;
            padding: 30px;
            background-color: rgba(7, 2, 34, 0.9);
            border-radius: 10px;
        }
        label, input {
            display: block;
            width: 100%;
            margin-bottom: 15px;
        }
        input[type="number"] {
            padding: 10px;
            border: 1px solid #010529;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #010f1d;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .link {
            margin-top: 20px;
            display: block;
            background-color: #010f1d;
            color: white;
            padding: 10px;
            border-radius: 5px;
            text-decoration: none;
            text-align: center;
            transition: background-color 0.3s ease;
        }
        .link:hover {
            background-color: #0056b3;
        }
        #main-content {
            padding: 10px;
            max-width: 600px;
            margin: 0 auto;
            border-radius: 10px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
<div class="container"> 
<?php
    if (isset($_POST['numeros'])) {
        // Recebe a string e a transforma em um array
        $numeros = explode(',', $_POST['numeros']);
        
        // Remove espaços em branco e converte para números
        $numeros = array_map('trim', $numeros);
        $numeros = array_map('floatval', $numeros);

        // Ordena o array em ordem crescente
        sort($numeros);

        // Imprime os números em ordem crescente
        echo "Números em ordem crescente: " . implode(', ', $numeros);
    } else {
        echo "Nenhum número foi fornecido.";
    }
    ?>
<br><br>
<a class="link" href="exercicio6.html">TENTAR NOVAMENTE</a>
<a class="link" href="index.html">PÁGINA INICIAL</a> 
</div>
</body>
</html>