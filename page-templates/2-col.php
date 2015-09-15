<?php
/*
Template Name: 2 Col
*/
?>
		<?php get_header(); ?>
				<div class="content-wrap">

					<div class="content">

					<?php while ( have_posts() ) : the_post(); ?>
							
						<div class="row">
							<div class="col w-50">
								<div class="pad both">
								<?php if( have_rows('main_image') ): ?>
									<?php while(have_rows('main_image')):the_row(); ?>
									<div class="image-row">
										<img src="<?php echo get_sub_field('image')['url']; ?>" alt="<?php echo get_sub_field('image')['alt']; ?>" width="360" class="border">
									</div>
									<?php endwhile; ?>
								<?php endif; ?>
								</div>
							</div>
							<div class=" col w-50">
								<div class="pad both">
								<?php if( get_field('content') ): ?>
									<h1 class="about">About Us</h1>
									<?php the_field('content'); ?>
								<?php endif; ?>
								</div>
							</div>
						</div>

					<?php endwhile; ?>

					</div>

			<?php get_footer(); ?>

	