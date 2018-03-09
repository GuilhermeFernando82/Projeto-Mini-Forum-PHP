<!DOCTYPE html>
<html>
<head>
    <title>Categoria Material</title>
</head>
<body>
<?php
        include("conexao.php");

        $id = addslashes(htmlspecialchars($_GET['id']));
        
        $sql = "SELECT * FROM m1 WHERE id='$id' ORDER BY id DESC";

        $coment = $pdo->query("SELECT * FROM comentario WHERE id_noticia= '$id'");
        $sql = $pdo->query($sql);
        
        $sql2 = $pdo->query($sql2);
        $cate = 'Material';
        $teste = $pdo->query("SELECT * FROM m1 WHERE categoria='$cate'");

        
        if ($teste->rowcount() > 0){
                foreach ($sql->fetchAll() as $variavel){

                echo "<h1 style='text-align:center'>".$variavel['titulo']."</h1>";
                echo "<p style='text-align:center'>".$variavel['texto']."</p>";
                echo "<h3>"."Publicado por usuário: ".$variavel['user']."</h3>";
              



                echo "<form method='POST' action='enviar1.php'>"."<textarea name=coment>"."</textarea>"."<input name='idnoticia' type='hidden' value='$id'/>"."<br>"."<input type='submit' value='comentar'/>"."</form>";
               
                
                  
            }


                               

        
         foreach ($coment->fetchAll() as $value){
                     echo "Usuário: ".$value['user']." Comentou: ".$value['comentarios']."<br>";

                }
            }

        
                        
          
        
        ?>
</body>
</html>
