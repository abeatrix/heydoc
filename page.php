<?php get_header();?>


<div class="container pb-5">

    <div class="mt-5">

        <h1 class="title"><?php the_title();?></h1>

        <?php if (have_posts()) : while(have_posts()) : the_post();?>

        <p class="mt-2 p-5"><?php the_content();?></p>
        <?php endwhile; endif;?>
    </div>

</div>

<?php get_footer();?>
