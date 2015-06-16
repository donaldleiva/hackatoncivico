<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Hackatón Cívico | Guatemala</title>
        <link href="web/css/bootstrap.css" rel='stylesheet' type='text/css' />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="web/js/jquery.min.js"></script>
         <!---- start-smoth-scrolling---->
        <script type="text/javascript" src="web/js/move-top.js"></script>
        <script type="text/javascript" src="web/js/easing.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                });
            });
        </script>
         <!---- start-smoth-scrolling---->
         <!-- Custom Theme files -->
        <link href="web/css/style.css" rel='stylesheet' type='text/css' />
            <!-- Custom Theme files -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        </script>
        <!----webfonts--->
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
        <!---//webfonts--->
        <!----start-top-nav-script---->
        <script>
            $(function() {
                var pull 		= $('#pull');
                    menu 		= $('nav ul');
                    menuHeight	= menu.height();
                $(pull).on('click', function(e) {
                    e.preventDefault();
                    menu.slideToggle();
                });
                $(window).resize(function(){
                    var w = $(window).width();
                    if(w > 320 && menu.is(':hidden')) {
                        menu.removeAttr('style');
                    }
                });
            });
        </script>
        <!----//End-top-nav-script---->
    </head>
    <body>
        <!----- start-header---->
            <div id="home" class="header">
                    <div class="top-header bounceInDown" data-wow-delay="0.4s">
                        <div class="container">
                        <div class="logo">
                            <a href="#"><img src="web/images/logo.png" height="75px"></a>
                        </div>
                        <!----start-top-nav---->
                         <nav class="top-nav">
                            <ul class="top-nav">
                                <li class="active"><a href="#home" class="scroll">Inicio</a></li>
                                <li><a href="#about" class="scroll">&#191;Qui&eacute;nes Somos?</a></li>
                                <li class="team-active"><a href="#contact" class="scroll">Invol&uacute;crate</a></li>
                            </ul>
                            <a href="#" id="pull"><img src="web/images/nav-icon.png" title="menu" /></a>
                        </nav>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
        <!----- //End-header---->
        <!----start-slider-script---->
            <script src="web/js/responsiveslides.min.js"></script>
             <script>
                // You can also use "$(window).load(function() {"
                $(function () {
                  // Slideshow 4
                  $("#slider4").responsiveSlides({
                    auto: true,
                    pager: true,
                    nav: true,
                    speed: 500,
                    namespace: "callbacks",
                    before: function () {
                      $('.events').append("<li>before event fired.</li>");
                    },
                    after: function () {
                      $('.events').append("<li>after event fired.</li>");
                    }
                  });

                });
              </script>
            <!----//End-slider-script---->
            <!-- Slideshow 4 -->
                <div  id="top" class="callbacks_container">
                  <ul class="rslides" id="slider4">
                    <li>
                      <img src="web/images/protesta.jpg" alt="">
                      <div class="caption bounceInDown" data-wow-delay="0.4s">
                          <div class="slide-text-info">
                              <center><img src="web/images/logo.png"></center>
                              <div class="slide-btns">
                                  <a class="startnow scroll btn" href="#contact">INVOL&Uacute;CRATE</a>
                              </div>
                          </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="clearfix"> </div>
            <!----- //End-slider---->
            <!---- top-grids ---->
            <div id="about" class="top-grids">
                <div class="container">
                    <div class="head-section text-center">
                        <h2>Quienes somos?</h2>
                        <p></p>
                    </div>
                    <div class="team-grids ">
                        <div class="col-md-12">
                            <div class="top-grid">

                                <div class="col-md-12">
                                    <?php while (have_posts()) : the_post(); ?>
                                       <?php get_template_part( 'content-aside', get_post_format() ); ?>
                                    <?php comments_template('',true); ?>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <!---- top-grids ---->
            <!---- works ---->

            <!---- skills --->

            <!---- contact ---->
            <div id="contact" class="contact works">
                <div class="container">
                    <div class="head-section text-center">
                            <h2>Involúcrate</h2>
                            <p></p>
                    </div>
                    <!---- contact-grids ---->
                    <div class="contact-grids">

                        <div class="contact-inner-info">
                            <!---- contact-form ---->
                            <div class="clearfix"> </div>
                            <!---- contact-form ---->
                        </div>
                    </div>
                    <!---- contact-grids ---->
                </div>
            </div>
            </div>
            <!---- contact ---->
            <div class="clearfix"> </div>
            <!--- footer ---->
            <div class="footer">
                <div class="container">
                    <div class="footer-grids">
                        <div class="col-md-4">
                            <div class="footer-grid">
                                <h3></h3>
                                <div class="whoare-u">
                                    <a class="footer-logo" href="#"><img src="web/images/logo.png" height="100px"></a>
                                    <p>Es apoyado por estas iniciativas</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="footer-grid">

                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="footer-grid">

                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="footer-grid">

                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            <!--- footer ---->

    </body>
</html>