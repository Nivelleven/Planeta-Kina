<?php 
    include 'header.php'; 
?>

<section>
    <div id="targetSelection" class="container">
        <div class="row">
            <h1 class="text-center mb-5">Witamy</h1>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-3">
                <div class="movie-poster" data-toggle="modal">
                    <div class="poster-img">
                        <img src="images/lotr1.jpg" alt="Władca Pierścieni: Drużyna Pierścienia" class="img-fluid">
                    </div>

                    <div class="poster-description">
                        <h3 class="movie-title">Władca Pierścieni: <br> Drużyna Pierścienia</h3>
                        <button type="button" class="btn btn-light" data-toggle="modal" data-target=".lotr">Więcej</button>
                    </div>
                </div>
            </div>

            <div class="modal fade lotr" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Władca Pierścieni: Drużyna Pierścienia</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div id="lotr-carousel" class="carousel slide">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#lotr-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#lotr-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#lotr-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    <button type="button" data-bs-target="#lotr-carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="images/lotr1.jpg" alt="Zdjęcie 1">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="images/lotr2.jpg" alt="Zdjęcie 2">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="images/lotr3.jpg" alt="Zdjęcie 3">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="images/lotr4.jpg" alt="Zdjęcie 4">
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#lotr-carousel" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Poprzedni</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#lotr-carousel" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Następny</span>
                                    </button>
                                </div>
                            </div>
                            <p>Frodo, Powiernik Pierścienia, musi uciekać z rodzinnego Shire przed sługami Saurona, Czarnymi Jeźdźcami, którzy chcą mu odebrać Pierścień. Dołączają do niego Sam, Merry i Pippin, ruszają na spotkanie z Gandalfem. Finalnie do niego nie dochodzi, a hobbici wpadają w tarapaty. Ratuje ich elfka Arwena i zabiera ich do Rivendell, gdzie w końcu spotykają się z czarodziejem.
                                    <br>
                                    Ojciec Arweny, Elrond, zwołuje naradę, w której uczestniczą przedstawiciele elfów, krasnoludów i ludzi, a także Gandalf oraz Frodo (jak się później okazuje, na spotkaniu było więcej niziołków). Przywódca elfów oznajmia, że Pierścień trzeba zniszczyć w Górze Przeznaczenia.
                                    <br>
                                    W czasie Narady u Elronda – gdy pozostali uczestnicy kłócą się o Pierścień, Frodo zgłasza się na ochotnika, który weźmie na siebie ciężar i zaniesie Pierścień do Mordoru. Dołączają do niego przedstawiciele innych ras, formuje się tytułową Drużyna Pierścienia.
                            </p>
                            <h6>Gatunek filmu:</h6>
                            <span>fantasy, przygody</span>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                            <button type="button" class="btn btn-primary">
                                <a href="zala-lotr.php">Kup Bilety</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-3">
                <div class="movie-poster" data-toggle="modal">
                    <div class="poster-img">
                        <img src="images/wind-river1.jpg" alt="Na przeklętej ziemi" class="img-fluid">
                    </div>

                    <div class="poster-description">
                        <h3 class="movie-title">Na przeklętej ziemi</h3>
                        <button type="button" class="btn btn-light" data-toggle="modal" data-target=".wind-river">Więcej</button>
                    </div>
                </div>
            </div>

            <div class="modal fade wind-river" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Na przeklętej ziemi</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div id="wind-river-carousel" class="carousel slide">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#wind-river-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#wind-river-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#wind-river-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    <button type="button" data-bs-target="#wind-river-carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="images/wind-river1.jpg" alt="Zdjęcie 1">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="images/wind-river2.jpg" alt="Zdjęcie 2">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="images/wind-river3.jpg" alt="Zdjęcie 3">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="images/wind-river4.jpg" alt="Zdjęcie 4">
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#wind-river-carousel" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Poprzedni</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#wind-river-carousel" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Następny</span>
                                    </button>
                                </div>
                            </div>
                            <p>Podczas zimy w rezerwacie Indian Wind River agent U.S. Fish and Wildlife Service Cory Lambert odkrywa zamarznięte ciało 18-letniej Natalie Hanson z plemienia Northern Arapaho. Agentka specjalna FBI Jane Banner przybywa, aby zbadać możliwe zabójstwo. Banner dowiaduje się od ojca Natalie, Martina, że jego córka spotykała się z nowym chłopakiem, którego imienia nie zna.
                            </p>
                            <h6>Gatunek filmu:</h6>
                            <span>dramat, thriller</span>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                            <button type="button" class="btn btn-primary">
                                <a href="zala-windRiver.php">Kup Bilety</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-3">
                <div class="movie-poster" data-toggle="modal">
                    <div class="poster-img">
                        <img src="images/interstellar1.jpg" alt="Interstellar" class="img-fluid">
                    </div>

                    <div class="poster-description">
                        <h3 class="movie-title">Interstellar</h3>
                        <button type="button" class="btn btn-light" data-toggle="modal" data-target=".interstellar">Więcej</button>
                    </div>
                </div>
            </div>

            <div class="modal fade interstellar" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Interstellar</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div id="interstellar-carousel" class="carousel slide">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#interstellar-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#interstellar-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#interstellar-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    <button type="button" data-bs-target="#interstellar-carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="images/interstellar1.jpg" alt="Zdjęcie 1">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="images/interstellar2.jpg" alt="Zdjęcie 2">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="images/interstellar3.jpg" alt="Zdjęcie 3">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="images/interstellar4.jpg" alt="Zdjęcie 4">
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#interstellar-carousel" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Poprzedni</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#interstellar-carousel" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Następny</span>
                                    </button>
                                </div>
                            </div>
                            <p>Historia grupy badaczy, którzy dzięki nowo odkrytemu tunelowi czasoprzestrzennemu pokonują granice do tej pory przekraczające ludzkie możliwości podróżowania w innym wymiarze.
                                <br>
                                Film oparty jest na teorii naukowej opracowanej przez fizyka z Caltech Kipa Thorne'a.
                                <br>
                                Na skutek błędów popełnionych przez ludzkość w XX w. Ziemia staje na krawędzi zagłady. Nastąpił upadek państw, a ich rządy straciły władzę. Szczątkowo funkcjonująca gospodarka nie jest w stanie zapewnić ludziom nawet żywności. Gdy jednak odkryta zostaje możliwość podróżowania w czasoprzestrzeni, naukowcy wywodzący się z resztek organizacji NASA podejmują się jej zbadania, tym samym stając się ostatnią deską ratunku dla ludzi i ich planety.
                            </p>
                            <h6>Gatunek filmu:</h6>
                            <span>fantastyka naukowa</span>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                            <button type="button" class="btn btn-primary">
                                <a href="zala-interstellar.php">Kup Bilety</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-4 col-lg-3">
                <div class="movie-poster" data-toggle="modal">
                    <div class="poster-img">
                        <img src="images/infinity-war1.jpg" alt="Avengers: Wojna bez granic" class="img-fluid">
                    </div>

                    <div class="poster-description">
                        <h3 class="movie-title">Avengers: Wojna bez granic</h3>
                        <button type="button" class="btn btn-light" data-toggle="modal" data-target=".infinity-war">Więcej</button>
                    </div>
                </div>
            </div>

            <div class="modal fade infinity-war" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Avengers: Wojna bez granic</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div id="infinity-war-carousel" class="carousel slide">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#infinity-war-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#infinity-war-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#infinity-war-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    <button type="button" data-bs-target="#infinity-war-carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="images/infinity-war1.jpg" alt="Zdjęcie 1">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="images/infinity-war2.jpg" alt="Zdjęcie 2">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="images/infinity-war3.jpg" alt="Zdjęcie 3">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="images/infinity-war4.jpg" alt="Zdjęcie 4">
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#infinity-war-carousel" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Poprzedni</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#infinity-war-carousel" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Następny</span>
                                    </button>
                                </div>
                            </div>
                            <p>Amerykański fantastycznonaukowy film akcji z 2018 roku na podstawie serii komiksów o grupie superbohaterów o nazwie Avengers wydawnictwa Marvel Comics. Za reżyserię odpowiadali bracia Anthony i Joe Russo na podstawie scenariusza Christophera Markusa i Stephena McFeelya. W rolach głównych wystąpili: Robert Downey Jr., Chris Hemsworth, Mark Ruffalo, Chris Evans, Scarlett Johansson, Benedict Cumberbatch, Don Cheadle, Tom Holland, Chadwick Boseman, Paul Bettany, Elizabeth Olsen, Anthony Mackie, Sebastian Stan, Danai Gurira, Letitia Wright, Dave Bautista, Zoe Saldana, Josh Brolin i Chris Pratt.
                                W filmie Avengers łączą siły ze Strażnikami Galaktyki, aby powstrzymać Thanosa przed zebraniem wszystkich Kamieni Nieskończoności i zgładzeniem połowy istnień we wszechświecie.
                            </p>
                            <h6>Gatunek filmu:</h6>
                            <span>superbohaterski, fantastyka naukowa, akcja</span>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                            <button type="button" class="btn btn-primary">
                                <a href="zala-infinityWar.php">Kup Bilety</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        <div class="row">
            <div class="col-md-4 col-lg-3">
                        <div class="movie-poster" data-toggle="modal">
                            <div class="poster-img">
                                <img src="images/endgame1.jpg" alt="Avengers: Koniec gry" class="img-fluid">
                            </div>

                            <div class="poster-description">
                                <h3 class="movie-title">Avengers: Koniec gry</h3>
                                <button type="button" class="btn btn-light" data-toggle="modal" data-target=".endgame">Więcej</button>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade endgame" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Avengers: Koniec gry</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div id="endgame-carousel" class="carousel slide">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#endgame-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#endgame-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#endgame-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                            <button type="button" data-bs-target="#endgame-carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                        </div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="images/endgame1.jpg" alt="Zdjęcie 1">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="images/endgame2.jpg" alt="Zdjęcie 2">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="images/endgame3.jpg" alt="Zdjęcie 3">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="images/endgame4.jpg" alt="Zdjęcie 4">
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#endgame-carousel" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Poprzedni</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#endgame-carousel" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Następny</span>
                                            </button>
                                        </div>
                                    </div>
                                    <p>
                                        Dwadzieścia trzy dni po tym, jak Thanos użył Rękawicy Nieskończoności aby wymazać połowę życia we Wszechświecie, Carol Danvers ratuje Tony’ego Starka i Nebulę przebywających w przestrzeni kosmicznej na statku należącym do Strażników Galaktyki i pomaga im powrócić na Ziemię. Na miejscu ponownie łączą się z pozostałymi przy życiu członkami Avengers: Bruce’em Bannerem, Steve’em Rogersem, Thorem, Natashą Romanoff, Jamesem Rhodesem oraz Rocketem. Udaje im się zlokalizować Thanosa na niezamieszkanej planecie. Udają się tam, by odebrać Thanosowi Kamienie Nieskończoności i przywrócić do życia wszystkich, których unicestwił. Dotarłszy na miejsce, dowiadują się jednak, że Thanos zniszczył Kamienie Nieskończoności. Thor ścina głowę Thanosowi.
                                    </p>
                                    <h6>Gatunek filmu:</h6>
                                    <span>superbohaterski, fantastyka naukowa, akcja</span>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                                    <button type="button" class="btn btn-primary">
                                        <a href="zala-endgame.php">Kup Bilety</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

            <div class="col-md-4 col-lg-3">
                <div class="movie-poster" data-toggle="modal">
                    <div class="poster-img">
                        <img src="images/shawshank1.jpg" alt="Skazani na Shawshank" class="img-fluid">
                    </div>

                    <div class="poster-description">
                        <h3 class="movie-title">Skazani na Shawshank</h3>
                        <button type="button" class="btn btn-light" data-toggle="modal" data-target=".shawshank">Więcej</button>
                    </div>
                </div>
            </div>

            <div class="modal fade shawshank" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Skazani na Shawshank</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div id="shawshank-carousel" class="carousel slide">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#shawshank-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#shawshank-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#shawshank-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    <button type="button" data-bs-target="#shawshank-carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="images/shawshank1.jpg" alt="Zdjęcie 1">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="images/shawshank2.jpg" alt="Zdjęcie 2">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="images/shawshank3.jpg" alt="Zdjęcie 3">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="images/shawshank4.jpg" alt="Zdjęcie 4">
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#shawshank-carousel" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Poprzedni</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#shawshank-carousel" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Następny</span>
                                    </button>
                                </div>
                            </div>
                            <p>
                            Film powstał na kanwie opowiadania Stephena Kinga Rita Hayworth and Shawshank Redemption. Opowiada historię Andy'ego Dufresne'a, bankiera, który zostaje niesłusznie skazany na karę podwójnego dożywocia za zamordowanie własnej żony i jej kochanka. Trafia do więzienia Shawshank, w którym rządzą sadystyczni strażnicy i apodyktyczny naczelnik. Jednak mimo wszystko nie załamuje się.
                            </p>
                            <h6>Gatunek filmu:</h6>
                            <span>dramat, kryminał</span>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                            <button type="button" class="btn btn-primary">
                                <a href="zala-shawshank.php">Kup Bilety</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            

            <div class="col-md-4 col-lg-3">
                <div class="movie-poster" data-toggle="modal">
                    <div class="poster-img">
                        <img src="images/trzysta1.jpg" alt="300" class="img-fluid">
                    </div>

                    <div class="poster-description">
                        <h3 class="movie-title">300</h3>
                        <button type="button" class="btn btn-light" data-toggle="modal" data-target=".trzysta">Więcej</button>
                    </div>
                </div>
            </div>

            <div class="modal fade trzysta" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">300</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div id="trzysta-carousel" class="carousel slide">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#trzysta-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#trzysta-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#trzysta-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    <button type="button" data-bs-target="#trzysta-carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="images/trzysta1.jpg" alt="Zdjęcie 1">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="images/trzysta2.jpg" alt="Zdjęcie 2">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="images/trzysta3.jpg" alt="Zdjęcie 3">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="images/trzysta4.jpg" alt="Zdjęcie 4">
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#trzysta-carousel" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Poprzedni</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#trzysta-carousel" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Następny</span>
                                    </button>
                                </div>
                            </div>
                            <p>Filmowa adaptacja komiksu Franka Millera 300. Film jest opowieścią o bitwie pod Termopilami, która miała miejsce w 480 r. p.n.e. podczas wojny grecko-perskiej. Leonidas wobec nadchodzącej porażki (wynikającej z przewagi wojsk perskich) pozostawił większość oddziałów w Sparcie, udając się z około 300 Spartanami na nieuniknioną śmierć w kierunku wąwozu Termopile, w którym miała rozegrać się bitwa.
                            </p>
                            <h6>Gatunek filmu:</h6>
                            <span>historyczny, wojenny, akcja</span>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                            <button type="button" class="btn btn-primary">
                                <a href="zala-trzysta.php">Kup Bilety</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-3">
                <div class="movie-poster" data-toggle="modal">
                    <div class="poster-img">
                        <img src="images/samuraj1.jpg" alt="Ostatni Samuraj" class="img-fluid">
                    </div>

                    <div class="poster-description">
                        <h3 class="movie-title">Ostatni Samuraj</h3>
                        <button type="button" class="btn btn-light" data-toggle="modal" data-target=".samuraj">Więcej</button>
                    </div>
                </div>
            </div>

            <div class="modal fade samuraj" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Ostatni samuraj</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div id="samuraj-carousel" class="carousel slide">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#samuraj-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#samuraj-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#samuraj-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    <button type="button" data-bs-target="#samuraj-carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="images/samuraj1.jpg" alt="Zdjęcie 1">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="images/samuraj2.jpg" alt="Zdjęcie 2">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="images/samuraj3.jpg" alt="Zdjęcie 3">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="images/samuraj4.jpg" alt="Zdjęcie 4">
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#samuraj-carousel" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Poprzedni</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#samuraj-carousel" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Następny</span>
                                    </button>
                                </div>
                            </div>
                            <p>Rok 1876. Kapitan Nathan Algren (Tom Cruise) po traumatycznych przeżyciach z okresu służby w armii Stanów Zjednoczonych bezwzględnie i brutalnie pacyfikującej wioski indiańskie, jest wrakiem człowieka, nadużywa alkoholu, ma koszmary. Z braku lepszych alternatyw przyjmuje propozycję wyjazdu do Japonii, gdzie ma szkolić tamtejszą armię przeciwko nieposłusznym rebeliantom – samurajom dowodzonym przez Katsumoto (Ken Watanabe). Niestety, nie otrzymuje dość czasu na odpowiednie wyszkolenie żołnierzy, w związku z czym rząd wysyła nieprzygotowaną armię przeciwko świetnie wyszkolonym samurajom. Armia Algrena zostaje rozgromiona, a on sam trafia do niewoli. W wiosce samurajów zostaje oddany pod opiekę siostrze Katsumoto – pięknej Tace (Koyuki Katō), której Algren podczas bitwy zabił męża. Mimo tego zaprzyjaźniają się ze sobą. W wiosce samurajów Algren znajduje spokój i zaprzyjaźnia się z mieszkańcami. Przesiąka zasadami kodeksu honorowego bushidō i zostaje jednym z samurajów. Wkrótce zostanie wysłana kolejna, lepiej wyszkolona i wyposażona armia cesarska, jednak Algren postanawia stanąć po stronie samurajów.
                            </p>
                            <h6>Gatunek filmu:</h6>
                            <span>dramat, wojenny</span>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                            <button type="button" class="btn btn-primary">
                                <a href="zala-samuraj.php">Kup Bilety</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
<?php
    include 'footer.php';   
?>