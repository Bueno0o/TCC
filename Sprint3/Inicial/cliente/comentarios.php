<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Web Odonto</title>
        <meta charset="UTF-8" />
        <link href="css/estilo.css" rel="stylesheet">
    </head>
    <body>
        <div class="voltar">
            <button type="btn" name="voltar"><a href="logout.php">logout</a></button>
        </div>
        <center><div class="navegacao">
            <a href="index.php">Início Cliente</a> ||
            <a href="comentarios.php">Comentarios</a>
        </div><br />
        <div class="form_comentario">
            <label>Faça seu comentário aqui:
            <textarea name="comentario" placeholder="Faça seu comentario" ></textarea></label>
        </div>
        <div class="comentarios">
            <p>
                <label>Cliente x</label><br />
                <label>Comentario do cliente, mostrando seu relato e o que ele achou do site</label><br />
                <input type="text" name="resposta" placeholder="responda esse comentario..." />
            </p>
        </div>
        </center>
    </body>
</html>