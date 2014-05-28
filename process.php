<?php

$words = strtolower($_POST['words']);

if(strpos($words, "techranger") !== false) {
	echo("It's here!");
}

else{
	echo("Whaaaat");
}