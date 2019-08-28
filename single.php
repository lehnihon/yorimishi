<?php
get_header(); ?>
<?php if ( have_posts() ) : the_post(); ?>
<div id="page">
  <div class="banner-single" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'', array('class' => "img-fluid")); ?>')">
    <div class="container h-100">
      <div class="row align-items-center justify-content-lg-center h-100">
      </div>   
    </div>
  </div>
  <div class="conteudo-single">
    <div class="container">
      <h1 class="titulo-single"><?php the_title() ?></h1>
      <?php the_content(); ?>
    </div>
  </div>

</div>
<?php endif; // End of the loop. ?>
<?php get_footer(); ?>
