<?php 

$host = "localhost";
$nameuser = "root";
$password = "";
$database = "slimframework";

try{
    $pdo =new PDO(("pgsql:host=$host;dbname=$database"),$nameuser,$password);

} catch(PDOException $e) {
    
    echo "Erro ao conectar com o banco de dados: " . $e->getMessage();

}
?>