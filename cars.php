      <?php
      include 'header.php';
      include './controller/model.php';
      $mobil = new Model();
      ?>
      <div class="site-wrap" id="home-section">
        <div class="site-mobile-menu site-navbar-target">
          <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
              <span class="icon-close2 js-menu-toggle"></span>
            </div>
          </div>
          <div class="site-mobile-menu-body"></div>
        </div>
        <div class="ftco-blocks-cover-1">
          <div class="ftco-cover-1 overlay innerpage" style="background-image: url('images/hero_2.jpg')">
            <div class="container">
              <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 text-center">
                  <h1>Our For Rent Cars</h1>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="site-section bg-light">
          <div class="container">
            <div class="row">
              <?php foreach ($mobil->select_mobil() as $value) : ?>
                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="item-1">
                    <a href="#"><img src="image/<?= $value['foto'] ?>" style="height: auto;max-width: 100%;" alt="Image" class="img-fluid"></a>
                    <div class="item-1-contents">
                      <div class="text-center">
                        <h3><a href="#"><?= strtoupper($value['merek']) ?></a></h3>
                        <div class="rating">
                          <span class="icon-star text-warning"></span>
                          <span class="icon-star text-warning"></span>
                          <span class="icon-star text-warning"></span>
                          <span class="icon-star text-warning"></span>
                          <span class="icon-star text-warning"></span>
                        </div>
                        <div class="rent-price"><span><?= number_format($value['tarif'], 2, ",", ".") ?></span></div>
                      </div>
                      <ul class="specs">
                        <li>
                          <span>Nomor Kendaraan</span>
                          <span class="spec"><?= $value['noSeri'] ?></span>
                        </li>
                        <li>
                          <span>Tempat Duduk</span>
                          <span class="spec"><?= $value['kapasitas'] ?></span>
                        </li>
                        <li>
                          <span>Jumlah Mobil</span>
                          <span class="spec"><?= $value['jumlah'] ?></span>
                        </li>
                        <li>
                          <span>Minium age</span>
                          <span class="spec">18 years</span>
                        </li>
                      </ul>
                      <div class="d-flex action">
                        <a href="contact.html" class="btn btn-primary">Rent Now</a>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>


              <div class="container site-section mb-5">
                <div class="row justify-content-center text-center">
                  <div class="col-7 text-center mb-5">
                    <h2>How it works</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo assumenda, dolorum necessitatibus eius earum voluptates sed!</p>
                  </div>
                </div>
                <div class="how-it-works d-flex">
                  <div class="step">
                    <span class="number"><span>01</span></span>
                    <span class="caption">Time &amp; Place</span>
                  </div>
                  <div class="step">
                    <span class="number"><span>02</span></span>
                    <span class="caption">Car</span>
                  </div>
                  <div class="step">
                    <span class="number"><span>03</span></span>
                    <span class="caption">Details</span>
                  </div>
                  <div class="step">
                    <span class="number"><span>04</span></span>
                    <span class="caption">Checkout</span>
                  </div>
                  <div class="step">
                    <span class="number"><span>05</span></span>
                    <span class="caption">Done</span>
                  </div>

                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <?php
      include 'footer.php';
      ?>