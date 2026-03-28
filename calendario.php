<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendário</title>
</head>
<body>
    <div name="formulario" align="center">
        <form action="" method="get">
            <label for="data">Insira seu próximo compromisso:</label>
            <br>
            <input type="date" name="compromisso" id="1">
            <input type="submit" value="Enviar!">
        </form>
    </div>
    <br>
    <div name="CalendarioExibir" align="center">
        <table border="1">
            <tr>
                <th colspan="2">Seus compromissos:</th>
            </tr>
            <tr>
                <th>Data:</th>
                <th>Descrição:</th>
            </tr>
            <tr>
                <td>amendobobo</td>
                <td>yeah</td>
            </tr>
        </table>
    </div>

<?php
    $data[] = $_GET['compromisso'];
    if(!empty($data)){
        foreach $dia in $data{
            echo $dia;
        }
    }
    

    
?>
</body>
</html>