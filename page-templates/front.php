<?php
/*
Template Name: Front
*/
get_header(); ?>

<div id="front-page-bg">

  <div class="fp-1">
  
  <div id="shop-pipes-here" class="text-center shop-here">
  <a class="shop-here-link" href="#shop" data-smooth-scroll data-animation-duration="2000"><h3>Shop Pipes Here</h3><i class="fas fa-cart-arrow-down fa-4x"></i></a>
  </div>

  <section id="front-page-details" class="grid-container fluid">
    <header class="text-center">
      <h1 class="fp-mh-title"><?php echo get_theme_mod('smg_fp_mh_title');?></h1>
      <div class="fp-mh-text"><?php echo get_theme_mod('smg_fp_mh_textarea');?></div>
      <h4 class="fp-mh-tel"><a href="tel:+1<?php echo get_theme_mod('smg_fp_mh_telnum');?>" title="telephone number"><?php echo get_theme_mod('smg_fp_mh_tel');?></a></h4>
    </header>
  </section>

  <?php do_action( 'foundationpress_before_content' ); ?>
  <?php while ( have_posts() ) : the_post(); ?>
  <section class="intro" role="main">
    <div class="fp-intro">

      <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
        <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
      </div>

    </div>
  </section>
  <?php endwhile; ?>
  <?php do_action( 'foundationpress_after_content' ); ?>

  <div class="section-divider">
    <hr />
    <div id="shop"></div>
  </div>
  </div>
  
  <div id="frontpage-products" class="grid-container fluid">

    <div id="shop-cont" class="product-cont">
      <?php dynamic_sidebar( 'smoke-my-glass-products' ); ?>
    </div>

  </div>
</div>
<script>
$(document).ready(function(){
  /*setTimeout(function(){
    $('.shop-here').fadeIn(100);
    }, 3000);*/
    $(".shop-here").animate({
        opacity: 1
    }, {
        duration: 3000,
        queue: false
    });
    $(".shop-here").animate({
        "padding-top": "50px"
    }, {
        duration: 2000,
        specialEasing: {
            "padding-top": "easeOutCirc"
        },
        queue: false
    });
  });
</script>

<?php get_footer();
