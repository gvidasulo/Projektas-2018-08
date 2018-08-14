<?php
include_once('header.php');
 ?>

        <div class="container">
            <?php
            include_once('top-navbar.php');
             ?>
            <main class="row">
                <div class="col-md-12 auktis-1000">
                    <div class="row">
                      <div class="col-md-4 aukstis-350">
                          <img src="image/200x200.jpeg" alt="" class="pasvirusi-foto-desineje">
                          <img src="image/200x200-2.jpeg" alt="" class="pasvirusi-foto-desineje-1">
                      </div>
                      <div class="col-md-4 aukstis-350 vidurinis-tekstas">
                          <h2>Tekstas</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                      </div>
                      <div class="col-md-4 aukstis-350">
                          <img src="image/200x200-2.jpeg" alt="" class="pasvirusi-foto-kaireje">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4 aukstis-350">
                          <img src="image/300x400.jpg" alt="" class="desineje-apatine-foto">
                          <img src="image/600x100.jpeg" alt="" class="desineje-apatine-foto-1">
                      </div>
                      <div class="col-md-3 aukstis-350">
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2293.42327994808!2d23.937308215371914!3d54.91304406390932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e7220e526e5937%3A0xc36a3b2ecaffb9a9!2sTopo+Centras!5e0!3m2!1sen!2slt!4v1534075537969" width="650" height="400" frameborder="0" style="border:0" allowfullscreen class="google-maps"></iframe>
                      </div>
                      <div class="col-md-5 aukstis-350 apatinis-tekstas">
                          <h4>Suzinokite kiek kelio !</h4>
                          <p>Iveskite apacioje savo adresa (is kur noresite isvykti) ir suzinosite marsruta iki musu parduotuves !</p>
                          <form action="http://maps.google.com/maps" method="get" target="_blank">
                             <label for="saddr">Iveskite adresa</label>
                             <input type="text" name="saddr" placeholder="Petro g. 9 Kaunas"/>
                             <input type="hidden" name="daddr" value="Savanorių pr. 206A, Kaunas 50193" />
                             <input type="submit" value="Gauti marsruta !" />
                          </form>
                      </div>
                  </div>

                  </div>
                </div>
            </main>

        </div>


        <?php
        include_once('footer.php');
         ?>
