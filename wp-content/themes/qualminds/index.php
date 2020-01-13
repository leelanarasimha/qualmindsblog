<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="white-box p-4 mt-4">
                <h1>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <div><?php the_excerpt(); ?></div>
                </div>
                
            <?php endwhile; endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>