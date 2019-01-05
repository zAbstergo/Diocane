<?php

/*

		Sviluppato da @DavideDTW
		
		Write to group or to a user
		
*/

if(strpos($msg, "/write")=== 0 and in_array($userID, $adminID)== true){
  $command = explode(" ", $msg, 3);
  $newID = $command[1];
  $text = $command[2];
  sm($newID, $text);
  sm($chatID, "<b>Messaggio sent.</b>", 1);
}