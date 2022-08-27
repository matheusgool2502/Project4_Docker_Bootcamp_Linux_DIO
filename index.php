<html>

<head>
<title>MEU BANCO PHP</title>
</head>
<body>

<?php
ini_set("display_errors", 1);
header('Content-Type: text/html; charset=iso-8859-1');



echo 'Versao Atual do PHP: ' . phpversion() . '<br>';

$servername = "15.228.242.80";
$username = "ubuntu";
$password = "01208";
$database = "meuBanco";

// Criar conexão


$link = new mysqli($servername, $username, $password, $database);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$valor_rand1 =  rand(1, 999);
$valor_rand2 = strtoupper(substr(bin2hex(random_bytes(4)), 1));
$host_name = gethostname();


$query = "INSERT INTO dadosCliente (ClienteID, Nome, Sobrenome, Endereco, Cidade, Telefone, Email Host) VALUES ('$valor_rand1' , '$valor_rand2', '$valor_rand2', '$valor_rand2', '$valor_rand2', '$valor_rand2', '$valor_rand2','$host_name')";
$query = "INSERT INTO dadosProduto (ProdutoID, Nome) VALUES ('$valor_rand1' , '$valor_rand2')";


if ($link->query($query) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $link->error;
}

?>
</body>
</html>
