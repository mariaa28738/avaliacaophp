<!DOCTYPE html>
<html lang="pt-BR">
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        .forms-container {
            display: flex;
            justify-content: space-around;
            margin-bottom: 20px;
        }
        form {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 8px;
            width: 45%;
        }
        label, select, input {
            display: block;
            margin-bottom: 10px;
            width: 100%;
        }
        table {
            margin: 20px auto; 
            width: 90%; 
            border-collapse: collapse;
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
    <h1>Gerenciamento de Alunos</h1>
    
    <div class="forms-container">
        <!-- Formulário de Pesquisa -->
        <form action="pesquisar12.php" method="post">
            <h2>Inserir Informação do Aluno</h2>
            <label for="opcao">Escolha a opção de busca:</label>
            <select id="opcao" name="opcao">
                <option value="nome">Nome</option>
                <option value="matricula">Matrícula</option>
                <option value="email">Email</option>
            </select>

            <label for="texto">Digite a informação:</label>
            <input type="text" id="texto" name="texto" required>

            <input type="submit" value="Pesquisar">
        </form>

        <!-- Formulário de Exclusão -->
        <form action="excluir12.php" method="post">
            <h2>Excluir Aluno</h2>
            <label for="opcao">Escolha a opção para excluir:</label>
            <select id="opcao" name="opcao">
                <option value="nome">Nome</option>
                <option value="matricula">Matrícula</option>
                <option value="email">Email</option>
            </select>

            <label for="texto">Digite a informação para excluir:</label>
            <input type="text" id="texto" name="texto" required>

            <input type="submit" value="Excluir">
        </form>
    </div>

    <h2>Lista de Alunos</h2>
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
        $sql = "SELECT * FROM alunos";
        $resultado = mysqli_query($conexao, $sql);

        if ($resultado) {
            while ($registro = mysqli_fetch_assoc($resultado)) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($registro['nome']) . "</td>";
                echo "<td>" . htmlspecialchars($registro['matricula']) . "</td>";
                echo "<td>" . htmlspecialchars($registro['curso']) . "</td>";
                echo "<td>" . htmlspecialchars($registro['email']) . "</td>";
                echo "<td>" . htmlspecialchars($registro['telefone']) . "</td>";
                echo "<td>" . htmlspecialchars($registro['endereco']) . "</td>";
                echo "<td>" . htmlspecialchars($registro['cep']) . "</td>";
                echo "<td>" . htmlspecialchars($registro['cidade']) . "</td>";
                echo "<td>" . htmlspecialchars($registro['uf']) . "</td>";
                echo "<td>" . htmlspecialchars($registro['cursohoras']) . "</td>";
                echo "<td>" . htmlspecialchars($registro['cargah']) . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='11'>Nenhum registro encontrado</td></tr>";
        }

        mysqli_close($conexao);
        ?>
    </table>
    <br>
    <a class="link" href="index.html">PÁGINA INICIAL</a> 
</div>
</body>
</html>
