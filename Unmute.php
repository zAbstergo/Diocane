<?php

/*

		Sviluppato da @paolowu
		
		 Unmute user on group
		 
*/

 if(strpos($msg, '/unmute') === 0 and in_array($userID, $adminID))
  {
   try
   {
    $akeado = $MadelineProto->get_info(explode(' ', $msg)[1]);
    $MadelineProto->channels->editBanned(['channel'       => $chatID, 'user_id' => $akeado['bot_api_id'],
                                          'banned_rights' => ['_'             => 'channelBannedRights',
                                                              'view_messages' => 0, 'send_messages' => 0,
                                                              'send_media'    => 0, 'send_stickers' => 0,
                                                              'send_gifs'     => 0, 'send_games' => 0,
                                                              'send_inline'   => 0, 'embed_links' => 0,
                                                              'until_date'    => 0
                                          ],
    ]);
    sm($chatID, "" . $akeado['User']['first_name'] . " [" . $akeado['bot_api_id'] . "] unmuted.", 1);
   } catch(Exception $e)
   {
    $errore = $e - getMessage();
    sm($chatID, $errore);
   }
  }