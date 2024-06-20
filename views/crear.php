<?php
include_once '../controllers/PostController.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $author = $_POST['author'];
    $content = $_POST['content'];
    $postController = new PostController();
    if ($postController->create($author, $content)) {
        echo 'Entrada creada exitosamente.';
    } else {
        echo 'Error al crear la entrada.';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Crear Entrada</title>
</head>
<body>
    <h1>Crear Nueva Entrada</h1>
    <a href="../index.php">Inicio</a><br>
    <form method="post" action="crear.php">
        <label for="author">Autor:</label><br>
        <input type="text" id="author" name="author" required><br>
        <label for="content">Contenido:</label><br>
        <textarea id="content" name="content" required></textarea><br>
        <input type="submit" value="Crear">
    </form>
</body>
</html>
