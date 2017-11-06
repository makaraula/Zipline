<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <base href="<?php echo _SITE_URL; ?>" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Zip line Čikola</title>
  <meta http-equiv='Cache-control' content='no-cache' />
  <meta name='robots' content='index,follow' />
  <meta name="Copyright" content="Zip line Čikola" />
  <meta name="DC.language" content="hr-HR" />
  <meta name="DC.title" content="Zip line Čikola" />
  <meta name="DC.publisher" content="Zip line Čikola" />
  <meta name="description" content=""/>
  <meta name="keywords" content=""/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="shortcut icon" href="../images/favicon.png">
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
  <link rel="stylesheet" href="../js/magnific-popup/magnific-popup.css">
  <link href="../css/normalise.css" rel="stylesheet" type="text/css" />
  <link href="../css/style.css" rel="stylesheet" type="text/css" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>

<body>

  <div class="row header">
    <div class="wrapper">
      <div class="logo">
        <a href="home.php"><img src="../images/header-logo.png" alt="" /></a>
      </div><!-- end of .logo -->
      <div class="izbornik">
        <ul class="main-menu">
          <li><a href="home.php">Naslovna</a></li>
          <li><a href="o_zipline_cikola.php">O Zip line Čikola</a></li>
          <li><a href="galerija.php">Galerija</a></li>
          <li><a href="novosti.php">Novosti</a></li>
          <li><a href="kontakt.php">Kontakt</a></li>
        </ul><!-- end of .main-menu -->
      </div><!-- end of .izbornik -->
    </div><!-- end of .wrapper -->
  </div><!-- end of .header -->

  <div class="row big-img">

    <?php
     if(strpos($_SERVER['REQUEST_URI'], 'home.php') == true )
     {
     ?>
      <div class="top"><img src="../images/header-bottom.png" alt="" /></div>
     <?php }else{?>
      <div class="top"><img src="../images/header-bottom2.png" alt="" /></div>
    <?php }?>

    <?php
     if(strpos($_SERVER['REQUEST_URI'], 'home.php') == true )
     {
     ?>
      <img src="../lib/plugins/thumb.php?src=../images/content-images/slide1.jpg&w=1920&h=790&zc=1" alt="">
      <div class="bottom"><img src="../images/gray-top.png" alt="" /></div>
    <?php }
    ?>

  </div><!-- end of .big-img -->

  <div class="main-content">
