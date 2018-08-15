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
                      <div class="col-md padding-0">
                          <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                              <div class="carousel-inner">
                                <div class="carousel-item active">
                                  <img class="d-block w-100" src="image/900x90-1.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="image/900x90-2.jpg" alt="Second slide">
                                </div>
                              </div>
                          </div>
                      </div>
                    </div>

                    <div class="row pt-2">
                      <div class="col-lg-8">
                          <div class="row">
                              <?php
                              include_once('prekiu-info.php');

                              for ($i=0; $i < count($visosPrekes) ; $i++) {
                                  echo "<div class='col-md-6'>";
                                  echo "<a href='" . $visosPrekes[$i][0] . "' class='snip1573 pt-2 border'>";
                                  echo "<img src='image/" . $visosPrekes[$i][1] ."' class='img-fluid foto' alt='Responsive image'>";
                                  echo "<span class='prekes_tekstas'>" . $visosPrekes[$i][2] . "</span>";
                                  echo "<span class='prekes-kaina'>" . $visosPrekes[$i][3] . "&euro;</span>";
                                  echo "<figcaption> <h3>Apie preke</h3> </figcaption>";
                                  echo "</a>";
                                  echo "</div>";
                              }
                               ?>
                          </div>
                      </div>
                      <div class="col-md-4 atstumimas">
                          <h2 class="top_preke">Musu top preke</h2>
                          <a href="<?php echo $prekeTop[0]; ?>" class="snip1573">
                              <img src="image/<?php echo $prekeTop[1]; ?>" class="img-fluid foto_didesne" alt="Responsive image">
                              <span class="prekes_tekstas didesnis_tekstas"><?php echo $prekeTop[2]; ?></span>
                              <span class="prekes-kaina didesnis_tekstas"><?php echo $prekeTop[3]; ?> &euro;</span>
                              <figcaption> <h3>Apie preke</h3> </figcaption>
                          </a>
                      </div>
                    </div>
                </div>
            </main>
        </div>
        <?php
        include_once('footer.php');
         ?>
