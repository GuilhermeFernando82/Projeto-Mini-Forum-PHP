<!DOCTYPE html>
<html>
<head>
    <title>Fórum</title>
</head>
<body>
    <?php
    	//conexao com o banco de dados
       include("conexao.php")

       //selecionando as tabelas no banco de dados
        $p1 = "SELECT * FROM program";
        $p1 = $pdo->query($p1);
        
        
        $m1 = "SELECT * FROM m1";
        $m1 = $pdo->query($m1);
        
        
        $t1 = "SELECT * FROM t1";
        $t1 = $pdo->query($t1);
        
    
        $h1 = "SELECT * FROM h1";
        $h1 = $pdo->query($h1);
        
        //Mostrando informações do banco no html

        echo "<h1 style=color:green;text-align:center>"."Categorias e suas postagens"."</h1>"."<br>";
        
        echo "<h1 style=text-align:center>"."Programação"."</h1>"."<br>";
        

        foreach ($p1->fetchAll() as $key) {
            echo "<h4 style='text-align:center'>"."<a href=".$key['link'].">".$key['titulo']."</a>"."</h4>"."<br>";
        
        }
       
        echo "<h1 style=text-align:center>"."Material"."</h1>"."<br>";

        foreach ($m1->fetchAll() as $key) {
            echo "<h4 style='text-align:center'>"."<a href=".$key['link'].">".$key['titulo']."</a>"."</h4>"."<br>";
    
        }
            echo "<h1 style=text-align:center>"."Tutorial"."</h1>"."<br>";
        foreach ($t1->fetchAll() as $key) {
            echo "<h4 style='text-align:center'>"."<a href=".$key['link'].">".$key['titulo']."</a>"."</h4>"."<br>";
            
        }
      
            echo "<h1 style=text-align:center>"."Hacking"."</h1>"."<br>";

        foreach ($h1->fetchAll() as $key) {
            echo "<h4 style='text-align:center'>"."<a href=".$key['link'].">".$key['titulo']."</a>"."</h4>"."<br>";
            
        }
        

?>
   
    

</body>
</html>
