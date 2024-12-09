<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

$clases = ['Zumba', 'Body Combat', 'Spinning'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Clases Disponibles</title>
</head>
<body>
    <h1>Clases</h1>
    <ul>
        <?php foreach ($clases as $clase): ?>
            <li><?php echo htmlspecialchars($clase); ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
