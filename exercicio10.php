<!DOCTYPE html>
<html lang="pt-br">
<head> 
    <meta charset="utf-8">
    <title>FORMULARIO 10</title>
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
    if (isset($_POST['mes']))  {
        $mes = floatval($_POST['mes']);

        if ($mes == 1) {
            echo "este mês é janeiro";
        } elseif ($mes == 2) {
            echo "este mês é fevereiro";
        } elseif ($mes == 3) {
            echo "este mês é março";
        } elseif ($mes == 4) {
            echo "este mês é abril";
        } elseif ($mes == 5) {
            echo "este mês é maio";
        } elseif ($mes == 6) {
            echo "este mês é junho";
        } elseif ($mes == 7) {
            echo "este mês é julho";
        } elseif ($mes == 8) {
            echo "este mês é agosto";
        } elseif ($mes == 9) {
            echo "este mês é setembro"; 
        } elseif ($mes == 10) {
            echo "este mês é outubro";
        } elseif ($mes == 11) {
            echo "este mês é novembro";
        } elseif ($mes == 12) {
            echo "este mês é dezembro";
        } else {
            echo "nenhum mês encontrado, tente novamente";
        }
    }       
?>
<br><br>
<a class="link" href="exercicio10.html">TENTAR NOVAMENTE</a>
<a class="link" href="index.html">PÁGINA INICIAL</a> 
</div>
</body>
</html>