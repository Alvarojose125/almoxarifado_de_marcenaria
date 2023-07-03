<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="tela">
    <h1> cadastrar materias</h1>
    <form action="processar.php" method="post">
        <label for="cor">cor :</label>
        <select id="cor" name="cor" required>
            <option value=""></option>
            <option value="preto">preto</option>
            <option value="branco">branco</option>
            <option value="verde">verde</option>
            <option value="azul">azul</option>
            <option value="amarelo">amarelo</option>
        </select><br><br>

        <label for="espessura">espessura :</label>
        <select id="espessura" name="espessura" required>
            <option value=""></option>
            <option value="6">6 mm</option>
            <option value="15">15 mm</option>
            <option value="18">18 mm</option>
            <option value="35">35 mm</option>
            <option value="36">36 mm</option>
        </select><br><br>

        <label for="largura">largura :</label>
        <input type="number" id="largura" name="largura" required><br>

        <label for="comprimento">comprimento :</label>
        <input type="number" id="comprimento" name="comprimento" required><br>

        <input type="submit" value="cadastrar">
        <a href="consulta.php">cosunltar</a>
    </form>
    <?php
    if(isset($_SESSION['msg'])){
              echo $_SESSION['msg'];
              unset($_SESSION['msg']);
            }
          ?>
    </div>
</body>
</html>
