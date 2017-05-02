<?php get_header(); ?>
<div id="nav-container">
    <?php 
    wp_nav_menu( array( 
	'menu'		 => 'top-menu',
	'menu_class'	 => 'nav-list',
	'menu_id'	 => 'top-menu',
	'container'	 => 'nav',
	'theme_location' => 'top-menu',
	'link_before'	 => '<span class="sub-menu-item">',
	'link_after'	 => '</span>',
	'depth'          => 2,
	'fallback_cb'    => false,
    ) ); 
    ?>
    <a href="javascript:void(0);" id="menu-icon">&#9776;</a>
</div>
<div id="content-container">
    <div id="content">
	<article>
	    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<h4 class="post-title"><?php the_title(); ?></h4>
		<?php the_content( __("more...") ); ?>
		<br>
		<ul class="post-meta">
		    <li>
			<span class="dashicons dashicons-calendar-alt"></span>
			<a><?php the_date(); ?></p>

		    </li>
		    <li>
			<span class="dashicons dashicons-format-chat"></span>
			<a href="<?php comments_link() ?>"><?php comments_number(); ?></a>
		    </li>
		    <li>
			<span class="dashicons dashicons-category"></span>
			<?php the_category( ', ' ); ?></p>

		    </li>
		</ul>
		<br>
		<?php
		if ( comments_open() || get_comments_number() ) {
		    comments_template();
		}
		?>
	    <?php endwhile;?>
	    <?php endif; ?>
	</article>
    </div> <!-- #content -->
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>
