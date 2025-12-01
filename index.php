<?php get_header(); ?>

<main class="site-main container">
  <h2>Pulse Tester Theme</h2>
  <p>If you see this, your custom theme is working 🎉</p>

  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <article <?php post_class(); ?>>
        <h3><?php the_title(); ?></h3>
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
      </article>
    <?php endwhile; ?>
  <?php else : ?>
    <p>No posts found.</p>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
