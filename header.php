<!doctype html>
<html lang="en">

<head>
    <title><?php wp_title($sep="|"); ?></title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-PMS4J0Q35S"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-PMS4J0Q35S');
    </script>
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/site.webmanifest">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/navigation.css">
    <?php wp_head(); ?>
</head>

<body>
    <nav id="navigation" class="tw-sticky tw-top-0 tw-z-50 tw-p-0 scrolledDown">
        <div id="desktop-menu" class="tw-hidden md:tw-flex tw-items-center tw-justify-between tw-flex-wrap tw-bg-transparent md:tw-h-[100px] lg:tw-h-[120px] md:tw-px-5 lg:tw-px-20">
            <div class="tw-flex tw-items-center tw-flex-shrink-0 tw-ml-3 md:tw-ml-4 tw-mr-6">
                <img class="logo-color tw-h-[56px] tw-w-[115px] xl:tw-p-0 xl:tw-h-[80px] xl:tw-w-[165px]" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-color.png" alt="">
                <img class="logo-white tw-h-[56px] tw-w-[115px] xl:tw-p-0 xl:tw-h-[80px] xl:tw-w-[165px]" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-w.png" alt="">
            </div>
            <div class="menu-main-navigation-container ">
                <ul id="main-menu"
                    class="nav tw-hidden md:tw-flex tw-items-center tw-text-sm xl:tw-text-base tw-space-x-4 xl:tw-space-x-8 tw-font-light">
                    <li id="menu-item-28"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-28">
                        <a href="page.html">Overview</a>
                        <ul class="sub-menu">
                            <li id="menu-item-180"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-180"><a
                                    href="page.html">About</a></li>
                            <li id="menu-item-179"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-179"><a
                                    href="page.html">Leadership</a></li>
                            <li id="menu-item-427"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-427">
                                <a href="page.html">I-GUIDE Teams</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-129"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-129">
                                        <a href="page.html">Convergence Science
                                            Catalysts</a>
                                    </li>
                                    <li id="menu-item-124"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-124">
                                        <a href="page.html">Geospatial Artificial Intelligence
                                            &amp;
                                            Data Science</a>
                                    </li>
                                    <li id="menu-item-128"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-128">
                                        <a href="page.html">Core Cyberinfrastructure
                                            Capabilities
                                            &amp; Services</a>
                                    </li>
                                    <li id="menu-item-127"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-127">
                                        <a href="page.html">Education &amp; Workforce
                                            Development</a>
                                    </li>
                                    <li id="menu-item-126"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-126">
                                        <a href="page.html">Engagement &amp;
                                            Partnerships</a>
                                    </li>
                                    <li id="menu-item-125"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-125">
                                        <a href="page.html">Evaluation &amp; Knowledge
                                            Transfer</a>
                                    </li>
                                </ul>
                            </li>
                            <li id="menu-item-315"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-315"><a
                                    href="page.html">Partners</a></li>
                            <li id="menu-item-483"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-483"><a
                                    href="page.html">External
                                    Advisory Board</a></li>
                            <li id="menu-item-966"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-966"><a
                                    href="page.html">FAQ</a></li>
                        </ul>
                    </li>
                    <li id="menu-item-1208"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1208">
                        <a href="#">Stories &amp; Outreach</a>
                        <ul class="sub-menu">
                            <li id="menu-item-579"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-579"><a
                                    href="page.html">News &amp; Happenings</a></li>
                            <li id="menu-item-1229"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1229"><a
                                    href="page.html">Convergence
                                    Science</a>
                            </li>
                            <li id="menu-item-1206"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1206">
                                <a href="#">Activities &amp; Events</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-1266"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1266">
                                        <a href="page.html">Summer School 2023</a>
                                    </li>
                                    <li id="menu-item-1211"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1211">
                                        <a href="page.html">Virtual Consulting Office</a>
                                    </li>
                                    <li id="menu-item-460"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-460">
                                        <a href="page.html">Webinars</a>
                                    </li>
                                    <li id="menu-item-703"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-703">
                                        <a href="#">All-Hands Meetings</a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-677"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-677">
                                                <a href="page.html">I-GUIDE
                                                    AHM 2022 (Virtual)</a>
                                            </li>
                                            <li id="menu-item-830"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-830">
                                                <a href="page.html">I-GUIDE
                                                    AHM 2022 (In-person)</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li id="menu-item-459"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-459">
                                <a href="#">Conferences</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-772"
                                        class="menu-item menu-item-type-post_type menu-item-object-news_events menu-item-772">
                                        <a href="page.html">AGU
                                            2022</a>
                                    </li>
                                    <li id="menu-item-1110"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1110">
                                        <a href="page.html">AAG
                                            2023</a>
                                    </li>
                                </ul>
                            </li>
                            <li id="menu-item-696"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-696"><a
                                    href="page.html">Calendar</a></li>
                        </ul>
                    </li>
                    <li id="menu-item-1032"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1032">
                        <a href="#">Initiatives &amp; Resources</a>
                        <ul class="sub-menu">
                            <li id="menu-item-1030"
                                class="platform menu-item menu-item-type-post_type menu-item-object-page menu-item-1030">
                                <a target="_blank" rel="noopener" href="page.html">I-GUIDE
                                    Platform</a>
                            </li>
                            <li id="menu-item-1031"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1031"><a
                                    href="page.html">Resources
                                    Catalog</a></li>
                            <li id="menu-item-1559"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1559"><a
                                    href="page.html">Geoethics</a></li>
                            <li id="menu-item-1267"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1267"><a
                                    href="page.html">Convergence
                                    Curriculum for Geospatial Data Science</a></li>
                        </ul>
                    </li>
                    <li id="menu-item-205"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-205"><a
                            href="page.html">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    