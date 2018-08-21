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
                <div class="col-md">
                    <div class="row">
                      <div class="col-md-6">
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
                          <?php include_once('prekiu-info.php');
                          include_once('db-prekiu-info.php');
                          $preke3 = getPreke(3);
                          ?>
                          <h2><?php echo $preke3['name']; ?></h2>
                          <h4>Kaina: <?php echo $preke3['price']; ?> &euro;</h4>
                          <h6>Kiekis: <?php echo $preke3['kiekis']; ?></h6>
                          <p><?php echo $preke3Aprasymas[0]; ?></p>
                          <a href="apmokejimas.php?apmokejimas=<?php echo $preke3['id']; ?>">
                              <button class="mygtukas" type="submit" name="apmokejimas"><i class="far fa-money-bill-alt"></i> Pirkti</button>
                          </a>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 prekiu-parametrai">
                          <h3>Parametrai</h3>
                          <table class="table">
                          <tbody>
                              <?php
                              for ($i=0; $i < count($preke3ParametraiK) ; $i++) {
                                  echo "<tr>";
                                  echo "<th scope='row'>" . $preke3ParametraiK[$i] . "</th>";
                                  echo "<td>" . $preke3ParametraiD[$i] . "</td>";
                                  echo "</tr>";
                              }
                               ?>
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
