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
		<h4><?php printf( __( 'Search Results for: %s', 'ketab' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h4>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<h4 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
		<p><?php the_excerpt(); ?></p>
		<hr>
		<?php endwhile;?>
		<?php
			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentysixteen' ),
				'next_text'          => __( 'Next page', 'twentysixteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
			) );

		else: ?>
		<h5>No results</h5>
	
		<?php	endif; ?>
</article>

	<?php get_sidebar(); ?>
	<?php get_footer(); ?>
