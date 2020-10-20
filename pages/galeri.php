    <!-- Catalogue -->
    <section class="section-wrap pt-70 pb-40 catalogue">
      <div class="container relative">
        <div class="row">

          <div class="col-md catalogue-col right mb-10">

           

              <div class="row row-10">
              <?php
                $bukuAll = "SELECT id_foto FROM galeri";
                $rsBukuAll = mysqli_query($konek, $bukuAll);
                $halaman = 6;
                $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
                if(isset($_GET['id_foto'])){
                    $id_foto = $_GET['id_foto'];
                    $result = mysqli_query($konek,"SELECT * FROM galeri");
                } else 
                    $result = mysqli_query($konek,"SELECT * FROM galeri");
                $total = mysqli_num_rows($result);
                $pages = ceil($total/$halaman);
                if(isset($_GET['id_foto'])){
                    $buku = "SELECT id_foto, keterangan_foto, foto FROM galeri ORDER BY id_foto DESC LIMIT $mulai, $halaman";
                }
                else    
                    $buku = "SELECT id_foto, keterangan_foto, foto FROM galeri ORDER BY id_foto DESC LIMIT $mulai, $halaman";
                $rs = mysqli_query($konek, $buku);
                $no =$mulai+1;
                $data = mysqli_num_rows($rs);
                if($data==0){
              ?>
              <div class="col-md-12 col-xs-12">
                    <div class="product-item text-center">
                        <h1>Maaf, data terkait masih kosong!</h1>
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
                            <img src="admins/uploads/galeri/<?php echo $row['foto']; ?>" alt="" style="height:350px; width: auto;">
                            <img src="admins/uploads/galeri/<?php echo $row['foto']; ?>" alt="" class="back-img">
                        </a>
                        </div>
                             <div class="product-details">
                        <h3 title="<?php $row['keterangan_foto']; ?>" class="product-title" href="?p=berita_detail&id_foto=<?php echo $row['id_foto']; ?>"><b><?php echo substr($row['keterangan_foto'], 0, 35); if(strlen($row['keterangan_foto'])>35) echo  "..." ?></b>
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
                <?php if(isset($_GET['id_foto'])) { if($page == 1) echo ""; else {?>
                    <a href="?p=galeri&id_foto=<?php echo $_GET['id_foto']; ?>&halaman=1"><i class="fa fa-angle-double-left"></i></a>
                    <a href="?p=galeri&id_foto=<?php echo $_GET['id_foto']; ?>&halaman=<?php echo $_GET['halaman']-1; ?>"><i class="fa fa-angle-left"></i></a>
                <?php } } else { if($page == 1) echo ""; else {?>
                    <a href="?p=galeri&halaman=1"><i class="fa fa-angle-double-left"></i></a>
                    <a href="?p=galeri&halaman=<?php echo $_GET['halaman']-1; ?>"><i class="fa fa-angle-left"></i></a>
                <?php 
                    } }
                    if(isset($_GET['id_foto'])){ 
                        for ($i=1; $i<=$pages ; $i++){
                ?>
                    <a href="?p=galeri&id_foto=<?php echo $_GET['id_foto']; ?>&halaman=<?php echo $i; ?>" class="<?php if($i==$page) echo 'page-numbers current'; ?>"><?php echo $i; ?></a>
                <?php } } else { 
                    for ($i=1; $i<=$pages ; $i++){
                ?>
                    <a href="?p=galeri&halaman=<?php echo $i; ?>" class="<?php if($i==$page) echo 'page-numbers current'; ?>"><?php echo $i; ?></a>
                <?php } } ?>

                <?php if(isset($_GET['id_foto'])) { if($page == $pages) echo ""; else {?>
                    <a href="?p=galeri&id_foto=<?php echo $_GET['id_foto']; ?>&halaman=<?php echo $_GET['halaman']+1; ?>"><i class="fa fa-angle-right"></i></a>
                    <a href="?p=galeri&id_foto<?php echo $_GET['id_foto']; ?>&halaman=<?php echo $pages; ?>"><i class="fa fa-angle-double-right"></i></a>
                <?php } } else { if($page == $pages) echo ""; else {?>
                    <a href="?p=galeri&halaman=<?php echo $_GET['halaman']+1; ?>"><i class="fa fa-angle-right"></i></a>
                    <a href="?p=galeri&halaman=<?php echo $pages; ?>"><i class="fa fa-angle-double-right"></i></a>
                <?php } } ?>
              </nav>
            </div>
            <?php } ?>

          </div> <!-- end col -->

        </div> <!-- end row -->
      </div> <!-- end container -->
    </section> <!-- end catalogue -->