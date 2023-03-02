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
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/platform.css" />
        <link rel="stylesheet" href="https://use.typekit.net/iaa6nkv.css">
        <style>
            .left-panel:before {
                content: "";
                width: 100%;
                height: 100%;
                background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/leftbg.jpeg');
                display: block;
                z-index: -100;
                position: absolute;
                opacity: 0.031;
                background-size: cover;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-4 shadow-lg">
                    <div class="row left-panel">
                        <div class="col-12 d-flex flex-column align-items-stretch justify-content-center vh-100">
                            <div class="row justify-content-center flex-grow-1">
                                <div class="row align-items-center">
                                    <div class="col-12 text-center">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/IGUIDE_logoH_ColorMulti.png" style="width: 70%;" class="mb-5 img-fluid"> <br>
                                        <a href="<?php echo home_url('/discovery');?>" class="btn btn-lg btn-warning shadow-sm">Launch I-GUIDE Notebooks</a>
                                        <a href="https://iguide.cuahsi.io/discover" class="btn btn-lg btn-warning shadow-sm my-4">Launch I-GUIDE Data Catalog</a>
                                        <p class="mb-2 fw-semibold" st>Addtional Resources</p>
                                        <a class="text-center btn btn-sm btn-outline-secondary mb-2" href="<?php echo home_url('/iguide-data-and-computation-resources');?>">I-GUIDE Data & Computation Resources</a>
                                        <br>
                                        <a class="text-center btn btn-sm btn-outline-secondary" href="<?php echo home_url('/projects/convergence-curriculum-for-geospatial-data-science');?>">Geospatial Data Science Curriculum</a>
                                    </div>
                                </div>
                            </div> 
                            <div class="row text-center justify-content-center ">
                                <div style="height:30px;">
                                    <p style="font-size:13px;">
                                        &copy; <script> document.write(new Date().getFullYear()) </script>  I-GUIDE All Rights Reserved
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-8 right-panel vh-100"  style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/rightbg.png'); background-size: cover;">
                    <div class="row">
                        <div class="col-12 d-flex flex-column align-items-stretch justify-content-center vh-100">
                            <div class="row justify-content-center flex-grow-1">
                            </div> 
                            <div class="row text-left justify-content-center">
                                <div class="col-12" style="height:350px;">
                                    <div class="header-wrap text-light ms-5">
                                        <h1 class="header">
                                            I-GUIDE <i>PLATFORM</i>
                                        </h1>
                                        <p class="me-5">
                                        The I-GUIDE platform is designed to harness the vast, diverse, and distributed geospatial data at different spatial and temporal scales and make them broadly accessible and usable to convergence research and education enabled by cutting-edge cyberGIS and cyberinfrastructure.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </body>
</html>
