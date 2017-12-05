<?php
echo 'Let\'s see what did you enter'.'<br>';

$post_vars = $_POST;

foreach ($_POST as $stuff) {
    if (is_array($stuff)) {
        foreach ($stuff as $thing) {
            echo $thing.'<br>';
        }
    } else {
        echo $stuff.'<br>';
    }
}
