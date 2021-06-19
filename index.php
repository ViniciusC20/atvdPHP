<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01Atividade</title>
</head>
<body>
    <h1>Primeira Atividade</h1>
    <?php
        $servername = "bmlx3df4ma7r1yh4.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
        $username = "vkq7duqk43riyga7";
        $password = "x45hrl24syx3vm75";
        $dbname = "tillepja9tm4a3ce";

        try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
        // Modo de erro na exceção
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Parabens Banco de Dados Conectado!!";
        } catch(PDOException $e) {
        echo "Falha na Conexão - ERRO: " . $e->getMessage();
        }
    ?>

    <br>

    <a href="criacao/insercao.php">Inserir</a> Dados na Tabela
    <br>
    <a href="verificar.php">verificar</a> Tabela
</body>
</html>