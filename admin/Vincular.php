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
        <script src='js/scripts.js'></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="css/logo.css" rel="stylesheet" />
    </head>

    <body>
            <!-- place navbar here -->
            <header class="bg-dark">
            <?php include("templates/navbar.php")?>
            </header>
        <main class="text-light py-5">
    <div class="container d-flex justify-content-center align-items-center my-5 py-5">
        <form id="vincularForm" method="post" class="p-5 bg-secondary border rounded border-black">
            <h2 class="mb-4">Vincular</h2>
            <div class="mb-3">
                <label for="codigo" class="form-label">Codigo del dispositivo:</label>
                <input type="text" placeholder="Codigo" class="form-control" id="codigo" required>
            </div>
            <button type="submit" class="btn btn-primary">Vincular</button>
            <a href="index.php" class="btn btn-link text-light float-right mt-3">Volver</a>
        </form>
    </div>
</main>
        <?php include("templates/footer.php")?>
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
