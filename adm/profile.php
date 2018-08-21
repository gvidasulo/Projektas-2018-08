<?php
// include('session.php');
include_once ('db-info.php');
?>
<!DOCTYPE html>
<html lang="lt" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="../libs/css/bootstrap.min.css">
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <header class="row">
                <div class="col-md-12 pb-2 p-0">
                    <header class="navbar navbar-expand-sm bg-dark navbar-dark">
                          <ul class="navbar-nav">
                            <li class="nav-item">
                              <a class="nav-link" href="profile.php">Visos prekes</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Uzsakymai</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Klausimai</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="images.php">Paveiksliukai</a>
                            </li>
                            <li class="nav-item bg-danger">
                              <a class="nav-link" href="logout.php">Atsijungti</a>
                            </li>
                          </ul>
                    </header>
                </div>
            </header>
            <div class="row pt-1 pb-2">
              <div class="col-md-1"></div>
              <div class="col-md-4">
                  <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#create">
                  Sukurti nauja preke
                </button>
                <!-- Modal -->
                <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Sukurti nauja preke</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                          <form action="#" method="get">
                              <input type="text" name="sukurtilinkas" value="" placeholder="Pvz: preke-1.php">
                              <input type="text" name="sukurtipavadinimas" value="" placeholder="Prekes pavadinimas"><br>
                              <input type="text" name="sukurtikaina" value="" placeholder="Prekes kaina"><br>
                              <input type="text" name="sukurtikiekis" value="" placeholder="Prekes kiekis"><br>
                              <input type="text" name="sukurtipozicija" value="" placeholder="Prekes pozicija"><br>
                              <button type="submit" class="btn btn-primary">Sukurti</button>
                          </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php
              if (isset($_GET['sukurtilinkas'])) {
                  $sukurti = createPreke($_GET['sukurtilinkas'], $_GET['sukurtipavadinimas'], $_GET['sukurtikaina'], $_GET['sukurtikiekis'], $_GET['sukurtipozicija']);
                  echo "<META http-equiv='refresh' content='3;URL=profile.php'> ";
              }
               ?>
              <div class="col-md-7"></div>
            </div>
            <div class="row">
              <div class="col-md-12 bg-info">
                  <table class="table">
                      <tr>
                          <th scope="col">Prekes ID (Numeris)</th>
                          <th scope="col">link'as (URL nuorada)</th>
                          <th scope="col">Prekes pavadinimas</th>
                          <th scope="col">Prekes kaina</th>
                          <th scope="col">Kiekis</th>
                          <th scope="col">Pozicija</th>
                      </tr>
                      <?php
                      $rezultatai = getPrekes();
                      $preke = mysqli_fetch_assoc($rezultatai); // fetch - paiima viena eilute
                      while ($preke) {
                          echo "<tr>";
                          echo "<th>$preke[id]</th>";
                          echo "<th>$preke[link]</th>";
                          echo "<th>$preke[name]</th>";
                          echo "<th>$preke[price]</th>";
                          echo "<th>$preke[kiekis]</th>";
                          echo "<th>$preke[pozicija]</th>";
                          echo "<th><a href='#edit$preke[id]' id='link' data-toggle='modal' class='btn-block'><button type='submit' class='btn btn-primary' >EDIT</button></a></th>";
                          echo "<th><a href='?delete=$preke[id]'<button type='submit' class='btn btn-primary'>DELETE</button></a></th>";
                          include ('modal.php');
                          echo "</tr>";
                          $preke = mysqli_fetch_assoc($rezultatai); // fetch - paiima sekancia eilute
                      }
                      ?>
                  </table>
                  <?php
                  if (isset($_GET['pavadinimas'])) {
                      $atnaujinti = prekeUpdate($_GET['id'], $_GET['linkas'], $_GET['pavadinimas'], $_GET['kaina'], $_GET['kiekis'], $_GET['pozicija']);
                      echo "<META http-equiv='refresh' content='1;URL=profile.php'> ";
                  }
                  if (isset($_GET['delete'])) {
                      $istrinti = deletePreke($_GET['delete']);
                      echo "<META http-equiv='refresh' content='1;URL=profile.php'> ";
                  }
                   ?>
              </div>
            </div>
            <footer class="row">
                <div class="col-md-12">
                    <!-- <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b> -->
                    <!-- <b id="logout"><a href="logout.php">Atsijungti</a></b> -->
                </div>
            </footer>
        </div>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="../libs/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>
