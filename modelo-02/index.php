<?php 

session_start();
if(empty($_SESSION)) {
    header("Location: app/views/signin.php?msgErro=Você precisa logar!");
    die();
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- -->
    <title>GDR-LOGADO</title>
</head>

<body>
    <div class="container">
    <h2 class="title">Bem vindo, <b><?php echo $_SESSION['nome']?></b>.</h2>
    </div>
    <div class="container">
        <a href="app/backend/logout.php" class="btn btn-dark">Sair</a>
    </div>
</body>

</html>