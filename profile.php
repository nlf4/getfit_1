<?php
require_once "lib/autoload.php";


BasicHead();
?>

<body>

<div class="container">

        <?php

        $data = GetData("select * from exercises where exe_id=" . $_GET['id'] );
        $template = LoadTemplate("profile");
        print $template;
//        ReplaceContent( $data, $template);
        ?>

</div>

</body>
</html>
