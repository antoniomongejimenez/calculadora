<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba de entrada de datos</title>
</head>
<body>
    <?php if (isset($_GET['x'], $_GET['y'])): ?>
        <p>La suma vale <?= $_GET['x'] + $_GET['y'] ?></p>
    <?php endif ?>
</body>
</html>