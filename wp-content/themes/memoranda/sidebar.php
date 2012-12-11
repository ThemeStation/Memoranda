<div id="sidebar">
	<div id="logo">
		<h1><a href="/"><?php bloginfo_rss('name')?></a></h1>
		<p>by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a></p>
	</div>
	<div id="menu">
		<ul>
			<?php WP_nav_menu();?>
		</ul>
	</div>
	<div id="search" >
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	</div>
	<ul>
		<li>
			<?php if ( ! dynamic_sidebar( 'Sidebar Main' ) ) : ?>						
			<?php endif; // end sidebar widget area ?>
		</li>
	</ul>
</div><!-- end #sidebar -->