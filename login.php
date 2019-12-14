<?php
$login_form = true;
require_once "lib/autoload.php";

//$css = "login.css";

//redirect naar profiel als de gebruiker al ingelogd is
if ( isset($_SESSION['usr']) ) { $_SESSION["msg"][] = "You are already logged in!"; header("Location: profile.php"); exit; }

BasicHead();
NavBar();
ShowMessages();
?>
<!--<!DOCTYPE html>-->
<!--<html>-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
<!--    <link href="../css/opmaak.css" rel="stylesheet">-->
<!--</head>-->
<body>
<nav>
    <div id="logo"><a href="#" title="logo"><img src="../images/logo1.svg" alt="Logo van de site" class="logo"></a></div>
    <div id="links">
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
    </div>
</nav>
<div id="login">
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-8">
                <div id="login-box" class="col-md-12">
        <?php
        print LoadTemplate("login");
//        $data = GetData("select * from users");
//        $template = LoadTemplate("login");
//        ReplaceContent( $data, $template);
        ?>

                </div>
            </div>
        </div>
    </div>
</div>
<footer>
    <p class="copyright">Copyright © 2019 GetfiT.
        <span class="second-line">All Rights Reserved.</span>
    </p>
    <div>
        <ul class="social-media-list">
            <li>
                <a href="https://www.facebook.com/">
                    <ion-icon class="logo-facebook" name="logo-facebook"></ion-icon>
                </a>
            </li>
            <li>
                <a href="https://twitter.com/">
                    <ion-icon class="logo-twitter" name="logo-twitter"></ion-icon>
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com/">
                    <ion-icon class="logo-instagram" name="logo-instagram"></ion-icon>
                </a>
            </li>
        </ul>
    </div>

            <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
        </footer>
    </body>
</html>

