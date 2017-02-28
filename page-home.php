<?php
/*
Template Name: Home Page
 */
// Custom fields
$income_section_image = get_field('income_section_image');
$income_section_title = get_field('income_section_title');
$income_section_description = get_field('income_section_description');
$column1_title = get_field('column1_title');
$column1_description = get_field('column1_description');
$column2_title = get_field('column2_title');
$column2_description = get_field('column2_description');

get_header();?>

		<!--==========================
		=            Main            =
		===========================-->
        <main>

            <!--====  Hero  ====-->
            <section id="hero" data-type="background" data-speed="5">
                <article>
                    <div class="container clearfix">
                        <div class="row">
                            <div class="col-sm-5">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo-badge.png" alt="Bootstrap to Wordpress" class="logo">
                            </div> <!-- end col -->


                            <div class="col-sm-7 hero-text">
                                <h1><?php bloginfo('name');?></h1>
                                <p class="lead"><?php bloginfo('description')?></p>

                                <div class="price-timeline">
                                    <div class="price active">
                                        <h4>Pre-launch <small>End soon!</small></h4>
                                        <span><?php echo site_custom_field('pre_launch') ?></span>
                                    </div> <!-- end price -->

                                    <div class="price">
                                        <h4>Pre-launch <small>End soon!</small></h4>
                                        <span><?php echo site_custom_field('pre_launch') ?></span>
                                    </div> <!-- end price -->

                                    <div class="price">
                                        <h4>Pre-launch <small>End soon!</small></h4>
                                        <span><?php echo site_custom_field('pre_launch') ?></span>
                                    </div> <!-- end price -->

                                </div> <!-- end price timeline -->
                                <p><a href="<?php echo site_custom_field('course_url') ?>" class="btn btn-lg btn-danger"><?php echo site_custom_field('button_text') ?></a></p>
                            </div> <!-- end col -->

                        </div> <!-- end row -->
                    </div> <!-- end container -->
                </article>
            </section> <!-- end hero -->

            <!--====  Subcsribe   ====-->
            <section id="subscribe">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <p class="lead"><?php echo site_custom_field('subscribe_text') ?></p>
                        </div> <!--end col -->
                        <div class="col-sm-4">
                            <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">
                               <?php echo site_custom_field('subsrcibe_button_text') ?>
                            </button>
                        </div> <!--end col -->
                    </div> <!--end row-->
                </div> <!-- end container -->

            </section> <!-- end Subcsribe -->


            <!--====  boots your income section  ====-->
            <section>
                <div class="container">
                    <div class="section-header">
                        <?php if (!empty($income_section_image)): ?>
                        <img src="<?php echo $income_section_image['url'] ?>" alt="<?php echo $income_section_image['alt'] ?>">
                        <?php endif?>

                        <h2><?php echo $income_section_title ?></h2>
                    </div> <!-- end header section -->

                    <p class="lead"><?php echo $income_section_description ?></p>

                    <div class="row">
                        <div class="col-sm-6">
                            <h3><?php echo $column1_title; ?></h3>
                            <p><?php echo $column1_description; ?></p>
                        </div>

                        <div class="col-sm-6">
                            <h3><?php echo $column2_title; ?></h3>
                            <p><?php echo $column2_description; ?></p>
                        </div>
                    </div> <!--end row-->
                </div> <!-- end container -->

            </section> <!-- end income -->


            <!--====  Benefit  ====-->
            <section id="benefit">
                <div class="container">
                    <div class="section-header">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon-pad.png" alt="Pad and Pencil">
                    </div> <!--end section header-->

                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing.</h3>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam cum veritatis incidunt repellendus ipsa, sed consectetur.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam cum veritatis incidunt repellendus ipsa, sed consectetur.</p>

                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing.</h3>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam cum veritatis incidunt repellendus ipsa, sed consectetur.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam cum veritatis incidunt repellendus ipsa, sed consectetur.</p>

                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing.</h3>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam cum veritatis incidunt repellendus ipsa, sed consectetur.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam cum veritatis incidunt repellendus ipsa, sed consectetur.</p>
                        </div>
                    </div> <!-- end row -->

                </div> <!-- end container -->

            </section> <!-- end benefit -->

            <!--====  Features  ====-->
            <section id="features">
                <div class="container">
                    <div class="section-header">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon-rocket.png" alt="Rocket">
                        <h2>Features</h2>
                    </div> <!-- end section header -->

                    <div class="row">
                        <div class="col-sm-2">
                            <i class="ci ci-computer"></i>
                            <h4>Lorem ipsum.</h4>
                        </div> <!--end col-->

                        <div class=" col-sm-2 ">
                            <i class="ci ci-watch"></i>
                            <h4>Lorem ipsum.</h4>
                        </div> <!--end col-->

                        <div class=" col-sm-2 ">
                            <i class="ci ci-computer"></i>
                            <h4>Lorem ipsum.</h4>
                        </div> <!--end col-->

                        <div class=" col-sm-2 ">
                            <i class="ci ci-computer"></i>
                            <h4>Lorem ipsum.</h4>
                        </div> <!--end col-->

                        <div class=" col-sm-2 ">
                            <i class="ci ci-computer"></i>
                            <h4>Lorem ipsum.</h4>
                        </div> <!--end col-->

                        <div class=" col-sm-2 ">
                            <i class="ci ci-computer"></i>
                            <h4>Lorem ipsum.</h4>
                        </div> <!--end col-->
                    </div> <!-- end row -->

                </div> <!-- end container -->

            </section>

            <!--====  Result  ====-->
            <section id="result">
                <div class="container">
                    <h2>Final Result</h2>

                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p>

                    <div class="row">
                        <div class=" col-sm-4  ">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon-design.png" alt="Design">
                            <h3>Lorem ipsum dolor &amp; sit amet, consectetur adipisicing elit. Assumenda, dolorem.</h3>
                            <p>Lorem ipsum dolor sit.</p>
                        </div> <!--end col-->

                        <div class=" col-sm-4  ">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon-design.png" alt="Design">
                            <h3>Lorem ipsum dolor &amp; sit amet, consectetur adipisicing elit. Assumenda, dolorem.</h3>
                            <p>Lorem ipsum dolor sit.</p>
                        </div> <!--end col-->

                        <div class=" col-sm-4  ">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon-design.png" alt="Design">
                            <h3>Lorem ipsum dolor &amp; sit amet, consectetur adipisicing elit. Assumenda, dolorem.</h3>
                            <p>Lorem ipsum dolor sit.</p>
                        </div> <!--end col-->
                    </div> <!-- end row -->

                </div> <!-- end container -->

            </section> <!-- end result -->


            <!--====  Video  ====-->
            <section id="video">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <h2>This is the company introduction video</h2>
                            <iframe width="100%" height="415" src="https://www.youtube.com/embed/0RW-bJBycnM" frameborder="0" allowfullscreen></iframe>
                        </div> <!-- end col -->

                    </div> <!-- end row -->

                </div><!-- end container -->

            </section> <!-- end video -->


            <!--==== Instructor ====-->
            <section id="instructor">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h2>Lorem ipsum.<small>lorem ipsum</small></h2>
                                </div> <!-- end col -->
                                <div class="col-lg-4">
                                    <a href="/" target="_blank" class="badge social twitter" title="twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="/" target="_blank" class="badge social twitter" title="twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="/" target="_blank" class="badge social twitter" title="twitter"><i class="fa fa-twitter"></i></a>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                            <hr>

                            <h3>The number <small>Lorem ipsum </small></h3>
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="num">
                                        <div class="num-content">
                                            41,000 <span>lorem</span>
                                        </div> <!-- num content -->

                                    </div> <!-- end num -->

                                </div> <!-- end col -->

                                <div class="col-xs-4">
                                    <div class="num">
                                        <div class="num-content">
                                            41,000 <span>lorem</span>
                                        </div> <!-- num content -->

                                    </div> <!-- end num -->

                                </div> <!-- end col -->

                                <div class="col-xs-4">
                                    <div class="num">
                                        <div class="num-content">
                                            41,000 <span>lorem</span>
                                        </div> <!-- num content -->
                                    </div> <!-- end num -->
                                </div> <!-- end col -->

                            </div> <!-- end row -->

                        </div> <!-- end col -->

                    </div> <!-- end row -->

                </div> <!-- end container -->

            </section> <!-- end instructor -->


            <!--==== Testimonial ====-->
            <section id="testimonial">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>

                            <div class="row testimonial">
                                <div class="col-sm-4">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/ben.png" alt="Ben">
                                </div>

                                <div class="col-sm-8">
                                    <blockquote>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        <cite>&mdash; Lorem ipsum dolor sit </cite>
                                    </blockquote>

                                </div>
                            </div> <!-- end row testimonial -->

                            <div class="row testimonial">
                                <div class="col-sm-4">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/ben.png" alt="Ben">
                                </div>

                                <div class="col-sm-8">
                                    <blockquote>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        <cite>&mdash; Lorem ipsum dolor sit </cite>
                                    </blockquote>

                                </div>
                            </div> <!-- end row testimonial -->

                            <div class="row testimonial">
                                <div class="col-sm-4">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/ben.png" alt="Ben">
                                </div>

                                <div class="col-sm-8">
                                    <blockquote>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        <cite>&mdash; Lorem ipsum dolor sit </cite>
                                    </blockquote>

                                </div>
                            </div> <!-- end row testimonial -->

                        </div> <!-- end sm8 -->

                    </div> <!-- end row -->

                </div><!-- end container -->

            </section> <!-- end testimonial -->

<?php get_footer();?>


