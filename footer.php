<?php

if($_SESSION) {
    echo "You are logged in as '".$_SESSION['uid']."' (<a href='includes/logout.inc.php'>logout</a>)";
}
else {
	echo "Welcome to Asparagus";
}

?>


