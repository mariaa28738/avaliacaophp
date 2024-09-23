<!DOCTYPE html>
<html lang="pt-br">
<head> 
    <meta charset="utf-8">
    <title>Verificar Número</title>
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
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
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
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #010f1d;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-size: 16px;
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
    </style>
</head>
<body>
    <div class="container" id="main-content">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = $_POST['numero'];
            if ($numero < 0) {
                echo "<p>Número Negativo</p>";
            } elseif ($numero == 0) {
                echo "<p>Número Neutro</p>";
            } else {
                echo "<p>Número Positivo</p>";
            }
        }
        ?>
        <a class="link" href="exercicio1.html">TENTAR NOVAMENTE</a>
        <a class="link" href="index.html">PÁGINA INICIAL</a>
    </div>
</body>
</html>
