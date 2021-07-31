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
            <a href="index.php">Início Cliente</a> ||
            <a href="list_pedido.php">Lista de pedidos</a>
        </div><br />
        <div class="tabela" >
            <table border="1" class="table table-striped" style="width: 50rem;">
                <thead class="table-primary">
                    <tr>
                        <td>código do pedido</td>
                        <td>nome do produto</td>
                        <td>status</td>
                        <td>mais informações</td>
                        <td>contato</td>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include "../conexao.php";
                    $select = "SELECT id_pedido, nome_produto, status FROM pedido ";
                    $resultado = mysqli_query($conexao,$select)
                        or die(mysqli_error($conexao));
                    $i=0;

                    while($linha=mysqli_fetch_assoc($resultado)){
                        
                        echo "
                            <tr>
                                <td>". $linha["id_pedido"] ."</td>
                                <td>". $linha["nome_produto"] ."</td>
                                <td>". $linha["status"] ."</td>
                                <td><button type='btn' name='".$linha["id_pedido"]."'>ver mais</button></td>
                                <td><button type='btn' name='contato'>Contato</button></td>";
                            echo"</tr>";
                            $i++;
                    }if($i == 0){
                        echo "<tr>
                                <td colspan='5'>Nenhum pedido cadastrado ainda</td>
                            </tr>";
                    }
                ?>
                </tbody>
            </table>
        </div>
        </center>
    </body>
</html>