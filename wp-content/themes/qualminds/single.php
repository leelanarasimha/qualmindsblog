<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <?php
				// Start the Loop.
			while ( have_posts() ) :
                the_post(); ?>
                <div class="white-box p-4 single-post">
                <h1 class="main-title"><?php the_title(); ?></h1>
                <div class="d-flex my-4">
                    <div class="mr-3 color-red text-uppercase"><span class="light-grey">BY</span> <?php the_author(); ?></div>
                    <div class="mr-3"> | </div>
                    <div class="mr-3 color-red">
                            <?php foreach(get_the_category() as $category) { ?>
                            <a class="no-hover c-pointer" href="<?php echo get_category_link($category) ?>"><?php echo strtoupper($category->name); ?></a>
                            <?php } ?>
                    </div>
                    <div class="mr-3"> | </div>
                    <div class="mr-3 light-grey text-uppercase"><?php the_date(); ?></div>
                </div>
                <div class="content mt-5"><?php the_content(); ?></div>
                </div>
           <?php  endwhile; ?>
       
        </div>
    </div>
</div>
<?php get_footer(); ?>