<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>
<body>
    <header>
        <?php include("../templates/navbar.php")?>
    </header>
    <main>
        <div class="container d-flex justify-content-center align-items-center mb-auto">
            <form id="loginForm" method="post" class="border border-3 rounded border-black bg-color">
                <h2 class="text-light mb-5">Ingresar</h2>
                <label for="Email" class="form-label text-light">Email:</label>
                <input type="text" placeholder="correo@gmail.com" class="form-control" id="Email" required><br><br>
                <label for="Contraseña" class="form-label text-light">Contraseña:</label>
                <input type="password" placeholder="********" class="form-control" id="Contraseña" required><br><br>
                <input type="submit" class="btn btn-primary" value="Ingresar">
                <span style="float: right;" class="nav-item text-light"> <a href="register.php" class="nav-link">Todavia no tienes una cuenta?</a></span>
            </form>
        </div>
    </main>
    <footer>
        <?php include("../templates/footer.php")?>
    </footer>
    <script src='login.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
