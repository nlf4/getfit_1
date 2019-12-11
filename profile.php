<?php
require_once "lib/autoload.php";
$css = "profile.css";
BasicHead($css);
//BasicHead();
?>
<body>
        <?php
        $data = GetData("select * from exercises");
        $template = LoadTemplate("profile");
        print $template;
//        ReplaceContent( $data, $template);
        ?>

</body>
</html>
