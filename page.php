			<?php get_header(); ?>

			<div class="content-wrap">

				<div class="content<?php $title = str_replace(' ', '_', get_the_title( $ID )); echo ' '.strtolower($title); ?>">

					<?php while ( have_posts() ) : the_post(); ?>

						<h1<?php if (get_field('hide_header')[0]=='yes') echo ' class="access"'; ?>><?php the_title(); ?></h1>

						<?php the_content(); ?>

						<?php if (have_rows('portfolio')) { ?>
							<h2>Portfolio - <?php the_field('year'); ?></h2>
							<?php while( have_rows('portfolio') ): the_row(); ?>
							<?php 
								$row = 1; 
								$title = get_sub_field('title');
								$description = get_sub_field('description');
							?>
								<div class="row">
									<div class="col w-60">
										<div class="pad">
											<div class="media">
	                                        <?php if (get_sub_field('deliverable')=='Video') : ?>	  

												<iframe src="http://www.youtube.com/embed/<?php the_sub_field('video_id'); ?>" width="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

											<?php elseif (get_sub_field('deliverable')=='Design') : ?>

												<?php $imageGal = get_sub_field('image_gallery')[1]['image']; ?>

												<?php if(have_rows('image_gallery')): ?>
												
												<?php $imageCount = 1; ?>
													
													<?php while(have_rows('image_gallery') ): the_row(); ?>
													
													<?php $image = get_sub_field('image'); ?>										
														
														<?php if ($imageCount==1) { ?>
														<a href="<?php echo $imageGal['url']; ?>" data-lightbox="gallery<?php echo '-'.$row; ?>" <?php if ($imageCount!=1) { echo ' class="access" tabindex="-1"'; } ?>/>
															<img src="<?php echo $image['url']; ?>" class="cover-image" alt="<?php echo $image['alt']; ?>"/>
															<div class="overlay">
																<div class="title"><?php echo $title; ?></div>
																<div class="description"><?php echo $description; ?></div>
															</div>
														</a>
														<?php } else { ?>
														
															<a href="<?php echo $image['url']; ?>" data-lightbox="gallery<?php echo '-'.$row; ?>" <?php if ($imageCount!=1) { echo ' class="access" tabindex="-1"'; } ?>/></a>	
														
														<?php } ?>
														<?php $imageCount++; ?>
													<?php endwhile; ?>
												<?php endif; ?>

											<?php endif; ?>
											</div>
											</div>
										</div>
									<div class="col w-40">
										<div class="pad">
											<h3><?php echo $title; ?></h3>
											<?php echo $description; ?>	
										</div>
									</div>
								</div>
							<?php $row++; ?>
							<?php endwhile; ?>
						<?php } ?>
					<?php endwhile; ?>
				</div>

			</div>

			<?php get_footer(); ?>