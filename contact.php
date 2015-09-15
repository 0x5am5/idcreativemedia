<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>

<div class="content-wrap">
	<div class="content">
		<?php while ( have_posts() ) : the_post(); ?>        
	        <div class="row">
			<div class="col w-100"><div class="pad both"><h1><?php the_title(); ?></h1></div></div>
			<div class="col w-50">
				<div class="pad both">					
					<p>Feel free to contact ID  Creative Media by phone or email.</p>
					<a href="mailto:info@idcreativemedia.co.uk">info@idcreativemedia.co.uk</a>
					<br>
					Tel: +447837 498 417
				</div>
			</div>
			<div class="col w-50">
				<div class="pad both">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
		<?php endwhile; ?>
	</div>
		
	<?php get_footer(); ?>