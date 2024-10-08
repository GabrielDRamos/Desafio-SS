<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- -->
    <title>Document</title>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center"  style="height: 100vh;">
        <form action="./signin.php" method="post">
            <div>
                <label for="Email" class="form-label">Digite seu email</label>
                <input type="email" class="form-control" id="Email" name="email" aria-describedby="emailHelp" required>

            </div>
            <br>

            <button type="submit" class="btn btn-primary">Avançar</button>
            <span>Primeiro acesso? <a href="./cadastro.php" class="btn btn-primary">Cadastrar</a></span>
        </form>







        <div>
</body>

</html>