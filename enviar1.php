<?php
include("conexao.php");
 
session_start();

//pegando o comentário da outra pagina
$comentarios = htmlspecialchars(addslashes($_POST['coment']));
$idnoticia = htmlspecialchars(addslashes($_POST['idnoticia']));


//verificando se o usuario está, logado
if($_SESSION['usuario'] == true){
		$usulogado = $_SESSION['usuario'];
        //selecionando o usuário logado
        $sql3 = $pdo->query("SELECT * FROM tabela3 WHERE usuario= '$usulogado'");
        
        $sql3 = $sql3->fetch(PDO::FETCH_ASSOC);
        $usuario1 = $sql3['usuario'];

            //adicionando comentário no banco de daodos
           $sql = $pdo->query("INSERT INTO comentario SET comentarios= '$comentarios', user= '$usuario1', id_noticia= '$idnoticia'");
		 echo "<script>alert('Comentado com Sucesso, atualize a pagina, para ver seu comentário');location.href='javascript:history.back()';</script>";   

       
       
}else{
            //caso o usuario não estiver logado, ira redirecionar para pagina index
            echo "<script>
                alert('você precisa estár logado para comentar');
                location.href='index.php';
                </script>";
        } 





?>