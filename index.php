<?php include("php/cabecalho.php"); ?>

<div class="container destaque">
    <section class="busca">
        <h2> Busca </h2>

        <form action="http://www.google.com.br/search" id="form-busca">
            <input type="search" name="q" id="q">
            <input type="image" src="img/busca.png">
            
        </form>
    </section><!-- fim .buca-->

    <section class="menu-departamentos">
            <h2>Departamentos</h2>  

            <nav>
                <ul>
                    <li><a href="#">Blusas e Camisas</a>
                        <ul>
                            <li><a href="#">Manga curta</a></li>
                            <li><a href="#">Manga comprida</a></li>
                            <li><a href="#">Camisa social</a></li>
                            <li><a href="#">Camisa casual</a></li>
                        </ul>
                    </li>    
                    <li><a href="#">Calças</a></li>
                    <li><a href="#">Saias</a></li>
                    <li><a href="#">Vestidos</a></li>
                    <li><a href="#">Sapatos</a></li>
                    <li><a href="#">Bolsas e Carteiras</a></li>
                    <li><a href="#">Acessórios</a></li>
                </ul>
            </nav>
               
    </section><!--fim .menu-departamentos-->

<img src="img/destaque-home.png" alt="promoção: Big City Night">
</div><!-- fim. container .destaque-->


<div class="container paineis">
    <!-- os paineis de novidades e mais vendidos entrarão aqui dentro-->

    <section class="painel novidades">
    <h2> Novidades</h2>
    <ol>
        <?php
            $conexao = mysqli_connect("127.0.0.1", "root", "", "mirrorfashion");
            $dados = mysqli_query($conexao,"SELECT * FROM produtos ORDER BY data DESC LIMIT  0, 12");

            while ($produto = mysqli_fetch_array($dados)):
        ?>

        <li>
            <a href="produto.php?id=<?= $produto['id'] ?>">
             <figure>
              <img src="img/produtos/miniatura<?= $produto['id'] ?>.png"
                    alt="<?= $produto['nome'] ?>">
              <figcaption><?= $produto['nome'] ?> por <?= $produto['preco'] ?></figcaption>
             </figure>
            </a>
        </li>

        <?php endwhile; ?>
        
    </ol>
    <button type="button">Mostra mais</button>
</section>

<section Class="painel mais-vendidos">
    <h2> Mais Vendidos</h2>
    <ol>
        
        <?php
            $conexao = mysqli_connect("127.0.0.1", "root", "", "mirrorfashion");
            $dados = mysqli_query($conexao,"SELECT * FROM produtos ORDER BY vendas DESC LIMIT  0, 12");

            while ($produto = mysqli_fetch_array($dados)):
        ?>

        <li>
            <a href="produto.php?id=<?= $produto['id'] ?>">
             <figure>
              <img src="img/produtos/miniatura<?= $produto['id'] ?>.png"
                    alt="<?= $produto['nome'] ?>">
              <figcaption><?= $produto['nome'] ?> por <?= $produto['preco'] ?></figcaption>
             </figure>
            </a>
        </li>

        <?php endwhile; ?>
    </ol>
    <button type="button">Mostra mais</button>
</section>
</div>
<footer>
    <div class="container">
        <img src="img/logo-rodape.png" alt="Logo Mirror Fashion">
        <ul class="social">
            <li><a href="http://facebook.com/mirrorfashion">Facebook</a></li>
            <li><a href="http://twitter.com/mirrorfashion">Twitter</a></li>
            <li><a href="http://plus.google.com/mirrorfashion">Google+</a></li>
        </ul>
    </div>
</footer>
<script src="js/jquery.js"></script>
<script src="js/home.js"></script>
<script src="js/less.js"></script>



</body>
</html>
