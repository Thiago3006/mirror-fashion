<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Checkout Mirror Fashion</title>         
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="../css/bootstrap-flatly.css">
        <link rel="stylesheet" href="../css/checkout.css">
         
    </head>
    <body>
       <nav class="navbar navbar-default navbar-static-top">
       
        <div class="navbar-header">
            <a class="navbar-brand" href="../index.php">Mirror Fashion</a>
            <button class="navbar-toggle" type="button"
                data-target=".navbar-collapse" data-toggle="collapse">
                menu
            </button>
        </div>
        <ul class="nav navbar-nav collapse navbar-collapse">
            <li><a href="../sobre.php">Sobre</a></li>
            <li><a href="#">Ajuda</a></li>
            <li><a href="#">Perguntas frequentes</a></li>
            <li><a href="#">Entre em contato</a></li>
        </ul>
        
        </nav>
            
        <div class="jumbotron">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="panel panel panel-defaut">
            
                            <h1>Ótima escolha!</h1>
                            <p>Obrigado por comprar com a Mirror Fashion!
                            Preencha seus dados para efetivar a compra.</p>
                        </div> 
                    </div>
                    <form class="col-sm-8">                     
                            <div class="container">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <form>
                                        <div class="row">
                                            <fieldset class="col-md-6">
                                                <legend>Dados Pessoais</legend>

                                                <div class="form-group">
                                                    <label for="nome">Nome completo</label>
                                                    <input type="text" class="form-control" id="nome" name="nome" autofocus required>
                                                </div>  

                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                                                                                                    
                                                        <input type="email" class="form-control"
                                                                id="email" name="email"
                                                            placeholder="exemplo@exemplo.com">
                                                            
                                                </div>                                                                           

                                                <div class="form-group">
                                                    <label for="cpf">CPF</label>
                                                    <input  type="text" class="form-control" id="cpf" name="cpf"                                                         
                                                        placeholder="000.000.000-00" required>
                                                </div>

                                                <div class="checkbox">
                                                    <label>
                                                    <input type="checkbox" value="sim" name="spam" checked>
                                                    Quero receber spam da Mirror Fashion
                                                    </label>
                                            </fieldset>
                                        
                                            <fieldset class="col-md-6">
                                                <legend>Cartão de crédito</legend>
                                                
                                                <div class="form-group">
                                                    <label for="numero-cartao">Número - CVV</label>
                                                    <input type="text" class="form-control"
                                                        id="numero-cartao" name="numero-cartao">
                                                </div>

                                                <div class="form-group">
                                                    <label for="bandeira=cartao">Bandeira</label>
                                                    <select name="bandeira-cartao" id="bandeira-cartao"
                                                            class="form-control">
                                                        <option value="master">MasterCard</option>
                                                        <option value="visa">VISA</option>
                                                        <option value="amex">American Express</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="validade-cartao">Vaildade</label>
                                                    <input type="month" class="form-control"
                                                        id="validade-cartao" name="validade-cartao">
                                                </div>

                                            </fieldset>
                                        <div>
                                        <button type="submit" class="btn btn-primary pull-right">
                                            <span class="glyphicon glyphicon-thumbs-up"></span>
                                            confirmar Pedido
                                        </button>                                
                                    </form>

                                    <h2 class="panel-tittle">Sua compra</h2>
                                </div>
                                <div class="painel-body">
                                    <img src="../img/produtos/foto<?= $_POST["id"] ?>-<?= $_POST["cor"] ?>.png"
                                        class="img-thumbnail img-responsive">
                                    <dl>
                                        <dt>Produto</dt>
                                        <dd><?= $_POST['nome'] ?></dd>
                                            
                                        <dt>Cor</dt>
                                        <dd><?= $_POST['cor'] ?></dd>

                                        <dt>Tamanho</dt>
                                        <dd><?= $_POST['tamanho'] ?></dd>

                                        <dt>Preço</dt>
                                        <dd><?= $_POST['preco'] ?></dd>
                                    </dl>
                                </div>            
                            </div>
                        </div>
                    </form>  
                </div><!-- fim do .row -->               
            </div><!-- fim do container -->
        </div>
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.js"></script>
        <script src="../js/inputmask-plugin.js"><script>
    </body>
</html>
