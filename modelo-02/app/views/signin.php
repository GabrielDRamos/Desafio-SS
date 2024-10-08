<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['email']) && !empty($_POST['email'])) {
        $email = $_POST['email'];
    }
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
    <!-- ** -->
    <title>GDR-LOGIN</title>

</head>

<body>

    <div class="container">
        <!-- Erros de login -->
        <?php if(!empty($_GET['msgErro'])){ ?>
            <div class="alert alert-warning text-center"  role="alert">
                <?php  echo $_GET['msgErro'];?>
            </div>        
        <?php }?>
         
        <?php if(!empty($_GET['msgSucesso'])){ ?>
            <div class="alert alert-success" role="alert">
                <?php echo $_GET['msgSucesso'];?>
            </div>        
        <?php }?>
    </div>

    <div class="container d-flex justify-content-center align-items-center"  style="height: 100vh;">
        <form action="../backend/processa_login_usuario.php" method="post">
            <div>
                <label for="e-mail" class="form-label">Email</label>
                <input type="email" class="form-control" id="e-mail" name="email" aria-describedby="emailHelp"
                    placeholder="email@email.com" value="<?php 
                    if(!empty($email)){
                    echo htmlspecialchars($email); }
                    ?>">
            </div>
            <div>
                <label for="senhauser" class="form-label">Senha</label>
                <input type="password" class="form-control" id="senhauser" name="senha">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Entrar</button>
            <a href="./cadastro.php" class="btn btn-primary">Cadastrar</a>
        </form>






    </div>
</body>

</html>