<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- ** -->
    <title>Document</title>
</head>

<body>

    <div class="container">
          <!-- Erros de cadastro -->
        <?php if(!empty($_GET['msgErro'])){ ?>
            <div class="alert alert-warning"  role="alert">
                <?php echo $_GET['msgErro'];?>
            </div>        
        <?php }?>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">

        <form class="col-4" action="../backend/processa_usuario.php" method="post">
            <h1 class="text-center">Cadastro</h1>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" class="form-control" required>
            </br>
            <button type="submit" name="enviarDados" class="btn btn-primary">Enviar</button>

            <a href="signin.php" class="btn btn-secondary">Cancelar</a>
        </form>
            
    </div>

</body>

</html>