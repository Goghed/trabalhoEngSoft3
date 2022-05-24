<?php include 'conecta.php'; ?>
<!-- Posts -->
<?php
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];

// comando para inserir dados 
$sql = "insert into clientes
            (   nome, 
                telefone, 
                endereco,
                cidade,
                estado,
                cep
            )
            values 
            (   
                '$nome', 
                '$telefone', 
                '$endereco',
                '$cidade', 
                '$estado',
                '$cep'
            )";

// executar e inserir no banco de dados 
mysqli_query($con, $sql);

?>