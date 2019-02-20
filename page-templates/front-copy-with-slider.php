<?php
/*
Template Name: Front
*/
get_header(); ?>

<header class="front-hero" role="banner">

	<div class="orbit clean-hero-slider" role="region" aria-label="Favorite Space Pictures" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
		<div class="orbit-wrapper">

		<div class="orbit-controls">
      <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
      <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
    </div>

			<ul class="products orbit-container">
			<?php
			$args = array(
					'post_type' => 'product',
					'posts_per_page' => 3,
					'tax_query' => array(
									array(
											'taxonomy' => 'product_visibility',
											'field'    => 'name',
											'terms'    => 'featured',
									),
							),
					);

			$loop = new WP_Query( $args );

				if ( $loop->have_posts() ) {
				while ( $loop->have_posts() ) : $loop->the_post();

				$image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' ); ?>

				<li class="orbit-slide" id="orbit-slider">
					<figure class="orbit-figure" id="orbit-image">
						<div class="grid-x grid-margin-x">

							<div class="cell medium-offset-6">
								<img class="orbit-image" src="<?php  echo $image[0]; ?>" alt="">
							</div>

							<figcaption class="orbit-caption cell medium-offset-1">
								<div class="align-self-middle">
								<div class="cell">
								<h3><?php echo the_title(); ?></h3>
								<p><?php echo the_excerpt(); ?></p>
								<?php $url = get_permalink( $product_id ); ?>
								<a href="<?php echo $url; ?>" id="orbit-button" class="button orbit-btn yellow">Buy <?php echo the_title(); ?> </a>
								</div>
								</div>
							</figcaption>

						</div>
					</figure>
				</li>

				<?php endwhile;
				} else {
				echo __( 'No products found' );
				}
				wp_reset_postdata();
				?>
			</ul>
		</div>

		<nav class="orbit-bullets">
		<button class="is-active" data-slide="1"><span class="show-for-sr">Lorem Ipsum Etiam</span></button>
		<button data-slide="2"><span class="show-for-sr">Lorem Ipsum Etiam</span></button>
		<button data-slide="3"><span class="show-for-sr">Lorem Ipsum Etiam</span></button>
		<!--<button data-slide="4"><span class="show-for-sr">Lorem Ipsum Etiam</span></button>
		<button data-slide="5"><span class="show-for-sr">Lorem Ipsum Etiam</span></button>
		<button data-slide="6"><span class="show-for-sr">Lorem Ipsum Etiam</span></button>-->
		</nav>

	</div>
</header>
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
