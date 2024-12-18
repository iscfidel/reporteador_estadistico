<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/styles/navbar.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <a class="navbar-brand fs-5 fw-semibold badge  text-wrap" href="#">
                <img src="img/metrorreylogo.png" alt="Logo" width="70" height="40" class="d-inline-block align-text-top">
                Sistema de Transporte Colectivo Metrorrey
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-wrap" id="navbarNavDropdown">
                <ul class="navbar-nav ">
                    <li class="nav-item ">
                        <a class="nav-link active text-white" aria-current="page" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Generar Reporte
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item " href="../transmetro.php">Transmetro</a></li>
                            <li><a class="dropdown-item" href="../metro.php">Metro</a></li>
                            <li><a class="dropdown-item" href="">IMA</a></li>
                            <li><a class="dropdown-item" href="#">Venta & Recarga de Tarjetas</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Seguridad
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Ajustes</a></li>
                            <li><a class="dropdown-item" href="#">Perfil</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>