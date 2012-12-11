<?php /*	
Template Name: page 
*/?>
<?php get_header(); ?>
<div id="page">
	<div id="page-bgtop">
		<div id="page-bgbtm">
			<div id="content">
				<?php if ( have_posts() ) : ?>
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
				<div <?php post_class();?>>
					<h2 class="title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>						
					<div style="clear: both;">&nbsp;</div>
					<div class="entry">
						<?php the_content();?>
					</div>
					<?php  $url=get_post_meta(2, 'url'); echo $url[0];?>
				</div>
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
