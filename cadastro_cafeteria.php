<?php
    //Incluir arquivo de conexão ao banco de dados
    include "database.php";

     //Recuperando as informações do formulario
     $Nome_cafeteria = $_POST['Nome_cafeteria'];
     $Descricao_cafeteria = $_POST['Descricao_cafeteria'];
     $Categoria_cafeteria = $_POST['Categoria_cafeteria'];
     $NoEstoque_cafeteria = $_POST['NoEstoque_cafeteria'];
     $Fornecedor_cafeteria = $_POST['Fornecedor_cafeteria'];
     $DataDeCadastro_cafeteria = $_POST['DataDeCadastro_cafeteria'];
     $Preco_cafeteria = $_POST['Preco_cafeteria'];
 

    //Construir uma string com comando em SQL
    $sql = "INSERT INTO Gestao (Nome_cafeteria, Descricao_cafeteria, Categoria_cafeteria, NoEstoque_cafeteria, Fornecedor_cafeteria, DataDeCadastro_cafeteria, Preco_cafeteria) VALUES ('$Nome_cafeteria', '$Descricao_cafeteria', '$Categoria_cafeteria', '$NoEstoque_cafeteria', '$Fornecedor_cafeteria', '$DataDeCadastro_cafeteria', '$Preco_cafeteria')";
   
    // Criar uma condicional para inserção de valores no banco de dados
    
    if (mysqli_query($conexao, $sql)) {
        header("Location: listar_cadastro_cafeteria.php");
    } else {
        echo "Erro ao cadastrar";
    }

