 <?php
  // $kode_profil = $_GET['kode_profil'];
    $queryProduct = "SELECT isi_profil FROM profil";
    $rsProduct = mysqli->query($konek, $queryProduct);
    $row = mysqli->fetch_assoc($rsProduct);
  //  $queryKomentar = "SELECT * FROM tb_komentar WHERE id_buku=$id_buku ORDER BY id_komentar DESC";
   // $rsKomentar = mysqli->query($konek, $queryKomentar);
?>
    <!-- About us -->
    <section class="section-wrap about-us pb-60">
      <div class="container">
        <div class="row">
          <div class="col-sm-8">
            <h4 class="about-intro uppercase">PT. Shelter</h4>
            <p align="justify">
                            <?php $this(htmlspecialchars_decode(stripcslashes($row->$profil))); ?>
                        </p>
          </div>
                    <div class="col-xl-2 col-lg-3" data-aos="fade-left">
            <br/>
            <img src="img/sns.png" class="img-fluid" alt="">
          </div>
        </div>

      </div>
    </section>

    <!-- Divider -->
    <div class="container">
      <hr>
    </div>


    <!-- Our Team -->
    <section class="section-wrap our-team pb-50">
    </section> <!-- end our team -->

    <!-- Divider -->
    <div class="container">
      <hr>
    </div>