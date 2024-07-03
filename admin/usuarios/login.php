<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="../css/logo.css" rel="stylesheet" />
</head>
<body>
    <header class="bg-dark">
    <nav class="navbar navbar-expand-lg navbar-dark" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="/tics">BotaniCare</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="/tics/admin/usuarios/login.php">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="/tics/admin/usuarios/register.php">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>
    </header>
    <main class="py-5 bgbody">
    <div class="container d-flex justify-content-center align-items-center mb-auto">
        <form id="loginForm" method="post" class="form">
            <h2>Ingresar</h2>
            <label for="Email" class="form-label">Email:</label>
            <input type="text" placeholder="correo@gmail.com" class="form-control" id="Email" required><br>

            <label for="Contraseña" class="form-label">Contraseña:</label>
            <input type="password" placeholder="********" class="form-control" id="Contraseña" required><br>

            <input type="submit" class="btn btn-primary" value="Ingresar">
            <span style="float: right;" class="nav-item"> <a href="register.php" class="nav-link">¿Todavía no tienes una cuenta?</a></span>
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
