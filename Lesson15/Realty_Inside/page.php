<?php get_header(); ?>
    <div id="conteiner" class="clear">
    <div id="content">
    	 <?php if ( have_posts() ) : ?>
       
       		<div class="post house">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title();  ?></a><span></span></h2>
            <p></p>
       		<?php the_content(); ?>
            </div>
    
      
       <?php endif; ?>
       </div>
<?php get_footer(); ?>