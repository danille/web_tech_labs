<?php
echo 'Let\'s see what did you enter'.'<br>';

function print_all_POST_vars() {
	$post_vars_count = count($_POST);

	echo 'It seems to me, that you\'ve entered '. $post_vars_count.' variables'."<br>";
	echo 'Here they are:'.'<br>';
	foreach ($_POST as $stuff) {
    	if (is_array($stuff)) {
        	foreach ($stuff as $thing) {
            	echo $thing.'<br>';
        	}
    	} else {
    		if ($stuff != "" && $stuff != 'Submit') {
    			echo $stuff.'<br>';
    		}
	    }
	}
}


function validate_telephone_number($telephone_number) {
	 return preg_match('/^\+48\d{9}/', $telephone_number);
}

function check_user_name(){
	echo 'It seems to me that your name is $user_name. Cool!'.'<br>';
}


print_all_POST_vars();

echo "Do you think your telephone number is valid?"."<br>";


if (validate_telephone_number($_POST['tel'])){
	echo 'It looks like it\'s valid ';
} else {
	echo 'Ooops! Your telephone number is not valid!'.'<br>';
}
