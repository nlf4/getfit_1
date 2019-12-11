<?php
require_once "lib/autoload.php";
$css = array("options.css");
BasicHead($css);
NavBar();
?>
<body>

    <main>
        <div class="container">
            <?php
            $data = GetData("select * from exercises");
            $template = LoadTemplate("options_template");
            ReplaceContent( $data, $template);
            ?>
        </div>
    </main>
</body>
</html>
