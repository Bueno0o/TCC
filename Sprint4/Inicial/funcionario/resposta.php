<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Web Odonto</title>
        <meta charset="UTF-8" />
        <link href="css/estilo.css" rel="stylesheet">
        <link href="css/estilo.css" rel="stylesheet"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="../js/jquery-3.5.1.min.js" ></script>
        <script src="../js/md5.js" ></script>
    </head>
    <body>
        <div class="voltar">
            <button type="btn" name="voltar"><a href="logout.php">logout</a></button>
        </div>
        <center><div class="navegacao">
            <a href="index.php">Início Funcionário</a> ||
            <a href="list_pedido.php">Lista de pedidos</a>
        </div><br />
        <?php
            include "../conexao.php";
            $resposta = "n";
            $select = "SELECT data, mensagem, cpf, resposta FROM contato WHERE resposta = '{$resposta}'";
            $resultado = mysqli_query($conexao,$select)
            or die(mysqli_error($conexao));
            $i=0;

            while($linha=mysqli_fetch_assoc($resultado)){
                $cpf = $linha["cpf"];
                $sql = "SELECT cpf, email, nome, telefone FROM cliente WHERE cpf = '{$cpf}'";
                $result = mysqli_query($conexao,$sql)
                or die(mysqli_error($conexao));

                while($lin=mysqli_fetch_assoc($result)){
                    echo'
                        <div><fieldset><form action="respondendo.php" id="form" method="post"> 
                            <h2>Cliente:'.$lin["nome"].' na data: '.$linha["data"].', enviou isso:</h2><br />
                            <label>'.$linha["mensagem"].'</label>
                            <textarea class="form-control" id="resposta" name="resposta" placeholder="Responda aqui..." rows="6" style="width: 40rem;"></textarea>
                            <button type="btn" name="enviar" value="'.$linha["cpf"].'">enviar</button>
                        </form></fieldset></div>
                    ';
                }
            }
        ?>
    </body>
</html>