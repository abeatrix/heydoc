
<?php get_header();?>


<div class="container pb-5">

    <div class="mt-5">

        <h1><?php single_cat_title();?></h1>

        <?php if (have_posts()) : while(have_posts()) : the_post();?>

        <div class="card m-4">
            <div class="card-body ">

                <?php if(has_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url('smallest');?>">
                <?php endif;?>


                <h3><?php the_title();?></h3>
                <div class="d-inline p-2">
                    <?php the_excerpt();?>
                    <a href="<?php the_permalink();?>" class="btn btn-primary float-right">Read More</a>
                </div>

            </div>
        </div>
        <?php endwhile; endif;?>
    </div>

</div>

<?php get_footer();?>
