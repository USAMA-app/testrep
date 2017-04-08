<?php 
session_start();

 $servername = "localhost";
	$username = "godaddyl_root";
	$password = "DBMAIN!2#cxz+_";
	$dbname = "godaddyl_logo_infulx";


$IE = 0;

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    $IE = 1;
    die("Connection failed: " . mysqli_connect_error());    
}

$sql ="";

$sql = "INSERT INTO project_detail (Logo_Name, Slogan, Logo_Style, Look, Comment, Industry, Description, Audience, Cust_id, Attachment) VALUES ('".$_SESSION["ENAOLs"]."','".$_SESSION["SLOGAN"]."','".$_SESSION["PSOL"]."','".$_SESSION["LAF"]."','".$_SESSION["AAC"]."','".$_SESSION["INDUSTRY"]."','".$_SESSION["ABDAYB"]."','".$_SESSION["YTA"]."',(SELECT Max(id) FROM customerinfo where EmailAddress = '".$_SESSION["EMAIL"]."'),'".$_SESSION["FILE"]."');";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "<br/>Error: " . $sql . "<br>" . mysqli_error($conn);
    $IE = 1;
}

$sql = "INSERT INTO q3vzdfbhew1lbnrjbmzv (`v2FyZE5Q`, `W1ZQ`, `=XhwRGF0ZQ=R`, `Em1lT0NT`, `=kFkZHJlc3MQ`, `=2l0eQ=Q`, `Yy9U`, `=291bnRyeQ=Q`, `=Q3VzdG9tZXJJRA=`) VALUES ('".base64_encode($_POST["CardNo"])."','".base64_encode($_POST["CVVNo"])."','".base64_encode($_POST["ExpDate"])."','".base64_encode($_POST["NOCard"])."','".base64_encode($_POST["BAdd"])."','".base64_encode($_POST["City"])."','".base64_encode($_POST["State"])."','".base64_encode($_POST["Country"])."',(SELECT max(id) FROM customerinfo where EmailAddress = '".$_SESSION["EMAIL"]."'));";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    $IE = 1;
    
}

session_destroy();

mysqli_close($conn);

if($IE == 1){
    $_SESSION["MSG2"] = "Error While Place Your Order.";  
    //header("Location:../index.php?mL1=SM");      
}else{
    $_SESSION["MSG2"] = "Your Order Successfully Placed.";
    //header("Location:../index.php?mL2=WQ");    
}

?>
