<?php

    $servidor = "localhost";
    $servidor_user = "root";
    $servidor_password = "";
    $data_base = "Cafeteria";

    //Declarar variavel para receber a função de conexão ao banco de dados 
    $conexao = mysqli_connect($servidor, $servidor_user, $servidor_password, $data_base);

