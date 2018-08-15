<?php
include_once('header.php');
 ?>

        <div class="container">
            <?php
            include_once('top-navbar.php');
             ?>

             <div class="row">
               <div class="col-md-12">
                   <h1>Susisiekite su mumis</h1>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
               </div>
               <div class="col-md-6">
                   <form class="pb-1">
                       <div class="form-group">
                           <label for="vardas">Vardas</label>
                           <input type="text" class="form-control" id="vardas">
                       </div>
                      <div class="form-group">
                        <label for="elPastas">El. pastas</label>
                        <input type="email" class="form-control" id="elPastas">
                      </div>
                      <div class="form-group">
                          <label for="Tema">Tema</label>
                          <input type="text" class="form-control" id="tema">
                      </div>
                      <div class="form-group">
                        <label for="pranesimas">Pranesimas</label>
                        <textarea class="form-control" id="pranesimas" rows="3"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary btn-lg btn-block">Siusti</button>
                    </form>
               </div>
             </div>

        </div>

        <?php
        include_once('footer.php');
         ?>
