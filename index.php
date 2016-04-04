<?php get_header(); ?>
        <div id="nav-container">
	    <div id="social-icons">
	    </div>
	    <nav id="nav">
		<ul>
		    <li class="top-menu-item"><a class="dropdown" href="#">مقالات</a></li>
		    <li class="sublinks">
			<a><span class="submenu-item">تفاسير ميسرة للقرآن</span></a>
			<a><span class="submenu-item">كيف نتعامل مع القرآن ؟</span></a>
			<a><span class="submenu-item">حلقة القرآن</span></a>
			<a><span class="submenu-item">تحفة الأطفال</span></a>
			<a><span class="submenu-item">الجزرية</span></a>
			<a><span class="submenu-item">مقال 6</span></a>
			<a><span class="submenu-item">مقال 7</span></a>
		    </li>
		    <li class="top-menu-item"><a class="dropdown" href="#">جدول المحاضرات</a></li>
		    <li class="sublinks">
			<a><span class="submenu-item">شهر يناير</span></a>
			<a><span class="submenu-item">شهر فبراير</span></a>
			<a><span class="submenu-item">شهر مارس</span></a>
			<a><span class="submenu-item">شهر إبريل</span></a>
			<a><span class="submenu-item">شهر مايو</span></a>
			<a><span class="submenu-item">شهر يونيو</span></a>
			<a><span class="submenu-item">شهر يوليو</span></a>
			<a><span class="submenu-item">شهر أغسطس</span></a>
			<a><span class="submenu-item">شهر أكتوبر</span></a>
			<a><span class="submenu-item">شهر نوفمير</span></a>
			<a><span class="submenu-item">شهر ديسمبر</span></a>
		    </li>
		    <li class="top-menu-item"><a class="dropdown" href="#">المصادر</a></li>
		    <li class="sublinks">
			<a><span class="submenu-item">تفاسير</span></a>
			<a><span class="submenu-item">كتب تجويد</span></a>
			<a><span class="submenu-item">علم النحو</span></a>
			<a><span class="submenu-item">المتشابهات</span></a>
			<a><span class="submenu-item">القراءات</span></a>
		    </li>
		    <li class="top-menu-item"><a class="dropdown" href="#">كيفية التسجيل</a></li>
		    <li class="sublinks"></li>
		    <li class="top-menu-item"><a class="dropdown" href="#">من نحن ؟</a></li>
		    <li class="sublinks"></li>
		</ul>
	    </nav>
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
