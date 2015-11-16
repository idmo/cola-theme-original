<?php if (is_page()): the_post() ?>
	<article id="page-<?php the_ID() ?>">
		<?php the_content(); ?>
	</article>
<?php else: ?>
	<?php if (have_posts()):
		while (have_posts()) : the_post() ?>
			<article id="article-<?php the_ID() ?>" class="article">
				
					<?php if (has_post_thumbnail() and !is_singular()): ?>
						<div class="featured-image">
							<a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><?php the_post_thumbnail( 'large', array('class' => 'img-responsive') 	) ?></a>
						</div>
					<?php endif; ?>
					<h3 class="article-title"><?php if(!is_singular()): ?><a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><?php endif; the_title() ?><?php if(!is_singular()): ?></a><?php endif; ?></h3>
				<div class="article-content">					
					<?php the_content(); ?>					
				</div>
				<div class="article-info">
					<span class="date"><?php the_time('l F j, Y') ?>, Posted by <strong><?php the_author(); ?></strong></span>
				</div>				
				<div class="categories">
					<?php _e( '<strong>Posted in</strong>' ); ?> <?php the_category( ', ' ); ?> | 
					<?php _e( '<strong>Tags</strong>' ); ?> <?php the_tags( ', ' ); ?>
				</div>
			</article>
			<hr />
		<?php endwhile; ?>
	<?php else: ?>
		<p>Nothing matches your query.</p>
	<?php  endif; ?>
<?php  endif; ?>
