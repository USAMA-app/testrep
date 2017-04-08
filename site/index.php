<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />

    <link rel="icon" type="image/png" href="favicon.png" />
    <link rel="stylesheet" type="text/css" href="css/combined.css">

    <!-- jQuery JS 3.1.0 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <script type="text/javascript" src="js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>

    <title>Ultimate Logo</title>
</head>

<body>

    <div id="wrap">

        <div class="header">
            <div class="container">
                <div class="header_left">
                    <div class="logo">
                        <a href="index.php"><img src="images/logo.png" alt="logoultimate" /></a>
                    </div>
                </div>
                <div class="header_right">
                    <div class="head_top">
                        <ul>
                            <li>
                                <a href="logoultimate.html"><i class="fa fa-user" aria-hidden="true"></i> My Account</a>
                            </li>
                            <li>
                                <i class="fa fa-phone" aria-hidden="true"></i> Toll Free (123) 456 7890
                            </li>
                            <li>
                                <i class="fa fa-envelope-o" aria-hidden="true"></i> support@logoultimate.com
                            </li>
                            <li>
                                <i class="fa fa-commenting-o" aria-hidden="true"></i> Live Chat
                            </li>
                        </ul>
                    </div>
                    <div class="navigation">
                        <ul>
                            <li><a href="index.php">Logo Design</a></li>
                            <li><a href="Webdesign.html">Web Design</a></li>
                            <li><a href="#">Brochure Design</a></li>
                            <li><a href="videoVoice.html">Video &amp; Voice Over</a></li>
                            <li><a href="appdev.html">App Development</a></li>
                            <li><a href="Portfolio.html">Portfolio</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

        <div class="container">

            <div class="s_form_toggle">
                <div class="toggle_icon">
                    <i class="fa fa-angle-double-down" aria-hidden="true"></i>
                </div>
                <div class="toggle_txt">
                    ACTIVATE YOUR LOGO COUPON
                </div>
            </div>
            <div class="signup_form_box">
                <div class="signup_head">
                    SIGN UP NOW &amp; <br /> RESERVE YOUR DISCOUNT
                </div>
                <div class="clear"></div>
                <form action="Actions/PerData.php" method="POST">
                    <!--Form-->
                    <div class="signup_form">
                        <div class="signup_form_grp">
                            <div class="signup_form_field">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <input type="text" name="cn" placeholder="Name">
                            </div>
                        </div>
                        <div class="signup_form_grp">
                            <div class="signup_form_field">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <input type="text" name="em" placeholder="Email Address">
                            </div>
                        </div>

                        <div class="signup_form_grp">
                            <div class="signup_form_field">
                                <i class="fa fa-phone-square" aria-hidden="true"></i>
                                <input type="text" name="pn" placeholder="Phone Number">
                            </div>
                        </div>

                        <div class="signup_form_grp">
                            <div class="signup_form_field">
                                <i class="fa fa-comments" aria-hidden="true"></i>
                                <textarea type="text" rows="5" name="msg" placeholder="Message"></textarea>
                            </div>
                        </div>


                        <div class="signup_form_grp">
                            <div class="signup_form_btn">
                                <button type="submit">Submit</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
        <div class="slider">
            <div class="tp-banner-container">
                <div class="tp-banner">
                    <ul>
                        <li data-transition="zoomout" data-slotamount="7" data-masterspeed="1500">                            
                            <div class="fluid-ratio-resize imgBanner"></div>
                        </li>
                        <li data-transition="zoomout" data-slotamount="7" data-masterspeed="1000">
                            <div class="fluid-ratio-resize imgBanner2"></div>
                        </li>
                    </ul>
                    <div class="tp-bannertimer"></div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            
                var revapi;
                revapi = jQuery('.tp-banner').revolution({
                    autoPlay: false,
                    delay: 9000,
                    startwidth: 1170,
                    startheight: 546,
                    hideThumbs: 2,
                    fullWidth: "on",
                    forceFullWidth: "on",
                    //fullScreen:"on",
                    //fullScreenOffsetContainer: "#header, #footer"
                });
        
        </script>

        <div class="banner-section">
            <div class="why-we-are">
                <div class="wrapper">
                    <ul>
                        <li class="icon-1">100% Satisfaction<br /> Guarantee
                        </li>
                        <li class="icon-2">Unique Design<br /> Guarantee
                        </li>
                        <li class="icon-3">Unlimited<br /> Revisions
                        </li>
                        <li class="icon-4">Award Winning<br /> Designers
                        </li>
                        <li class="icon-5">24/7 Design<br /> Consultancy
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container-fluid boxS">

            <div class="cycle-slideshow container" data-cycle-fx="scrollVert" data-cycle-speed="1500" data-cycle-log="false" data-easing="easeInOutExpo"
                data-cycle-timeout="2000" data-cycle-pause-on-hover="false" style="position: relative; overflow: hidden;">
                <img class="lazy img-responsive cycle-slide" src="images/stats.jpg" width="1170" height="114" style="position: absolute; top: 114px; left: 0px; z-index: 99; opacity: 1; display: block; visibility: hidden;">
                <img class="lazy img-responsive cycle-slide cycle-slide-active" src="images/brands.png" width="1170" height="114" style="position: absolute; top: 0px; left: 0px; z-index: 98; visibility: visible; opacity: 1; display: block;">
                <img class="lazy img-responsive cycle-slide" src="images/bannerimage.jpg" width="1170" height="114" style="position: absolute; top: 114px; left: 0px; z-index: 97; visibility: hidden; opacity: 1; display: block;">
            </div>

        </div>

        <div class="clear"></div>
        

        <div class="container">

            <div class="heading">
                Our Services
            </div>

