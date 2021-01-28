<!DOCTYPE html>
<html>
    <?php
        $conexao = mysqli_connect("127.0.0.1", "root", "","mirrorfashion");
        $dados = mysqli_query($conexao, "SELECT * FROM produtos WHERE id = $_GET[id]");
        $produtos = mysqli_fetch_array($dados);
    ?>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title><?= $produtos['nome'] ?></title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/estilos_2.css">
        <link rel="stylesheet" href="css/produto_2.css">
        <link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">
                
    </head>
    <body>
        <?php include("php/cabecalho.php"); ?>
        <!-- Implementar o fundo cinza em tela cheia -->
        <div class="produto-back">
            <!-- envolvendo a div produto pela nova div para atuar em páginas maiores-->
            <div class="container">
                <div class="produto">
                    <h1><?= $produtos['nome'] ?></h1>
                    <p>por apenas <?= $produtos['preco'] ?></p>
                    <!-- Altere a tag form para apontar para a pagina ckeckout.php -->
                    
                    <form action="php/checkout.php"method="POST">                    
                                   
                        <input type="hidden" name="id" value="<?= $produtos['id'] ?>">                      
                        <input type="hidden" name="nome" value="<?= $produtos['nome'] ?>">
                        <input type="hidden" name="preco" value="<?= $produtos['preco'] ?>">

                        
                        <fieldset class="cores">
                            <legend>Escolha a cor:</legend>
                            <input type="radio" name="cor" value="verde" id="verde" checked>
                            <label for="verde">
                                <img src="img/produtos/foto<?= $produtos['id'] ?>-verde.png">
                            </label>
                
                            <input type="radio" name="cor" value="rosa" id="rosa">
                            <label for="rosa">
                                <img src="img/produtos/foto<?= $produtos['id'] ?>-rosa.png" alt="rosa">
                            </label>
                
                            <input type="radio" name="cor" value="azul" id="azul">
                            <label for="azul">
                                <img src="img/produtos/foto<?= $produtos['id'] ?>-azul.png" alt="azul">
                            </label>
                    
                        </fieldset>
                        <!-- Implementando a funcionalidade de escolher o tamanho -->
                        <fieldset class="tamanhos">
                            <legend>Escolha o tamanho:</legend>
                            <input type="range" min="36" max="46" value="42" setp="2" name="tamanho" id="tamanho">
                            <output for="tamanho" name="valortamanho">42</output>
                        </fieldset>

                        <input type="submit" class="comprar" value="Comprar">
                    </form>
                </div>
        
                <div class="detalhes">
                    <h2>Detalhes do produto</h2>
                
                    <p><?= $produtos['descricao'] ?></p>
                    <table>
                        <thead>
                            <tr>
                                <th>Característica</th>
                                <th>Detalhe</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Modelo</td>
                                <td>Cardigã</td>
                            </tr>
                            <tr>
                                <td>Material</td>
                                <td>Algodão e poliester</td>
                            </tr>
                            <tr>
                                <td>Cores</td>
                                <td>Azul, Rosa e Verde</td>
                            </tr>
                        </tbody>
                    </table>    
                </div>
            </div>
        </div>
        <script src="js/jquery.js"></script>
        <script src="js/produto.js"></script>
       <?php include("php/rodape.php"); ?>
    </body>
</html>