<?php get_header(); ?>
<div id="nav-container">
	<nav>
			<?php 
	            wp_nav_menu( array( 
		            'menu_class'      => 'nav-list',
		            'container'       => 'ul',
		            'container-class' => '',
		            'container-id'    => 'top-menu',
		            'theme_location'  => 'top-menu',
		            'link_before'          => '<span class="sub-menu-item">',
		            'link_after'           => '</span>',
	            ) ); 

            ?>
			
	<!-- 		<ul class="nav-list"> -->
	<!-- 			<li class="top-menu-item"><a class="dropdown" href="#">مقالات</a></li> -->
	<!-- 			<ul class="sublinks"> -->
	<!-- 				<li><a><span class="submenu-item">تفاسير ميسرة للقرآن</span></a></li> -->
	<!-- 				<li><a><span class="submenu-item">كيف نتعامل مع القرآن ؟</span></a></li> -->
	<!-- 				<li><a><span class="submenu-item">حلقة القرآن</span></a></li> -->
	<!-- 				<li><a><span class="submenu-item">تحفة الأطفال</span></a></li> -->
	<!-- 				<li><a><span class="submenu-item">الجزرية</span></a></li> -->
	<!-- 				<li><a><span class="submenu-item">مقال 6</span></a></li> -->
	<!-- 				<li><a><span class="submenu-item">مقال 7</span></a></li> -->
	<!-- 			</ul> -->
	<!-- 			<li class="top-menu-item"><a class="dropdown" href="#">جدول المحاضرات</a></li> -->
	<!-- 			<ul class="sublinks"> -->
	<!-- 				<li><a><span class="submenu-item">شهر يناير</span></a></li> -->
	<!-- 				<li><a><span class="submenu-item">شهر فبراير</span></a></li> -->
	<!-- 				<li><a><span class="submenu-item">شهر مارس</span></a></li> -->
	<!-- 				<li><a><span class="submenu-item">شهر إبريل</span></a></li> -->
	<!-- 				<li><a><span class="submenu-item">شهر مايو</span></a></li> -->
	<!-- 				<li><a><span class="submenu-item">شهر يونيو</span></a></li> -->
	<!-- 				<li><a><span class="submenu-item">شهر يوليو</span></a></li> -->
	<!-- 				<li><a><span class="submenu-item">شهر أغسطس</span></a></li> -->
	<!-- 				<li><a><span class="submenu-item">شهر أكتوبر</span></a></li> -->
	<!-- 				<li><a><span class="submenu-item">شهر نوفمير</span></a></li> -->
	<!-- 				<li><a><span class="submenu-item">شهر ديسمبر</span></a></li> -->
	<!-- 			</ul> -->
	<!-- 			<li class="top-menu-item"><a class="dropdown" href="#">المصادر</a></li> -->
	<!-- 			<ul class="sublinks"> -->
	<!-- 				<li><a><span class="submenu-item">تفاسير</span></a></li> -->
	<!-- 				<li><a><span class="submenu-item">كتب تجويد</span></a></li> -->
	<!-- 				<li><a><span class="submenu-item">علم النحو</span></a></li> -->
	<!-- 				<li><a><span class="submenu-item">المتشابهات</span></a></li> -->
	<!-- 				<li><a><span class="submenu-item">القراءات</span></a></li> -->
	<!-- 			</ul> -->
	<!-- 			<li class="top-menu-item"><a class="dropdown" href="#">كيفية التسجيل</a></li> -->
	<!-- 			<li class="sublinks"></li> -->
	<!-- 			<li class="top-menu-item"><a class="dropdown" href="#">من نحن ؟</a></li> -->
	<!-- 			<li class="sublinks"></li> -->
	<!-- 		</ul> -->
	</nav>
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
