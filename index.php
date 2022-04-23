<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>

    <div class="vh-100 row m-0 align-items-center justify-content-center">
        <div class="col-auto p-5 bg-white shadow-lg rounded">
            <div class="container">
                <h3 class="text-center">Login</h3>
                <hr>
                <form method="post" action="login.php">

                    <div class="form-group">
                        <label for="usuario">Usuario:</label>
                        <input id="usuario" class="form-control" type="text" name="usuario">
                    </div>

                    <div class="form-group">
                        <label for="password">Contraseña:</label>
                        <input id="password" class="form-control" type="password" name="password">
                    </div>

                    <br>
                    <button class="btn btn-primary" name="login" type="submit">Acceder</button>
                    <a class="btn btn-secondary" href="registrarse.php" type="submit">Registrarse</a>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>