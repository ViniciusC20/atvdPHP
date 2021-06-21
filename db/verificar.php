<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verficar</title>
</head>
<body>
    <?php
        echo "<table style='border: solid 1px black;'>";
        echo "<tr><th>Id</th><th>Aluno</th><th>Disciplina</th><th>Nota 1</th><th>Nota 2</th></tr>";
        class TableRows extends RecursiveIteratorIterator {
        function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }
    function current() {
            return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }
    function beginChildren() {
            echo "<tr>";
    }
    function endChildren() {
            echo "</tr>" . "\n";
}}
        $servername = "";  $username = "";
        $password = "";  $dbname = "";
        try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT id, Aluno, Disciplina, Nota_I, Nota_II FROM dadosescola");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
            echo $v;
    }
        } catch(PDOException $a) {
        echo "Error: " . $a->getMessage();
    }
        $conn = null;
        echo "</table>";
    ?>
</body>
</html>