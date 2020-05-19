<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Partner/Driver Registration</title>
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/css_animasi/app.css">


    <link href="<?php echo base_url() ?>asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/css/main.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/css/simple-sidebar.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/css/slider.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/css/responsive_new.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/css/responsive-slider.css" rel="stylesheet">



    <link rel="shortcut icon" href="http://csswrap.com/wp-content/uploads/2015/03/showmenu.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://csswrap.com/wp-content/uploads/2015/03/showmenu.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://csswrap.com/wp-content/uploads/2015/03/showmenu.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://csswrap.com/wp-content/uploads/2015/03/showmenu.png">
    <link rel="apple-touch-icon-precomposed" href="http://csswrap.com/wp-content/uploads/2015/03/showmenu.png">
</head>
<!--/head-->




<body class="toggled">
    <header id="header" role="banner">


        <div class="main-nav fixed-menu">
            <!--start header saat mobile version-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home"><img src="<?php echo base_url() ?>asset/images/logo_white.png" width="100%"></a>
            </div>
            <!--end header saat mobile version-->
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="<?php echo base_url() ?>index.php/c_utama/home">HOME</a></li>
                    <li><a href="#">Join</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Driver</a></li>

                </ul>
            </div>
        </div>



    </header>
    <!--/#header-->




    <div class="overlay"></div>




    <section id="detail-join" style="background: url('<?php echo base_url() ?>asset/images/pattern.png') repeat;">
        <div class="container ">
            <div class="row">

                <div id="judul">
                    <h2>Partner</h2>
                    <h4>REGISTER YOURSELF AS A DRIVER, PARTNER, OR BUSINESS PARTNER
                    </h4>

                </div>


                <div id="kotak-join" style="background: #fff">



                    <div class="col-md-4 col-xs-6" style="margin-top: 30px;">
                        <a href="<?php echo base_url() ?>frontend/index.php/c_utama/join_car">
                            <div class="judul_unggul">
                                </center>
                                <center><img class="img-responsive" src="<?php echo base_url() ?>/asset/images/join_page/icon/mcar.png" alt="member-1" style="width: 100%; max-width: 134px;">
                                    <h2 style="">MR-Cab</h2>
                            </div>
                        </a>
                    </div>


                    <div class="col-md-4 col-xs-6" style="margin-top: 30px;">
                        <a href="<?php echo base_url() ?>frontend/index.php/c_utama/join_ride">
                            <div class="judul_unggul">
                                </center>
                                <center><img class="img-responsive" src="<?php echo base_url() ?>asset/images/join_page/icon/mride.png" alt="member-1" style="width: 100%; max-width: 134px;">
                                    <h2>MR-Moto</h2>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4 col-xs-6" style="margin-top: 30px;">
                        <a href="<?php echo base_url() ?>frontend/index.php/c_utama/join_food">
                            <div class="judul_unggul text-center">
                                </center>
                                <center><img class="img-responsive" src="<?php echo base_url() ?>asset/images/join_page/icon/mfood.png" alt="member-1" style="width: 100%; max-width: 134px;">
                                    <h2>RESTAURANT</h2>
                            </div>
                        </a>
                    </div>

                    <!--<div class="col-md-3 col-xs-6" style="margin-top: 30px;">
                     <a href="<?php echo base_url() ?>frontend/index.php/c_utama/join_ride">
                    <div class="judul_unggul"></center>
                    <center><img class="img-responsive" src="<?php echo base_url() ?>asset/images/join_page/icon/msend.png" alt="member-1" style="width: 100%; max-width: 134px;">
                                <h2 >GoSend</h2>
                     </div>
                     </a>
             </div>

              <div class="col-md-3 col-xs-6" style="margin-top: 30px;">
                     <a href="<?php echo base_url() ?>frontend/index.php/c_utama/join_box">
                    <div class="judul_unggul"></center>
                    <center><img class="img-responsive" src="<?php echo base_url() ?>/asset/images/join_page/icon/mbox.png" alt="member-1" style="width: 100%; max-width: 134px;">
                                <h2 >GoBox</h2>
                     </div>
                     </a>
             </div>

            <div class="col-md-3 col-xs-6" style="margin-top: 30px;">
                     <a href="<?php echo base_url() ?>frontend/index.php/c_utama/join_ride">
                    <div class="judul_unggul"></center>
                    <center><img class="img-responsive" src="<?php echo base_url() ?>/asset/images/join_page/icon/mstore.png" alt="member-1" style="width: 100%; max-width: 134px;">
                                <h2 >GoMart</h2>
                     </div>
                     </a>
             </div>


            <div class="col-md-3 col-xs-6" style="margin-top: 30px;">
                     <a href="<?php echo base_url() ?>frontend/index.php/c_utama/join_massage">
                    <div class="judul_unggul"></center>
                    <center><img class="img-responsive" src="<?php echo base_url() ?>/asset/images/join_page/icon/mmassage.png" alt="member-1" style="width: 100%; max-width: 134px;">
                                <h2 >GoMassage</h2>
                     </div>
                     </a>
             </div>


                   <div class="col-md-3 col-xs-6" style="margin-top: 30px;">
                     <a href="<?php echo base_url() ?>frontend/index.php/c_utama/join_service">
                    <div class="judul_unggul"></center>
                    <center><img class="img-responsive" src="<?php echo base_url() ?>asset/images/join_page/icon/mservice.png" alt="member-1" style="width: 100%; max-width: 134px;">
                                <h2 >GoService</h2>
                     </div>
                     </a>
             </div>-->




                </div>
            </div>
        </div>-->
    </section>

    <!--footer-->
    <footer class="wow fadeInUp animated" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: fadeInUp;">

        <div class="container">

            <div class="col-lg-4 col-md-4 col-sH-4 col-xs-12 brand_bottom">
                <h1 class="brand_name">

                    <a href="../"><img src="<?php echo base_url() ?>asset/images/logo_white.png" width="80%" style=""></a>
                </h1>

            </div>

            <div class="col-lg-4 col-md-4 col-sH-4 col-xs-12">
                <h4 class="brand_follow_us" style="margin-left:0px; margin-bottom:15px; letter-spacing:3px; margin-top: 30px;">Customer Service</h4>
                <ul class="customer">
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Term Of &amp; Services</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Call Center</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-4 col-sH-4 col-xs-12 text-center">
                <h4 class="brand_follow_us" style="margin-left:0px; margin-bottom:15px; letter-spacing:3px; margin-top: 30px;">Follow US</h4>

                <!-- <ul class="inline-list text-center">
                    <li><a class="fa fa-facebook" href="https://m.facebook.com/mrriderbd" target="_blank"></a></li>
                    <li><a class="fa fa-twitter" href="https://twitter.com/mrriderbd" target="_blank"></a></li>
                    <li><a class="fa fa-instagram" href="https://www.instagram.com/mrriderbd" target="_blank"></a></li>
                    <li><a style="font-size:40px;" class="fa fa-linkedin" href="https://www.linkedin.com/company/14058407" target="_blank"></a></li>

                </ul> -->
                <ul class="social-media">
                    <li>
                        <a href="https://m.facebook.com/mrriderbd/" target="_blank">
                            <i class="zmdi zmdi-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/mrriderbd" target="_blank">
                            <i class="zmdi zmdi-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/company/14058407" target="_blank">
                            <i class="zmdi zmdi-linkedin"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/mrriderbd/ " target="_blank">
                            <i class="zmdi zmdi-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>



        <script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>asset/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>asset/js/smoothscroll.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery.parallax.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>asset/js/coundown-timer.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery.scrollTo.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery.nav.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>asset/js/main.js"></script>


        <script>
            var trigger = $('.hamburger'),
                overlay = $('.overlay'),
                isClosed = false;

            trigger.click(function() {
                hamburger_cross();
            });

            function hamburger_cross() {

                if (isClosed == true) {
                    overlay.hide();
                    trigger.removeClass('is-open');
                    trigger.addClass('is-closed');
                    isClosed = false;
                } else {
                    overlay.show();
                    trigger.removeClass('is-closed');
                    trigger.addClass('is-open');
                    isClosed = true;
                }
            }
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        </script>





        <script type="text/javascript">
            /* copy loaded thumbnails into carousel */
            $('.row .thumbnail').on('load', function() {

            }).each(function(i) {
                if (this.complete) {
                    var item = $('<div class="item"></div>');
                    var itemDiv = $(this).parents('div');
                    var title = $(this).parent('a').attr("title");

                    item.attr("title", title);
                    $(itemDiv.html()).appendTo(item);
                    item.appendTo('.carousel-inner');
                    if (i == 0) { // set first item active
                        item.addClass('active');
                    }
                }
            });

            /* activate the carousel */
            $('#modalCarousel').carousel({
                interval: false
            });

            /* change modal title when slide changes */
            $('#modalCarousel').on('slid.bs.carousel', function() {
                $('.modal-title').html($(this).find('.active').attr("title"));
            })

            /* when clicking a thumbnail */
            $('.row .thumbnail').click(function() {
                var idx = $(this).parents('div').index();
                var id = parseInt(idx);
                $('#myModal').modal('show'); // show the modal
                $('#modalCarousel').carousel(id); // slide carousel to selected

            });
        </script>


</body>

</html>