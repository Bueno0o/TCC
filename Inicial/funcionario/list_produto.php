<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Web Odonto</title>
        <meta charset="UTF-8" />
        <link href="css/estilo.css" rel="stylesheet">
    </head>
    <body>
        <div class="voltar">
            <button type="btn" name="voltar"><a href="../index.php">Voltar</a></button>
        </div>
        <center><div class="navegacao">
            <a href="index.php">Início Funcionário</a> ||
            <a href="list_produto.php">Lista de Produtos</a>
        </div><br />
        <div class="tabela">
            <table border="1">
                <thead>
                    <tr>
                        <td>código do produto</td>
                        <td>nome do produto</td>
                        <td>quantidade</td>
                        <td>mais informações</td>
                        <td>Alterar</td>
                        <td>Excluir</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="6">Você ainda não cadastrou nenhum produto</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="cadastrar">
            <button type="btn" name="cadastrar_produto"><a href="cadastro_produto.php">Cadastro produto</a></button>
        </div>
        </center>
    </body>
</html>