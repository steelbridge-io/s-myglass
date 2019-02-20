<?php
/*
Template Name: Basic Template
*/

get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>
<div id="basic-template" class="main-container">
	<div class="main-grid">
		<main class="main-content">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
				<?php comments_template(); ?>
			<?php endwhile; ?>
		</main>
		<?php get_sidebar('basic'); ?>
	</div>
</div>
<?php
get_footer();
