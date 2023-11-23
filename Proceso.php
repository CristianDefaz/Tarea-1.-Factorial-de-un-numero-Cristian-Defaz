<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Calculadora de Factorial</title>

    <style>
         body {
            background-color: #C3BAFF; /* Puedes cambiar el código de color aquí */
            margin: 1;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        h2 {
            font-size: 24px; /* Tamaño de la letra del encabezado */
            color: #333; /* Color del texto del encabezado */
        }

        p {
            font-size: 18px; /* Tamaño de la letra del resultado */
            color: #0066cc; /* Color del texto del resultado */
        }

        footer {
            margin-top: auto;
            padding: 10px;
            background-color: #333;
            color: #fff;
            text-align: center;
            border-top: 1px solid #fff; /* Línea superior del footer */
        }
    </style>
</head>
<body>

<!-- Encabezado -->
<b><h2>Calculadora de factorial de un numero</h2></b>

<!-- Formulario para ingresar el número -->
<form action="" method="post">
    <label for="numero">Ingrese un número:</label>
    <input type="text" name="numero" id="numero" required>
    <button type="submit">Calcular Factorial</button>
</form>
<!-- Llamo al formulario para resolver el proceso -->
<?php include ("resolver.php")?>

</body>

<footer>
&copy; 2023 - Todos los derechos reservados por Cristian Defaz.
</footer>
</html>
