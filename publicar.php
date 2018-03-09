<?php
 
	include('conexao.php');

$titulo = addslashes(htmlentities($_POST['titulo'], ENT_QUOTES | ENT_HTML5, 'UTF-8'));
$texto =   addslashes($_POST['area2']);
$hacking = htmlspecialchars(addslashes($_POST['simples']));
session_start();
$usulogado = $_SESSION['usuario'];
            

	if (!empty($hacking) && !empty($_POST['g-recaptcha-response']) && !empty($titulo) && !empty($texto)){
			
			
		if($hacking == 'Programação'){
			$id1 = rand (0, 30);
			$id = htmlspecialchars(addslashes(intval($id1)));
			$link = "programacao.php?id=".$id;
			$sql = $pdo->query("INSERT INTO program SET id= '$id', titulo= '$titulo', texto= '$texto', arquivo= '$novo', categoria= '$hacking',  link='$link', user='$usulogado'");
				echo "<script>location.href='programacao.php?id=$id'</script>";
		}elseif ($hacking == 'Hacking') {
				$id1 = rand (0, 30);
				$id = htmlspecialchars(addslashes(intval($id1)));

				$link = "hacking.php?id=".$id;
				$sql = $pdo->query("INSERT INTO h1 SET id= '$id', titulo= '$titulo', texto= '$texto', categoria= '$hacking', link='$link', user='$usulogado'");
				echo "<script>location.href='hacking.php?id=$id'</script>";
		}elseif ($hacking == 'Tutorial') {
			$id1 = rand (0, 30);
			$id = htmlspecialchars(addslashes(intval($id1)));
			$link = "tuto.php?id=".$id;
			$sql = $pdo->query("INSERT INTO t1 SET id= '$id', titulo= '$titulo', texto= '$texto', arquivo= '$novo', categoria= '$hacking',  link='$link', user='$usulogado'");
			echo "<script>location.href='tuto.php?id=$id'</script>";
		}elseif ($hacking == 'Material') {
			$id1 = rand (0, 30);
			$id = htmlspecialchars(addslashes(intval($id1)));
			$link = "material.php?id=".$id;
			$id1 = rand (0, 30);
			$id = htmlspecialchars(addslashes(intval($id1)));
			$link = "material.php?id=".$id;
			$sql = $pdo->query("INSERT INTO m1 SET id= '$id', titulo= '$titulo', texto= '$texto', arquivo= '$novo', categoria= '$hacking',  link='$link', user='$usulogado'");
				
			echo "<script>location.href='material.php?id=$id'</script>";
		}
			
	}else{
		echo "<script>location.href='forum.php'</script>";
	}




?>