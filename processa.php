<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$cep = $_POST['cep'];
$pagamento = $_POST['pagamento'];

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Pedido Recebido</title>
</head>

<body style="background-color: #2b0030; color: white; font-family: Arial; padding: 20px;">

    <h1>Pedido realizado com sucesso!</h1>

    <h2>Dados do Cliente:</h2>
    <p><strong>Nome:</strong> <?php echo $nome; ?></p>
    <p><strong>Email:</strong> <?php echo $email; ?></p>
    <p><strong>Telefone:</strong> <?php echo $telefone; ?></p>

    <h2>Endereço:</h2>
    <p><?php echo $endereco; ?> - <?php echo $cidade; ?> (<?php echo $cep; ?>)</p>

    <h2>Pagamento:</h2>
    <p><?php echo $pagamento; ?></p>

</body>

</html>