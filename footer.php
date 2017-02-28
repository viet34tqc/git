<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_theme
 */

?>
 <!--==== Sign Up ====-->
    <section id="signup">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2>Lorem ipsum dolor sit amet.</h2>
                    <p><a href="#" class="btn btn-lg btn-block btn-success" title="">Sign me up!</a></p>
                </div>
            </div> <!-- end row -->

        </div> <!-- end container -->

    </section> <!-- end signup -->


</main>
	<!--====  /Main  ====-->

<!--============================
=            Footer            =
=============================-->

<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <p><a href="/" title=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt=""></a></p>
            </div>

            <div class="col-sm-6">
                <nav>
                    <ul class="list-inline">
                        <li><a href="">Home</a></li>
                        <li><a href="">Blog</a></li>
                        <li><a href="">Resource</a></li>
                        <li><a href="">Contact</a></li>
                        <li class="singup-link"><a href="">SignUp</a></li>
                    </ul>
                </nav> <!-- end nav -->

            </div> <!-- end col6 -->

            <div class="col-sm-3">
                <p class="pull-right">&copy; 2017-NguyenViet</p>
            </div>

        </div>
    </div>
</footer> <!-- end footer -->


<!--====  Modal  ====-->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><i class="fa fa-envelope"></i>Subsribe to our mailing </h4>
            </div>
            <div class="modal-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <form action="" method="POST" class="form-inline" role="form">

                    <div class="form-group">
                        <label class="sr-only" for="subscribe-name">Your first name</label>
                        <input type="text" class="form-control" id="subscribe-name" placeholder="Your name">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="subscribe-email">Your first email</label>
                        <input type="text" class="form-control" id="subscribe-email" placeholder="Your email">
                    </div>
                    <button type="submit" class="btn btn-danger">Subscribe</button>
                </form> <!-- end form -->

                <hr>

                <p><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</small></p>

            </div> <!-- end modal body -->
        </div>
    </div>
</div> <!-- end modal -->


<?php wp_footer();?>

</body>
</html>
