<?php
/**
 * Front Page for HeyDoc.
 */
?>

<?php get_header();?>


<div class="pb-5 container-fluid max">
    <div class="p-5 row">
        <div class="col d-flex header-height">
        <div class="flex-auto justify-content-center align-self-center m-10">
            <h3><?php the_title();?></h3>

            <?php if (have_posts()) : while(have_posts()) : the_post();?>

                <?php the_content();?>

            <?php endwhile; endif;?>
            <div><button class="btn btn-primary">Start Here</button></div>
            </div>
        </div>
        <div class="col d-flex header-height">
            <div class="header-img">
            </div>
        </div>
    </div>

    <?php get_template_part('sections/three_col');?>

    <?php get_template_part('sections/four_col');?>

</div>

<?php get_footer();?>
