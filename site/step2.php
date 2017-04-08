<?php 
    session_start();

    if(!isset($_SESSION["EMAIL"])){
      //  header("Location:step1.htm");
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>World's Leading custom logo design company</title>
    <meta name="keywords" content="logo design company, business logo designers, cheap logo designing, custom logo design, logo designer, affordable logo designs, logo design service, buy logo." />
    <meta name="description" content="LogoUltimate is a leading logo and website design agency based in USA. Our logo designers and web designers build brands and websites for established and new start up businesses worldwide." />
    <link rel="icon" type="image/png" href="https://www.logoultimate.ml/images/favicon.png" />
  
    <!-- jQuery JS 3.1.0 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,800,300' rel='stylesheet' type='text/css'>
   <link rel="stylesheet" type="text/css" href="css/ST.css">



    <!-- jQuery JS 3.1.0 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>




</head>

<body class="homepage">
    
    <article>
        <div class="container">
            <div class="steps">
                <ul>
                    <li class="active">
                        <span>1</span>
                        <div class="step_title">
                            Signup
                            <div class="step_count">Step one</div>
                        </div>
                    </li>
                    <li class="active">
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

            <div class="form_box">
                <div class="form_heading">
                    <span>PERSONAL DETAILS</span>
                </div>
                <div style="clear:both;"></div>

                <div class="review_table">
                    <table>
                        <tr>
                            <td width="165">Name:</td>
                            <td><?php echo $_SESSION["NAME"]?></td>
                        </tr>
                        <tr>
                            <td width="165">Email Address:</td>
                            <td><?php echo $_SESSION["EMAIL"]?></td>
                        </tr>
                        <tr>
                            <td width="165">Phone No.:</td>
                            <td><?php echo $_SESSION["PHONENO"]?></td>
                        </tr>
                        <tr>
                            <td width="165">Price:</td>
                            <td><span><?php echo $_SESSION["PRICE"]?></span></td>
                        </tr>
                    </table>
                </div>

                <div class="form_heading">
                    <span>design specification</span>
                </div>

                <div class="review_table">
                    <table>
                        <tr>
                            <td width="327">Exact Name To Be Appeared On Logo</td>
                            <td><?php echo $_SESSION["ENAOLs"] ?></td>
                        </tr>
                        <tr>
                            <td width="165">Slogan</td>
                            <td><?php echo $_SESSION["SLOGAN"] ?></td>
                        </tr>
                        <tr>
                            <td width="165">Preferred Style Of Logo</td>
                            <td><?php echo $_SESSION["PSOL"] ?></td>
                        </tr>
                        <tr>
                            <td width="165">Look And Feel</td>
                            <td><?php echo $_SESSION["LAF"] ?></td>
                        </tr>
                        <tr>
                            <td width="165">Any Additional Comments</td>
                            <td><?php echo $_SESSION["AAC"] ?></td>
                        </tr>
                        <tr>
                            <td width="165">Industry *</td>
                            <td><?php echo $_SESSION["INDUSTRY"] ?></td>
                        </tr>
                        <tr>
                            <td width="165">A Brief Description About Your Business</td>
                            <td><?php echo $_SESSION["ABDAYB"] ?></td>
                        </tr>
                        <tr>
                            <td width="165">Target Audience</td>
                            <td><?php echo $_SESSION["YTA"] ?></td>
                        </tr>
                    </table>
                </div>

                <div class="form_btn">
                    <button class="proceed">
			<span class="loader"></span>
			Proceed to Payment</button>
                </div>

                <div style="clear:both;"></div>

            </div>

        </div>

       
    </article>

    <script src="https://www.logoultimate.ml/js/xlib.js">
    </script>
    <script src="https://www.logoultimate.ml/js/custom.js">
    </script>
    <div class="cus-overlay"></div>

    <script>
        $('.proceed').click(function() {
            $('.loader').show();
            $('button').css('color', 'transparent');
            setTimeout(
                function() {
                    window.location = "payment.php";
                }, 2000);
        });
    </script>

</body>

</html>