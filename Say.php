<?php

/*

		Sviluppato da @DavideDTW
		
	      	Repeat text
	      	
*/

if(strpos($msg, "/say")===0 and in_array($userID, $adminID)){
$explode = explode(' ',$msg, 2);
sm($chatID, $explode[1]);
}