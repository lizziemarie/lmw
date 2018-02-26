<?php
/**
 * The template for displaying the case studies archive page
 *
 * @package tww
 * @subpackage tww
 * @since tww
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post();
					$image_1 = get_field('image_1');
					$size = "medium";
					$services = get_field('services')?>

				<article class="case-study">
					<aside class="case-study-sidebar">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<h4><?php echo $services; ?></h4>
						<?php the_excerpt(); ?>
						<p><strong><a href="<?php the_permalink(); ?>">View Project</a</strong></p>
					</aside>


					<div class="case-study-images">
						<a href="<?php the_permalink(); ?>">
							<?php if($image_1) {
							echo wp_get_attachment_image( $image_1, $size );
							} ?>
						</a>
					</div>
				</article>

			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
