<?php get_header(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
        <?php
				// Start the Loop.
			while ( have_posts() ) :
                the_post(); ?>
                <div class="white-box p-4 single-post">
                <h1 ><?php the_title(); ?></h1>
                <div class="d-flex">
                    <div class="mr-2">By <?php the_author(); ?></div>
                    <div class="mr-2"> | </div>
                    <div class="mr-2"><?php the_date(); ?></div>
                    <div class="mr-2"> | </div>
                    <div class="mr-2"><?php the_category(); ?></div>
                </div>
                <div class="content mt-5"><?php the_content(); ?></div>
                </div>
           <?php  endwhile; ?>
       
        </div>
    </div>
</div>
<?php get_footer(); ?>