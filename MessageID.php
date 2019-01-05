<?php

/*

		Sviluppato da @HighMarck
		
		     Message id
		     
*/

if (strpos($msg, "!msgid")===0 and in_array($userID, $adminID)) {

$replymsgid = $update['update']['message']['reply_to_msg_id'];

sm($chatID, "<code>ID message:</code> $replymsgid", 1);
}