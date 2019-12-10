<?php
require_once "lib/autoload.php";
//$css = "profile.css";
BasicHead();
//BasicHead();
?>
<body>
        <?php

        $data = GetData("select * from exercises where exe_id=" . $_GET['id'] );
        $template = LoadTemplate("profile");
        print $template;
//        ReplaceContent( $data, $template);
        ?>

</body>
</html>
