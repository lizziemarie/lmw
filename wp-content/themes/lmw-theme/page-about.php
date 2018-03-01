<?php
/**
 * The template for displaying the about page
 *
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tww
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main">

      <section class="about-main">
				<figure class="about-image-1">
						<img src="<?php bloginfo('template_directory'); ?>/img/about-sonoma.jpg" alt = "lizzie marie"/>
				</figure>
        <div class="about-item-1">
						<h1>Hello, I'm Lizzie Marie.</h1>
        		<h2>I'm happiest when I'm making stuff.</h2>
        		<p>I’m an independent California based designer and front end developer. My dream work day is solving new challenges while building beautiful websites. Previously, I worked in the fashion world as a buyer in sustainable apparel and before that I was studying business and marketing at Boston University.</p>
        		<p>You can find me working on a variety of projects including UX/UI design, front end development, branding, and Wordpress development.</p>
				</div>

				<div class="about-item-2">
        		<div class="skills-interests">
		          <h2>Stuff I'm Good At //</h2>
		            <ul>
		                <li>Web Design</li>
		                <li>UX/UI Design</li>
		                <li>Front End Development</li>
		                <li>Wordpress</li>
		            </ul>
		        </div>
		        <div class="skills-interests">
		          <h2>Stuff I'm Into //</h2>
		            <ul>
		                <li>Zumba classes</li>
		                <li>Political Podcasts</li>
		                <li>Cooking</li>
		                <li>Georgia O'Keefe paintings</li>
		            </ul>
		        </div>
		        <div class="work-inquiries">
		          <p><strong>Work Inquiries</strong></p>
		          <p>hello@lizziemariew.com</p>
		        </div>
				</div>

				<figure class="about-image-2">
						<img src="<?php bloginfo('template_directory'); ?>/img/about-utah.jpg" alt = "lizzie marie"/>
				</figure>

      </section> <!-- .about-main --->




		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
