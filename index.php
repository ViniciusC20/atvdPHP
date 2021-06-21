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
        echo " ERRO, na Conexão: " . $a->getMessage();
        }
    ?>
    <br> <br>
    <a href="criacao/inerir.php">Inserir</a> dados da Tabela
    <br> <br>
    <a href="verificar.php">verificar</a> a tabela
</body>
</html>