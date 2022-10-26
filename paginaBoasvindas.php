<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de login</title>
    <link rel="stylesheet" href="cssphp.css">
</head>
<body>

    <div class="container">
        <h1>
        <?php
           $nome = $_POST['Usuario'];
           $senha = $_POST['Password'];

           echo 'Olá '.$nome.', seja bem vindo!!';
           
        ?>
        </h1>

         
   
    </div>
</body>
</html>