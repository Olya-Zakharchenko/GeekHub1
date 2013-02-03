<?php get_header(); ?>
    <div id="content">
       <?php if ( have_posts() ) : ?>
       <?php while ( have_posts() ) : the_post(); ?>
       		<div class="post geekteam">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title();  ?></a><span></span></h2>
            <img src="<?php bloginfo('template_directory'); ?>/images/face.jpg" height="170" width="170 "alt="Хытыемель Цыэсесенко собственной персоной" />
            <p></p>
       		<?php the_content(); ?>
            </div>
    
       <?php endwhile; ?>
       <?php endif; ?>
    </div>
<?php get_footer(); ?>