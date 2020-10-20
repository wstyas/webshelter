index.php
<?php 
  include('lib/koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PT. Shelter Semarang</title>

  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="">
  
  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,700%7CRaleway:300,400,700%7CPlayfair+Display:700' rel='stylesheet'>

  <!-- Css -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/magnific-popup.css" />
  <link rel="stylesheet" href="css/font-icons.css" />
  <link rel="stylesheet" href="css/sliders.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/animate.min.css" />

  <!-- Favicons -->
  <link rel="shortcut icon" href="img/shelter.png">
  <link rel="apple-touch-icon" href="img/shelter.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

</head>

<body class="relative">

  <!-- Preloader -->
<!--  <div class="loader-mask">
    <div class="loader">
      <div></div>
      <div></div>
    </div>
  </div> -->

  <main class="content-wrapper oh">
    <?php
        include("inc/navbar.php");
        if(get("p")) {
            $page = "pages/".get["p"].".php";
            if(is_file($page)) {
                include($page);
            } else {
                include("pages/404.php");
            }
        } else {
            include("pages/dashboard.php");
        }
        include("inc/footer.php");
    ?>  
  </main> <!-- end main container -->

  <!-- jQuery Scripts -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/plugins.js"></script>
  <script type="text/javascript" src="js/scripts.js"></script>
  <?php
    if(isset(get['p'])){
      $hal = get['p'];
      if($hal=='berita_detail'){
  ?>
  <script type="text/javascript" src="js/tinymce/jquery.tinymce.min.js"></script>
  <script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
  <script type="text/javascript" class="init">
            tinymce.init({
                selector: 'textarea',
                height: 150,
                branding: false,
                menubar: false,
                plugins: [
                    'advlist autolink lists link charmap print preview anchor',
                    'searchreplace visualblocks code fullscreen',
                    'insertdatetime media table contextmenu paste code'
                ],
                toolbar: 'bold italic | alignleft aligncenter alignright alignjustify | link image',
                
            });
  </script>
  <?php } } ?>
</body>
</html>