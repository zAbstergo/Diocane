<?php

/*

		Sviluppato da Giovanni
		
		 Ban user on group
		 
*/

if(strpos($msg, '/ban ')===0 and in_array($userID, $adminID)) {
try{
  $akeado = $MadelineProto->get_info(explode(' ', $msg)[1]);
  $MadelineProto->channels->editBanned(['channel' => $chatID, 'user_id' => $akeado['bot_api_id'], 'banned_rights' => ['_' => 'channelBannedRights', 'view_messages' => 1, 'send_messages' => 1, 'send_media' => 1, 'send_stickers' => 1, 'send_gifs' => 1, 'send_games' => 1, 'send_inline' => 1, 'embed_links' => 1, 'until_date' => 0], ]);
sm($chatID, "Ho bannato ".$akeado['User']['first_name']." [".$akeado['bot_api_id']."] come richiesto da $name [$userID].", 1);
}catch(Exception $e){
  $errore = $e-getMessage();
  sm($chatID, $errore);
}}