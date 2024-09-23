<!DOCTYPE html>
<html lang="pt-br">
<head> 
<meta charset="utf-8">
<title>FORMULARIO 12</title>
<style>
body {
font-family: 'Gotham', sans-serif;
display: flex;
justify-content: center;
align-items: center;
min-height: 100vh;
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
    width: 100%; 
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    background-color: rgba(7, 2, 34, 0.95);
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.7);
}
table {
    margin: 20px auto; 
    width: 90%; 
    border-collapse: collapse;
    word-wrap: break-word;
    background-color: rgba(0, 0, 0, 0.7); 
    border-radius: 8px;
    overflow: hidden;
}
th, td {
padding: 8px;
border: 1px solid #010529;
text-align: left;
font-size: 14px;
}
th {
background-color: #010f1d;
color: white;
}
td {
color: #e0e0e0;
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
<div class="container">
<?php
   include("conexao12.php");
   if (isset($_POST['opcao']) && isset($_POST['texto']))  {
    $opcao = $_POST['opcao'];
    $texto = $_POST['texto'];
    $sql = "DELETE FROM alunos WHERE $opcao = '$texto'"; 
    if (mysqli_query($conexao, $sql)) {
        echo "exclusão realizada com sucesso";
    } else {
        echo "erro, tente novamente".mysqli_connect_error($conexao); 

    }
    
}
mysqli_close($conexao);
?>
<br><br>
<a class="link" href="exercicio12.php">TENTAR NOVAMENTE</a>
<a class="link" href="index.html">PÁGINA INICIAL</a> 
</div>
</body>
</html>