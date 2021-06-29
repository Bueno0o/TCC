<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Web Odonto</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="css/estilo.css" rel="stylesheet"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="css/estilo.css" rel="stylesheet">
    </head>
    <body>
        <div class="navegacao">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="indentificacao.php">Indentificação</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div><br />
        <div class="form">
            <form action="form_funcionario.php" id="form" method="POST">
                <div class="ra">
                    <div class="form-group">
                        <label for="ra">Digite seu ra:</label>
                        <input type="number" class="form-control" name="ra" id="ra" placeholder="Seu ra..." style="width: 40rem;">
                    </div>
                </div>
                <div class="nome">
                    <div class="form-group">
                        <label for="nome">Digite seu nome completo:</label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Seu nome..." style="width: 40rem;">
                    </div>
                </div>
                <div class="telefone">
                    <div class="form-group">
                        <label for="telefone">Digite seu telefone:</label>
                        <input type="number" name="telefone" class="form-control" id="telefone" placeholder="Seu telefone..." style="width: 40rem;">
                    </div>
                </div>
                <div class="email">
                    <div class="form-group">
                        <label for="email">Digite seu email:</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Seu email..." style="width: 40rem;">
                    </div>
                    <div class="form-group">
                        <label for="email_conf">Confirme seu email:</label>
                        <input type="email" name="email_conf" class="form-control" id="email_conf" placeholder="Confirme seu email..." style="width: 40rem;">
                    </div>
                </div>
                <div class="senha">
                    <div class="form-group">
                        <label for="senha">Digite sua senha:</label>
                        <input type="password" name="senha" class="form-control" id="senha" placeholder="Digite sua senha..." style="width: 40rem;"><input type="checkbox" name="exibir" /><label>Exibir senha</label>
                    </div>
                    <div class="form-group">
                        <label for="senha_conf">Confirme sua senha:</label>
                        <input type="password" name="senha_conf" class="form-control" id="senha_conf" placeholder="Confirme sua senha..." style="width: 40rem;">
                    </div>
                </div>
            </form>
                <div class="botoes">
                    <button type="btn" class="btn btn-secondary" name="limpar">limpar</button>
                    <button type="btn" class="btn btn-primary" name="enviar">Enviar</button>
                </div>
        </div>
        <script>
            $(document).ready(function(){
                $("button[name='limpar']").click(function(){
                    $("input").val("");
                });
                $("input[name='exibir']").change(function(){
                    var checando = $("input[name='exibir']").is(":checked");
                    if(checando==true){
                        $("input[name='senha']").prop('type', 'text');
                        $("input[name='senha_conf']").prop('type', 'text');
                    }else{
                        $("input[name='senha']").prop('type', 'password');
                        $("input[name='senha_conf']").prop('type', 'password');
                    };
                });
            });
        </script>
    </body>
</html>