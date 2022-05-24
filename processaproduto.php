<?php include 'conecta.php'; ?>
<!-- Posts -->
<?php
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$foto = $_POST['foto'];
$descricao = $_POST['descricao'];
$quantidade = $_POST['quantidade'];

// comando para inserir dados 
$sql = "insert into produtos
            (   nome, 
                preco, 
                foto,
                descricao,
                quantidade
            ) 
            values 
            (   '$nome', 
                '$preco', 
                '$foto',
                '$descricao', 
                '$quantidade'
            )";

// executar e inserir no banco de dados 
mysqli_query($con, $sql);

?>