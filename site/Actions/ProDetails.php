<?php
    session_start();
    echo $_POST["ENAOLs"];

    $_SESSION["ENAOLs"] = $_POST["ENAOLs"];
    $_SESSION["SLOGAN"] = $_POST["Slogan"];
    $_SESSION["PSOL"] = $_POST["PSOL"];
    $_SESSION["LAF"] = $_POST["LAF"];
    $_SESSION["AAC"] = $_POST["AAC"];
    $_SESSION["INDUSTRY"] = $_POST["INDUSTRY"];
    $_SESSION["ABDAYB"] = $_POST["ABDAYB"];
    $_SESSION["YTA"] = $_POST["YTA"];


    //$_SESSION["FILE"] = $_POST["FILE"];

?>