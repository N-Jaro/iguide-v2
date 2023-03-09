<?php 
if(is_child_of(get_page_ID_by_slug('platform'))) { // check if it is platform 
    get_template_part('platform/template');
} //if not platform 
else {
    get_header();
?>
<style>
    img{ border-radius: 0 !important;}
</style>
    <div class="page-title tw-w-full tw-block  tw-relative tw--mt-[200px]" >
        <div class="tw-container tw-mx-auto tw-px-4 tw-h-min-[200px]">
            <div class="tw-border-l-8 tw-pl-3 tw-border-ig-orange tw-text-white tw-font-semibold tw-text-2xl">
                <h1><?php the_title();?></h1>
            </div>
        </div>
    </div>

    <div class="page-content tw-w-full tw-flex tw-relative tw-mt-5">
        <div class="tw-container tw-mx-auto tw-px-4 tw-py-6">
            <?php
                /* Start the Loop */
                while ( have_posts() ) :
                    the_post();
                    the_content();
                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) {
                        comments_template();
                    }
                endwhile; // End of the loop.
            ?>
        </div>
    </div>

<?php
    get_footer();
};
?>