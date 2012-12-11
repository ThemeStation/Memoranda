<?php get_header(); ?>
<div id="page">
	<div id="page-bgtop">
		<div id="page-bgbtm">
			<div id="content">
				<?php if ( have_posts() ) : ?>
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
				<div <?php post_class();?>>
					<h2 class="title"><?php the_title();?></h2>
					<p class="meta"><span class="date"><?php the_time('F j, Y'); echo " ";?></span><span class="posted">Posted by <?php the_author_posts_link();?></span></p>
					<div style="clear: both;">&nbsp;</div>
					<div class="entry">
						<?php the_content();?>
					</div>
					<?php wp_link_pages(array('before'=>'Pages', 'next_or_number'=>'number'));?>
				</div>
				<?php get_template_part( 'content', 'single' ); ?>
				<?php comments_template( '', true ); ?>
				<?php endwhile; ?>
				<?php else : ?>
				<h1>Nothing Found</h1>
				<?php endif; ?>					
				<div style="clear: both;">&nbsp;</div>
			</div><!-- end #content -->				
			<?php get_sidebar(); ?>				
			<div style="clear: both;">&nbsp;</div>
		</div>
	</div>
</div>	<!-- end #page -->
<?php get_footer(); ?>
