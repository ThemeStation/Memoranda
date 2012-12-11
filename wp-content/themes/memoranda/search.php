<?php get_header(); ?>

<div id="page">
	<div id="page-bgtop">
		<div id="page-bgbtm">
			<div id="content">
				<?php if ( have_posts() ) : ?>
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
				<div class="post">
					<h2 class="title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
					<p class="meta"><span class="date"><?php the_time('F j, Y'); echo " ";?></span><span class="posted">Posted by <?php the_author_posts_link();?></span></p>
					<div style="clear: both;">&nbsp;</div>
					<div class="entry">
						<?php the_excerpt();?>
					</div>
				</div>
				<?php endwhile; ?>
				<?php else : ?>
				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title">No search result Found</h1>
					</header><!-- .entry-header -->					
				</article><!-- #post-0 -->
				<?php endif; ?>					
				<div style="clear: both;">&nbsp;</div>
			</div><!-- end #content -->			
			<?php get_sidebar(); ?>			
			<div style="clear: both;">&nbsp;</div>
		</div>
	</div>
</div>	<!-- end #page -->
<?php get_footer(); ?>
