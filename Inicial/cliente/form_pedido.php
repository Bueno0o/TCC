<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Web Odonto</title>
        <meta charset="UTF-8" />
        <link href="css/estilo.css" rel="stylesheet">
    </head>
    <body>
    <div class="voltar">
            <button type="btn" name="voltar"><a href="index.php">Voltar</a></button>
        </div>
        <center><div class="navegacao">
            <a href="index.php">Início Cliente</a> ||
            <a href="form_pedido.php">Formulário pedidos</a>
        </div><br />
        <div class="formulario_pedido">
            <p>
                <label>Nome do produto:
                <input type="text" name="nome_produto" placeholder="nome..." /></label>
            </p>
            <p>
                <input type="radio" name="caiu" />
                <label>O produto caiu em algum momento?</label>
            </p>
            <p>
                <input type="radio" name="abriu" />
                <label>O produto foi aberto em algum momento?</label>
            </p>
            <p>
                <input type="radio" name="liga" />
                <label>O produto liga ou apresenta algum sinal?</label>
            </p>
            <p>
                <label>Faça seu relato em detales sobre o que esta acontecendo com o produto:</label>
                <textarea name="nome_produto" placeholder="relato..." ></textarea>
            </p>
        </div>
        </center>
    </body>
</html>