<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/reset.css" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/color.min.css" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/responsivo.css" />

  <!-- FONTES -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
    rel="stylesheet" />
  <!-- FIM DE FONTES -->

  <?php wp_head(); ?>

</head>

<body>
  <!-- HEADER -->
  <header id="header">
    <a id="logo" href="/home/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/logo.png" alt="" /></a>
    <nav id="navegacao">
      <ul id="menu">
        <li <?php if(is_page('home')) echo 'class="active"'; ?>>
          <a href="/home/">INICIO</a>
        </li>
        
        <li <?php if(is_page('sobre')) echo 'class="active"'; ?>>
          <a href="/sobre/">SOBRE</a>
        </li>
        
          <li <?php if(is_page('pacotes') || is_singular('nossospacotes')) echo 'class="active"'; ?>>
        <a href="/pacotes/">PACOTES</a>
          </li>
        
        <li <?php if(is_home() || is_singular('post') || (is_archive() && !is_category() && !is_tag() && !is_author() && !is_date())) echo 'class="active"'; ?>>
          <a href="/blog/">BLOG</a>
        </li>
      </ul>
    </nav>

    <ul class="rd-sociais">
      <li>
        <a href="https://api.whatsapp.com/send/?phone=5584988075272&text&type=phone_number&app_absent=0"
          target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/wpp.png" alt="" /></a>
      </li>
      <li>
        <a href="https://www.instagram.com/abcturismopedagogico/" target="_blank"><img
            src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/ig.png" alt="" /></a>
      </li>
      <li>
        <a href="https://www.threads.net/@abcturismopedagogico" target="_blank"><img
            src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/thds.png" alt="" /></a>
      </li>
    </ul>

    <!-- botao mobile -->
    <div class="btn-mobile">
      <div class="line1"></div>
      <div class="line2"></div>
      <div class="line3"></div>
    </div>
    <!-- botao mobile -->
  </header>

  <!-- BOTÃO WHATSAPP  -->
  <button class="btn-wpp">
    <a href="https://api.whatsapp.com/send/?phone=5584988075272&text&type=phone_number&app_absent=0" target="_blank">
      <div class="botao-zap">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/wpp-maior.png"
          alt="Entre em contato pelo whatsapp" />
      </div>
    </a>
  </button>
  <!-- FIM DO BOTÃO WHATSAPP -->