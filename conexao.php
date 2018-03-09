	<?php

	try {
        $dns = "mysql:dbname=nomedobanco;host=localhost";
        $user = "usuáriodobanco";
        $pass = "senha";
        $pdo = new PDO($dns, $user, $pass);
    }catch (PDOException $e){
        echo "Falha: ". $e->getMessage();
    }

    ?>