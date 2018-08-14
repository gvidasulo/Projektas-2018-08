<?php
include_once('header.php');
 ?>
        <div class="container">
            <?php
            include_once('top-navbar.php');
            ?>
            <main class="row">
                <div class="col-md-12 aukstis-450">
                    <!-- karuseles pradzia -->
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="image/foto-1.jpg" alt="Pirma nuotrauka">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="image/foto-2.jpg" alt="Antra nuotrauka">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="image/foto-3.jpg" alt="Trecia nuotrauka">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Atgal</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Kitas</span>
                        </a>
                    </div>
                    <!-- karuseles pabaiga -->
                    <form class="" action="#" method="GET">

                        <div class="input-group input-group-lg pt-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-lg">Iveskite ieskomos prekes pavadinima</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">PAIESKA</button>
                            </div>
                        </div>
                    </form>
                </div>

            </main>
        </div>

        <?php
        include_once('footer.php');
         ?>
