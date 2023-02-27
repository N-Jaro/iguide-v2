<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicon-16x16.png">
        <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/site.webmanifest">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>I-GUIDE Platform: Convergence Science to Transform Geospatial Data-instensice Science</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/platform/resources//css/platform.css" />
        <link rel="stylesheet" href="https://use.typekit.net/iaa6nkv.css">
    </head>
    <body>
        <div class="container d-flex flex-column flex-md-row justify-content-between">
            <div class="platform-brand my-3">
                <img class="platform-logo d-inline-block me-2" src="<?php echo get_template_directory_uri(); ?>/platform/resources/img/iguide_mark.png" style="max-width:45px;" >
                <a  class="d-inline-block" href="<?php echo get_permalink(get_page_ID_by_slug('platform'));?>" style="text-decoration:none; color:black">
                    <h3 class="platform-name" style="position:relative;font-weight:700;">
                    I-GUIDE Platform
                    <!-- <br><span style="position:absolute;top:95%;left:0;font-size:11px;font-weight:400;">Supported by National Science Foundation</span> --></h3>
                </a>
            </div>
            <div class="nav-link">
                <!-- <div class="btn-group" role="group" aria-label="..."> -->
                    <a href="<?php echo home_url("/") ?>" class="btn btn-outline-secondary mt-4">Back to I-GUIDE website</a>
                    <a href="https://iguide.illinois.edu/platform/getting-started/" class="btn btn-warning mt-4 " target="_blank">Get started</a>
                    <a href="https://jupyter.iguide.illinois.edu/hub/login" class="btn btn-warning mt-4 border-left" target="_blank">Log in</a>
                <!-- </div> -->
            </div>
        </div>
        
        <div class="hero-wrap position-relative overflow-hidden text-center" style="background-image:url('<?php echo get_template_directory_uri(); ?>/platform/resources/img/rightbg.png')">
            <div class="col-md-8 p-lg-6 mx-auto p-md-5 p-3">
                <h1 class="display-4 text-white">Integrative Discovery Starts Here!</h1>
            </div>
        </div>
    
        <div class="container">
            <div class="row my-5">
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-2 mb-5">

                <?php 
                    $notebook_args = array(
                        'posts_per_page'=> -1,
                        'post_type'		=> 'pltf_notebook',
                    ); 
                    $notebooks = new WP_Query($notebook_args);
                    if ( $notebooks->have_posts() ) :
                        while ( $notebooks->have_posts() ) : $notebooks->the_post(); 
                        $description = get_field('description');
                        $notebook_image = get_field('notebook_image');
                        $github_info = get_field('github_infomation');
                        $repo_name = explode('/',$github_info['github_repo']);
                        $url = add_query_arg(array(
                            'repo' => urlencode($github_info['github_repo']),
                            'urlpath' => urlencode('lab/tree/'.end($repo_name).'/'.$github_info['ipynb_file_name'])
                        ), 'https://jupyter.iguide.illinois.edu/hub/user-redirect/git-pull');
                ?>
                    <div class="col">
                        <div class="card h-100">
                            <div style="background-image:url('<?php echo esc_url($notebook_image['url']); ?>')" class="card-image rounded-top" ></div>
                            <div class="card-body d-flex flex-column align-items-start"">
                                <h5 class="card-title"><b><?php the_title(); ?></b></h5>
                                <p class="card-text" style="font-size:13px;"><?php echo $description; ?></p>
                                <a class="btn btn-warning align-self-end" target="_blank" rel="noopener noreferrer" href="<?php echo esc_url($url); ?>">Open Notebook</a>
                            </div>
                        </div>
                    </div>
                
                <?php  endwhile;  ?>
                <?php endif; ?>
                </div>
            </div>
        </div>
        <footer class="container-fluid pt-3">
            <div class="container ">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 col-md-6">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <h1 class="logo"><img class="img-fluid" style="height:75px; width:auto;" src="https://iguide.illinois.edu/wp-content/uploads/2022/05/NSF_4-Color_bitmap_Logo-e1651450053318.png" alt="NSF Logo"></h1>
                            </div>
                            <div class="col-auto">
                                <p style="font-size:11px;"><b>&copy; <script> document.write(new Date().getFullYear()) </script>  I-GUIDE All Rights Reserved </b></br>
                                Institute for Geospatial Understanding through an Integrative Discovery Environment (I-GUIDE) </br>
                                is supported by the National Science Foundation</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5">
                        <p style="font-size:11px;">This material is based upon work supported by the National Science Foundation under award No. 2118329. Any opinions, findings, conclusions, or recommendations expressed in this material are those of the author(s) and do not necessarily reflect the views of the National Science Foundation.</p>
                    </div>
                    <div class="col-1">
                            <div class="row">
                            <a class="btn btn-sm btn-danger" href="https://forms.gle/qsdQx8oTdGEgkV6A8" target="_blank">Report issues</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
    </body>
</html>
