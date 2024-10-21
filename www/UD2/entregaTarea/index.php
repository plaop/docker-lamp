<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UD2. Tarea</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!--header-->
    <header class="bg-primary text-white text-center py-3">
        <h1>UD2 - Paola Pirela</h1>
        <p>Esta es una descripción de la Unidad 2</p>
    </header>


 <!--menu-->
     <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
        <div class="position-sticky">
            <ul class="nav  flex-column">
                <li class="nav-item">
                    <a href="/index.php" class="nav-link">
                        Home
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
        <div class="position-sticky">
            <ul class="nav  flex-column">
                <li class="nav-item">
                    <a href="" class="nav-link">
                        Mis tareas
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
        <div class="position-sticky">
            <ul class="nav  flex-column">
                <li class="nav-item">
                    <a href="" class="nav-link">
                        Nueva tarea
                    </a>
                </li>
            </ul>
        </div>
    </nav>

 <!--footer-->
    <footer class="bg-dark text-white text-center py-3">
    
        <p class="small mb-0">&copy; <?php echo date('Y'); ?> Jenny Paola Pirela Urrea. Todos los derechos reservados.</p>
    </footer>

    <!-- <?php include 'header.php'; ?>
    <?php include 'menu.php'; ?>
    <?php include 'footer.php'; ?> -->
</body>
</html>