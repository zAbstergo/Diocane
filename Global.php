<?php

/*

		Sviluppato da @DavideDTW
		
	    	Global message
	    	
*/

if(strpos($msg, "/global") !== false) {
  $messaggio = str_replace("/global ", "", $msg);
  foreach ($MadelineProto->get_dialogs() as $chat) {
    if($chat['_'] == 'peerUser') $id = $chat['user_id'];
    if($chat['_'] == 'peerChannel') $id = '-100'.$chat['channel_id'];
    if($chat['_'] == 'peerChat') $id = '-'.$chat['channel_id'];
    sm($id, $messaggio);
}
sm($chatID, "<b>Message sent to everyone<b>", 1);
}