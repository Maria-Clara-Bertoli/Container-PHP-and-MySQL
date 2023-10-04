<?php
$hostname = 'db'; // Hostname do servidor MySQL
$username = 'root'; // Nome de usuário do MySQL
$password = '123'; // Senha do MySQL
$database = 'sociedade'; // Nome do banco de dados MySQL

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
die("Falha na conexão: " . $conn->connect_error);
}

$sql = "SELECT * FROM pessoa";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
// Iterar pelos resultados e exibir os dados
while ($row = $result->fetch_assoc()) {
echo "ID: " . $row["id"] . "<br>";
echo "Nome: " . $row["nome"] . "<br>";
echo "Idade: " . $row["idade"] . "<br>";
echo "Profissao: " . $row["profissao"] . "<br>";
echo "<hr>";
}
} else {
echo "Nenhum registro encontrado.";
}

$conn->close();
?>
