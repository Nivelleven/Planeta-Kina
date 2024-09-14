<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/logo.jpg">
    <title>Planeta Kina</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="JS/script.js?v=1.0.2"></script>
    <link rel="stylesheet" href="CSS/style2.css?v=1.0.4">
</head>

<header class="d-flex flex-wrap justify-content-center py-3 mb-4">
    <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-decoration-none">
        <!-- <img src="images/logo.png" width="45" height="45" class="d-inline-block align-top" alt="Planeta Kina"> -->
        <span class="fs-4">Planeta Kina</span>
    </a>

    <ul class="nav nav-pills">
        <li class="nav-item"><a href="logowanie.php" class="nav-link" style="color:white">Logowanie</a></li>
        <li class="nav-item"><a href="kontakt.php" class="nav-link" style="color:white">Kontakt</a></li>
        <li class="nav-item">
            <form action="logout.php">
                <a href="logout.php" class="nav-link" style="color:white">Wyloguj</a>
            </form>
        </li>
    </ul>
</header>

<body>
<section class="banner d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                        <h1 class="text-center mb-5 banner-title">Trochę o nas</h1>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col">
                 <p class="d-contents">Nasza strona jest wyjątkowa przestrzeń dla prawdziwych miłośników kinematografii! Planeta Kina to hołd dla ponadczasowych arcydzieł, które na zawsze zapisały się w historii filmu. Jeśli szukasz najnowszych premier, to nie jest miejsce dla Ciebie. U nas znajdziesz wyłącznie najlepsze produkcje, które przetrwały próbę czasu i do dziś zachwycają widzów na całym świecie.
                    Zanurz się w świat kultowych scen, niezapomnianych kreacji aktorskich i mistrzowskiej reżyserii. Niezależnie od tego, czy jesteś nowicjuszem, czy wytrawnym kinomanem, na Planecie Kina zawsze znajdziesz coś dla siebie.
                    Przygotuj się na niezapomnianą filmową podróż w czasie!
                 </p>
                </div>
                <div class="col">
                    <img src="images/cinema1.jpg" width="" class="rounded float-right mb-5">
                </div>
            </div>
        </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="images/cinema2.jpg" class="mb-5 rounded float-left">
            </div>
            <div class="col">
                <p class="d-contents">Planeta Kina to miejsce, gdzie odkryjesz filmy, które inspirowały pokolenia reżyserów, 
                    poruszały serca widzów i definiowały kolejne epoki w kinematografii. 
                    Od klasyków kina niemego, przez złotą erę Hollywood, aż po międzynarodowe perły filmowe – 
                    nasza oferta jest prawdziwą podróżą po historii siódmej sztuki.
                </p>
            </div>
        </div>
    </div>
</section>
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="d-contents">Zanurz się w świat kultowych scen, niezapomnianych kreacji aktorskich i mistrzowskiej reżyserii.
                    Niezależnie od tego, czy jesteś nowicjuszem, czy wytrawnym kinomanem, na Planecie Kina zawsze znajdziesz coś dla siebie. <br>
                    Przygotuj się na niezapomnianą filmową podróż w czasie!
                </p>
            </div>
            <div class="col">
                <img src="images/cinemaBack4.jpg" class="rounded float-right">
            </div>
        </div>
    </div>
<section>

</section>

<div class="container">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="index.php" class="nav-link px-2" style="color:white">Strona Główna</a></li>
      <li class="nav-item"><a href="logowanie.php" class="nav-link px-2" style="color:white">Logowanie</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2" style="color:white">O nas</a></li>
    </ul>
    <p id="kontaktSection" class="text-center">Stokłosy 3, 02-787 Warszawa</p>
    <p class="text-center">+48 22 457 23 00</p>
    <p class="text-center">© 2024 Planeta Kina</p>
  </footer>
</div>

</body>
</html>