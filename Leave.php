<?php

/*

		Sviluppato da @DavideDTW
		
		     Leave group 
		     
*/

if($msg == "/leave" and in_array($userID, $adminID)) {
sm($chatID, "Goodbye", 1);
$MadelineProto->channels->leaveChannel(['channel' => $chatID, ]);
}