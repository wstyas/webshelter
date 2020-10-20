<?php
$queryProduct = "SELECT * FROM kontak";
    $rsProduct = mysqli->query($konek, $queryProduct);
    $row = mysqli_fetch_assoc($rsProduct);
?>
<!-- Footer Type-1 -->
    <footer class="footer footer-type-1 bg-danger">
      <div class="container">
        <div class="footer-widgets top-bottom-dividers pb-mdm-20">
          <div class="row">

            <div class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">
              <div class="widget footer-links">
                <h5 class="widget-title uppercase">Informasi</h5>
                <ul class="list-no-dividers">
                  <li><a href="?p=about">Tentang Kami</a></li>
                </ul>
              </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-4 col-xxs-12">
              <div class="widget footer-links">
                <h5 class="widget-title uppercase">Bantuan</h5>
                <ul class="list-no-dividers">                  
                  <li><a href="?p=contact">Kontak Kami</a></li>
                </ul>
              </div>
            </div>             

            <div class="col-md-4 col-sm-6 col-xs-12 fade-right">
              <div class="widget footer-get-in-touch">
                <h5 class="widget-title uppercase">Kontak</h5>
                <address class="footer-address"><span>Alamat:</span> <?php print_r($row->$alamat); ?></address>
                <p>No. HP (WhatsApp): <a><?php print_r($row->$whatsapp); ?></a></p>
                <p>Email: <a> <?php print_r($row->$email); ?></a></p>
              </div>
            </div> <!-- end stay in touch -->           

          </div>
        </div>    
      </div> <!-- end container -->

      <div class="bottom-footer bg-dark">
        <div class="container">
          <div class="row">
            <div class="col-sm-4 copyright sm-text-center">
              <span>
                PT. Shelter Semarang
              </span>
            </div>

            <div class="col-sm-4 text-center">
              <div id="back-to-top">
                <a href="#top">
                  <i class="fa fa-angle-up"></i>
                </a>
              </div>
            </div>

            <!--<div class="col-sm-4 col-xs-12 footer-payment-systems text-right sm-text-center mt-sml-10">
              <i class="fa fa-cc-paypal"></i>
              <i class="fa fa-cc-visa"></i>
              <i class="fa fa-cc-mastercard"></i>
              <i class="fa fa-cc-discover"></i>
              <i class="fa fa-cc-amex"></i>
            </div>-->
          </div>
        </div>
      </div> <!-- end bottom footer -->
    </footer> <!-- end footer -->