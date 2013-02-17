<?php if ( is_front_page() ) : ?>
	<?php get_header(); ?>
    <?php include('banner.php');?>
        <div id="content">
             <?php if ( have_posts() ) : ?>
             <?php while ( have_posts() ) : the_post(); ?>
                <div class="post house">
                <h2><a href="<?php the_permalink(); ?>" title="Читать далее о <?php the_title(); ?>"><?php the_title(); ?></a></h2>
                <span> Опубликовано: <?php the_author_posts_link(); ?> - <?php the_time("j, Y"); ?>Категории: <?php the_category(', '); ?> <?php comments_number( 'Нет Комментариев', '1 комментирий', '% Коментариев'); ?></span> 
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" title="Читать далее о <?php the_title(); ?>">Читать далее</a>
                </div>
             <?php endwhile; ?>
             <?php endif; ?>
        </div>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>

<?php else :  ?> 
	<?php get_header(); ?>
         <div id="content">
             <?php if ( have_posts() ) : ?>
             <?php while ( have_posts() ) : the_post(); ?>
                <div class="post house">
                <h2><a href="<?php the_permalink(); ?>" title="Читать далее о <?php the_title(); ?>"><?php the_title(); ?></a></h2>
                <span> Опубликовано: <?php the_author_posts_link(); ?> - <?php the_time("j, Y"); ?>Категории: <?php the_category(', '); ?> <?php comments_number( 'Нет Комментариев', '1 комментирий', '% Коментариев'); ?></span> 
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" title="Читать далее о <?php the_title(); ?>">Читать далее</a>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>
    	</div>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>
<?php endif; ?>