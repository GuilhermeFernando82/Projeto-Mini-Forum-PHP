<!DOCTYPE html>
<html>
<head>
    <title>Formulário</title>
</head>
<body>
<form method="post" enctype="multipart/form-data" action="publicar.php">
            <h3>Digite um titulo para a publicação:</h3>

            <input type="text" name="titulo" placeholder="Digite o titulo da publicação"><br><br><br><br>
           
            <h3>Digite aqui sua publicação: </h3><br>
            <textarea id="textoarea" name="area2" cols="50">Valor</textarea></br>
            <h3>Escolha uma categoria:</h3>
            <input type="radio" name="simples" value="Programação"/>Programação<br>
            <input type="radio" name="simples" value="Hacking"/>Hacking<br>
            <input type="radio" name="simples" value="Tutorial"/>Tutorial<br>
            <input type="radio" name="simples" value="Material"/>Material<br>
        
            <input type="submit" value="Publicar no Site">
        </form><br><br><br>
</body>
</html>



        