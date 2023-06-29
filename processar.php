<?php 
session_start();
require_once("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$cor = $_POST["cor"];
$espessura = $_POST["espessura"];
$largura = $_POST["largura"];
$comprimento = $_POST["comprimento"];

$query_insert = "INSERT INTO estoque(cor, espessura, largura, comprimento) VALUES ('$cor','$espessura','$largura','$comprimento')";

if ($conn->query($query_insert) === TRUE) {
    $_SESSION['msg'] = "<div style='text-align:center;color: green;font-weight: bold'>CADASTRADO COM SUCESSO</div>";
    header("Location: index.php");
} else {
    $_SESSION['msg'] = "<div style='text-align:center;color: #d90404;font-weight: bold'>NÃO CADASTRADO</div>";
    header("Location: index.php");
}
}