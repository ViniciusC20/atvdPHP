<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir</title>
</head>
<corpo>
    <?php
        $servername = "" ;
        $sername = "" ;
        $password = "" ;
        $dbname = "" ;

        tente {
        $conn = new  PDO ( "mysql: host = $ servername; dbname = $ dbname; charset = utf8" , $username , $password );
        $conn -> setAttribute ( PDO :: ATTR_ERRMODE , PDO :: ERRMODE_EXCEPTION );
        $sql = "INSERT INTO dadosescolares (Aluno, Disciplina, Nota_I, Nota_II)
        VALORES ('Viniciu', 'IHC', '9', '10') " ;
        $conn -> exec ( $sql );
        echo  "Parabén Novo Cadastro Realizado!!" ;
        } catch ( PDOException  $e ) {
        echo  $sql . "<br>" . $e -> getMessage ();
        }
        $conn = null ;
    ?>
</body >
</html >