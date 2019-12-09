<?php
require_once "lib/autoload.php";

BasicHead();

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