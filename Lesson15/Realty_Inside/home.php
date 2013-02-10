<?php get_header(); ?>
    
    <div id="content" class="clear">
    	 <?php if ( have_posts() ) : ?>
       <?php while ( have_posts() ) : the_post(); ?>
       		<div class="post house">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title();  ?></a><span></span></h2>
            <p></p>
       		<?php the_content(); ?>
            </div>
    
       <?php endwhile; ?>
       <?php endif; ?>
       </div>
     <?php get_sidebar(); ?>

<?php get_footer(); ?>