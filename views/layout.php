<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EKT - <?php echo $titulo; ?></title>
</head>
<body>
    <?php
        include_once __DIR__ . '/templates/header.php';
        echo $contenido;
        include_once __DIR__ . '/templates/footer.php'
    ?>

    <script src="/build/js/main.min.js" defer></script>
</body>
</html>