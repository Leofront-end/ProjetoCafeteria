<?php
    //Incluir arquivo de conexão ao banco de dados
    include "database.php";

     //Recuperando as informações do formulario
     $id_cafeteria = $_POST['id_cafeteria'];
     $Nome_cafeteria = $_POST['Nome_cafeteria'];
     $Descricao_cafeteria = $_POST['Descricao_cafeteria'];
     $Categoria_cafeteria = $_POST['Categoria_cafeteria'];
     $NoEstoque_cafeteria = $_POST['NoEstoque_cafeteria'];
     $Fornecedor_cafeteria = $_POST['Fornecedor_cafeteria'];
     $DataDeCadastro_cafeteria = $_POST['DataDeCadastro_cafeteria'];
     $Preco_cafeteria = $_POST['Preco_cafeteria'];
    
 

    //Construir uma string com comando em SQL
    $sql_update = "UPDATE Gestao SET Nome_cafeteria = '$Nome_cafeteria', Descricao_cafeteria = '$Descricao_cafeteria', Categoria_cafeteria = '$Categoria_cafeteria', NoEstoque_cafeteria = '$NoEstoque_cafeteria', Fornecedor_cafeteria = '$Fornecedor_cafeteria', DataDeCadastro_cafeteria = '$DataDeCadastro_cafeteria', Preco_cafeteria = '$Preco_cafeteria' WHERE Gestao.id = '$id_cafeteria'";
   
    // Criar uma condicional para inserção de valores no banco de dados
    
    if (mysqli_query($conexao, $sql_update)) {
        header("Location: listar_cadastro_cafeteria.php");
    } else {
        echo "Erro ao atualizar";
    }     

