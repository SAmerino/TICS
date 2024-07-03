<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gráfico Multisensor</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns"></script>
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
   
    <script src='js/scripts.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="css/logo.css" rel="stylesheet" />
    <style>
        .container {
            width: 90%;
            max-width: 1000px;
            margin: auto;
            text-align: center;
        }
        canvas {
            background-color: #f4f4f4; /* Light grey background for better visibility */
            border: 1px solid #ccc; /* Light grey border */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
        }
    </style>
</head>
<body>
    <header>
        <?php include("templates/navbar.php") ?>
    </header>
    <div class="container py-5">
        <h1>Detalles de la Planta</h1>
        <canvas id="sensorChart" width="800" height="400"></canvas>
        <script src="detalles.js"></script>
    </div>
    <footer>
        <?php include("templates/footer.php") ?>
    </footer>
</body>
</html>
