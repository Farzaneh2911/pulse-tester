<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
  <?php wp_head(); ?>
</head>

<body <?php body_class('bg-gray-900'); ?>>

<header class="fixed top-0 left-0 right-0 z-50 bg-white border-b border-gray-200">

  
  <div class="header-container">
   
    <div class="header-inner">
      <!-- LEFT LOGO -->
      <div class="header-logo-left">
        <img 
          src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-top.png"
          alt="A&M Taxand"
          class="logo-top-img"
        >
      </div>
      <!-- HAMBURGER BUTTON (Mobile Only) -->
      <button class="hamburger-btn" id="hamburger-btn" aria-label="Toggle menu" aria-expanded="false">
        <span class="hamburger-line"></span>
        <span class="hamburger-line"></span>
        <span class="hamburger-line"></span>
      </button>
      
      <!-- NAVIGATION -->
      <nav class="Nav-bar" id="nav-menu" style="gap: 8px;">
        <a href="#about" class="text-blue  uppercase tracking-wide  hover:text-black transition" style="font-family: MdCn; font-size: 18px;">About</a>
        <a href="#who-we-serve" class="text-blue uppercase tracking-wide  hover:text-black transition" style="font-family: MdCn; font-size: 18px;">Who We Serve</a>
        <a href="#what-we-do" class="text-blue uppercase tracking-wide  hover:text-black transition" style="font-family: MdCn; font-size: 18px;">What We Do</a>
        <a href="#thought" class="text-blue uppercase tracking-wide  hover:text-black transition" style="font-family: MdCn; font-size: 18px;">Thought Leadership</a>
        <a href="#events" class="text-blue uppercase tracking-wide  hover:text-black transition" style="font-family: MdCn; font-size: 18px;">Events</a>
        <a href="#partners" class="text-blue uppercase tracking-wide  hover:text-black transition" style="font-family: MdCn; font-size: 18px;">Our Partners</a>
      </nav>

      <!-- RIGHT LOGO -->
      <div class="header-logo-right">
        <img 
          src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-top-right.png"
          alt="A&M Global"
          class="logo-top-right-img"
        >
      </div>
    

    </div>

  </div><

</header>


<div class="header-spacer"></div>
