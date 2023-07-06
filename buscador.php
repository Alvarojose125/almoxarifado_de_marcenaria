<?php
session_start();
require_once("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cor = $_POST["cor"];
    $espessura = $_POST["espessura"];
    $largura = $_POST["largura"];
    $comprimento = $_POST["comprimento"];

    $sql = "SELECT * FROM estoque WHERE cor = ? AND espessura = ? AND largura >= ? AND comprimento >= ?";
    
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssii", $cor, $espessura, $largura, $comprimento);
    $stmt->execute();
    $resultado = $stmt->get_result();

    
    $dados = array();

    
    while ($row = $resultado->fetch_assoc()) {
        $dados[] = $row;
    }

    
    $_SESSION["dados"] = $dados;


    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["excluir"])) {
        $excluir = $_POST["excluir"];
    
        
        $sqlExcluir = "DELETE FROM estoque WHERE codigo = '$excluir' ";
        $conn->query($sqlExcluir);
    
        

    
}
header("Location: consulta.php");
}
?>
