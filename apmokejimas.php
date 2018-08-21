<?php
include_once('header.php');
 ?>
        <div class="container">
            <?php
            include_once('top-navbar.php');
             ?>
             <main class="row">
                 <?php
                 include_once ('db-prekiu-info.php');
                 $prekesInfo = getPreke($_GET['apmokejimas']);
                 echo $prekesInfo['name'];
                 echo $prekesInfo['price'] . "Eurai";
                  ?>
             </main>
        </div>
        <?php
        include_once('footer.php');
         ?>
