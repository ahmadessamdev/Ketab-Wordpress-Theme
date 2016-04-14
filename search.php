<?php get_header(); ?>
<div id="nav-container">
			<?php 
	            wp_nav_menu( array( 
					'menu'			 => 'top-menu',
					'menu_class'	 => 'nav-list',
					'menu_id'		 => 'top-menu-list',
					'container'		 => 'nav',
		            'theme_location' => 'top-menu',
					'link_before'	 => '<span class="sub-menu-item">',
					'link_after'	 => '</span>',
					'depth'          => 2,
	            ) ); 

            ?>
			
	<div id="social-icons">
		
	</div>
</div>
<div id="content-container">
    <article id="content">
		<?php if ( have_posts() ) : ?>

		<h4><?php printf( __( 'Search Results for: %s', 'ketab' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h4>

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'ketab' ),
				'next_text'          => __( 'Next page', 'ketab' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'ketab' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>





		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<h4><?php the_title(); ?></h4>
		<p><?php the_content(__('(more...)')); ?></p>
		<hr>
		<?php endwhile;?>
		<?php endif; ?>
    </article>
	<?php get_sidebar(); ?>
	<?php get_footer(); ?>
