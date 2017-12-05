<html>
    <head>
        <link type="text/css" rel="stylesheet" href="static/reaction.css">
    </head>
    <body>
    <h3 id="hd-thx">Thank You for Registration!</h3>
    <h5 id="hd-thx">Please visit our <a href="index.php">main page</a>!</h5>

    </body>
</html>
<?php
session_start();

$user_name = $_POST["name"];
$user_surname = $_POST["surname"];
setcookie("user_name", $user_name, time() + 3600);
setcookie("user_surname", $user_surname, time() + 3600);
$_SESSION['user_name'] = $user_name;
$_SESSION['user_surname'] = $user_surname;

function print_all_POST_vars()
{
    $post_vars_count = count($_POST);

    echo 'It seems to me, that you\'ve entered ' . $post_vars_count . ' variables' . "<br>";
    echo 'Here they are:' . '<br>';
    foreach ($_POST as $stuff) {
        if (is_array($stuff)) {
            foreach ($stuff as $thing) {
                echo $thing . '<br>';
            }
        } else {
            if ($stuff != "" && $stuff != 'Submit') {
                echo $stuff . '<br>';
            }
        }
    }
}


function validate_telephone_number($telephone_number)
{
    return preg_match('/^\+48\d{9}/', $telephone_number);
}

function check_user_name()
{
    echo 'It seems to me that your name is $user_name. Cool!' . '<br>';
}


print_all_POST_vars();

echo "Do you think your telephone number is valid?" . "<br>";


if (validate_telephone_number($_POST['tel'])) {
    echo 'It looks like it\'s valid ';
} else {
    echo 'Ooops! Your telephone number is not valid!' . '<br><br><br>';
}

print_r($_SESSION);
?>
