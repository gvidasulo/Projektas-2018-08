<?php
include_once('prekiu-info.php');
echo "<div class='col-md-2 border sonine_spalva mr-3'>";
echo "<nav class='nav flex-column soninis_menu'>";
echo "<h5>Prekiu meniu</h5>";
echo "<a class='nav-link nav_papildymas' href='" . $prekeTop[0] . "'>&#10148; " . $prekeTop[2] . "</a>";
for ($i=0; $i < count($visosPrekes); $i++) {
    echo "<a class='nav-link nav_papildymas' href='" . $visosPrekes[$i][0] . "'>&#10148; " . $visosPrekes[$i][2] . "</a>";
}
echo "</nav>";
echo "</div>";
 ?>

<!-- <div class="col-md-2 border sonine_spalva mr-3">
    <nav class="nav flex-column soninis_menu">
      <a class="nav-link disabled">&#10148; TV IMTUVAI</a>
      <a class="nav-link nav_papildymas" href="preke-1.php">Preke 1</a>
      <a class="nav-link nav_papildymas" href="#">Preke 2</a>
      <a class="nav-link nav_papildymas" href="#">Preke 3</a>
      <a class="nav-link nav_papildymas" href="#">Preke 4</a>
      <a class="nav-link disabled">&#10148; HDD</a>
      <a class="nav-link nav_papildymas" href="#">Preke 5</a>
    </nav>
</div> -->
