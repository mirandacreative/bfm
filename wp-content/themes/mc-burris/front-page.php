<?php get_header(); ?>
	
	<div id="content">
		<div class="featured-videos-section" data-equalizer>
			<?php if( have_rows('featured_videos') ) : ?>
				<?php while( have_rows('featured_videos') ) : the_row(); ?>
					<div>
						<div class="featured-video">
							<div class="featured-video-aspect-ratio">
								<?php the_sub_field('featured_video_embed_code'); ?>
							</div>
						</div>
						<h3><?php the_sub_field('featured_video_header'); ?></h3>
						<p data-equalizer-watch><?php the_sub_field('featured_video_body'); ?></p>
						<a class="button" href="<?php the_sub_field('featured_video_more_button_link'); ?>">Read more</a>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
		<div class="distinctions-section">
			<h2>Why Burris Freight Management?</h2>
			<div class="distinctions-container">
				<?php if( have_rows('distinctions') ) : ?>
					<?php while( have_rows('distinctions') ) : the_row(); ?>
						<div class="distinction">
							<p>
								<a href="<?php the_sub_field('distinction_link'); ?>" class="distinction-icon-link">
								<?php // ACF Image Object
									$image = get_sub_field('distinction_image'); $alt = $image['alt'];
									$imageSize = $image['sizes'][ 'thumbnail' ];
									echo '<img width="150" src="' . $imageSize . '" alt="' . $alt . '" />';
								?>
								</a>
								<hr>
							</p>
							<h4><a href="<?php the_sub_field('distinction_link'); ?>"><?php the_sub_field('distinction_name'); ?></a></h4>
							<p><?php the_sub_field('distinction_body'); ?></p>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div> <!-- end #content -->

<?php get_footer(); ?>