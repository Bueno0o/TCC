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
        <h1>Digite sua mensagem</h1>
        <div class="mb-3">
            <form action="enviando.php" method="post" >
                <label for="mensagem" class="form-label">Envie sua mensagem aqui:</label>
                <textarea class="form-control" id="mensagem" name="mensagem" placeholder="mensagem aqui..." rows="6" style="width: 60rem;"></textarea>
                <button type="btn" name="enviar" id="form" >Enviar</button>
            </form>
        </div>
        <script>
            $(document).ready(function(){
                $("button[name='enviar']").click(function(){
                    var msg = $("textarea").val();
                    if(msg==""){
                        alert("você precisa escrever algo para enviar uma mensagem.");
                    }
                    $("#form").submit();
                }); 
            });
        </script>
    </body>
</html>