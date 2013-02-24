<?php get_header(); ?>
	<div id="conteiner">
    <img src="images/buildings.png" title="Buildings" width="1020" height="192" alt="Denver virtual offices" />
    <?php get_sidebar(); ?>
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
       	<div id="content" class="single">
        <div class="post">
            <?php the_title(); ?>
            <?php the_content(); ?>
            <span> Опубликовано: <?php the_author_posts_link(); ?> - <?php the_time("j, Y"); ?>Категории: <?php the_category(', '); ?> <?php comments_number( 'Нет Комментариев', '1 комментирий', '% Коментариев'); ?></span> 
                  
        </div>
	 <?php endwhile; ?>
     <?php endif; ?>
	</div>

<?php get_footer(); ?>