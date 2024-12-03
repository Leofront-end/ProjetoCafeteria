<?php 
    //1º incluir o arquivo de conexão com o banco de dados
    include "database.php";

    //2º Resgatar o id passado via GET
    $id_cafeteria = $_GET['id_cafeteria'];

    //3º Declarar uma variavel para receber a instrução de SQL
    $sql_por_id = "SELECT * FROM Gestao WHERE Gestao.id = '$id_cafeteria' ";

    //4º Declarar uma variavel para executar a funçao mysqli_query que necessita de dois parametros, sendo eles, a variavel de conexão ao banco de dados e a instrução  em SQL
    $resultado_consulta_por_id = mysqli_query($conexao, $sql_por_id);

    //5º Declarar uma variavel para receber a funcção que converte o resultado em um array associativo 
    $dados_id = mysqli_fetch_assoc($resultado_consulta_por_id);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=], initial-scale=1.0">
        <link rel="stylesheet" href="css/cadastro.css">
        <link rel="shortcut icon" href="./img/FormIcone.png" type="image/x-icon">
        <title>Atualizar Cadastro de Alunos </title>
    </head>
    <body>
        <header>
        <a href="listar_cadastro_cafeteria.php" class="voltar"><img src="./img/VoltarIcone.png" alt="Voltar a pagina anterior"></a>
            <h1> Formulario de atualização de cadastro dos produtos </h1>
        </header>

        <main>
            <form action="atualizar_cadastro_cafeteria.php" method="post">
                <input type="hidden" name="id_cafeteria" value=<?php echo $dados_id['id']; ?>>

                <label for="Nome_cafeteria" class="minhaClasse">Nome: </label>
                <input type="text" name="Nome_cafeteria" id="Nome_cafeteria"  value=<?php echo $dados_id['Nome_cafeteria']; ?>>

                <label for="Descricao_cafeteria">Descrição: </label>
                <input type="text" name="Descricao_cafeteria" id="Descricao_cafeteria" value=<?php echo $dados_id['Descricao_cafeteria']; ?> >

                <label for="Categoria_cafeteria">Categoria: </label>
                <input type="text" name="Categoria_cafeteria" id="Categoria_cafeteria" value=<?php echo $dados_id['Categoria_cafeteria']; ?>>

                <label for="NoEstoque_cafeteria">Estoque: </label>
                <input type="text" name="NoEstoque_cafeteria" id="NoEstoque_cafeteria" value=<?php echo $dados_id['NoEstoque_cafeteria']; ?>>

                <label for="Fornecedor_cafeteria">Fornecedor: </label>
                <input type="text" name="Fornecedor_cafeteria" id="Fornecedor_cafeteria" value=<?php echo $dados_id['Fornecedor_cafeteria']; ?>>

                <label for="DataDeCadastro_cafeteria">Data de Cadastro: </label>
                <input type="text" name="DataDeCadastro_cafeteria" id="DataDeCadastro_cafeteria" value=<?php echo $dados_id['DataDeCadastro_cafeteria']; ?>>

                <label for="Preco_cafeteria">Preço: </label>
                <input type="text" name="Preco_cafeteria" id="Preco_cafeteria" value=<?php echo $dados_id['Preco_cafeteria']; ?>>

                <input type="submit" value="Atualizar" class="Enviar">
            </form>
            
        </main>
    </body>
</html>