<div id="team-wrapper" class="clearfix hideme" style="opacity: 1;">
                <div id="team-pic-wrapper" class="clearfix">
                    <a class="showSingle" target="1">
                        <div class="team-pic team-pic-active">
                            <div class="team-pic1 team-pic-active team-pic1-active"></div>
                            Logo Design<i class="arrow-active"></i></div>
                    </a>
                    <a class="showSingle" target="2">
                        <div class="team-pic">
                            <div class="team-pic1 team-pic2 team-pic-active"></div>
                            print Design<i class=""></i></div>
                    </a>
                    <a class="showSingle" target="3">
                        <div class="team-pic">
                            <div class="team-pic1 team-pic3 team-pic-active"></div>
                            Website Design<i class=""></i></div>
                    </a>
                    <a class="showSingle" target="4">
                        <div class="team-pic">
                            <div class="team-pic1 team-pic4 team-pic-active"></div>
                            mobile apps<i class=""></i></div>
                    </a>
                    <a class="showSingle" target="5">
                        <div class="team-pic">
                            <div class="team-pic1 team-pic5 team-pic-active"></div>
                            animation<i class=""></i></div>
                    </a>
                </div>
                <div id="team-details-wrapper">
                    <div id="div1" class="team-details targetDiv">
                        <h2>Custom Logo Design</h2>
                        <div class="team-details-left">
                            <p>Explore different types of logos to express a literal or an abstract representation of your business,
                                Logojeeves works with you to render intelligent, fresh and new-age logos that become the
                                face of your business.</p>
                            <ul>
                                <li class="first">Iconic Logo Design</li>
                                <li>Logotype/Wood mark Logo Design</li>
                                <li>Illustrative Logo Design </li>
                                <li class="last">3D Logo Design</li>
                            </ul>
                            <ul>
                                <li class="first">Abstract Logo Design</li>
                                <li> Abstract Logo Design</li>
                                <li class="last">Realistic Logo Design</li>
                            </ul>
                            <div class="clearfix"> <i><img src="images/sticker1.png" alt="">100% Original Design</i> <i><img src="images/sticker2.png" alt="">Best Design Award</i>                                <i><img src="images/sticker3.png" alt="">Moneyback Guarantee</i> </div>
                        </div>
                        <div class="team-details-right"> <img src="images/slider-logo1.png" alt=""> <a href="#_">VIEW PRICING</a> </div>
                    </div>
                    <div id="div2" class="team-details targetDiv" style="display: none;">
                        <h2>Custom Print Design</h2>
                        <div class="team-details-left">
                            <p>Choose from a wide range of templates that logojeeves provides for easy of initiation of your
                                print designs, Logo Jeeves will also help you formulate new design ideas to insure your satisfaction.</p>
                            <ul>
                                <li class="first">Business Card Design</li>
                                <li>Letterhead Design</li>
                                <li class="last">Brochure Design</li>
                            </ul>
                            <ul>
                                <li class="first">Flyer Design</li>
                                <li>Label Design</li>
                                <li class="last">Package Design</li>
                            </ul>
                            <div class="clearfix"> <i><img src="images/sticker1.png" alt="">100% Original Design</i> <i><img src="images/sticker2.png" alt="">Best Design Award</i>                                <i><img src="images/sticker3.png" alt="">Moneyback Guarantee</i> </div>
                        </div>
                        <div class="team-details-right"> <img src="images/slider-logo2.png" alt=""> <a href="#_">VIEW PRICING</a> </div>
                    </div>
                    <div id="div3" class="team-details targetDiv" style="display: none;">
                        <h2>Custom Website Design</h2>
                        <div class="team-details-left">
                            <p>At logojeeves website designing is done by some of the brightest most creative minds, We regularly
                                conduct market research and keep ourselves updated with the lastest trends in website design.
                            </p>
                            <ul>
                                <li class="first">E-Commerce Website</li>
                                <li>CMS Website</li>
                                <li>Responsive Website</li>
                                <li class="last">B2B Portal</li>
                            </ul>
                            <ul>
                                <li class="first">Parallax Website</li>
                                <li>Flat Design Website</li>
                                <li class="last">Corporate Website</li>
                            </ul>
                            <div class="clearfix"> <i><img src="images/sticker1.png" alt="">100% Original Design</i> <i><img src="images/sticker2.png" alt="">Best Design Award</i>                                <i><img src="images/sticker3.png" alt="">Moneyback Guarantee</i> </div>
                        </div>
                        <div class="team-details-right"> <img src="images/slider-logo3.png" alt=""> <a href="#_">VIEW PRICING</a> </div>
                    </div>
                    <div id="div4" class="team-details targetDiv" style="display: none;">
                        <h2>Mobile Apps</h2>
                        <div class="team-details-left">
                            <p>Get your very own app designed today. Not everyone has the expertise or the creativity to design
                                an app, built specifically for a customer’s requirement. At Logojeeves we help you interact
                                with your customer in a responsive manner through an iOS and Andriod App.</p>
                            <ul>
                                <li class="first">Native Apps</li>
                                <li class="last">Mobile Web Apps</li>
                            </ul>
                            <ul>
                                <li class="first last">Hybrid Apps</li>
                            </ul>
                            <div class="clearfix"> <i><img src="images/sticker1.png" alt="">100% Original Design</i> <i><img src="images/sticker2.png" alt="">Best Design Award</i>                                <i><img src="images/sticker3.png" alt="">Moneyback Guarantee</i> </div>
                        </div>
                        <div class="team-details-right"> <img src="images/slider-logo4.png" alt=""> <a href="#_">VIEW PRICING</a> </div>
                    </div>
                    <div id="div5" class="team-details targetDiv" style="display: none;">
                        <h2>Animation</h2>
                        <div class="team-details-left">
                            <p>The Experts at Logojeeves have a keen mind towards detailing, Using Traditional and New-Age methods,
                                we develop relevant material and content for your business. </p>
                            <ul>
                                <li class="first">Whiteboard Animation</li>
                                <li>2D Animation</li>
                                <li>Typography Animation</li>
                                <li class="last">Motion Graphics Animation</li>
                            </ul>
                            <ul>
                                <li class="first">Screen-Cast Animation</li>
                                <li>Cutout Animation</li>
                                <li class="last">Cartoon Animation</li>
                            </ul>
                            <div class="clearfix"> <i><img src="images/sticker1.png" alt="">100% Original Design</i> <i><img src="images/sticker2.png" alt="">Best Design Award</i>                                <i><img src="images/sticker3.png" alt="">Moneyback Guarantee</i> </div>
                        </div>
                        <div class="team-details-right"> <img src="images/slider-logo5.png" alt=""> <a href="#_">VIEW PRICING</a> </div>
                    </div>
                </div>
            </div>

            <script type="text/javascript">
                    $(document).ready(function() {
                        $('.showSingle').click(function(){
                            $('.targetDiv').hide(0);
                            $("#div"+$(this).attr('target')+"").show(0);
                            $(".showSingle").each(function(index, element) {
                                $(".showSingle >div").removeClass("team-pic-active");
                                $(".showSingle >div>div").removeClass("team-pic1-active");
                                $(".showSingle >div>i").removeClass("arrow-active");
                            });
                            $(this).find("div").addClass("team-pic-active");
                            $(this).find("div").children("div").addClass("team-pic1-active");
                            $(this).find("div").children("i").addClass("arrow-active");
                        });
                        $(".team-pic").bind("mouseover, mouseenter", function () {
                            $(this).addClass("team-pic-hover");
                            $(this).children("div").addClass("team-pic1-hover");
                            $(this).children("i").addClass("arrow-hover");
                        }).bind("mouseout, mouseleave", function () {
                            $(this).removeClass("team-pic-hover");
                            $(this).children("div").removeClass("team-pic1-hover");
                            $(this).children("i").removeClass("arrow-hover");	
                        });
                    });
                </script>

        </div>

        <div class="home-boxes">
            <div class="single-box wow slideInLeft">
                <img width="102" height="102" src="images/box1.jpg" class="attachment-post-thumbnail size-post-thumbnail colorbox-25  wp-post-image"
                    alt="box1" />
                <h6 class="h6head">
                    Immaculate Design </h6>
                <div class="box-desc">
                    <p class="ullineh font14">We have created some of the most appealing and eye-catching websites, our optimized designs deliver a
                        remarkable increase in the quality of user experience. We don’t have a one size fits all approach,
                        we treat every client individually and design a unique strategy based on our client’s business model,
                        goals and achievements.</p>
                </div>
                <a href="#" class="link-button"><span>LEARN MORE</span></a> </div>
            <div class="single-box wow slideInRight">
                <img width="102" height="102" src="images/box2.jpg" class="attachment-post-thumbnail size-post-thumbnail colorbox-27  wp-post-image"
                    alt="box2" />
                <h6  class="h6head">
                    Award Winning Designers </h6>
                <div class="box-desc">
                    <p class="ullineh font14">We are a friendly bunch. We assure you that you will find our team professional and understanding. We
                        are committed to providing you a great service, one that you will remember. We will keep you in the
                        loop throughout the process and we will be here from the beginning till the end to support you.</p>
                </div>
                <a href="#" class="link-button"><span>LEARN MORE</span></a> </div>
            <div class="single-box wow slideInLeft">
                <img width="102" height="102" src="images/box3.jpg" class="attachment-post-thumbnail size-post-thumbnail colorbox-28  wp-post-image"
                    alt="box3" />
                <h6  class="h6head">
                    Guaranteed Satisfaction </h6>
                <div class="box-desc">
                    <p class="ullineh font14">We want you to love our product as much as we do. If not, then we will work together till you get the
                        design you love. Our team of expert designers work around your provided guidelines to churn out designs
                        that give life to your ideas. We ensure 100% client satisfaction and won&#8217;t have it any other
                        way.
                    </p>
                </div>
                <a href="#" class="link-button"><span>LEARN MORE</span></a> </div>
        </div>

        <!-- Features start -->



        <div class="clear"></div>

        <div class="portfolio_section">
            <div class="portfolio_bg">
                <div class="containers">
                    <article class="contentArea graybg" style="padding:50px 0;">
                        <section class="tabstyle2">
                            <div class="">
                                <h3 class="seperator-white">PORTFOLIO<span></span></h3>
                                <p class="center cwhite">OUR BEST LOGO DESIGN SERVICE TRANSFORMS YOUR BRAND INTO REVENUE GENERATING BUSINESSES!</p>
                            </div>
                            <br/>
                            <div id='tab1' class="tabs-content">
                                <div class="owl-carousel-logo">
                                    <div class="box-portfolio">
                                        <a href="javascript:;" class="item"><img src="images/logo/1.jpg" /></a>
                                        <a href="javascript:;" class="item"><img src="images/logo/10.jpg" /></a>
                                    </div>
                                    <div class="box-portfolio">
                                        <a href="javascript:;" class="item"><img src="images/logo/18.jpg" /></a>
                                        <a href="javascript:;" class="item"><img src="images/logo/11.jpg" /></a>
                                    </div>
                                    <div class="box-portfolio">
                                        <a href="javascript:;" class="item"><img src="images/logo/3.jpg" /></a>
                                        <a href="javascript:;" class="item"><img src="images/logo/12.jpg" /></a>
                                    </div>
                                    <div class="box-portfolio">
                                        <a href="javascript:;" class="item"><img src="images/logo/4.jpg" /></a>
                                        <a href="javascript:;" class="item"><img src="images/logo/13.jpg" /></a>
                                    </div>
                                    <div class="box-portfolio">
                                        <a href="javascript:;" class="item"><img src="images/logo/5.jpg" /></a>
                                        <a href="javascript:;" class="item"><img src="images/logo/14.jpg" /></a>
                                    </div>
                                    <div class="box-portfolio">
                                        <a href="javascript:;" class="item"><img src="images/logo/6.jpg" /></a>
                                        <a href="javascript:;" class="item"><img src="images/logo/15.jpg" /></a>
                                    </div>
                                    <div class="box-portfolio">
                                        <a href="javascript:;" class="item"><img src="images/logo/7.jpg" /></a>
                                        <a href="javascript:;" class="item"><img src="images/logo/16.jpg" /></a>
                                    </div>
                                    <div class="box-portfolio">
                                        <a href="javascript:;" class="item"><img src="images/logo/8.jpg" /></a>
                                        <a href="javascript:;" class="item"><img src="images/logo/17.jpg" /></a>
                                    </div>
                                    <div class="box-portfolio">
                                        <a href="javascript:;" class="item"><img src="images/logo/9.jpg" /></a>
                                        <a href="javascript:;" class="item"><img src="images/logo/18.jpg" /></a>
                                    </div>
                                </div>

                                <div class="clr"></div>
                            </div>

                            <div class="textcen"><a href="#" class="link-button "><span>View All Portfolio</span></a></div>

                            <script src="js/jquery.js"></script>

                            <script src="carousel/owl.carousel.js"></script>
                            <script src="js/scripts.js"></script>

                            <div class="clr"></div>
                        </section>
                    </article>
                </div>
            </div>
        </div>


        <div class="clear"></div>

        <article class="contentArea newbox hiw container">
            <section class="wrap">
                <h3 class="seperator-yellow">Our Process<span></span></h3>
                <p class="center">A Well Defined Branding Process Leading to A PROFESSIONAL LOGO DESIGN</p>
                <ul class="howitworks">
                    <li class="sec1">
                        <i class="icon-orderplace"></i>
                        <h6>PLACEMENT</h6>
                        <p>Fill out our simple and secure order form<br>with your business and design specification<br>for your
                            corporate logo design and<br>choose the package that suits<br>to your needs. Confirm your order
                            by
                            <br>paying the due amount to start the
                            <br>logo design process.</p>
                    </li>
                    <li class="sec2">
                        <i class="icon-designcreation"></i>
                        <h6>DESIGN CREATION</h6>
                        <p>Whether a corporate logo design or a business logo design, Logo designers are assigned to your project
                            according to the package chosen and your industry needs. Work on your logo concepts is started
                            immediately. </p>
                    </li>
                    <li class="sec3">
                        <i class="icon-revision"></i>
                        <h6>REVISIONS</h6>
                        <p>Within due deadline, your design samples<br>are uploaded in your designated account<br>area and being
                            the best logo design
                            <br>company, your assigned account manager<br>will present the logo design concepts to you.<br>Select
                            the best logo design that<br>best fit your needs or get revision<br>on the closest sample.</p>
                    </li>
                    <li class="noarrow">
                        <i class="icon-delivery"></i>
                        <h6>DELIVERY</h6>
                        <p>Once chosen, you will be delivered<br>with all the industry standard<br>file formats. Further, our
                            after-sales
                            <br>support will be available to guide<br>you with any assistance<br>you require.</p>
                    </li>
                </ul>
            </section>
        </article>






        <div class="container">
            <div class="heading">
                Our Pricing
            </div>
            <div class="sub_text">
                Here at logoultimate, we make sure that our clients get the best logo designs at an affordable cost. The purpose, prospects,
                and benefits for any business depend on attractive marketing strategy and their unique business logo designs
                online.
            </div>

            <div class="container">

                <div class='wrapper3'>
                    <div class='package'>
                        <div class='name'>LITE</div>
                        <div class='price'><span>$98</span> $49</div>
                        <div class='trial'>100% Money Back Guarantee</div>
                        <hr>
                        <ul>
                            <li class="liC">Unlimited Logo Design Concepts</li>
                            <li class="liC">Unlimited Rounds of Revisions</li>
                            <li class="liC">Free Email Signature</li>
                            <li class="liC">Free Icon Design</li>
                            <li class="liC">Free Grey Scale Variation</li>
                            <li class="liC">8 Dedicated Logo Designers</li>
                            <li class="liC">24-48 Hours Turn Around Time</li><br/>
                            <li><strong class="PckgHeading">COMPLIMENTARY</strong></li>
                            <li class="liC ullineh">Stationary Design (Business &nbsp;&nbsp;&nbsp;&nbsp;Card, Letter Head, Envelope)</li>

                            <li class="textcen"><a href="LogReg.php?Pkg=lite" class="link-button"><span>ORDER NOW &nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>

                        </ul>
                    </div>
                    <div class='package'>
                        <div class='name'>STANDARD</div>
                        <div class='price'><span>$138</span> $69</div>
                        <div class='trial'>100% Money Back Guarantee</div>
                        <hr>
                        <ul>
                            <li class="liC">Unlimited Logo Design Concepts</li>
                            <li class="liC">Unlimited Rounds of Revisions</li>
                            <li class="liC">Free Email Signature</li>
                            <li class="liC">Free Icon Design</li>
                            <li class="liC">Free Grey Scale Variation</li>
                            <li class="liC">8 Dedicated Logo Designers</li>
                            <li class="liC">24-48 Hours Turn Around Time</li><br/>
                            <li><strong class="PckgHeading">COMPLIMENTARY</strong></li>
                            <li class="liC ullineh">Stationary Design (Business &nbsp;&nbsp;&nbsp;&nbsp;Card, Letter Head, Envelope)</li>
                             <li class="textcen"><a href="LogReg.php?Pkg=standard" class="link-button"><span>ORDER NOW &nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>
                        </ul>
                    </div>
                    <div class='package brilliant'>
                        <div class='name'>BUSINESS</div>
                        <div class='price'><span>$190</span> $95</div>
                        <div class='trial'>100% Money Back Guarantee</div>
                        <hr>
                        <ul>
                            <li class="liC">Unlimited Logo Design Concepts</li>
                            <li class="liC">Unlimited Rounds of Revisions</li>
                            <li class="liC">Free Email Signature</li>
                            <li class="liC">Free Icon Design</li>
                            <li class="liC">Free Grey Scale Variation</li>
                            <li class="liC">8 Dedicated Logo Designers</li>
                            <li class="liC">24-48 Hours Turn Around Time</li><br/>
                            <li><strong class="PckgHeading">COMPLIMENTARY</strong></li>
                            <li class="liC ullineh">Stationary Design (Business &nbsp;&nbsp;&nbsp;&nbsp;Card, Letter Head, Envelope)</li>
                             <li class="textcen"><a href="LogReg.php?Pkg=business" class="link-button"><span>ORDER NOW &nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>
                        </ul>
                    </div>
                    <div class='package'>
                        <div class='name'>ILLUSTRATION</div>
                        <div class='price'><span>$350</span> $175</div>
                        <div class='trial'>100% Money Back Guarantee</div>
                        <hr>
                        <ul>
                            <li class="liC">Unlimited Logo Design Concepts</li>
                            <li class="liC">Unlimited Rounds of Revisions</li>
                            <li class="liC">Free Email Signature</li>
                            <li class="liC">Free Icon Design</li>
                            <li class="liC">Free Grey Scale Variation</li>
                            <li class="liC">8 Dedicated Logo Designers</li>
                            <li class="liC">24-48 Hours Turn Around Time</li><br/>
                            <li><strong class="PckgHeading">COMPLIMENTARY</strong></li>
                            <li class="liC ullineh">Stationary Design (Business &nbsp;&nbsp;&nbsp;&nbsp;Card, Letter Head, Envelope)</li>
                             <li class="textcen"><a href="LogRed.php?Pkg=illustration" class="link-button"><span>ORDER NOW &nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>


        <div class="clear"></div>


        <div class="home-clients-section">
            <div class="section-title">
                <h4>What Our Clients Say</h4>
                <h6>See what our customers have to say about our remarkable design services</h6>
            </div>
            <div id="s4">

                <div class='single-client-row'>
                    <div class="single-home-client">
                        <div class="client-thumb">
                            <img width="90" height="90" src="images/Edward-M.Westerman-90x90.jpg" class="attachment-testi-thumb size-testi-thumb colorbox-555  wp-post-image"
                                alt="Edward M.Westerman" /> </div>
                        <div class="client-desc">
                            <div class="client-desc-content">
                                I am satisfied with the organized and clean layout of my webpage. All my queries were dealt with perfectly and communication
                                was excellent.
                                <div class="review"><em><span style="width:100%"></span></em></div>
                            </div>
                            <a href="javascript:;">          Edward Westerman          </a> </div>
                    </div>
                    <div class="single-home-client">
                        <div class="client-thumb">
                            <img width="90" height="90" src="images/Jose-D.-Jenkins.-90x90.jpg" class="attachment-testi-thumb size-testi-thumb colorbox-554  wp-post-image"
                                alt="Jose D. Jenkins." /> </div>
                        <div class="client-desc">
                            <div class="client-desc-content">
                                I had an absolute blast working with Ultimate Logo Design. Everyone from my account manager to the designer was fantastic
                                and very thorough.
                                <div class="review"><em><span style="width:100%"></span></em></div>
                            </div>
                            <a href="javascript:;">          Jose Jenkins          </a> </div>
                    </div>
                </div>
            </div>

            <div style="text-align:center; padding:20px 0 0 0; "><a class="link-button" href="#"><span>View All Reviews</span></a></div>
        </div>


        <div class="container">
            <div class="package-features">
                <h4>Logo Design Features</h4>
                <div>
                    <div class="single-package-feature wow rubberBand masterTooltip animated" style="visibility: visible; animation-name: rubberBand;"
                        title="We offer unlimited revisions to ensure 100% Customer Satisfaction."><img alt="Ultimate Logo Design" src="images/feature1.png" width="58" height="46">
                        <h5>100% Satisfaction Guarantee</h5>
                    </div>
                    <div class="single-package-feature wow slideInRight masterTooltip animated" style="visibility: visible; animation-name: slideInRight;"
                        title="We offer continuous support to our customers throughout the year even on holidays."><img alt="Ultimate Logo Design" src="images/feature2.png" width="58" height="46">
                        <h5>24 X 7 Customer Support</h5>
                    </div>
                    <div class="single-package-feature wow rubberBand masterTooltip animated" style="visibility: visible; animation-name: rubberBand;"
                        title="Our Customers enjoy 100% Ownership rights on their designs."><img alt="Ultimate Logo Design" src="images/feature3.png" width="58" height="46">
                        <h5>100% Ownership Rights</h5>
                    </div>
                    <div class="single-package-feature wow slideInLeft masterTooltip animated" style="visibility: visible; animation-name: slideInLeft;"
                        title="We are so confident of our quality unique designs that we offer money back guarantee to our customers."><img alt="Ultimate Logo Design" src="images/feature4.png" width="58" height="46">
                        <h5>Money Back Guarantee</h5>
                    </div>
                    <div class="single-package-feature wow rubberBand masterTooltip animated" title="Our experienced designers have the specific knowledge of all industries."
                        style="visibility: visible; animation-name: rubberBand;"><img alt="Ultimate Logo Design" src="images/feature5.png" width="58" height="46">
                        <h5>Industry Specific Designers</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-contact-section">
            <div class="contact-desc">
                <h6>Discuss with Our Experts &amp; Choose the Best Package for Your Business</h6>
            </div>
            <div class="contact-toll-free"><span class="icon"></span>
                <h5>Call Toll Free</h5>
                <h4>
                    <a href="tel:+1 650 822 8574"><img src="images/middlecall.jpg"></a>
                </h4>
            </div>
            <div class="contact-chat"><span class="icon"></span>
                <h5>Need Help?</h5>
                <h4><a href="javascript:;" class="startchat">Live Chat</a></h4>
            </div>
            <div class="contact-email"><span class="icon"></span>
                <h5>Need Help?</h5>
                <h4><a href="mailto:care@pixelslogodesign.com">Email Us</a></h4>
            </div>
        </div>


        <div class="home-featured-area desktopawards">

            <div class="section-title">

                <h4>Awards &amp; Recognitions</h4>

                <h6>We've been Honored &amp; Recognized for our Outstanding Achievements in the Industry</h6>

            </div>

            <div class="home-brands">

                <img src="images/pldaward.png" width="142" height="90" />

                <img src="images/pldaward2.png" width="142" height="90" />

                <img src="images/pldaward3.png" width="142" height="90" />

                <img src="images/pldaward4.png" width="142" height="90" />

                <img src="images/pldaward5.png" width="142" height="90" />

                <img src="images/pldaward6.png" width="142" height="90" />

            </div>

        </div>

        <div class="home-featured-area mobileawards">

            <div class="section-title">

                <h4>Awards &amp; Recognitions</h4>

                <h6>We've been Honored &amp; Recognized for our Outstanding Achievements in the Industry</h6>

            </div>

            <div class="mobileawards-container">

                <div class="home-brands1 swiper-wrapper">

                    <img src="images/pldaward.png" width="142" height="90" class="swiper-slide" />

                    <img src="images/pldaward2.png" width="142" height="90" class="swiper-slide" />

                    <img src="images/pldaward3.png" width="142" height="90" class="swiper-slide" />

                    <img src="images/pldaward4.png" width="142" height="90" class="swiper-slide" />

                    <img src="images/pldaward5.png" width="142" height="90" class="swiper-slide" />

                    <img src="images/pldaward6.png" width="142" height="90" class="swiper-slide" />

                </div>

            </div>

        </div>

        <div class="mobileonlydiscountform" style="display:none;">
            <h4>SIGN UP NOW &amp; RESERVE YOUR DISCOUNT</h4>
            <form class="signup jform validate" action="webpages/client/signup/designsignuprevamp.htm" method="get">

                <div class="your-name">
                    <input type="text" name="cn" class="required" placeholder="Your Name">
                </div>

                <div class="your-email">
                    <input type="text" name="em" class="required your-email email" placeholder="Your Email">
                </div>

                <div class="field pc">
                    <span class="fg1"></span>
                    <select class="countrylist newcountrylist" name="pc"><option>Select</option></select>
                </div>


                <div class="yourphonesection"> <span class="country-code">  <input type="text" name="code" class="wpcf7-form-control wpcf7-text discount-email" disabled></span>

                    <span class="your-phone"><input type="text" name="pn" class="big required" value="" placeholder="Phone Number" onkeypress="return numbersonly(this, event)" maxlength="11" ></span>
                </div>
                <div class="your-package">
                    <select name="pkc" class="discount-package required">
                                    <option value="">Select a Service</option>
                                    <option value="1268">Logo Design</option>
                                    <option value="1275">Website Design</option>
                                    <option value="1659">Mobile Apps Design</option>
                                    <option value="330">Stationery Design</option>
                                    <option value="430">Brochure Design</option>
                                    <option value="492">Banner Design</option>
                                    <option value="625">Animated Videos</option>
                                    </select>
                </div>


                <input type="hidden" name="ctry" value="">
                <input type="hidden" name="pkt" value="0">

                <input type="submit" value="Submit" />


            </form>
        </div>
        <div class="mobileonlyfooterlinks">
            <a href="#">Logo Designs</a>
            <a href="#">Websites</a>
            <a href="#">Portfolio</a>
            <a href="#">Reviews</a>
        </div>

        <div class="footer">
            <div class="footer-container">

                <div class="footer-left">
                    <div class="footer-logo"><img alt="Pixel Logo Design" src="images/logo.png" width="150" height="65" /></div>
                    <div class="footer-contact">
                        <span class="email"><span></span>Email: ultimate@godaddylogos.com</span>
                        <span class="phone"><span></span>Phone: &nbsp; <img src="images/pixelfootercall.jpg"></span>
                    </div>

                    <div class="footer-social">
                        <a href="#" target="_blank" class="facebook">Facebook</a>
                        <a href="#" target="_blank" class="youtube">Youtube</a>
                        <a href="#" target="_blank" class="twitter">Twitter</a>
                        <a href="#" target="_blank" class="linkedin">Linkedin</a>
                        <a href="#" class="google" target="_blank">Linkedin</a>
                    </div>

                </div>
                <div class="footer-right">
                    <div class="footer-menu">
                        <h4>Services</h4>
                        <div class="menu-footer-menu-container">
                            <ul id="menu-footer-menu" class="menu">
                                <li id="menu-item-77" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-77"><a href="index.php">Logo Design</a></li>
                                <li id="menu-item-78" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-78"><a href="videoVoice.html">Animated Videos</a></li>
                                <li id="menu-item-79" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-79"><a href="#">Stationery Design</a></li>
                                <li id="menu-item-80" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-80"><a href="#">Promo Items</a></li>
                                <li id="menu-item-82" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-82"><a href="Webdesign.html">Web Design</a></li>
                                <li id="menu-item-83" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-83"><a href="#">App &#038; Games</a></li>
                                <li id="menu-item-84" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-84"><a href="#">Brochure Design</a></li>
                                <li id="menu-item-85" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-85"><a href="#">Banner Design</a></li>
                                <li id="menu-item-86" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-86"><a href="#">Animated Logo</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="footer-menu">
                        <h4>More Links</h4>
                        <div class="menu-more-links-container">
                            <ul id="menu-more-links" class="menu">
                                <li id="menu-item-1122" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1122"><a href="#">About Us</a></li>
                                <li id="menu-item-87" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-87"><a href="#">Our Guarantees</a></li>
                                <li id="menu-item-89" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-89"><a href="#">Reviews</a></li>
                                <li id="menu-item-1157" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1157"><a href="#">In The Media</a></li>
                                <li id="menu-item-91" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-91"><a href="Portfolio.html">Portfolio</a></li>
                                <li id="menu-item-92" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-92"><a href="#">Our Blog</a></li>
                                <li id="menu-item-93" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-93"><a href="#">Sitemap</a></li>
                                <li id="menu-item-94" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-94"><a href="#">Privacy &#038; Security</a></li>
                                <li id="menu-item-95" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-95"><a href="contus.html">Contact Us</a></li>
                                <li id="menu-item-96" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-96"><a href="TermsCond.html">Terms of Use</a></li>
                                <li id="menu-item-823" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-823"><a href="#">FAQs</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="copy_rights">
            <div class="container">
                <p>&copy; Copyright 2016, Logo Ultimate All Right Reserved.</p>
            </div>
        </div>
    </div>

    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="https://use.fontawesome.com/7525bc10d1.js"></script>
    <script>
        $(document).ready(function() {
            $('.s_form_toggle').click(function() {
                $('.signup_form_box').toggleClass('active');
            });
        });
    </script>
    <!--Start of Tawk.to Script-->
    <!--<script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/58c2eab170cdfb0937fedb91/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>-->
    <!--End of Tawk.to Script-->


    <script>
        $(document).ready(function() {
            var logo_slider = $("#owl-demo");
            logo_slider.owlCarousel({
                autoPlay: 3000,
                items: 4,
                itemsDesktop: [1199, 3],
                itemsDesktopSmall: [979, 3],
                pagination: false
            });



            $(".next").click(function() {
                logo_slider.trigger('owl.next');
            });
            $(".prev").click(function() {
                logo_slider.trigger('owl.prev');
            });

            var testi_slider = $("#testimonials");
            testi_slider.owlCarousel({
                autoPlay: 3000,
                items: 1,
                itemsDesktop: [1199, 3],
                itemsDesktopSmall: [979, 3],
                pagination: false
            });

            $(".testi_next").click(function() {
                testi_slider.trigger('owl.next');
            });
            $(".testi_prev").click(function() {
                testi_slider.trigger('owl.prev');
            });

            jQuery('.skillbar').each(function() {
                jQuery(this).appear(function() {
                    jQuery(this).find('.count-bar').animate({
                        width: jQuery(this).attr('data-percent')
                    }, 2000);
                    var percent = jQuery(this).attr('data-percent');
                    jQuery(this).find('.skillbar_percent').html('<span>' + percent + '</span>');
                });
            });

        });

        $(window).scroll(function(event) {
            var windowheight = $(window).height();
            //alert(windowheight);
            var scroll = $(window).scrollTop();
            if (scroll >= windowheight) {
                $('.fixed_header').css({
                    "visibility": "visible",
                    "opacity": "1"
                });
            } else {
                $('.fixed_header').css({
                    "visibility": "hidden",
                    "opacity": "0"
                });
            }
        });
    </script>

    <script src="js/xlib.js"></script>

    <script src="https://use.fontawesome.com/7525bc10d1.js"></script>
</body>

</html>