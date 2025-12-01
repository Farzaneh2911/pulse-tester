<?php
/*
 Template Name: Pulse Tester
*/
get_header();
?>

<main class="bg-gray-900 text-white">

  <!-- HERO SECTION -->
  <section class="relative min-h-[80vh] lg:min-h-screen flex items-center overflow-hidden">
    <!-- Video background -->
    <video class="absolute inset-0 w-full h-full object-cover"
           autoplay muted loop playsinline
           >
     
      <source src="<?php echo get_template_directory_uri(); ?>/assets/video/amtax.mp4" type="video/mp4">
    </video>

    <!-- Dark overlay -->
    <div class="absolute inset-0 bg-black/50"></div>

    <!-- Content -->
    <div class="relative z-10 w-full max-w-6xl mx-auto px-4 lg:px-0 flex flex-col lg:flex-row justify-between items-center lg:items-end gap-10 py-16 lg:py-24">
      <!-- Left date & tagline -->
      <div class="hero-left relative z-10">
        <div class="hero-left-circle"></div>
        <p class="hero-date">16–18 May 2018</p>
         
         <span id="hero-tagline-text" class="hero-tagline-text">Tax Trends Today</span>
      </div>

            <!-- Right conference info -->
      <div class="text-right max-w-md hero-right">
        <!-- GLOBAL blue circle + text -->
        <div class="relative inline-block mb-4 hero-global-wrapper">
          <!-- Blue circle -->
          <div class="hero-global-circle rounded-full border border-blue-500"
               style="border-color:#3585b7;">
          </div>
          <!-- GLOBAL text -->
          <div class="hero-title">
            <div class="hero-title-row">
              <span class="hero-title-global">GLOBAL</span>
              <img 
                src="<?php echo get_template_directory_uri(); ?>/assets/img/Global-icon.png" 
                alt="Global Icon" 
                class="hero-title-icon"
              >
            </div>

            <span class="hero-title-conference">CONFERENCE</span>
            <div class="hero-dash"></div>
            <span class="hero-title-location">WASHINGTON D.C.</span>
         </div>
        </div>

        <!-- 2018 Circle with blend mode -->
        <div class="relative inline-block mb-4 hero-2018-wrapper">
          <div class="hero-2018-circle rounded-full"></div>
          <span class="hero-2018-text flex items-center justify-center font-bold">
            2018
          </span>
        </div>

        

       
      </div>
    </div>

    <!-- Scroll indicator -->
    <!-- Center small “scroll down” text on mobile -->
      <div class="scroll-indicator absolute bottom-8 left-1/2 -translate-x-1/2 hidden lg:flex flex-col items-center">
         <span class="scroll-text">SCROLL DOWN FOR MORE</span>
         <div class="scroll-arrow"></div>
      </div>
  </section>

  <!-- ABOUT SECTION -->

 <!-- ABOUT SECTION -->
  <section id="about" class="section section-about">
    <div class="about-inner">
    
      <!-- Title + line -->
      <div class="about-title-wrap">
        <h2 class="about-title">
          ABOUT ALVAREZ &amp; MARSAL TAXAND
        </h2>
       
      </div>

      <!-- Text block -->
      <div class="about-text">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque iaculis libero leo, sit amet interdum urna scelerisque sed. Quisque vitae sodales turpis, quis hendrerit ex. Fusce magna ipsum, eleifend sed augue id, condimentum volutpat purus. Pellentesque vitae elit orci. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin in lorem dolor. Fusce interdum feugiat nisl. Suspendisse eu quam purus. Nulla vulputate sem eget ipsum consectetur, a lobortis felis iaculis.
        </p>
        <p>
          Nullam ipsum eros, volutpat vel faucibus ullamcorper, blandit nec urna. Curabitur porta nunc quis quam congue, venenatis vestibulum leo lacinia. Nunc finibus mollis eros, eget condimentum massa efficitur id. Nulla scelerisque metus sit amet tellus laoreet, ut aliquam velit auctor. Sed ultrices ante urna, condimentum placerat enim lacinia. 
        </p>
      </div>

    </div>
  </section>

  <!-- WHAT WE DO SECTION -->
  <section id="what-we-do" class="what-section">
    <div class="what-overlay"></div>

    <div class="what-inner">
    
      <!-- LEFT TEXT -->
      <div class="what-left">
        <h2 class="what-title">WHAT WE DO</h2>

        <p>
         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque iaculis libero leo, sit amet interdum urna scelerisque sed. Quisque vitae sodales turpis, quis hendrerit ex. Fusce magna ipsum, eleifend sed augue id, condimentum volutpat purus. Pellentesque vitae elit orci. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin in lorem dolor. Fusce interdum feugiat nisl. 
        </p>
      </div>

      <!-- RIGHT WHEEL GRAPHIC -->
      <div class="lg:w-1/2 flex justify-center">
        <div class="what-wheel-wrapper">
         <img 
           src="<?php echo get_template_directory_uri(); ?>/assets/img/wheel.png"
           alt="Services Wheel"
           class="what-wheel-img"
        >
        </div>
      </div>

    </div>
  </section>



  

  
 

</main>

<?php get_footer(); ?>
