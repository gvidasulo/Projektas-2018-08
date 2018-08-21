<?php
echo "<div class='col-md-2 border sonine_spalva mr-3'>";
echo "<nav class='nav flex-column soninis_menu'>";
echo "<h5>Prekiu meniu</h5>";
include_once ('db-prekiu-info.php');
for ($i=1; $i < 6; $i++) {
    $visosPrekes1 = getPreke($i);
    echo "<a class='nav-link nav_papildymas' href='" . $visosPrekes1['link'] . "'>&#10148; " . $visosPrekes1['name'] . "</a>";
}
echo "</nav>";
echo "</div>";
 ?>
