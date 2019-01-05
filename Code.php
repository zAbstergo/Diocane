<?php

/*

		  Sviluppato da @Kotheos
		
		Informaction about a message
		
*/

if(stripos($msg, '/code') === 0 and in_array($userID, $adminID)) { 
    $up = $MadelineProto->channels->getMessages(['id' => [['_' => 'inputMessageReplyTo', 'id' => $update['update']['message']['id']]], 'channel' => $chatID]); 
    sm($chatID, json_encode($up['messages'][0], JSON_PRETTY_PRINT)); 
}