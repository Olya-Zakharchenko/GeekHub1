<?php get_header(); ?>
    <div id="content">
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
       	<div class="post house">
        <h1><a href="<?php the_permalink(); ?>" title="Читать далее о <?php the_title(); ?>"><?php the_title(); ?></a></h1>
        <span> Опубликовано: <?php the_author_posts_link(); ?> - <?php the_time("j, Y"); ?></span> 
        <?php the_content(); ?>
        </div>
    <?php endwhile; ?>
    <?php endif; ?>
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>