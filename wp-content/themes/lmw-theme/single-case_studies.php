<?php
/**
 * The template for displaying a single case study
 *
 *
 * @package tww
 * @subpackage tww
 * @since tww
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div class="main-content" role="main">

			<?php while ( have_posts() ) : the_post();
				$services = get_field('services');
				$the_problem = get_field('the_problem');
				$the_solution = get_field('the_solution');
				$the_outcome = get_field('the_outcome');
				$image_1 = get_field('image_1');
				$image_2 = get_field('image_2');
				$image_3 = get_field('image_3');
				$image_4 = get_field('image_4');
				$image_5 = get_field('image_5');
				$size = "full"; ?>

        <section class="case-study">
				  <div class="case-study-intro">
							<h1><?php the_title(); ?></h1>
							<h3><?php echo $services; ?></h3>

							<?php the_content(); ?>

							<!-- <p class="read-more-link"><a href="<?php /*echo $link; */?>">Visit Live Site</a></p> -->
					</div>
				</section>
					<div class="case-study-detail">
						<?php if($image_1) {
							echo wp_get_attachment_image( $image_1, $size );
						} ?>
						<h2>The Problem</h2>
						<?php echo $the_problem; ?>

						<h2>The Solution</h2>
						<?php echo $the_solution; ?>

						<?php if($image_2) {
							echo wp_get_attachment_image( $image_2, $size );
						} ?>

						<?php if($image_3) {
							echo wp_get_attachment_image( $image_3, $size );
						} ?>

						<?php if($image_4) {
							echo wp_get_attachment_image( $image_4, $size );
						} ?>

						<?php if($image_5) {
							echo wp_get_attachment_image( $image_5, $size );
						} ?>

						<h2>The Outcome</h2>
						<?php echo $the_outcome; ?>
					</div>


			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
