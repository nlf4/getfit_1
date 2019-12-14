<?php
require_once "lib/autoload.php";
//$css = "exercise-form.css";
BasicHead();
NavBar();
?>
    <body>
        <?php
//        $data = GetData("select * from exercises where exe_id=" . $_GET['id'] );
            $template = LoadTemplate("exercise_form_template");
            print $template;
//        ReplaceContent( $data, $template);
        ?>
    </body>
</html>
