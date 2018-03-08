<?php get_header(); ?>

<div id="main" class="row">
  	

	<div id="content" class="col9">
		
		<nav class="singlenav cf">
			<div class="older"><?php previous_post_link( '&laquo; %link', __('Previous', 'montezuma') ); ?></div>
			<div class="newer"><?php next_post_link( '%link &raquo;', __('Next', 'montezuma') ); ?></div>
		</nav>
		
		<div id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?>>

			<h1>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
				<?php bfa_comments_number(); ?>
			</h1>
			
			 <div class="post-footer">
          	By <?php echo do_shortcode('[post_authors]'); ?>
          </div>
          
          <div class="post-footer">
				<?php the_time( 'j M Y' ); ?>
			</div>
          
          <div id="sharing-widget">
            <?php dynamic_sidebar( 'Sharing widget area' ); ?>
          </div>
         
			<div class="post-bodycopy cf">
				<?php the_content(); ?>
				<?php wp_link_pages( array( 
					'before' => __( '<p class="post-pagination">Pages:', 'montezuma' ), 
					'after' => '</p>'
				) ); ?>
			</div>
 
          
			<?php edit_post_link( __( "Edit", 'montezuma' ) ); ?>
			


		</div>

		<?php comments_template( '', true ); ?>

		<nav class="singlenav cf">
			<div class="older"><?php previous_post_link( '&laquo; %link', __('Previous', 'montezuma') ); ?></div>
			<div class="newer"><?php next_post_link( '%link &raquo;', __('Next', 'montezuma') ); ?></div>
		</nav>
		
	</div>
	
  <div id="widgetarea-SI16" class="col3 widgetarea-si">
		<?php dynamic_sidebar( 'Widget Area SI16' ); ?>
	</div>	
	
</div>

<?php get_footer(); ?>