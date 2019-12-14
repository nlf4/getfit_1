<?php
$no_access = true;
require_once "lib/autoload.php";

BasicHead();

?>
<body>

<div class="jumbotron text-center">
    <h1>Access restricted.</h1>
    <p>Please log in first.</p>
</div>

<div class="container">

    <?php
    print LoadTemplate("no_access");
    ?>

</div>

</body>
</html>