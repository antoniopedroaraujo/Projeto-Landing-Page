<?php
// Configurações do banco de dados
$servername = "localhost";
$username = "usuario";
$password = "senha";
$dbname = "xadrez";

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Obtém os valores do formulário
$nome = $_POST['inome'];
$email = $_POST['iemail'];
$telefone = $_POST['itel'];

// Prepara e executa a query SQL para inserir os dados no banco de dados
$sql = "INSERT INTO participantes (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";

if ($conn->query($sql) === TRUE) {
    echo "Registro inserido com sucesso!";
} else {
    echo "Erro ao inserir registro: " . $conn->error;
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
