<!DOCTYPE html>
<html>
<head>
    <title>formulario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
        }

        h2 {
            background: #9370DB;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
        }

        .result {
            background color: #000;;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px;
        }

        a {
            text-decoration: none;
            color: #32CD32;
            display: inline-block;
            margin-top: 20px;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h2>Tus datos son:</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $edad = $_POST["edad"];
        $carrera = $_POST["carrera"];
        $correo = $_POST["correo"];
    ?>
    <div class="result">
        <p>Tu nombre es: <?php echo $nombre; ?></p>
        <p>Tu edad es: <?php echo $edad; ?></p>
        <p>Estudias: <?php echo $carrera; ?></p>
        <p>Tu correo es: <?php echo $correo; ?></p>
    </div>
    <?php } ?>

    <a href="index.html">Volver a registrarse</a>
</body>
</html>
