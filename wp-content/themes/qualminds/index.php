<?php get_header(); ?>
<div class="container-fluid">
    <div class="row">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="col-md-12 col-lg-4">
            <a href="<?php the_permalink(); ?>" class="white-box p-4 mt-4 d-block no-hover">
                <div class="">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid w-100" />
                </div>
                <div class="p-3 bgcolor-grey" style="min-height: 125px;">
                    <div class="ft-1_2em font-weight-bold"><?php the_title(); ?></div>
                    <div class="ft-1em">
                        <?php foreach(get_the_category() as $category) { ?>
                        <div><?php echo $category->name; ?></div>
                        <?php } ?>
                    </div>
                </div>
            </a>
        </div>
        <?php endwhile; endif; ?>
    </div>
</div>
<?php get_footer(); ?>