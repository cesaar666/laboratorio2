<?php
session_start();
include('config.php');

if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php require_once "menu.php"; ?>
    <title>Agregar</title>
</head>

<body>
    <div class="container"><br>
        <div class="row justify-content-center">
            <div class="col-6 p-5 bg-white shadow-lg rounded">
                <form method="post">
                <?php
                    if (isset($_POST['agregar'])) {

                        $matricula = $_POST['matricula'];
                        $marca = $_POST['marca'];
                        $modelo = $_POST['modelo'];
                        $color = $_POST['color'];
                        $precio = $_POST['precio'];

                        $query = $conn->prepare("INSERT INTO automovil (matricula, marca, modelo, color, precio) 
                        VALUES (:matricula, :marca, :modelo, :color, :precio)");
                        $query->bindParam("matricula", $matricula, PDO::PARAM_STR);
                        $query->bindParam("marca", $marca, PDO::PARAM_STR);
                        $query->bindParam("modelo", $modelo, PDO::PARAM_STR);
                        $query->bindParam("color", $color, PDO::PARAM_STR);
                        $query->bindParam("precio", $precio, PDO::PARAM_STR);
                        $result = $query->execute();

                        if ($result) 
                        {
                            echo '<div class="alert alert-success" role="alert">Tu registro fue exitoso!</div>';
                        } 
                        else 
                        {
                            echo '<div class="alert alert-danger" role="alert">¡Algo salió mal!</div>';
                        }
                    }
                ?>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>