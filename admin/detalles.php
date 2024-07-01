<?php
    session_start();

    if(!isset($_SESSION['user_id'])){
        header("Location: usuarios/login.php");
        exit();
    }

?>
<!doctype html>
<html lang="en">
    <head>
        <title>Gestión de Plantas</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="styless.css">
    </head>
    <body>
        <header>
            <?php include("templates/navbar.php") ?>
        </header>
        <main>
            <h1>Dispositivos</h1>
            <ul id="dispositivos"></ul>
        </main>
        <footer>
            <?php include("templates/footer.php") ?>
        </footer>
        <script>
            const id = <?php echo intval($_SESSION['user_id']); ?>;
        </script>
        <script src="plantas.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    </body>
</html>
