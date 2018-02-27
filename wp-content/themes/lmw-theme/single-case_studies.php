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
				$image_1 = get_field('image_1');
				$image_2 = get_field('image_2');
				$image_3 = get_field('image_3');
				$image_4 = get_field('image_4');
				$image_5 = get_field('image_5');
				$size = "full";
				$label_1 = get_field('label_1');
				$label_2 = get_field('label_2');
				$label_3 = get_field('label_3');
				$label_4 = get_field('label_4');
				$paragraph_1 = get_field('paragraph_1');
				$paragraph_2 = get_field('paragraph_2');
				$paragraph_3 = get_field('paragraph_3');
				$paragraph_4 = get_field('paragraph_4');?>

        <section class="case-study">
				  <div class="case-study-intro">
							<h1><?php the_title(); ?></h1>
							<h3><?php echo $services; ?></h3>
							<?php the_content(); ?>
					</div> <!-- .case-study-intro -->

					<div class="case-study-detail">
						<?php if($image_1) {
							echo wp_get_attachment_image( $image_1, $size );
						} ?>

						<?php echo $label_1; ?>
						<?php echo $paragraph_1; ?>

						<?php echo $label_2; ?>
						<?php echo $paragraph_2; ?>

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

						<?php echo $label_3; ?>
						<?php echo $paragraph_3; ?>

						<?php echo $label_4; ?>
						<?php echo $paragraph_4; ?>
					</div> <!--.case-study-detail-->

				</section> <!--.case-study-->

			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
