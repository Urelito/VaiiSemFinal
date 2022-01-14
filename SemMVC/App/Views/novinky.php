<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Forum" />
    <meta name="author" content="Aurel Kubacka" />
    <title>Urel's Forum</title>

    <!-- bootstrap 5 load -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- my css -->
    <link href="styles.css" rel="stylesheet" />

    <!-- javaScript -->
    <script src="../Controllers/script.js"></script>

    <!-- JQUERY load -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body id="page-top">
<!-- Header-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-1">
    <div class="container-fluid">
        <a class="navbar-brand logo" href="#">Urel's Forum</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#responsive-navbar" aria-controls="responsive-navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="responsive-navbar" class="collapse navbar-collapse justify-content-center">
            <ul class="navbar-nav">
                <li><a class="nav-link px-4 fw-bolder" href="domov.php">Domov</a></li>
                <li><a class="nav-link px-4 fw-bolder" href="forum.php">Fóra</a></li>
                <li><a class="nav-link px-4 fw-bolder" href="novinky.php">Novinky</a></li>
                <?php
                if (isset($_SESSION['id'])) {
                    echo "<li><a class=\"nav-link px-4 fw-bolder\" onclick=\"userLogout()\" href=\"#\">Odhlásiť</a></li>";
                } else {
                    echo "<li><a class=\"nav-link px-4 fw-bolder\" href=\"prihlasenie.php\">Prihlásenie</a></li>";
                }
                ?>
                <li><a class="nav-link px-4 fw-bolder" href="registracia.php">Registrácia</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Body -->
<div class="body">
    <div class="container px-lg-5">
        <div class="row justify-content-center">
            <div class="container pb-5">
                <div class="row height d-flex justify-content-center align-items-center">
                    <div class="col-md-8">
                        <div class="search"><input type="text" class="form-control" placeholder="Vyhladávanie">
                            <button class="btn btn-secondary">Hľadať</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-group">
                <div class="card">
                    <img src="images/horelo.jpg" class="img-fluid rounded-start" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Horelo</h5>
                        <p class="card-text">V Bratislave horela opustená budova</p>
                    </div>
                    <a href="#" class="card-text more-info">Prečítať viac</a>
                    <div class="card-footer">
                        <small class="text-muted">Publikované: dnes 10:18</small>
                    </div>
                </div>
                <div class="card">
                    <img src="images/lieky.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Závislosti</h5>
                        <p class="card-text">Najčastejšie spôsobujú závislosť lieky proti bolesti a na zmenu nálady</p>
                    </div>
                    <a href="#" class="card-text more-info">Prečítať viac</a>
                    <div class="card-footer">
                        <small class="text-muted">Publikované: 8.3.2021 10:45</small>
                    </div>
                </div>
                <div class="card">
                    <img src="images/nbs.jpg" class="img-fluid rounded-start" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">NBS</h5>
                        <p class="card-text">Viac ako 600 000 Slovákov žije pod hranicou príjmovej chudoby</p>
                    </div>
                    <a href="#" class="card-text more-info">Prečítať viac</a>
                    <div class="card-footer">
                        <small class="text-muted">Publikované: včera 9:13</small>
                    </div>
                </div>
            </div>
            <div class="card-group">
                <div class="card">
                    <img src="images/ockovanie.jpg" class="img-fluid rounded-start" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Koronavírus</h5>
                        <p class="card-text">Očkovanie proti chrípke a covidu možno aplikovať aj súčasne</p>
                    </div>
                    <a href="#" class="card-text more-info">Prečítať viac</a>
                    <div class="card-footer">
                        <small class="text-muted">Publikované: dnes 9:15</small>
                    </div>
                </div>
                <div class="card">
                    <img src="images/prezidentka.jpg" class="img-fluid rounded-start" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Prezidentka</h5>
                        <p class="card-text">Útok na politika cez jeho deti je politické dno</p>
                    </div>
                    <a href="#" class="card-text more-info">Prečítať viac</a>
                    <div class="card-footer">
                        <small class="text-muted">Publikované: dnes 9:15</small>
                    </div>
                </div>
                <div class="card">
                    <img src="images/zdravie.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Dusevné zdravie</h5>
                        <p class="card-text">Lengvarský: Slovensko je v téme zlepšenia starostlivosti o duševné zdravie na začiatku</p>
                    </div>
                    <a href="#" class="card-text more-info">Prečítať viac</a>
                    <div class="card-footer">
                        <small class="text-muted">Publikované: 15.6.2021 10:18</small>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div> <!-- end div class body -->
</body>
</html>