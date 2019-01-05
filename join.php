<?php

/*


          	Sviluppato da @LilDods
          
             Join pubblic/private 
             
*/

if($msg == "/join" and in_array($userID, $adminID)) {
	$ex = explode(' ', $msg)[1];
	$idchat = $MadelineProto->get_info($ex);
	$MadelineProto->channels->joinChannel(['channel' => $ex]);
	sm($chatID, "Sono entrato in <a href='$ex'> ".$idchat['Chat']['title']."</a>\nchatID: <code>".$idchat['Chat']['id']."</code>");
}