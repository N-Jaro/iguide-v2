<?php 
if (is_page( 'discovery' )){
    get_template_part('platform/discovery');
} else {
    get_header("page");
?>

    <div class="container-fluid content-section">
            <div class=" container pb-5 mb-5 ">
                <div class="row header ">
                    <div class="col-12 ">
                        <h1 class="text-center page-header pb-3 mb-4 "><?php the_title();?> </h1>
                    </div>
                </div>
                <div class="row content ">
                    <div class="col-12 ">
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
            </div>
        </div>


    <?php 
    get_footer();

} // end check if platform

?>