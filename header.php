<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!-- <link rel="shortcut icon" type="image/png" href="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/logo-icon.png"; ?>" /> -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<?php wp_head(); ?>
</head>

<body>
  <div id="nav-fullscreen" class="overlay">
    <a href="javascript:void(0)" class="menu-close">&times;</a>
    <div class="overlay-content">
      <a href="#">About</a>
      <a href="#">Services</a>
      <a href="#">Clients</a>
      <a href="#">Contact</a>
    </div>
  </div>
  <div id="header">
    <div class="overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
    </video>
    <div class="container">
      <div class="row pt-4">
        <div class="col-3">
          <ul class="redes">
            <li><a href=""><i class="fab fa-tripadvisor"></i></a></li>
            <li><a href=""><i class="fas fa-play"></i></a></li>
            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
            <li><a href=""><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
        <div class="col-8 ml-auto text-right">
          <ul class="menu">
            <li><a href="#" class="menu-open">
              <div class="menu-hamb" >
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
              </div>
              <span>mais</span>
            </a></li>
            <li><a href="#">Localização</a></li>
            <li><a href="#">Fotos</a></li>
            <li><a href="#">Menu</a></li>
            <li><a href="#">O Yorimichi Izakaya</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container h-100">
      <div class="d-flex h-100 text-center align-items-center">
        <div class="w-100 text-white">
          <img class="animated fadeInUp" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/logo.png"; ?>" />
        </div>
      </div>
    </div>
  </div>


