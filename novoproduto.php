<?php include 'conecta.php'; ?>
<?php include 'header.php';  ?>

<!-- CTA -->

<section id="cta" class="wrapper style3">
    <div class="container">
        <h1> Cadastrar Produtos </h1>
        <form method="POST" action="processaproduto.php">
            <div class="row gtr-50">                 
                <div class="col-6 col-12-mobilep">
                    <input type="text" name="name" id="name" placeholder="Nome" />
                </div>
                <div class="col-6 col-12-mobilep">
                    <input type="email" name="email" id="email" placeholder="Descrição" />
                </div>
                <div class="col-6 col-12-mobilep">
                    <input type="text" name="name" id="name" placeholder="Quantidade" />
                </div>
                <div class="col-6 col-12-mobilep">
                    <input type="email" name="email" id="email" placeholder="Preço" />
                </div>                
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01">Upload Foto</span>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">                   
                </div>
                <div class="col-12">
                    <ul class="actions">
                        <li><input type="submit" class="button alt" value="Cadastrar" /></li>
                    </ul>
                </div>
            </div>
        </form>
    </div>
</section>


<section class="wrapper style1">
    <div class="container">
        <div class="row">
            <?php
            if (isset($_GET['q'])) {
                $q = $_GET['q'];
                $sql = "select * from produtos where nome like '%" . $q . "%' or descricao like '%" . $q . "%'";
            } else {
                $sql = "select * from produtos limit 0,18";
            }
            $r = mysqli_query($con, $sql);
            $contagem = 1;
            while ($dados = mysqli_fetch_array($r)) {
                if ($dados['quantidade'] > 0) {
            ?>
                    <section class="col-6 col-12-narrower">
                        <div class="box post">
                            <a href="#" class="image left"><img src="images/<?php echo $dados['foto']; ?>" alt="" /></a>
                            <div class="inner">
                                <h3><?php echo $dados['nome']; ?></h3>
                                <p><?php echo $dados['descricao']; ?><br>
                                    <?php echo "R\$ " . $dados['preco'] . ",00"; ?>
                                    <a href="addcarrinho.php?id=<?php echo $dados['idproduto']; ?>">
                                        Adicionar
                                    </a>
                                </p>
                            </div>
                        </div>
                    </section>
            <?php
                    if ($contagem % 2 == 0) {
                        echo "</div><div class=\"row\">";
                    }
                    $contagem++;
                } // fecha if
            } // fecha while 
            ?>
        </div>
    </div>
</section>



<!-- Footer -->
<div id="footer">
    <div class="container">
        <div class="row">
            <section class="col-3 col-6-narrower col-12-mobilep">
                <h3>Links to Stuff</h3>
                <ul class="links">
                    <li><a href="#">Mattis et quis rutrum</a></li>
                    <li><a href="#">Suspendisse amet varius</a></li>
                    <li><a href="#">Sed et dapibus quis</a></li>
                    <li><a href="#">Rutrum accumsan dolor</a></li>
                    <li><a href="#">Mattis rutrum accumsan</a></li>
                    <li><a href="#">Suspendisse varius nibh</a></li>
                    <li><a href="#">Sed et dapibus mattis</a></li>
                </ul>
            </section>
            <section class="col-3 col-6-narrower col-12-mobilep">
                <h3>More Links to Stuff</h3>
                <ul class="links">
                    <li><a href="#">Duis neque nisi dapibus</a></li>
                    <li><a href="#">Sed et dapibus quis</a></li>
                    <li><a href="#">Rutrum accumsan sed</a></li>
                    <li><a href="#">Mattis et sed accumsan</a></li>
                    <li><a href="#">Duis neque nisi sed</a></li>
                    <li><a href="#">Sed et dapibus quis</a></li>
                    <li><a href="#">Rutrum amet varius</a></li>
                </ul>
            </section>
            <section class="col-6 col-12-narrower">
                <h3>Get In Touch</h3>
                <form>
                    <div class="row gtr-50">
                        <div class="col-6 col-12-mobilep">
                            <input type="text" name="name" id="name" placeholder="Name" />
                        </div>
                        <div class="col-6 col-12-mobilep">
                            <input type="email" name="email" id="email" placeholder="Email" />
                        </div>
                        <div class="col-12">
                            <textarea name="message" id="message" placeholder="Message" rows="5"></textarea>
                        </div>
                        <div class="col-12">
                            <ul class="actions">
                                <li><input type="submit" class="button alt" value="Send Message" /></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>

    <!-- Icons -->
    <ul class="icons">
        <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
        <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
        <li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
        <li><a href="#" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
        <li><a href="#" class="icon brands fa-google-plus-g"><span class="label">Google+</span></a></li>
    </ul>

    <!-- Copyright -->
    <div class="copyright">
        <ul class="menu">
            <li>&copy; Untitled. All rights reserved</li>
            <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
        </ul>
    </div>

</div>

</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.dropotron.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>

</html>