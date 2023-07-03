<?php 
session_start();
require_once("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$cor = $_POST["cor"];
$espessura = $_POST["espessura"];
$largura = $_POST["largura"];
$comprimento = $_POST["comprimento"];
$dataHoraAtual = date("Y-m-d H:i:s");

    $query_insert = "INSERT INTO estoque (cor, espessura, largura, comprimento, data_hora) 
                     VALUES ('$cor', '$espessura', '$largura', '$comprimento', '$dataHoraAtual')";

if ($conn->query($query_insert) === TRUE) {
    $_SESSION['msg'] = "<div style='text-align:center;color: green;font-weight: bold'>CADASTRADO COM SUCESSO</div>";
    header("Location: index.php");
} else {
    $_SESSION['msg'] = "<div style='text-align:center;color: red;font-weight: bold'>NÃO CADASTRADO</div>";
    header("Location: index.php");
}
}