<?php

/*

		Sviluppato da @SonoMozzik
		
		    Edit a message
		    
*/

if (strpos($msg, '/edit')=== 0 and in_array($userID, $adminID)){
$e = explode(" ", $msg, 2);
$MadelineProto->messages->editMessage(['peer' => $chatID, 'message' => $e[1], 'id' => $update['update']['message']['reply_to_msg_id']]);
}