<!DOCTYPE html>
<html lang="pt-br">
<head> 
    <meta charset="utf-8">
    <title>FORMULÁRIO 12</title>
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
<table>
<tr>
    <th>NOME</th>
    <th>MATRÍCULA</th>
    <th>CURSO</th>
    <th>EMAIL</th>
    <th>TELEFONE</th>
    <th>ENDEREÇO</th>
    <th>CEP</th>
    <th>CIDADE</th>
    <th>UF</th>
    <th>CURSO HORAS</th>
    <th>CARGA HORÁRIA</th>
</tr>
<?php 
include("conexao12.php");

if (isset($_POST['opcao']) && isset($_POST['texto'])) {
    $opcao = $_POST['opcao'];
    $texto = $_POST['texto'];
    $sql = "SELECT * FROM alunos WHERE $opcao = '$texto'";
    $resultado = mysqli_query($conexao, $sql);
    
    while ($registro = mysqli_fetch_array($resultado)) {
        $nome = $registro['nome'];
        $matricula = $registro['matricula'];
        $curso = $registro['curso'];
        $email = $registro['email'];
        $telefone = $registro['telefone'];
        $endereco = $registro['endereco'];
        $cep = $registro['cep'];
        $cidade = $registro['cidade'];
        $uf = $registro['uf'];
        $cursohoras = $registro['cursohoras'];
        $cargah = $registro['cargah'];

        echo "<tr>";
        echo "<td>" . htmlspecialchars($nome) . "</td>";
        echo "<td>" . htmlspecialchars($matricula) . "</td>";
        echo "<td>" . htmlspecialchars($curso) . "</td>";
        echo "<td>" . htmlspecialchars($email) . "</td>";
        echo "<td>" . htmlspecialchars($telefone) . "</td>";
        echo "<td>" . htmlspecialchars($endereco) . "</td>";
        echo "<td>" . htmlspecialchars($cep) . "</td>";
        echo "<td>" . htmlspecialchars($cidade) . "</td>";
        echo "<td>" . htmlspecialchars($uf) . "</td>";
        echo "<td>" . htmlspecialchars($cursohoras) . "</td>";
        echo "<td>" . htmlspecialchars($cargah) . "</td>";
        echo "</tr>";
    }

    mysqli_close($conexao);
}
?>
</table>
<br>
    <a class="link" href="exercicio12.php">TENTAR NOVAMENTE</a>
    <a class="link" href="index.html">PÁGINA INICIAL</a> 
</div>
</body>
</html>
