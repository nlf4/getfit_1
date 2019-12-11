<?php
require_once "lib/autoload.php";
//$css = array("profile.css");
BasicHead();

?>
<body>
<a href="#"><img src="img/logo4.svg" alt="getfiT logo" id="svg-logo"></a>
<div class="container">
    <div class="band">
        <a href="#"><img id="user-icon" src="img/user-icon.JPG" alt="user-icon"></a>
        <?php
        $data = GetData("select * from users");
        $template = LoadTemplate("profile_greeting");
        ReplaceContent( $data, $template);
        ?>
        <input id="logout-btn" type="submit" value="Log Out">
    </div>
    <div id="trap">
    </div>
    <div class="headings">
        <div class="workout-heading">
            <h2>Workouts</h2>
        </div>
        <div class="exercise-heading">
            <h2>Exercises</h2>
        </div>
    </div>
    <section>

        <div class="col workout-column">
            <ul>
                <li><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, mollitia.</a></li>
                <li><a href="#">Lorem ipsum dolor sit amet.</a></li>
                <li><a href="#">Lorem ipsum dolor sit amet.</a></li>
            </ul>
            <input id="add-btn" type="submit" value="+">
        </div>
        <div class="col exercise-column">
            <ul>
                <?php
                $data = GetData("select * from exercises");
                $template = LoadTemplate("profile");
                ReplaceContent( $data, $template);
                ?>
            </ul>
            <input id="add-btn" type="submit" value="+" onclick="location.href='options.php';">
        </div>
    </section>
</div>

</body>
</html>
