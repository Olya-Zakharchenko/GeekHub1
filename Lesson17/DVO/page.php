<?php get_header(); ?>
    <div id="conteiner">
       	<img src="<?php bloginfo('template_directory'); ?>/images/buildings.png" title="Buildings" width="1020" height="192" alt="Denver virtual offices" />
        <?php get_sidebar(); ?>
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
       		<div id="content" class="single">
        	<div class="post"> 
            
       		<?php the_title(); ?>
            <?php the_content(); ?>
            
	 <?php endwhile; ?>
     <?php endif; ?>
	</div>
	</div>
<?php get_footer(); ?>