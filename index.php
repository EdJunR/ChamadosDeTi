<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <title>Chame Aqui!</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<?php
if (!empty($_GET['opcoes'])) {
    $opcoes = $_GET['opcoes'];
    header("Location: " . $opcoes);
    exit;
}
?>

<body>
    <header>
        <div align="center">
            <h1>Chame aqui!</h1>
            <div align="right">
                <img src="img/sino.png" alt="Imagem de sino pixelada em cor verde, representando o ícone de notificações." class="img">
        </div>
        </header>
        <br>
    <main>
        <div align="center">
            <p>Isso aqui é um teste</p>
            <form method="get">    
                <select name="opcoes" id="opcoes">
                    <option value="usuarios.php">Usuários</option>
                    <option value="index.php">Index</option>
                </select>
                <button type="submit">Navegar!</button>
            </form>
        </div>
    </main>
    <footer>
        
    </footer>
</body>
</html>