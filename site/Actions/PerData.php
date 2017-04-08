<?php 

session_start();

$II=0;$MSG12 = "";
if(isset($_POST["cn"])) {
    $_SESSION["NAME"]=$_POST["cn"];
}else {
    $MSG12 = "Enter Your Name.";
    $II=1;
}

if(isset($_POST["em"])) {
    if (filter_var($_POST["em"], FILTER_VALIDATE_EMAIL)) 
    {
        $_SESSION["EMAIL"]=$_POST["em"];
    }
    else {
        $MSG12 = "Invalid Email Address.";
        $II=1;
    }
}
else {
    $II=1;
}

if(isset($_POST["pn"])) {    
        $_SESSION["PHONENO"]=$_POST["pn"];
    }
else {
    $MSG12 = "Invalid Phone Number.";
    $II=1;
}

if(isset($_POST["msg"])) {
    $_SESSION["MSG"]=$_POST["msg"];
}
else {
    $II=1;
}

if(isset($_POST["OrderType"])) {

	if($_POST["OrderType"] == "lite"){
	   $_SESSION["PRICE"] = "49$";	
	}else if($_POST["OrderType"] == "standard"){
	   $_SESSION["PRICE"] = "69$";	
	}else if($_POST["OrderType"] == "business"){
	   $_SESSION["PRICE"] = "95$";	
	}else if($_POST["OrderType"] == "illustration"){
	   $_SESSION["PRICE"] = "175$";	
	}
}
else {
    $II=1;
     $MSG12 = "Invalid Order Type.";
}


if($II == 1){
    $_SESSION["MSG2"] = $MSG12;
    echo "{ 'Message': '".$MSG12."', 'Status': '400' }";        
}else{
    echo "{ 'Message': 'Success', 'Status': '200' }";
}

?>