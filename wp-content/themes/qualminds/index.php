<?php get_header(); ?>
<div class="container">
    <div class="row">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="col-md-12 col-lg-4">
            <a href="<?php the_permalink(); ?>" class="white-box no-hover">
                <div class="insights-list">
                    <div class="">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid w-100" />
                    </div>
                    <div class="p-3" style="min-height: 125px;">
                        
                        <div class="ft-1em" style="color: #6f85a3;">
                            <?php foreach(get_the_category() as $category) { ?>
                            <div><?php echo strtoupper($category->name); ?></div>
                            <?php } ?>
                        </div>
                        <div class="ft-1_2em font-weight-bold"><?php the_title(); ?></div>
                    </div>
                </div>
            </a>
        </div>
        <?php endwhile; endif; ?>
    </div>
</div>
<?php get_footer(); ?>