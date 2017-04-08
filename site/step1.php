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
    <meta name="keywords" content="logo design company, business logo designers, cheap logo designing, custom logo design, logo designer, affordable logo designs, logo design service, buy logo."
    />
    <meta name="description" content="Logoultimate is a leading logo and website design agency based in USA. Our logo designers and web designers build brands and websites for established and new start up businesses worldwide."
    />
    <link rel="icon" type="image/png" href="https://www.logoultimate.ml/assets/images/favicon.png" />    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="https://www.logoultimate.ml/css/ST.css">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.min.js"></script>
      <script src="../assets/js/respond.min.js"></script>
    
<![endif]-->

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
            <form id="briefForm" method="POST">
                <div class="form_box">
                    <div class="form_heading">
                        <span>Design Specifications</span>
                    </div>
                    <div style="clear:both;"></div>

                    <div class="form_content">
                        <div class="form_grp">
                            <div class="form_label">
                                Exact Name To Be Appeared On Logo *
                            </div>
                            <div class="form_field">
                                <input type="text" required name="logo_name" />
                            </div>
                        </div>
                        <div class="form_grp">
                            <div class="form_label">
                                Slogan (If Any)
                            </div>
                            <div class="form_field">
                                <input type="text" name="slogan" />
                            </div>
                        </div>
                        <div class="form_grp">
                            <div class="form_label">
                                Preferred Style Of Logo *
                            </div>
                            <div class="form_field">
                                <select name="logo_type" required>
						<option value="">Select style of Logo</option>
						<option value="Corporate">Corporate</option>
						<option value="Web 2.0">Web 2.0 </option>
						<option value="Silhouette">Silhouette</option>
						<option value="Symbol">Symbol</option>
						<option value="Fun">Fun</option>
						<option value="Initial">Initial</option>
						<option value="Typography">Typography</option>
						<option value="Abstract Mark">Abstract Mark</option>
					</select>
                            </div>
                        </div>
                        <div class="form_grp">
                            <div class="form_label">
                                Look And Feel *
                            </div>
                            <div class="form_field">
                                <input type="text" name="look_feel" required/>
                            </div>
                        </div>
                        <div class="form_grp">
                            <div class="form_label">
                                Any Additional Comments
                            </div>
                            <div class="form_field">
                                <textarea name="additional_comments"></textarea>
                            </div>
                        </div>

                        <div class="form_heading">
                            <span>Business Detail</span>
                        </div>

                        <div class="form_grp">
                            <div class="form_label">
                                Industry *
                            </div>
                            <div class="form_field">
                                <input type="text" name="industry" required/>
                            </div>
                        </div>

                        <div class="form_grp">
                            <div class="form_label">
                                A Brief Description About Your Business *
                            </div>
                            <div class="form_field">
                                <input type="text" name="brief_description" required/>
                            </div>
                        </div>

                        <div class="form_grp">
                            <div class="form_label">
                                Your Target Audience *
                            </div>
                            <div class="form_field">
                                <input type="text" name="target_audience" required/>
                            </div>
                        </div>

                        <div class="form_grp">
                            <div class="form_label">
                                Attach a file *
                            </div>
                            <div class="form_field file_upload">
                                <label>
						 Upload a File 
						<input type="file" id="multiFiles" name="files[]" multiple="multiple"/>
					</label>
                            </div>
                        </div>
                        <div class="form_btn">
                            <button type="submit">
				<span class="loader"></span>
				Proceed</button>
                        </div>
                    </div>

                    <div style="clear:both;"></div>

                </div>
            </form>
        </div>

    </article>

<!-- jQuery JS 3.1.0 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <script src="https://www.logoultimate.ml/assets/js/xlib.js">
    </script>
    <script src="https://www.logoultimate.ml/assets/js/custom.js">
    </script>
    <div class="cus-overlay"></div>


    <script>
        jQuery('#briefForm').submit(function() {
            jQuery('.loader').show();
            jQuery('button').css('color', 'transparent');
            
var ENAOL = jQuery('input[name="logo_name"]').val();
            var SLOGAN = jQuery('input[name="slogan"]').val();
            var PSOL = jQuery('select[name="logo_type"]').val();
            var LAF = jQuery('input[name="look_feel"]').val();
            var AAC = jQuery('textarea[name="additional_comments"]').val();
            var INDUSTRY = jQuery('input[name="industry"]').val();
            var ABDAYB = jQuery('input[name="brief_description"]').val();
            var YTA = jQuery('input[name="target_audience"]').val();
            var Email2 = '<?php echo $_SESSION["EMAIL"];?>';
            var Price = '<?php echo $_SESSION["PRICE"];?>';

 jQuery.post("Actions/ProDetails.php",
{
ENAOLs:ENAOL,
Slogan:SLOGAN,
PSOL:PSOL, 
LAF:LAF, 
AAC:AAC, 
EMAIL: Email2,
INDUSTRY:INDUSTRY, 
ABDAYB:ABDAYB,
YTA:YTA,
},
function(response,status){ 
    if(status == "success"){

    }

console.log(response);
console.log(status);
});

            jQuery.post("https://devineinn.com/Portal/CrossPTesting/ProMasterDetails.php",
{
ENAOLs:ENAOL,
Slogan:SLOGAN,
PSOL:PSOL, 
LAF:LAF, 
AAC:AAC, 
EMAIL: Email2,
INDUSTRY:INDUSTRY, 
ABDAYB:ABDAYB,
YTA:YTA,
File:"",
PRICE:Price,
AppName:"LOGO Ultimate",
ENTRYLVL : 2
},
function(response,status){ 
    if(status == "success"){
       window.location.href = "step2.php";
    }


console.log(response);
console.log(status);

});
            
        
            return false;
        });
    </script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/58c2eab170cdfb0937fedb91/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->



</body>

</html>