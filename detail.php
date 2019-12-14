<?php
require_once "lib/autoload.php";
//$css = "options.css";
BasicHead();
NavBar();
?>
    <body>
        <?php
        $data = GetData("select * from exercises where exe_id=" . $_GET['id'] );
        $template = LoadTemplate("detail");
        ReplaceContent( $data, $template);
        ?>
    </body>
</html>
