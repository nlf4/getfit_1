<?php
$login_form = true;
require_once "lib/autoload.php";

$css = array("login.css");

//redirect naar profiel als de gebruiker al ingelogd is
if ( isset($_SESSION['usr']) ) { $_SESSION["msg"][] = "You are already logged in!"; header("Location: https://wdev.be/wdev_nicole/dag2/profile.php"); exit; }
$css = array("login.css");
BasicHead($css);
//NavBar();

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
        <li><a href="#">Ab</a></li>
        <li><a href="#">Contact</a></li>
    </div>
</nav>
<?php ShowMessages(); ?>
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





<?php Footer(); ?>
    </body>
</html>

