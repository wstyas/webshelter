<!-- Breadcrumbs -->
    <div class="container">
      <ol class="breadcrumb">
        <li>
          <a href="index.php">Beranda</a>
        </li>
        <li>
          <a href="?p=berita&halaman=1">Berita</a>
        </li>
        <li class="active">
          Berita
        </li>
      </ol> <!-- end breadcrumbs -->
    </div>


    <!-- Catalogue -->
    <section class="section-wrap pt-70 pb-40 catalogue">
      <div class="container relative">
        <div class="row">

          <div class="col-md-9 catalogue-col right mb-50">

           

              <div class="row row-10">
              <?php
                $bukuAll = "SELECT id_berita FROM berita";
                $rsBukuAll = mysqli_query($konek, $bukuAll);
                $halaman = 6;
                $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
                if(isset($_GET['id_berita'])){
                    $id_berita = $_GET['id_berita'];
                    $result = mysqli_query($konek,"SELECT * FROM berita");
                } else 
                    $result = mysqli_query($konek,"SELECT * FROM berita");
                $total = mysqli_num_rows($result);
                $pages = ceil($total/$halaman);
                if(isset($_GET['id_kat'])){
                    $buku = "SELECT id_berita, judul_berita, foto FROM berita ORDER BY id_berita DESC LIMIT $mulai, $halaman";
                }
                else    
                    $buku = "SELECT id_berita, judul_berita, foto FROM berita ORDER BY id_berita DESC LIMIT $mulai, $halaman";
                $rs = mysqli_query($konek, $buku);
                $no =$mulai+1;
                $data = mysqli_num_rows($rs);
                if($data==0){
              ?>
              <div class="col-md-12 col-xs-12">
                    <div class="product-item text-center">
                        <h1>Maaf, tidak ada berita</h1>
                    </div>
              </div>
              <?php   
                } else {
                    while($row=mysqli_fetch_assoc($rs)){
              ?>
                    <div class="col-md-4 col-xs-12">
                    <div class="product-item">
                        <div class="product-img">
                        <a href="#">
                            <img src="admins/uploads/berita/<?php print_r($row->$foto); ?>" alt="" style="height:300px; width:300px;">
                            <img src="admins/uploads/berita/<?php print_r($row->$foto); ?>" alt="" class="back-img">
                        </a>
                        <a href="?p=berita_detail&id_berita=<?php print_r($row->$id_berita); ?>" class="product-quickview">Baca Selengkapnya</a>
                        </div>
                        <div class="product-details">
                        <h3>
                            <a title="<?php $row->$judul_ berita; ?>" class="product-title" href="?p=berita_detail&id_berita=<?php print_r($row->$id_berita); ?>"><b><?php echo substr($row->$judul_berita, 0, 35); if(strlen($row->$judul_berita)>35) echo  "..." ?></b></a>
                        </h3>
                        </div>
                    </div>
                    </div>
                <?php } } ?>
              </div> <!-- end row -->
            <div class="clear"></div>
           
            <!-- Pagination -->
            <?php 
                if($data!=0){ 
            ?>
            <div class="pagination-wrap">           
              <nav class="pagination right clear">
                <?php if(isset($_GET['id_berita'])) { if($page == 1) echo ""; else {?>
                    <a href="?p=berita&id_berita=<?php echo $_GET['id_berita']; ?>&halaman=1"><i class="fa fa-angle-double-left"></i></a>
                    <a href="?p=berita&id_berita=<?php echo $_GET['id_berita']; ?>&halaman=<?php echo $_GET['halaman']-1; ?>"><i class="fa fa-angle-left"></i></a>
                <?php } } else { if($page == 1) echo ""; else {?>
                    <a href="?p=berita&halaman=1"><i class="fa fa-angle-double-left"></i></a>
                    <a href="?p=berita&halaman=<?php echo $_GET['halaman']-1; ?>"><i class="fa fa-angle-left"></i></a>
                <?php 
                    } }
                    if(isset($_GET['id_berita'])){ 
                        for ($i=1; $i<=$pages ; $i++){
                ?>
                    <a href="?p=berita&id_berita=<?php echo $_GET['id_berita']; ?>&halaman=<?php echo $i; ?>" class="<?php if($i==$page) echo 'page-numbers current'; ?>"><?php echo $i; ?></a>
                <?php } } else { 
                    for ($i=1; $i<=$pages ; $i++){
                ?>
                    <a href="?p=berita&halaman=<?php echo $i; ?>" class="<?php if($i==$page) echo 'page-numbers current'; ?>"><?php echo $i; ?></a>
                <?php } } ?>

                <?php if(isset($_GET['id_berita'])) { if($page == $pages) echo ""; else {?>
                    <a href="?p=berita&id_berita=<?php echo $_GET['id_berita']; ?>&halaman=<?php echo $_GET['halaman']+1; ?>"><i class="fa fa-angle-right"></i></a>
                    <a href="?p=berita&id_berita<?php echo $_GET['id_berita']; ?>&halaman=<?php echo $pages; ?>"><i class="fa fa-angle-double-right"></i></a>
                <?php } } else { if($page == $pages) echo ""; else {?>
                    <a href="?p=berita&halaman=<?php echo $_GET['halaman']+1; ?>"><i class="fa fa-angle-right"></i></a>
                    <a href="?p=berita&halaman=<?php echo $pages; ?>"><i class="fa fa-angle-double-right"></i></a>
                <?php } } ?>
              </nav>
            </div>
            <?php } ?>

          </div> <!-- end col -->

          <!-- Sidebar -->
          <aside class="col-md-3 sidebar left-sidebar">

            <!-- Bestsellers -->
            <div class="widget bestsellers">
              <div class="products-widget">
                <h3 class="widget-title uppercase">Berita Terbaru</h3>
                <?php
                    $best = "SELECT id_berita, judul_berita, foto FROM berita ORDER BY id_berita DESC LIMIT 2";
                    $rsBest = mysqli_query($konek, $best);
                    while($row=mysqli_fetch_assoc($rsBest)){
                ?>
                    <ul class="product-list-widget">
                    <li class="clearfix">
                        <a href="?p=berita_detail&id_berita=<?php print_r($row->$id_berita); ?>">
                     <img src="admins/uploads/berita/<?php print_r($row->$foto); ?>">
                        <span class="product-title"><?php print_r($row->$judul_berita); ?></span>
                        </a>
                    </li>               
                    </ul>
                    <br>
                <?php } ?>
              </div>
            </div>
          </aside> <!-- end sidebar -->

        </div> <!-- end row -->
      </div> <!-- end container -->
    </section> <!-- end catalogue -->