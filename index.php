<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/inicio.css">
</head>

<body>
    <?php include "components/navbar.php"; ?>
    <div class="container-sm container-md container-lg container-xl container-xxl">
        <div class="row">
            <div class="col-6 ps-05 pt-5 text-center">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="5000">
                            <img src="img/primer-metro-carrusel.jpg" class="d-block w-100" alt="metro">
                        </div>
                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="img/segundo-metro-carrusel.jpg" class="d-block w-100" alt="metro">
                        </div>
                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="img/tercer-metro-carrusel.jpg" class="d-block w-100" alt="metro">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-6 ps-5 pt-5 text-start">
                <h3>Reporteador Estadistico para Peaje.</h3>
                <p class="lh-lg">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, minus! Voluptas labore dicta architecto quos 
                    sapiente similique dolor, accusamus provident accusantium nesciunt eos facere alias veniam! Quod animi aliquid hic?
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-6 ps-05 pt-5 text-end">
                <h3>Lineas con mas afluencia.</h3>
                <p class="lh-lg">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    A distinctio aspernatur tempora illum vitae nobis culpa quia eligendi molestias reprehenderit
                    quibusdam optio at cupiditate ad, totam necessitatibus magni ipsum dicta?
                    <ul>
                        <li>Linea 1</li>
                        <li>Linea 2</li>
                        <li>Linea 3</li>
                    </ul>
                </p>
            </div>
            <div class="col-6 ps-05 pt-5 text-center">

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>