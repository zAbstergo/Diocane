<?php

/*

		Sviluppato da @paolowu
		
		Promote an user to admin
		
*/

if(strpos($msg, '/admin') === 0 and in_array($userID, $adminID))
  {
   try
   {
    $akeado = $MadelineProto->get_info(explode(' ', $msg)[1]);
    $MadelineProto->channels->editAdmin(['channel'   => $chatID, 'user_id' => $akeado['bot_api_id'],
                                          'admin_rights' => ['_'             => 'channelAdminRights',
                                                              'change_info' => 1, 'post_messages' => 0,
                                                              'edit_messages'    => 0, 'delete_messages' => 1,
                                                              'ban_users'     => 1, 'invite_users' => 1,
                                                              'invite_link'   => 1, 'pin_messages' => 1,
                                                              'add_admins'    => 1
                                          ],
    ]);
    sm($chatID, "" . $akeado['User']['first_name'] . " [" . $akeado['bot_api_id'] . "]now is admin.", 1);
   } catch(Exception $e)
   {
    $errore = $e - getMessage();
    sm($chatID, $errore);
   }
  }