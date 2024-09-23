<!DOCTYPE html>
<html lang="pt-br">
<head> 
    <meta charset="utf-8">
    <title>FORMULARIO 11</title>
</head>
<body>
<?php
include ("conexao11.php");
if (isset($_POST['matricula']) && isset($_POST['cargah'])) {
    $matricula=$_POST['matricula'];
    $cargah=$_POST['cargah'];
    $sql = "SELECT * FROM alunos WHERE matricula = '$matricula'";
    $resultado = mysqli_query($conexao, $sql); 
$registro = mysqli_fetch_array($resultado); 
$cargah += $registro['cargah']; 
$sql_2 = "UPDATE alunos SET cargah = $cargah WHERE matricula = '$matricula'";
if(mysqli_query($conexao, $sql_2)) {
    echo "horas alteradas com sucesso!"; 
}
else{
    echo "erro".mysqli_connect_error($conexao); 
}
}
mysqli_close($conexao); 
?>
<br><br><a href="exercicio11.html">TENTAR NOVAMENTE</a><br><br>
<a href="index.html">PÁGINA INICIAL</a> 
</body>
</html>