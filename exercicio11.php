<!DOCTYPE html>
<html lang="pt-br">
<head> 
    <meta charset="utf-8">
    <title>FORMULARIO 11</title>
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
   include("conexao11.php");
   if (isset($_POST['aluno']) && isset($_POST['matricula']) && isset($_POST['curso']) && isset($_POST['email']) && isset($_POST['telefone']) && isset($_POST['endereco']) && isset($_POST['cep']) && isset($_POST['cidade']) && isset($_POST['uf']) && isset($_POST['cursohoras']) && isset($_POST['cargah'])) {
   $aluno=$_POST['aluno'];
   $matricula=$_POST['matricula'];
   $curso=$_POST['curso'];
   $email=$_POST['email'];
   $telefone=$_POST['telefone'];
   $endereco=$_POST['endereco'];
   $cep=$_POST['cep'];
   $cidade=$_POST['cidade'];
   $uf=$_POST['uf'];
   $cursohoras=$_POST['cursohoras'];
   $cargah =$_POST['cargah'];

   $sql="INSERT INTO alunos(nome, matricula, curso, email, telefone, endereco, cep, cidade, uf, cursohoras, cargah)
        VALUES ('$aluno', '$matricula', '$curso', '$email', '$telefone', '$endereco', '$cep', '$cidade', '$uf', '$cursohoras', $cargah)";
    if(mysqli_query($conexao, $sql)) {
        echo "O usuário foi cadastrado com sucesso!"; 
    }
    else{
        echo "Houve um erro. Por favor, tente novamente".mysqli_connect_error($conexao); 
    }
}
mysqli_close($conexao);

?>
<br><br>
<a class="link" href="exercicio11.html">TENTAR NOVAMENTE</a>
<a class="link" href="index.html">PÁGINA INICIAL</a> 
</div>
</body>
</html>