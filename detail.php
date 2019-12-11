<?php
require_once "lib/autoload.php";
$css = "options.css";
BasicHead($css);
NavBar();
?>
<body>

<h1>This is the detail page</h1>
<?php
$data = GetData("select * from exercises where exe_id=" . $_GET['id'] );
$template = LoadTemplate("exercise_form_template");
ReplaceContent( $data, $template);
?>
</body>
</html>
