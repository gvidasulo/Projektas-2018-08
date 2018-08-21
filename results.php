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
                      <div class="col-md">
                          <div class="row">
                              <?php
                              include_once('db-prekiu-info.php');
                              // for ($i=1; $i < 5 ; $i++) {
                              //     $visosPrekes = getPreke($i);
                              //     $visosFoto = getImg($i);
                              //     include ('template-preke.php'); // su include_once neveikia !
                              // }
                              $rezultatai = getPrekes();
                              $foto = getImgs();
                              $visosPrekes = mysqli_fetch_assoc($rezultatai);
                              $visosFoto = mysqli_fetch_assoc($foto);
                              while ($visosPrekes && $visosFoto) {
                                  include ('template-preke.php');
                                  $visosPrekes = mysqli_fetch_assoc($rezultatai);
                                  $visosFoto = mysqli_fetch_assoc($foto);
                              }
                               ?>
                          </div>
                      </div>
                      <div class="col-md-4 atstumimas">
                          <h2 class="top_preke">Musu top preke</h2>
                          <?php
                          $prekeTop = getPreke(5);
                          $prekeTopImg = getImg(5);
                           ?>
                          <a href="<?php echo $prekeTop['link']; ?>" class="snip1573">
                              <img src="image/<?php echo $prekeTopImg['name']; ?>" class="img-fluid foto_didesne" alt="Responsive image">
                              <span class="prekes_tekstas didesnis_tekstas"><?php echo $prekeTop['name']; ?></span>
                              <span class="prekes-kaina didesnis_tekstas"><?php echo $prekeTop['price']; ?> &euro;</span>
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
