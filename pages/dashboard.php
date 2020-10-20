<?php 
  if(!get('cari')){ 
   
    $new = "SELECT id_berita, judul_berita, foto FROM berita ORDER BY id_berita DESC LIMIT 4";
    $best = "SELECT id_foto, keterangan_foto, foto FROM galeri ORDER BY id_foto DESC LIMIT 4";
    $partner = "SELECT id_partner, nama_partner, foto FROM partner ORDER BY id_partner DESC LIMIT 4";
    $rsNew = mysqli_query($konek, $new);
    $rsBest = mysqli_query($konek, $best);
    $rsPartner = mysqli_query($konek, $partner);

    $queryProduct = "SELECT isi_profil FROM profil";
    $rsProduct = mysqli_query($konek, $queryProduct);
    $row = mysqli_fetch_assoc($rsProduct);
?>
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-xl-6 col-lg-7" data-aos="fade-right">
            <br/>
            <img src="img/sns.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-xl-6 col-lg-5 pt-5 pt-lg-0">
            <p></p>
            <h3 data-aos="fade-up">&nbsp;</h3>
            <p data-aos="fade-up">
              <?php print_r(htmlspecialchars_decode(stripcslashes($row['isi_profil']))); ?>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    <!-- New Arrivals -->
    <section class="section-wrap new-arrivals pb-40">
      <div class="container">


        <div class="row heading-row">
          <div class="col-md-12 text-center">
            <h2 class="heading uppercase"><small>Berita Terbaru</small></h2>
          </div>
        </div>

        <div class="row row-10">              
          <?php while($row=mysqli_fetch_assoc($rsNew)){ ?>
            <div class="col-md-3 col-xs-12 animated-from-left">
              <div class="product-item">
                <div class="product-img">
                  <a href="#">
                    <img src="admins/uploads/berita/<?php print_r($row->$foto); ?>" alt="" style="height:300px; width:300px;">
                    <img src="admins/uploads/berita/<?php print_r($row->$foto); ?>" alt="" class="back-img">
                  </a>
                  <a href="?p=berita_detail&id_berita=<?php print_r($row->$id_berita); ?>" class="product-quickview">Lihat Selengkapnya</a>
                </div>
                <div class="product-details">
                  <h3>
                    <a class="product-title" href="?p=berita_detail&id_berita=<?php print_r($row->$id_berita); ?>"><b><?php print_r(substr($row['judul_berita']), 0, 35); if(strlen($row['judul_berita'])>35) print_r("...") ?></b></a>
                  </h3>
                </div>
              </div>
            </div>     
          <?php } ?>
        </div> <!-- end row -->
      </div>
    </section> <!-- end new arrivals -->

    <!-- Best Sellers -->
    <section class="section-wrap pb-0">
      <div class="container">

        <div class="row heading-row">
          <div class="col-md-12 text-center">
            <h2 class="heading uppercase"><small>Galeri Foto</small></h2>
          </div>
        </div>

        <div class="row row-10">              

          <?php while($row=mysqli_fetch_assoc($rsBest)){ ?>
            <div class="col-md-3 col-xs-12 animated-from-left">
              <div class="product-item">
                <div class="product-img">
                  <a href="#">
                    <img src="admins/uploads/galeri/<?php print_r($row->$foto); ?>" alt="" style="height:300px; width:300px;">
                    <img src="admins/uploads/galeri/<?php print_r($row->$foto); ?>" alt="" class="back-img">
                  </a>
                </div>
                <div class="product-details">
                  <h3 class="product-title" href="?p=berita_detail&id_berita=<?php print_r($row->$id_foto); ?>"><b><?php print_r($row->$keterangan_foto); ?></b>
                  </h3>
                </div>
              </div>
            </div>     
          <?php } ?>     

        </div> <!-- end row -->
      </div>
    </section> <!-- end best sellers -->

    <!-- Partners -->
    <section class="section-wrap pb-0">
      <div class="container">

        <div class="row heading-row">
          <div class="col-md-12 text-center">
            <h2 class="heading uppercase"><small>Partner Kami</small></h2>
          </div>
        </div>

        <div class="row row-10">              

          <?php while($row=mysqli_fetch_assoc($rsPartner)){ ?>
            <div class="col-md-3 col-xs-12 animated-from-left">
              <div class="product-item">
                <div class="product-img">
                  <a href="#">
                    <img src="admins/uploads/partner/<?php print_r($row->$foto); ?>" alt="" style="height:300px; width:300px;">
                    <img src="admins/uploads/partner/<?php print_r($row->$foto); ?>" alt="" class="back-img">
                  </a>
                </div>
                <div class="product-details">
                  <h3 class="product-title" href="?p=berita_detail&id_berita=<?php print_r($row->$id_foto); ?>"><b><?php print_r($row->$nama_partner); ?></b>
                  </h3>
                </div>
              </div>
            </div>     
          <?php } ?>     

        </div> <!-- end row -->
      </div>
    </section> <!-- end partner -->

      </div>
    </section>
  <?php } ?>            

    <!-- Partners -->
    <!--<section class="section-wrap partners pt-0 pb-50">
      <div class="container">
        <div class="row">

          <div id="owl-partners" class="owl-carousel owl-theme">

            <div class="item">
              <a href="#">
                <img src="img/partners/partner_logo_dark_1.png" alt="">
              </a>
            </div>
            <div class="item">
              <a href="#">
                <img src="img/partners/partner_logo_dark_2.png" alt="">
              </a>
            </div>
            <div class="item">
              <a href="#">
                <img src="img/partners/partner_logo_dark_3.png" alt="">
              </a>
            </div>
            <div class="item">
              <a href="#">
                <img src="img/partners/partner_logo_dark_4.png" alt="">
              </a>
            </div>
            <div class="item">
              <a href="#">
                <img src="img/partners/partner_logo_dark_5.png" alt="">
              </a>
            </div>
            <div class="item">
              <a href="#">
                <img src="img/partners/partner_logo_dark_6.png" alt="">
              </a>
            </div>
            <div class="item">
              <a href="#">
                <img src="img/partners/partner_logo_dark_1.png" alt="">
              </a>
            </div>
            <div class="item">
              <a href="#">
                <img src="img/partners/partner_logo_dark_2.png" alt="">
              </a>
            </div>

          </div>
          
        </div>
      </div>
    </section> -->
    <!-- end partners -->