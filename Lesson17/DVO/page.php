<?php get_header(); ?>
    <div id="conteiner">
       	<div id="widjets">
        	<div class="courusel"></div>
            <div class="video"></div>
            <div class="locations"></div>
        </div>
        <?php get_sidebar(); ?>
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
       		<div id="content">
        	<div class="post"> 
            
       		<h2>Who We Are and What We Do</h2>
            <?php the_content(); ?>
            <ul>
            	<li><a class="link_creat" href="#" title="Create"><h4>create your custom virtual office</h4><p>create</p></a></li>
                <li><a class="link_offer" href="#" title="Limited Time Offer"><h4>Limited Time Offer</h4><p>Out of state businesses receive address, phone and office space for a $1.00.</p></a></li>
                <li><a class="link_sign_up" href="#" title="Sign Up"><h4>sign up</h4><p>create</p></a></li>
            </ul>
        </div>
	 <?php endwhile; ?>
     <?php endif; ?>
	</div>

<?php get_footer(); ?>