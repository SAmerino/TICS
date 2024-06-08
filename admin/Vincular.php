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
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
            <?php include("templates/navbar.php")?>
        </header>
        <main>
            <div class="container d-flex justify-content-center align-items-center mb-auto">
            <form id="vincularForm" method="post" class="border border-3 rounded border-black bg-color">
                <h2 class="text-light mb-5">Vincular</h2>
                <label for="codigo" class="form-label text-light">Codigo del dispositivo:</label>
                <input type="text" placeholder="Codigo" class="form-control" id="codigo" required><br><br>
                <input type="submit" class="btn btn-primary" value="Vincular">
                <span style="float: right;" class="nav-item text-light"> <a href="index.php" class="nav-link">Volver</a></span>
            </form>
        </div>
        </main>
        <footer>
            <!-- place footer here -->
            <?php include("templates/footer.php")?>
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script>
        const id = "<?php echo($_SESSION['user_id']); ?>";
        </script>
         <script src='vincular.js'></script>
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
