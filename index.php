<?php
require_once __DIR__ . '/helpers.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vite App</title>
    <?= vite('main.js') ?>
</head>

<body>
    <div>Hello HTML</div>
    <div>
        <?php echo 'Hello PHP'; ?>
    </div>
</body>

</html>
