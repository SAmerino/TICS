
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
        <link rel="stylesheet" href="../styles.css">
    </head>

    <body>
        <header>
            <?php include("../templates/navbar.php")?>
        </header>
        <main>
        <div class="container d-flex justify-content-center align-items-center mb-auto">
        <form id="registerForm" method="post" class="border border-3 rounded border-black bg-color">
            <h2 class="text-light mb-5">Registrar cliente</h2>
            <label for="Nombre" class="form-label text-light">Nombre:</label>
            <input type="text" class="form-control" id="Nombre" name="Nombre" required><br><br>
    
            <label for="Email" class="form-label text-light">Email:</label>
            <input type="text" placeholder="correo@gmail.com" class="form-control" id="Email" name="Email" required><br><br>

            <label for="Contraseña" class="form-label text-light">Contraseña:</label>
            <input type="password" placeholder="********" class="form-control" id="Contraseña" name="Contraseña" minlength="8" required><br><br>

            <input type="submit" class="btn btn-primary" value="Registrarse">
            <span style="float: right;" class="nav-item text-light"> <a href="login.php" class="nav-link">Ya tienes una cuenta?</a></span>
        </form>
        </div>
        </main>
        <footer>
            <?php include("../templates/footer.php")?>
        </footer>
        <!--Scripts js -->
        <script src='register.js'></script>
        <!-- Bootstrap JavaScript Libraries -->
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
