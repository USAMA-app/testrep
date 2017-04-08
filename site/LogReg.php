<?php 

session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>World's Leading custom logo design company</title>
    <meta name="keywords" content="logo design company, business logo designers, cheap logo designing, custom logo design, logo designer, affordable logo designs, logo design service, buy logo." />
    <meta name="description" content="Logoultimate is a leading logo and website design agency based in USA. Our logo designers and web designers build brands and websites for established and new start up businesses worldwide." />
    <link rel="icon" type="image/png" href="https://www.logoultimate.ml/assets/images/favicon.png" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="https://www.logoultimate.ml/css/ST.css">


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"/>

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"/>

</head>

<body class="homepage">
   
    <article>
   <div class="container">
            <div class="steps">
                <ul>
                    <li>
                        <span>1</span>
                        <div class="step_title">
                            Signup
                            <div class="step_count">Step one</div>
                        </div>
                    </li>
                    <li>
                        <span>2</span>
                        <div class="step_title">
                            PROJECT DETAILS
                            <div class="step_count">Step TWO</div>
                        </div>
                    </li>
                    <li>
                        <span>3</span>
                        <div class="step_title">
                            ORDER REVIEW
                            <div class="step_count">Step THREE</div>
                        </div>
                    </li>
                    <li class="last">
                        <span>4</span>
                        <div class="step_title">
                            SECURE PAYMENT
                            <div class="step_count">Step FOUR</div>
                        </div>
                    </li>
                </ul>
                <div style="clear:both;"></div>
            </div>
            <div id="briefForm">
                <div class="form_box">
                    <div class="form_heading">
                        <span>Registration</span>
                    </div>
                    <div style="clear:both;"></div>

                    <div class="form_content">
                        <div class="form">

                            <ul class="tab-group">
                                <li class="tab active"><a href="#signup">Sign Up</a></li>
                                <li class="tab"><a href="#login">Log In</a></li>
                            </ul>

                            <div class="tab-content">
                                <div id="signup">
                                    <h1>Sign Up for Free</h1>

                                    <!--SIGN UP-->

                                    <form method="POST" ID="fmreg">

                                        <div class="field-wrap">
                                            <label>Name<span class="req">*</span></label>
                                            <input type="text" name="MASTERName" required autocomplete="off" />
                                        </div>

                                        <div class="field-wrap">
                                            <label>Email Address<span class="req">*</span></label>
                                            <input type="text" name="MASTEREmail" required autocomplete="off" />
                                        </div>
                                        <div class="field-wrap">
                                            <label>Phone Number<span class="req">*</span></label>
                                            <input type="text" name="MASTERPhone" required autocomplete="off" />
                                        </div>

                                        <div class="field-wrap">
                                            <label>Message<span class="req">*</span></label>
                                            <input type="text" name="MESSAGE" required autocomplete="off" />
                                        </div>

                                        <input type="hidden" name="ROrderType" value="<?php if(isset($_GET['Pkg'])) {echo $_GET['Pkg'];} ?>" />

                                        <button type="submit" id="btnReg" class="button button-block" />Register</button>

                                    </form>

                                </div>

                                <div id="login">
                                    <h1>Welcome Back!</h1>

                                    <form method="POST">

                                        <div class="field-wrap">
                                            <label>Email Address<span class="req">*</span></label>
                                            <input type="email" required autocomplete="off" />
                                        </div>

                                        <div class="field-wrap">
                                            <label>Password<span class="req">*</span></label>
                                            <input type="password" required autocomplete="off" />
                                        </div>
                                        <input type="hidden" name="OrderType" value="<?php if(isset($_GET['Pkg'])) {echo $_GET['Pkg'];} ?>" />
                                        <p class="forgot"><a href="#">Forgot Password?</a></p>
                                        <button class="button button-block" type="submit" />Log In</button>
                                    </form>
                                </div>
                            </div>
                            <!-- tab-content -->

                        </div>
                        <!-- /form -->
                    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>




                    <script>
                        jQuery('.form').find('input, textarea').on('keyup blur focus', function(e) {

                            var $this = jQuery(this),
                                label = $this.prev('label');

                            if (e.type === 'keyup') {
                                if ($this.val() === '') {
                                    label.removeClass('active highlight');
                                } else {
                                    label.addClass('active highlight');
                                }
                            } else if (e.type === 'blur') {
                                if ($this.val() === '') {
                                    label.removeClass('active highlight');
                                } else {
                                    label.removeClass('highlight');
                                }
                            } else if (e.type === 'focus') {

                                if ($this.val() === '') {
                                    label.removeClass('highlight');
                                } else if ($this.val() !== '') {
                                    label.addClass('highlight');
                                }
                            }

                        });

                        jQuery('.tab a').on('click', function(e) {

                            e.preventDefault();

                            jQuery(this).parent().addClass('active');
                            jQuery(this).parent().siblings().removeClass('active');

                            target = jQuery(this).attr('href');

                            jQuery('.tab-content > div').not(target).hide();

                            jQuery(target).fadeIn(600);

                        });
                    </script>

                    <div style="clear:both;"></div>

                </div>
            </div>
        </div>
       
    </article>

    <!-- Floating Bars And Forms -->
    <div class="floating-form-wrap">
        <div class="floating-form">
            <div class="form-container">
                <div class="formdv">
                    <div id="flform" class="inform">
                        <h4 class="text-center">Tell us about your project</h4>
                        <h5>Our Design Expert will contact you to discuss your project</h5>
                        <form class="" action="thankyou.htm" method="post" data-role="us">
                            <div class="field">
                                <input type="text" name="cn" maxlength="60" value="" placeholder="Name" class="required alphanumeric iecn">
                            </div>
                            <div class="field">
                                <input type="text" name="em" maxlength="60" value="" placeholder="Email" class="required email  ">
                            </div>
                            <div class="field phone">
                                <input type="text" name="pn" maxlength="25" value="" placeholder="Phone Number" class="required number">
                            </div>
                            <div class="field textarea">
                                <textarea name="msg" class="required iemsg" rows="4" placeholder="Name on the Logo and Design Preferences"></textarea>
                            </div>
                            <p class="pull-left">Fastest Turnaround Time & 24/7 Customer Support </p>
                            <input type="submit" name="signup" value="Submit Your Request" />
                            <input type="hidden" name="send" value="1" />


                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-handle"></div>
    </div>
    <section class="popup-form">
        <a href="javascript:;" title="" class="close"></a>
        <div class="formcontainer">
            <div class="tophead">
                <h2>Activate Your Coupon</h2>
                <h3>We provide customized design solutions to enhance your competitive edge</h3>
            </div>
            <div id="popupform" class="inform">
                <form class=" clearfix" action="thankyou.htm" method="post">
                    <div class="field">
                        <input type="text" name="cn" maxlength="60" value="" placeholder="Name" class="required alphanumeric iecn">
                    </div>
                    <div class="field">
                        <input type="text" name="em" maxlength="60" value="" placeholder="Email" class="required email ">
                    </div>
                    <div class="field phone">
                        <input type="text" maxlength="25" name="pn" value="" placeholder="Phone Number" class="required number">
                    </div>
                    <div class="field">
                        <textarea name="msg" class="required iemsg" rows="4" placeholder="Name on the Logo and Design Preferences"></textarea>
                    </div>
                    <div class="clearfix fieldwrap text-center">
                        <input type="submit" name="signup" value="Submit Your Request" />
                        <input type="hidden" name="send" value="1" />
                    </div>


                </form>
            </div>
        </div>
    </section>
    <section class="callback-form">
        <a href="javascript:;" title="" class="close"></a>
        <div class="formcontainer">
            <div class="tophead">
                <h2>Request a Call Back</h2>
                <h3>Enter your phone number and our consultant will call you right away</h3>
            </div>
            <div id="callback-form" class="inform">
                <form class=" clearfix" action="Actions/PerData.php" method="post">
                    <div class="field">
                        <input type="text" name="cn" maxlength="60" value="" placeholder="Name" class="required alphanumeric iecn">
                    </div>
                    <div class="field">
                        <input type="text" name="em" maxlength="60" value="" placeholder="Email" class="required email ">
                    </div>
                    <div class="field phone">
                        <input type="text" maxlength="25" name="pn" value="" placeholder="Phone Number" class="required number">
                        <input type="hidden" name="HIDD" value="TH1" />
                    </div>
                    <hr />
                    <p class="text-center">Preferred Time To Call</p>
                    <div class="time">
                        <p>From</p>
                        <div class="field">
                            <select name="ddlFrom" id="ddlFrom" class="required">
              <option value="">HH:MM</option>
              <option value="1">00:00</option>
              <option value="2">01:00</option>
              <option value="3">02:00</option>
              <option value="4">03:00</option>
              <option value="5">04:00</option>
              <option value="6">05:00</option>
              <option value="7">06:00</option>
              <option value="8">07:00</option>
              <option value="9">08:00</option>
              <option value="10">09:00</option>
              <option value="11">10:00</option>
              <option value="12">11:00</option>
              <option value="13">12:00</option>
              <option value="14">13:00</option>
              <option value="15">14:00</option>
              <option value="16">15:00</option>
              <option value="17">16:00</option>
              <option value="18">17:00</option>
              <option value="19">18:00</option>
              <option value="20">19:00</option>
              <option value="21">20:00</option>
              <option value="22">21:00</option>
              <option value="23">22:00</option>
              <option value="24">23:00</option>
            </select>
                        </div>
                    </div>
                    <div class="time">
                        <p>To</p>
                        <div class="field">
                            <select name="ddlTo" id="ddlTo" class="required">
              <option value="">HH:MM</option>
              <option value="2">01:00</option>
              <option value="3">02:00</option>
              <option value="4">03:00</option>
              <option value="5">04:00</option>
              <option value="6">05:00</option>
              <option value="7">06:00</option>
              <option value="8">07:00</option>
              <option value="9">08:00</option>
              <option value="10">09:00</option>
              <option value="11">10:00</option>
              <option value="12">11:00</option>
              <option value="13">12:00</option>
              <option value="14">13:00</option>
              <option value="15">14:00</option>
              <option value="16">15:00</option>
              <option value="17">16:00</option>
              <option value="18">17:00</option>
              <option value="19">18:00</option>
              <option value="20">19:00</option>
              <option value="21">20:00</option>
              <option value="22">21:00</option>
              <option value="23">22:00</option>
              <option value="24">23:00</option>
              <option value="25">23:59</option>
            </select>
                        </div>
                    </div>
                    <div class="clearfix fieldwrap text-center">
                        <input type="submit" name="signup" value="Submit Your Request" />

                    </div>


                </form>
            </div>
        </div>
    </section>
    <script src="https://www.logoultimate.ml/js/xlib.js">
    </script>

    <div class="https://www.logoultimate.ml/cus-overlay"></div>


    <script>
        jQuery('#fmreg').submit(function() {

            var CNAME = jQuery('input[name="MASTERName"]').val();
            var EMAIL = jQuery('input[name="MASTEREmail"]').val();
            var Phn = jQuery('input[name="MASTERPhone"]').val();
            var MSG = jQuery('input[name="MESSAGE"]').val();
            var ORB = jQuery('input[name="ROrderType"]').val();

            $.post("Actions/PerData.php", {
                    ENTRYLVL: 1,
                    cn: CNAME,
                    em: EMAIL,
                    pn: Phn,
                    msg: MSG,
                    OrderType:ORB                   
                },
                function(response, status) {
                
                    $.post("https://devineinn.com/Portal/CrossPTesting/ProMasterDetails.php", {
                        ENTRYLVL: 1,    
                        MASTERName: CNAME,
                        MASTEREmail: EMAIL,
                        MASTERPhone: Phn,
                        MESSAGE: MSG                    
                    },
                    function(response, status) {
                        if(status == "success"){
                           window.location.href = "step1.php";
                        }                    
                    });

                });


               


        });
    </script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
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
    </script>
    <!--End of Tawk.to Script-->



</body>

</html>