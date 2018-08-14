<?php
include_once('header.php');
 ?>
        <div class="container">
            <?php
            include_once('top-navbar.php');
             ?>
            <main class="row">
                <?php
                include_once('left-navbar.php');
                 ?>
                <div class="col-md auktis-1000">
                    <div class="row">
                      <div class="col-md-6 aukstis-400">
                          <!-- karuseles pradzia -->
                          <div id="carouselExampleIndicators" class="carousel slide slider-atstumimas" data-ride="carousel">
                              <ol class="carousel-indicators">
                                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                              </ol>
                              <div class="carousel-inner">
                                  <div class="carousel-item active">
                                      <img class="d-block w-100 prekiu-slider" src="image/preke1.jpg" alt="Pirma nuotrauka">
                                  </div>
                                  <div class="carousel-item">
                                      <img class="d-block w-100 prekiu-slider" src="image/preke2.jpg" alt="Antra nuotrauka">
                                  </div>
                                  <div class="carousel-item">
                                      <img class="d-block w-100 prekiu-slider" src="image/preke3.jpg" alt="Trecia nuotrauka">
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
                      </div>
                      <div class="col-md-6 aukstis-400 prekiu-tekstas">
                          <h2>Prekes pavadinimas</h2>
                          <h4>Kaina: 58.99 &euro;</h4>
                          <h6>Preke turime | Kiekis: 10</h6>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                          <button class="mygtukas"><i class="far fa-money-bill-alt"></i> Pirkti</button>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 prekiu-parametrai">
                          <h3>Parametrai</h3>
                          <table class="table">
                          <tbody>
                            <tr>
                              <th scope="row">Tekstas vienas</th>
                              <td>Blablabla</td>
                            </tr>
                            <tr>
                              <th scope="row">Tekstas du</th>
                              <td>Blablabla</td>
                            </tr>
                            <tr>
                              <th scope="row">tekstas trys</th>
                              <td>Blablabla</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                </div>
            </main>
        </div>

        <?php
        include_once('footer.php');
         ?>
