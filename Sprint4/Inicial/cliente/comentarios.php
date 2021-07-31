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
            <a href="comentarios.php">Comentarios</a>
        </div><br />
        <form action="comentarios.php" method="post">
            <div>
                <h2>Faça seu comentário aqui:</h2>
                <textarea class="form-control" id="comentario" name="comentario" placeholder="Comente aqui..." rows="6" style="width: 30rem;"></textarea>
                <button type="submit" name="enviar" value="enviar">Enviar</button>
            </div>
        </form>
        <?php
            include "../conexao.php";
            session_start();
            $email = $_SESSION["email"];
            
            if(!empty($_POST)){
                $comentario = $_POST["comentario"];
                $nome = $_SESSION["nome"];
                $avaliacao = 0;
                $id_produto = 0;
                

                $query = "insert into comentario(comentario, nome, email, avaliacao, id_produto)
                values('$comentario', '$nome', '$email', '$avaliacao', '$id_produto')";

                mysqli_query($conexao, $query) or die ($query);
            }
            $select = "SELECT * FROM comentario ";
            $resultado = mysqli_query($conexao,$select)
            or die(mysqli_error($conexao));

            $row = mysqli_num_rows($resultado);

            if($row == 0){
                echo '<p>
                        <h2>Nenhum comentário foi feito no momento.</h2>
                </p>';
            }else{
                $select = "SELECT * FROM comentario";
                $resultado = mysqli_query($conexao,$select)
                or die(mysqli_error($conexao));

                while($linha=mysqli_fetch_assoc($resultado)){
                    echo '
                        <div>
                            <h3>'.$linha["nome"].':</h3>
                            <label>'.$linha["comentario"].'</label>
                        </div>
                    ';
                }
            }
        ?>
        </center>
    </body>
</html>