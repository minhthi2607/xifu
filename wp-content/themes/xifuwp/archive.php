<?php

/**
 * The template for displaying archive pages
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package microtube
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

?>
<div class="section-banner">
	<div class="container">
		<div class="section-heading">
			<div class="title-section-bigger light-blue">Our Blogs</div>
		</div>
	</div>
</div>
<div class="section section-our-blogs">
	<div class="container">
		<div class="blog-form">
			<div class="row">
				<div class="col-sm-8">
					<?php
					if (have_posts()) : ?>
						<div class="row">
							<?php
							// Start the loop.
							while (have_posts()) : ?>
								<div class="col-sm-6">
									<?php the_post(); ?>
									<?php get_template_part('loop-templates/content', get_post_format()); ?>
								</div>
							<?php endwhile; ?>
							<?php
							// Display the pagination component.

							the_posts_pagination();
							?>
						</div>
					<?php endif; ?>
				</div>
				
				<?php get_template_part('loop-templates/post', get_post_format()); ?>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
