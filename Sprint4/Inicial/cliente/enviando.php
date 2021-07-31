<?php

    include "../conexao.php";
    session_start();

    if(!empty($_POST)){

        $mensagem = $_POST["mensagem"];
        $hora = date("H") - 5;
        $cpf = $_SESSION["cpf"];
        $resposta = "n";
        $data = date("d\/m\/Y \a\s $hora\:i ");
        
        $query = "insert into contato(data, mensagem, cpf, resposta)
                values('$data', '$mensagem', '$cpf', '$resposta')";

        mysqli_query($conexao, $query) or die ($query);

        $_SESSION["msg"] = true;

        header("location: list_pedido.php");
        exit();
        
    }else{
        header("location: index.php");
        exit();
    }

?>