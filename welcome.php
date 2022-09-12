<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="welcome.css">
    <title>Welcome</title>
</head>
<body>
    <div class="container">
        <div class="shadow-sm p-0 bg-white rounded nav">
            <img class="logo-image" src="img/logo.png" />
            <div class="welcome"><?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?></div>
            <div class="nav-link">
                <a href="#">Home</a>
                <a href="#">Eat</a>
                <a href="#">Play</a>
                <a href="#">Relax</a>
                <a href="#">Book Online</a>
            </div>
            <div class="logout">
                <a href="logout.php">Logout</a>
            </div>
        </div>
    </div>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="img/img1.jpg" class="d-block w-100" />
        </div>
        <div class="carousel-item">
        <img src="img/img2.jpg" class="d-block w-100" />
        </div>
        <div class="carousel-item">
        <img src="img/img3.jpg" class="d-block w-100" />
        </div>
        <img src="img/img4.jpg" class="d-block w-100" />
        </div>
        <div class="carousel-item">
        <img src="img/img5.jpg" class="d-block w-100" />
        </div>
        <div class="carousel-item">
        <img src="img/img6.jpg" class="d-block w-100" />
        </div>
        <div class="carousel-item">
        <img src="img/img7.jpg" class="d-block w-100" />
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>