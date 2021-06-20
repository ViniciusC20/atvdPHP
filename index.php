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
        $servername = ""; $username = "";
        $password = ""; $dbname = "";

        try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Parabens Banco de Dados Conectado!!";
        } catch(PDOException $a) {
        echo "Falha na Conexão - ERRO: " . $a->getMessage();
        }
    ?>
    <br> <br>
    <a href="criacao/insercao.php">Inserir</a> Dados na Tabela
    <br> <br>
    <a href="verificar.php">verificar</a> Tabela
</body>
</html>