<?php

/*

		Sviluppato da @paolowu
		
		  Unadmin an user
		  
*/

if(strpos($msg, '/unadmin') === 0 and in_array($userID, $adminID))
  {
   try
   {
    $akeado = $MadelineProto->get_info(explode(' ', $msg)[1]);
    $MadelineProto->channels->editAdmin(['channel'   => $chatID, 'user_id' => $akeado['bot_api_id'],
                                          'admin_rights' => ['_'             => 'channelAdminRights',
                                                              'change_info' => 0, 'post_messages' => 0,
                                                              'edit_messages'    => 0, 'delete_messages' => 0,
                                                              'ban_users'     => 0, 'invite_users' => 0,
                                                              'invite_link'   => 0, 'pin_messages' => 0,
                                                              'add_admins'    => 0
                                          ],
    ]);
    sm($chatID, "" . $akeado['User']['first_name'] . " [" . $akeado['bot_api_id'] . "] now isn't admin.", 1);
   } catch(Exception $e)
   {
    $errore = $e - getMessage();
    sm($chatID, $errore);
   }
  }