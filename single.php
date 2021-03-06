<?php get_header();?>


<div class="container pb-5">
    <div class="row">

		<div class="col-9">
                <h1 class="title"><?php the_title();?></h1>

                <?php if(has_post_thumbnail()):?>

                    <img src="<?php the_post_thumbnail_url('smallest');?>" class="img-fluid p-5">

                <?php endif;?>

                <?php if (have_posts()) : while(have_posts()) : the_post();?>

                    <?php the_content();?>

                <?php endwhile; endif;?>
        </div>

        <div class="col-3">
            <?php get_sidebar(); ?>
        </div>

    </div>
</div>

<?php get_footer();?>
