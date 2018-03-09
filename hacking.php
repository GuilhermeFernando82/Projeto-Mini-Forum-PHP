<!DOCTYPE html>
<html>
<head>
    <title>Categoria Hacking</title>
</head>
<body>
        <?php  
        //conexão com o banco de dados
        include("conexao.php");
        //protegendo contra sql injection e xss
        $id = addslashes(htmlspecialchars($_GET['id']));

        //selecionando a tabela h1 no banco de dados
        $sql = "SELECT * FROM h1 WHERE id='$id' ORDER BY id DESC";
        
        //selecionando a tabela comentários do banco, onde será exibido os comentários
        $coment = $pdo->query("SELECT * FROM comentario WHERE id_noticia= '$id'");
        $sql = $pdo->query($sql);
        
        //aqui iremos verificar se a categoria é hacking
        $cate = 'Hacking';
        $teste = $pdo->query("SELECT * FROM h1 WHERE categoria='$cate'");

         
                  

         if ($teste->rowcount() > 0){
                //se for, exibi tudo que tem na categoria hacking na tela do html
                foreach ($sql->fetchAll() as $variavel){

                echo "<h1 style='text-align:center'>".$variavel['titulo']."</h1>";
                echo "<p style='text-align:center'>".$variavel['texto']."</p>";
                echo "<h3>"."Publicado por usuário: ".$variavel['user']."</h3>";
              



                echo "<form method='POST' action='enviar1.php'>"."<textarea name=coment>"."</textarea>"."<input name='idnoticia' type='hidden' value='$id'/>"."<br>"."<input type='submit' value='comentar'/>"."</form>";
               
                
                  
            }


                               
            //exibe os comentários dos usuários
        
         foreach ($coment->fetchAll() as $value){
                     echo "Usuário: ".$value['user']." Comentou: ".$value['comentarios']."<br>";

                }
            }
        
        ?>
</body>
</html>

