<?php get_header(); ?>

<div class="banner-content banner_height insights-banner mt-4">
    <div class="container d-flex flex-column justify-content-center h-100">
        <div class="row">
            <div class="offset-md-1 col-md-6 col-sm-12 text-white d-flex flex-column justify-content-center">

                <div class="font-3em  font-bold header_line_space">Our Insights</div>
                <div class="">
                    <div class="col-md-3 col-sm-4 col-xs-4 p-0 m-0 py-3 "><div class="text-border"></div></div>
                </div>
                <div class="font-1_5em pt-5">
                    <div class="font-normal product-sub-title">White Papers, E-Books &amp; practices which help to address your growing business needs</div>
                </div>
            </div>
            <div class="col-md-5 col-sm-6 d-none d-md-block">
                <img src="https://qualminds.com/images/insights/Repeat_Grid_3.png" class="img-fluid w-85">
            </div>
        </div>
    </div>
</div>

<div class="container my-4">
    <div class="row">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="col-md-12 col-lg-4 mt-4">
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