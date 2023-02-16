<?php 
    get_header();
?>

<div class="hero-section tw-relative tw-pb-5 md:tw-pb-[130px] tw-pt-[100px] tw--mt-[70px] md:tw--mt-[200px] md:tw-pt-[200px] tw-overflow-hidden">
        <div class="tw-w-full">
            <div class="tw-flex tw-flex-col md:tw-px-10 md:tw-flex-row md:tw-gap-5 lg:tw-gap-10 tw-justify-start">
                <div class="vw-screen tw-px-10 md:tw-w-4/12 lg:tw-w-1/3 md:tw-mt-7 md:tw-pl-5 lg:tw-mt-10 lg:tw-pl-17">
                    <div id="tabs-nav" class="tw-text-white tw-text-[50px] md:tw-text-[4vw] tw-font-semibold tw-text-shadow tw-inline-block">
                        <h1 class="tw-mb-3 md:tw-mb-3 lg:tw-mb-5">
                            <span id="map" class="sweep-to-right tw-cursor-pointer" link="#map-slide">Map. </span><br>
                            <span id="connect" class="sweep-to-right tw-cursor-pointer" link="#connect-slide">Connect.</span><br>
                            <span id="discover" class="sweep-to-right tw-cursor-pointer" link="#discover-slide">Discover.</span>
                        </h1>
                    </div> 
                    <p class="tw-text-white tw-text-sm md:tw-text-base tw-font-light inline-block">
                        <strong>I-GUIDE</strong> is empowering diverse communities to produce data-intensive solutions to society’s resilience and sustainability challenges.
                    </p>
                </div>
                <div class="tw-w-screen tw-mt-5 md:tw-mt-7 md:tw-w-8/12 lg:tw-w-2/3">
                    <div id="tw-tabs-content" class="md:tw-w-[150%] lg:tw-w-[110%]">
                        <div id="map-slide" class="hero-tab-content tw-p-0 lg:tw-p-2 z-20">
                            <div class="md:tw-grid md:tw-grid-cols-7 md:tw-gap-5 lg:tw-gap-7">
                                <div class="tab-card tw-max-h-[150px] tw-mx-10 tw-mb-5 md:tw-m-0 md:tw-max-h-none animate tw-col-span-2 tw-row-span-2 tw-self-start  tw-overflow-hidden tw-relative md:tw-mt-10 tw-rounded-lg tw-drop-shadow-md animate__delay-1s">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/BAthymetirc_model_development.jpg" alt="">
                                    <h1 class=" tw-absolute tw-text-white tw-bottom-0 tw-font-semibold tw-px-3 tw-pb-2">Bathymetric Model Development</h1>
                                </div>
                                <div class="tab-card tw-h-[300px] tw-mx-10 tw-mb-5 md:tw-m-0 md:tw-max-h-none animate tw-col-start-3 tw-col-end-6 tw-self-start tw-relative tw-rounded-lg tw-overflow-hidden tw-drop-shadow-md animate__delay-2s">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/average_annual_elevation_of_great_salt_lake.jpg" alt="">
                                    <h1 class="tw-absolute tw-text-white tw-bottom-0 tw-font-semibold tw-px-3 tw-pb-2">Average Annual Elevation of Great Salt Lake</h1>
                                </div>
                                <div class="tab-card tw-h-[300px] tw-mx-10 tw-mb-5 md:tw-m-0 md:tw-max-h-none animate tw-col-start-3 tw-col-end-6  tw-self-start  tw-relative tw-rounded-lg tw-overflow-hidden tw-drop-shadow-md animate__delay-3s">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/high_hazard_dams.png" alt="">
                                    <h1 class=" tw-absolute tw-text-white tw-bottom-0 tw-font-semibold tw-px-3 tw-pb-4">I-GUIDE All-Hands Meeting
                                        (Virtual) </h1>
                                </div>
                                <div class="tab-card tw-max-h-[150px] tw-mx-10 tw-mb-5 tw-hidden md:tw-flex md:tw-m-0 md:tw-max-h-none animate tw-col-start-6 tw-col-span-2 tw-self-start  tw-row-start-1 tw-row-span-2 tw-relative md:tw-mt-20 tw-rounded-lg tw-overflow-hidden tw-drop-shadow-md animate__delay-4s">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top1.png" alt="">
                                    <h1 class=" tw-absolute tw-text-white tw-bottom-0 tw-font-semibold tw-px-3 tw-pb-2">I-GUIDE Webinar Series
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div id="connect-slide" class="hero-tab-content tw-p-0 lg:tw-p-2 z-20">
                            <div class="md:tw-grid md:tw-grid-cols-7 md:tw-gap-5 lg:tw-gap-7">
                                <div class="tw-max-h-[150px] tw-mx-10 tw-mb-5 md:tw-m-0 md:tw-max-h-none animate tw-col-span-2 tw-row-span-2 tw-ease-in tw-duration-300 tw-h-fit tw-overflow-hidden tw-relative md:tw-mt-10 tw-rounded-lg tw-drop-shadow-md animate__delay-1s">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top1.png" alt="">
                                    <h1 class=" tw-absolute tw-text-white tw-bottom-0 tw-font-semibold tw-px-3 tw-pb-2">I-GUIDE Webinar Series
                                    </h1>
                                </div>
                                <div class="tw-max-h-[150px] tw-mx-10 tw-mb-5 md:tw-m-0 md:tw-max-h-none animate tw-col-start-3 tw-col-end-6 tw-ease-in tw-duration-300 tw-h-fit tw-relative tw-rounded-lg tw-overflow-hidden tw-drop-shadow-md animate__delay-2s">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top2.png" alt="">
                                    <h1 class=" tw-absolute tw-text-white tw-bottom-0 tw-font-semibold tw-px-3 tw-pb-2">The first in-person
                                        I-GUIDE AHM!</h1>
                                </div>
                                <div class="tw-max-h-[150px] tw-mx-10 tw-mb-5 md:tw-m-0 md:tw-max-h-none animate tw-col-start-3 tw-col-end-6 tw-ease-in tw-duration-300 tw-h-fit tw-relative tw-rounded-lg tw-overflow-hidden tw-drop-shadow-md animate__delay-3s">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top3.png" alt="">
                                    <h1 class=" tw-absolute tw-text-white tw-bottom-0 tw-font-semibold tw-px-3 tw-pb-4">I-GUIDE All-Hands Meeting
                                        (Virtual) </h1>
                                </div>
                                <div class="tw-max-h-[150px] tw-mx-10 tw-mb-5 tw-hidden md:tw-flex md:tw-m-0 md:tw-max-h-none animate tw-col-start-6 tw-col-span-2 tw-row-start-1 tw-ease-in tw-duration-300 tw-row-span-2 tw-h-fit tw-relative md:tw-mt-20 tw-rounded-lg tw-overflow-hidden tw-drop-shadow-md animate__delay-4s">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top1.png" alt="">
                                    <h1 class=" tw-absolute tw-text-white tw-bottom-0 tw-font-semibold tw-px-3 tw-pb-2">I-GUIDE Webinar Series
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div id="discover-slide" class="hero-tab-content tw-p-0 lg:tw-p-2 z-20">
                            <div class="md:tw-grid md:tw-grid-cols-7 md:tw-gap-5 lg:tw-gap-7">
                                <div class="tw-max-h-[150px] tw-mx-10 tw-mb-5 md:tw-m-0 md:tw-max-h-none animate tw-col-span-2 tw-row-span-2 tw-ease-in tw-duration-300 tw-h-fit tw-overflow-hidden tw-relative md:tw-mt-10 tw-rounded-lg tw-drop-shadow-md animate__delay-1s">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top1.png" alt="">
                                    <h1 class=" tw-absolute tw-text-white tw-bottom-0 tw-font-semibold tw-px-3 tw-pb-2">I-GUIDE Webinar Series
                                    </h1>
                                </div>
                                <div class="tw-max-h-[150px] tw-mx-10 tw-mb-5 md:tw-m-0 md:tw-max-h-none animate tw-col-start-3 tw-col-end-6 tw-ease-in tw-duration-300 tw-h-fit tw-relative tw-rounded-lg tw-overflow-hidden tw-drop-shadow-md animate__delay-2s">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top2.png" alt="">
                                    <h1 class=" tw-absolute tw-text-white tw-bottom-0 tw-font-semibold tw-px-3 tw-pb-2">The first in-person
                                        I-GUIDE AHM!</h1>
                                </div>
                                <div class="tw-max-h-[150px] tw-mx-10 tw-mb-5 md:tw-m-0 md:tw-max-h-none animate tw-col-start-3 tw-col-end-6 tw-ease-in tw-duration-300 tw-h-fit tw-relative tw-rounded-lg tw-overflow-hidden tw-drop-shadow-md animate__delay-3s">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top3.png" alt="">
                                    <h1 class=" tw-absolute tw-text-white tw-bottom-0 tw-font-semibold tw-px-3 tw-pb-4">I-GUIDE All-Hands Meeting
                                        (Virtual) </h1>
                                </div>
                                <div class="tw-max-h-[150px] tw-mx-10 tw-mb-5 tw-hidden md:tw-flex md:tw-m-0 md:tw-max-h-none animate tw-col-start-6 tw-col-span-2 tw-row-start-1 tw-ease-in tw-duration-300 tw-row-span-2 tw-h-fit tw-relative md:tw-mt-20 tw-rounded-lg tw-overflow-hidden tw-drop-shadow-md animate__delay-4s">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top1.png" alt="">
                                    <h1 class=" tw-absolute tw-text-white tw-bottom-0 tw-font-semibold tw-px-3 tw-pb-2">I-GUIDE Webinar Series
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tw-invisible sm:tw-visible custom-shape-divider-bottom-1676052306 z-10">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div class="tw-container tw-flex tw-flex-col tw-gap-5 lg:tw-gap-10 tw-px-10 lg:tw-grid md:tw-grid-cols-2 md:tw-grid-row-[min-content_min-content] tw-pt-10">
        <div class="tw-text-center lg:tw-text-left tw-w-full md:tw-col-start-2">
            <h1 class="tw-text-3xl md:tw-text-6xl lg:tw-text-7xl xl:tw-text-8xl">
                <span class="tw-text-ig-brown lg:tw-hidden">We are </span><span class="tw-text-ig-blue tw-font-black">I</span><span class="tw-text-ig-brown tw-font-black">-</span><span class="tw-text-ig-teal tw-font-black">G</span><span class="tw-text-ig-olive tw-font-black">U</span><span class="tw-text-ig-light-green tw-font-black">I</span><span class="tw-text-ig-orange tw-font-black">D</span><span class="tw-text-ig-mustard tw-font-black">E</span>
            </h1>
        </div>
        <div class="md:tw-col-start-2 md:tw-row-start-2">
            <p class="tw-z-2 tw-text-xs md:tw-text-sm lg:tw-text-base tw-font-light tw-tracking-wide tw-mt-1 tw-text-center lg:tw-text-left">The National Science Foundation (NSF) Institute for Geospatial Understanding through an Integrative Discovery Environment (I-GUIDE) integrates AI and cyberGIS, reproducible data-intensive analytics and modeling, FAIR data principles, and innovative education and workforce development programs to transform geospatial data-intensive sciences. This transformation catalyzes new convergence science to advance many fields, including computer, data, and information sciences, atmospheric sciences, ecology, economics, environmental science and engineering, human-environment and geographical sciences, hydrology and water sciences, industrial engineering, sociology, and statistics. I-GUIDE empowers various communities to generate data-intensive solutions to society's resilience and sustainability concerns through synergistic achievements in these disciplines. </p>
        </div>

        <div class="tw-w-full tw-flex tw-justify-center tw-drop-shadow-xl md:tw-row-start-1 md:tw-row-span-2">
            <div class="tw-bg-gray-300 tw-w-full tw-aspect-video lg:tw-aspect-auto tw-overflow-hidden tw-rounded-lg ">
                <iframe id="kmsembed-1_ebqgma2n" width="100%" height="100%"
                    src="https://mediaspace.illinois.edu/embed/secure/iframe/entryId/1_ebqgma2n/uiConfId/26883701"
                    class="kmsembed" allowfullscreen webkitallowfullscreen mozAllowFullScreen
                    allow="autoplay *; fullscreen *; encrypted-media *" referrerPolicy="no-referrer-when-downgrade"
                    sandbox="allow-forms allow-same-origin allow-scripts allow-top-navigation allow-pointer-lock allow-popups allow-modals allow-orientation-lock allow-popups-to-escape-sandbox allow-presentation allow-top-navigation-by-user-activation"
                    frameborder="0" title="Kaltura Player"></iframe>
            </div>
        </div>
    </div>

    <div class="tw-w-screen tw-overflow-y-visible tw-relative tw-py-20">
        <div class="tw-w-full tw-bg-gray-200" style="transform: rotate(-2deg); height:1px !important;"></div>
    </div>

    <div class="project-section tw-container tw-px-10">
        <div class="tw-flex">
            <div class="tw-w-full md:tw-w-3/4">
                <h1 class="tw-text-2xl lg:tw-text-3xl tw-font-semibold">Overcoming Scientific and Societal Challenges</h1>
                <p class="tw-text-sm lg:tw-text-base tw-font-light tw-my-5 ">Uniting Interdisciplinary Knowledge to Solve Real-World Problems! By
                    fostering collaboration and providing access to advanced geospatial data capabilities, I-GUIDE is
                    tackling fundamental scientific and societal challenges with innovative solutions.</p>
            </div>
        </div>
        <div class="tw-min-h-[450px]">
            <div class="tw-mb-4">
                <ul id="project-tabs-nav" class="tw-flex tw-flex-wrap tw--mb-px tw-text-sm lg:tw-text-base tw-font-semibold tw-text-center">
                    <li class="tw-flex-1 tw-text-center tw-border-b-2 tw-p-5 tw-cursor-pointer tw-grid tw-content-center" link="#proj1">Aging Dam</li>
                    <li class="tw-flex-1 md:tw-flex-2 tw-text-center tw-border-b-2 tw-p-5 tw-cursor-pointer tw-grid tw-content-center" link="#proj2">Geospatial Data Science Convergence Curriculum</li>
                    <li class="tw-flex-1 tw-text-center tw-border-b-2 tw-p-5 tw-cursor-pointer tw-grid tw-content-center" link="#proj3">Hypercube</li>
                    <li class="tw-flex-1 tw-text-center tw-border-b-2 tw-p-5 tw-cursor-pointer tw-grid tw-content-center" link="#proj4">Geoethics</li>
                </ul>
            </div>
            <div class="tw-w-full">
                <div id="proj1" class="project-tab-content">
                    <div class="tw-flex tw-flex-col md:tw-flex-row tw-gap-10 tw-p-0 md:tw-py-4">
                        <div class="projLeft md:tw-basis-7/12 animate__delay-1s">
                            <h1 class="tw-text-2xl lg:tw-text-3xl tw-mb-5 tw-text-ig-orange tw-font-semibold">Vulnerability Analysis for Aging Dam
                                Infrastructure</h1>
                            <p class="tw-text-sm lg:tw-text-base tw-font-light tw-text-black dark:tw-text-gray-400 ">U.S. dams are threatened by age-induced fragility and increased hydrologic stresses due to climate change. In many cases, communities and infrastructure below the dams have also increased dramatically over time, increasing the exposure to dam failure. Given that there are over 90,000 such dams in the United States, a traditional approach to dam risk assessment is challenging to implement. Our I-GUIDE project is taking an integrated approach to the application of “big data” sources so that a national or portfolio risk assessment of these assets can be attempted for the first time. This includes a spatially specific analysis of the climate changes of concern, of what is likely to be impacted if the dams fail, of the cascading effects of those failures on the national economy and other critical infrastructure elements, and the potential resilience of the infrastructure systems given the governance at different levels. The application of machine learning tools, statistical inference, natural language processing and the geo-hypercube together with traditional physics based and economics models are illustrated.</p>
                        </div>
                        <div class="projRight md:tw-basis-5/12 animate__delay-5s">
                            <div class="tw-rounded-lg tw-overflow-hidden tw-drop-shadow-md">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/high_hazard_dams.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="proj2" class="project-tab-content">
                    <div class="tw-flex tw-flex-col md:tw-flex-row tw-gap-10 tw-p-0 md:tw-p-4">
                        <div class="projLeft md:tw-basis-7/12 animate__delay-1s">
                            <h1 class="tw-text-2xl lg:tw-text-3xl tw-mb-5 tw-text-ig-orange tw-font-semibold">Geospatial Data Science Convergence Curriculum</h1>
                            <p class="tw-text-sm lg:tw-text-base tw-font-light tw-text-black dark:tw-text-gray-400 ">The Convergence Curriculum for Geospatial Data Science is an integrative framework to prepare next-generation students and current-generation scholars and professionals to tackle complex, convergent problems. This multi-tiered curriculum starts with 5 Foundational Knowledge Threads to establish a common basis for individuals coming from diverse backgrounds. Individual learners begin to integrate skills, knowledge, methods, and technologies as they move up through Knowledge Connections and Knowledge Frames. The pinnacle of the curriculum is Knowledge Convergence, which combines previous competencies with existing domain knowledge. Each component in the curriculum will be available at varying depths: 3 sentences, 3 slides, a 3-hour module, or a 3-week unit. This configuration allows individuals to adapt their experiences to match their learning pathways and needs.</p>
                        </div>
                        <div class="projRight md:tw-basis-5/12 animate__delay-5s">
                            <div class="tw-rounded-lg tw-overflow-hidden tw-drop-shadow-md">
                                <img src="https://iguide.illinois.edu/wp-content/uploads/2022/09/Picture1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="proj3" class="project-tab-content">
                    <div class="tw-flex tw-flex-col md:tw-flex-row tw-gap-10 tw-p-0 md:tw-p-4">
                        <div class="projLeft md:tw-basis-7/12 animate__delay-1s">
                            <h1 class="tw-text-2xl lg:tw-text-3xl tw-mb-5 tw-text-ig-orange tw-font-semibold">Hypercube</h1>
                            <p class="tw-text-sm lg:tw-text-base tw-font-light tw-text-black dark:tw-text-gray-400 ">The lack of support for computational reproducibility and data ethics is a significant challenge for knowledge infrastructure, including data privacy, consent, and transparency. I-GUIDE, a research organization, aims to support the decision-making process for sharing data and data-driven research outcomes. Geoethics is an important area for I-GUIDE, and it is integrated into their Convergence Curriculum for Geospatial Data Science. The curriculum provides structural guidance for computational reproducibility and data ethics. The article suggests several resources, including GIS Ethics Case Studies, Data and Society, and AI Now Institute, to support researchers in addressing the social implications of AI and data-centric technologies.</p>
                        </div>
                        <div class="projRight md:tw-basis-5/12 animate__delay-5s">
                            <div class="tw-rounded-lg tw-overflow-hidden tw-drop-shadow-md">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hypercube.jpeg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="proj4" class="project-tab-content">
                    <div class="tw-flex tw-flex-col md:tw-flex-row tw-gap-10 tw-p-0 md:tw-p-4">
                        <div class="projLeft md:tw-basis-7/12 animate__delay-1s">
                            <h1 class="tw-text-2xl lg:tw-text-3xl tw-mb-5 tw-text-ig-orange tw-font-semibold">Geoethics</h1>
                            <p class="tw-text-sm lg:tw-text-base tw-font-light tw-text-black dark:tw-text-gray-400 ">The lack of support for computational reproducibility and data ethics is a significant challenge for knowledge infrastructure, including data privacy, consent, and transparency. I-GUIDE, a research organization, aims to support the decision-making process for sharing data and data-driven research outcomes. Geoethics is an important area for I-GUIDE, and it is integrated into their Convergence Curriculum for Geospatial Data Science. The curriculum provides structural guidance for computational reproducibility and data ethics. The article suggests several resources, including GIS Ethics Case Studies, Data and Society, and AI Now Institute, to support researchers in addressing the social implications of AI and data-centric technologies.</p>
                        </div>
                        <div class="projRight md:tw-basis-5/12 animate__delay-5s">
                            <div class="tw-rounded-lg tw-overflow-hidden tw-drop-shadow-md">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/geoethics.jpeg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tw-w-screen tw-overflow-y-visible tw-relative tw-py-20">
        <div class="tw-w-full tw-bg-gray-200" style="transform: rotate(2deg); height:1px !important;"></div>
    </div>

    <div class="news-section tw-container tw-w-full tw-px-10 tw-my-10">
        <h1 class="tw-text-2xl lg:tw-text-3xl tw-font-semibold">NEWS AND UPDATES</h1>
        <div class="news-grid tw-grid md:tw-grid-cols-3 lg:tw-grid-cols-4 md:tw-grid-rows-[max-content_min-content] md:tw-grid-flow-row tw-gap-3 md:tw-gap-5 lg:tw-gap-7  tw-mt-5">
            <?php
                $news_args = array(
                    'posts_per_page' => 6,
                    'post_type' => 'news_events',
                );
                $news = new WP_Query($news_args);
                $news_count = 1;
            ?>
                <?php if ($news->have_posts()): ?>
                <?php while ($news->have_posts()): $news->the_post();
                    $news_or_event = get_the_terms( get_the_ID(), 'news_cat' );
                    $description = get_field('short_description');
                    $attachment_id = get_post_meta(get_the_ID(), 'image', true);
                    $attachment_src = wp_get_attachment_image_src($attachment_id, 'full');
                    $default_img = get_template_directory_uri()."/img/area_6.png";
            ?>
            <div class="<?php if($news_count>4) echo 'tw-hidden'; ?> tw-border lg:tw-block tw-max-w-sm tw-rounded tw-overflow-hidden tw-ease-in tw-duration-300 tw-shadow-lg hover:tw-shadow-xl">
                <img class="tw-object-cover tw-h-[200px] tw-w-full"
                                            src="<?php echo ($attachment_src)? $attachment_src[0]: $default_img; ?>"
                                            alt="<?php the_title();?>">
                <div class="tw-px-1 lg:tw-px-2 md:tw-px-6 tw-py-4">
                    <div class="tw-font-semibold tw-text-sm md:tw-text-sm lg:tw-text-base xl:tw-text-xl tw-mb-2"><?php the_title();?></div>
                    <p class="tw-text-gray-500 tw-font-light tw-italic tw-text-xs lg:tw-text-sm ">
                        <?php my_post_time_ago(); ?>
                    </p>
                </div>
            </div>
            
            <?php $news_count++;
            endwhile;?>
            <?php endif;?>
            
            <div id="twt-block" class="tw-border tw-max-w-sm md:tw-row-start-1 md:tw-row-span-2 tw-rounded-xl justify-self-auto tw-shadow-lg tw-overflow-hidden">
                <a class="twitter-timeline tw-h-full" data-height="1000" href="https://twitter.com/NSFiGUIDE?ref_src=twsrc%5Etfw">Tweets by NSFiGUIDE</a> 
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
            </div>
        </div>
    </div>

    <div class="maillist-section tw-bg-gray-100 tw-w-full tw-pt-10 tw-px-10 tw-pb-0">
        <div class="tw-container">
            <h1 class="tw-text-2xl lg:tw-text-3xl tw-font-semibold">Join I-GUIDE's Mailing List</h1>
            <p class="tw-font-light tw-text-sm lg:tw-text-base tw-text-black tw-mt-5">Join I-GUIDE's mailing list for updates on geospatial
                discovery and
                innovation. Stay informed on community priorities, cutting-edge data capabilities, and exciting
                advancements in various disciplines. Don't miss out on opportunities to participate in shaping the
                future of geospatial data-intensive sciences. Sign up now!</p>
            <!-- Begin Constant Contact Inline Form Code -->
            <div class="ctct-inline-form" data-form-id="44d7424d-0385-4ea9-8145-50702484d1f0"></div>
            <!-- End Constant Contact Inline Form Code -->
        </div>
    </div>


    <div class="tw-collob-section tw-w-full tw-mt-12 tw-px-10 tw-max-w-full">
        <div class="tw-container">
            <h1 class="tw-text-2xl lg:tw-text-3xl tw-font-semibold">Collaborating Institutions</h1>
            <div class="tw-flex tw-gap-x-5 tw-gap-y-10 md:tw-gap-y-10 tw-align-center tw-items-center tw-justify-content tw-mx-auto tw-flex-wrap tw-py-10 tw-mt-5">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/uiuc.png" alt="" class="tw-mx-auto tw-h-[10vh] md:tw-h-[80px] lg:tw-h-[12vh]">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/columbiauniv.png" alt="" class="tw-mx-auto tw-h-[10vh] md:tw-h-[80px] lg:tw-h-[12vh]">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/inst7.png" alt="" class="tw-mx-auto tw-h-[10vh] md:tw-h-[80px] lg:tw-h-[12vh]">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fiu.png" alt="" class="tw-mx-auto tw-h-[10vh] md:tw-h-[80px] lg:tw-h-[12vh]">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/michiganstate.png" alt="" class="tw-mx-auto tw-h-[10vh] md:tw-h-[80px] lg:tw-h-[12vh]">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/inst9.png" alt="" class="tw-mx-auto h-[10vh] md:tw-h-[80px] lg:tw-h-[12vh]">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/purdue.png" alt="" class="tw-mx-auto h-[10vh] md:tw-h-[80px] lg:tw-h-[12vh]">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/inst10.png" alt="" class="tw-mx-auto h-[10vh] md:tw-h-[80px] lg:tw-h-[12vh]">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/inst8.png" alt="" class="tw-mx-auto h-[10vh] md:tw-h-[80px] lg:tw-h-[12vh]">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/minnesota.png" alt="" class="tw-mx-auto tw-h-[10vh] md:tw-h-[80px] lg:tw-h-[12vh]">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/utahstate.png" alt="" class="tw-mx-auto tw-h-[10vh] md:tw-h-[80px] lg:tw-h-[12vh]">
            </div>
        </div>
    </div>

<?php
    get_footer();
?>