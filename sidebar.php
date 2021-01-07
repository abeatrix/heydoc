<div class="container">
    <div class="mt-3">
        <h3 class="title">Search:</h3>
        <?php get_search_form(); ?>
    </div>
    <div class="mt-3">
        <h3 class="title"><?php echo CATEGORIES; ?></h3>
        <ul class="row">
            <?php wp_list_categories('title_li'); ?>
        </ul>
    </div>
    <div class="mt-3">
        <h3 class="title"><?php echo ARCHIVES; ?></h3>
        <ul class="row">
            <?php wp_get_archives('type=monthly'); ?>
        </ul>
    </div>
</div>
