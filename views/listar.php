<?php
include_once '../controllers/PostController.php';
$postController = new PostController();
$posts = $postController->index();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Listar Entradas</title>
</head>
<body>
<a href="crear.php">Crear Nueva Entrada</a>
    <h1>Entradas del Blog</h1>
    <a href="index.php">Inicio</a><br>
    <?php foreach ($posts as $post): ?>
        <h2><?php echo $post['author']; ?></h2>
        <p><?php echo $post['content']; ?></p>
        <small><?php echo $post['created_at']; ?></small>
        <hr>
    <?php endforeach; ?>
</body>
</html>
