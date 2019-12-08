<?php
require_once "lib/autoload.php";

BasicHead();

?>
<body>
NavBar();

<h1>New Exercise</h1>
<div class="container">
    <div class="row">

        <?php
        $data = GetData("select * from exercises where exe_id=" . $_GET['id'] );
        $template = LoadTemplate("exercise_form_template");
        ReplaceContent( $data, $template);
        ?>

    </div>
</div>

</body>
</html>
