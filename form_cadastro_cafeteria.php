<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=devide-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/cadastro.css">
        <link rel="shortcut icon" href="./img/FormIcone.png" type="image/x-icon">
        <title>Cadastro de Produtos </title>
    </head>
    <body>
        <header>
        <a href="index.php" class="voltar"><img src="./img/VoltarIcone.png" alt="Voltar a pagina anterior"></a>
            <h1> Formulario de cadastro de produtos </h3>
        </header>

        <main>
            <form action="cadastro_cafeteria.php" method="post">
                <label for="Nome_cafeteria" class="minhaClasse">Produto: </label>
                <input type="text" name="Nome_cafeteria" id="Nome_cafeteria" placeholder="Informe seu produto: " required>

                <label for="Descricao_cafeteria">Descrição: </label>
                <input type="text" name="Descricao_cafeteria" id="Descricao_cafeteria" placeholder="Informe a descrição: ">

                <label for="Categoria_cafeteria">Categoria: </label>
                <input type="text" name="Categoria_cafeteria" id="Categoria_cafeteria" placeholder="Informe a categoria: " required>

                <label for="NoEstoque_cafeteria">Quantidade no estoque: </label>
                <input type="text" name="NoEstoque_cafeteria" id="NoEstoque_cafeteria" placeholder="Informe a quantidade no estoque: " required>

                <label for="Fornecedor_cafeteria">Fornecedor: </label>
                <input type="text" name="Fornecedor_cafeteria" id="Fornecedor_cafeteria" placeholder="Informe seu fornecedor: " required>
            
                <label for="DataDeCadastro_cafeteria">Data de Cadastro: </label>
                <input type="text" name="DataDeCadastro_cafeteria" id="DataDeCadastro_cafeteria" placeholder="Informe a data de cadastro: " required>

                <label for="Preco_cafeteria">Preço: </label>
                <input type="text" name="Preco_cafeteria" id="Preco_cafeteria" placeholder="Informe o preço: " required>

                <input type="submit" value="Cadastrar" class="Enviar">
            </form>
            
        </main>
        
    </body>
</html>