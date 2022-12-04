<?php
if (!isset($_SESSION['email']) || isset($_SESSION['email'])) {

  echo '
        <section class="section_1">
        
            <div  id="carouselExampleFade" class="carousel slide color_bg carousel-fade" data-bs-ride="carousel ">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active carousel-custom" style="height:98vh;">
                 <img src="images/P1.png"  alt="" width="100%" height="100%" class="img_bg">
                  <div class="container">
                    <div class="carousel-caption text-start position-absolute ">
                      <h1 class="sizing-menu">Bienvenue dans le garage</h1>
                      <p>Some representative placeholder content for the first slide of the carousel.</p>
                      <p class="py-5 "><a class="btn my-5 btn-lg btn-primary me-5" href="#contact">Contactez nous</a> <a class="btn p-2 fs-5 my-5 ms-5 btn-outline-light"  href="index.php?page=A_Propos">En savoir plus</a></p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item carousel-custom" style="height:98vh;">
                <img src="images/P2.png"  alt="" width="100%" height="100%">
                  <div class="container">
                    <div class="carousel-caption text-start position-absolute ">
                      <h1 class="sizing-menu">Bienvenue dans le garage</h1>
                      <p>Some representative placeholder content for the first slide of the carousel.</p>
                      <p class="py-5 "><a class="btn my-5 btn-lg btn-primary me-5" href="#contact">Contactez nous</a> <a class="btn p-2 fs-5 my-5 ms-5 btn-outline-light" href="index.php?page=A_Propos">En savoir plus</a></p>
                    </div>
                  </div>
               </div>
               <div class="carousel-item carousel-custom" style="height:98vh;">
                <img src="images/P3.png"  alt="" width="100%" height="100%">
                 <div class="container">
                 <div class="carousel-caption text-start position-absolute ">
                 <h1 class="sizing-menu">Bienvenue dans le garage</h1>
                 <p>Some representative placeholder content for the first slide of the carousel.</p>
                 <p class="py-5 "><a class="btn my-5 btn-lg btn-primary me-5" href="#contact">Contactez nous</a> <a class="btn p-2 fs-5 my-5 ms-5 btn-outline-light" href="index.php?page=A_Propos">En savoir plus</a></p>
               </div>
                 </div>
               </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
              </button>
            </div> 
        </section>

        <section class="" style="height: 60vh; margin-top: 8rem;">
        <div class="container marketing text-center">
          <div class="row">
            <div class="col-lg-4">
              
              <img src="images/pt-1.png" alt="" class="bd-placeholder-img mb-5 rounded-circle" width="140" height="140">
              <h5 class="mt-1 fw-normal">SÉLECTION RIGOUREUSE</h5>
              <p>Nous certifions uniquement les meilleurs garages de chaque région, en suivant un strict cahier des charges.</p>
              <p><a class="btn btn-primary" href="#">En savoir plus &raquo;</a></p>
          </div>
          <div class="col-lg-4">
            <img src="images/pt-6.png" alt="" class="mb-5 bd-placeholder-img rounded-circle" width="140" height="140">
             
            <h5 class="mt-1  fw-normal">CHARTE DE CONFIANCE</h5>
            <p>Nos Garagistes travaillent dans le respect de notre charte de Confiance, qui vous garantit un entretien de qualité.</p>
            <p><a class="btn btn-primary" href="#">En savoir plus &raquo;</a></p>
          </div>
          <div class="col-lg-4">
            <img src="images/pt-3.png" alt="" class="mb-5 bd-placeholder-img rounded-circle" width="140" height="140">
            <h5 class="mt-1 fw-normal">SUIVI RÉGULIER</h5>
            <p>Nous ne gardons que les meilleurs. Seuls les Garages plébiscités par les clients conservent leur certification.</p>
            <p><a class="btn btn-primary" href="#">En savoir plus &raquo;</a></p>
          </div>
        </div>
        </section>



        <section>
      <hr>
    
          <div class="container col-xl-10 col-xxl-8 px-4 py-5">
          <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-lg-start">
              <h1 class="display-4 fw-bold lh-1 mb-3">Déposez votre voiture avec sérenité</h1>
              <p class="col-lg-10 fs-4">Des mains expertes ! Notre garage est agréé par les assureurs, répare et repeint vos véhicules en cas de choc. Déposé votre voiture les yeux fermés. </p>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
              <div class="p-4 p-md-5  bg-light" >
               <img src="images/car.jpg" width="150%" class="border rounded-3" alt="">
              </div>
            </div>
          </div>
        </div>
              </section>
          

      <hr>
      <section class=" section_2"  id="contact">
      <div class="container">
      
        <div class="row gx-5 " >
          <div class="col-lg-6 col-md-6 col-sm-6 p-0 col-xm-6  box_contact bg-white">
            <form class="mt-5">
                <div>
                    <h1 class="text-primary text-start ">Contactez-nous</h1>
                    <h5 class="text-start">Nous sommes là pour vous</h5>
                </div>
                  <div>
                    <div>
                      <input type="text" class="mt-3 input_contact" placeholder="Entrez votre nom" name="" id="" required>
                    </div>
                    <div>
                      <input type="text"  class="mt-3 input_contact" placeholder="Entrez votre adresse email" name="" id="" required >
                    </div>
                    <div>
                      <textarea name=""  class="mt-3 input_contact" id="" cols="30" rows="7" placeholder="Alleze-y, nous vous écoutons...." required ></textarea>
                    </div>
                    <div>
                      <input type="submit"  class="mt-3 input_contact  text-white fs-5" value="Valider" name="" id="">
                    </div>
                </div>
            </form>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 p-0 box_img">
            <img src="images/pj5.png" alt="" width="90%">
          </div>
        </div>
        </div>
      </section>
      
      ';

}