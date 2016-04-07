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
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<h4><?php the_title(); ?></h4>
		<p><?php the_content(__('(more...)')); ?></p>
		<hr>
		<?php endwhile;?>
		<?php endif; ?>
    </article>
	<?php get_sidebar(); ?>
	<?php get_footer(); ?>
