<?php 
    // 1ª Incluir o arquivo de conexão com o banco de dados
    include 'database.php';

    // 2ª Declarou uma variavel que recebera o comando em SQL que sera executado
    $sql_listar = "SELECT * FROM Gestao";

    // 3 ª Declarar uma variavel que irá receber o resultado da função mysqli_query ao qual ira realiza a conexão com o banco de dados e executa o coamdo em SQL
    $resultado = mysqli_query($conexao, $sql_listar);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/listar.css">
    <link rel="shortcut icon" href="./img/ListarIcone.png" type="image/x-icon">
    <title>Lista Cadastro</title>
</head>
<body>
    <header>
        <a href="index.php" class="voltar"><img src="./img/VoltarIcone.png" alt="Voltar a pagina anterior"></a>
        <h1>Lista de produtos</h1>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th>Produto :</th>
                    <th>Descrição: </th>
                    <th>Categoria: </th>
                    <th>Estoque: </th>
                    <th>Fornecedor: </th>
                    <th>Data de cadastro: </th>
                    <th>Preço: </th>
                    <th>Atualizar: </th>
                    <th>Excluir:</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($dados = mysqli_fetch_assoc($resultado)){
                ?>
                <tr>
                    <td><?php echo $dados['Nome_cafeteria']; ?></td>
                    <td><?php echo $dados['Descricao_cafeteria']; ?></td>
                    <td><?php echo $dados['Categoria_cafeteria']; ?></td>
                    <td><?php echo $dados['NoEstoque_cafeteria']; ?></td>
                    <td><?php echo $dados['Fornecedor_cafeteria']; ?></td>
                    <td><?php echo $dados['DataDeCadastro_cafeteria']; ?></td>
                    <td><?php echo $dados['Preco_cafeteria']; ?></td>
                    <td><a href="form_atualizar_cadastro.php?id_cafeteria=<?php echo $dados['id'];?>">Atualizar</a></td>
                    <td><a href="excluir_cadastro.php?id_cafeteria=<?php echo $dados['id']; ?>">Excluir</a></td>
                </tr>
                <?php
                    }
                ?>
        
            </tbody>
        
        </table>

    </main>
</body>
</html>