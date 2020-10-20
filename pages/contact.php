<?php
$queryProduct = "SELECT * FROM kontak";
    $rsProduct = mysqli_query($konek, $queryProduct);
    $row = mysqli_fetch_assoc($rsProduct);
?>
<!-- Breadcrumbs -->
    <div class="container">
      <ol class="breadcrumb">
        <li>
          <a href="index.php">Beranda</a>
        </li>
        <li class="active">
          Kontak Kami
        </li>
      </ol> <!-- end breadcrumbs -->
    </div>


    <!-- Contact -->
    <section class="section-wrap contact">
      <div class="container">
        <div class="row">

          <div class="col-md-8">
            <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=pt%20shelter&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/en/"></a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
          </div> <!-- end col -->

          <div class="col-md-4 mb-40 mt-mdm-40 contact-info">

            <div class="address-wrap">
              <h4 class="uppercase">Alamat</h4>
              <address class="address"> <?php echo $row['alamat']; ?></address>
            </div>

            <h4 class="uppercase">Informasi Kontak</h4>
            <ul class="contact-info-list">
              <li><span>WhatsApp: </span><a><?php echo $row['whatsapp']; ?></a></li>
              <li><span>E-mail: </span><a class="sliding-link"> <?php echo $row['email']; ?></a></li>
              <li><span>Facebook: </span><a> <?php echo $row['facebook']; ?></a></li>
            </ul>

          </div>          

        </div>
      </div>
    </section> <!-- end contact -->