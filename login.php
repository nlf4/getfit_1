<?php
require_once "lib/autoload.php";
$css = "login.css";
BasicHead($css);
NavBar();
?>
    <body>
        <?php
        $data = GetData("select * from users");
        $template = LoadTemplate("login");
        ReplaceContent( $data, $template);
        ?>
    </body>
</html>

