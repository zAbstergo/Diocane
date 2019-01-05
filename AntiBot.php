<?php

/*

		Sviluppato da @peppelg1
		
		       AntiBot
		       
*/

if (isset($update['update']['message']['action']['_']) and $update['update']['message']['action']['_'] === 'messageActionChatAddUser' and is_array($update['update']['message']['action']['users'])) {
  $robots = [];
  foreach ($update['update']['message']['action']['users'] as $robot) {
    $info = $MadelineProto->get_info($robot);
    if ($info['type'] === 'bot')
      array_push($robots, $info['bot_api_id']);
  }
  if (count($robots) > 0) {
    sm($chatID, 'They added '.count($robots).' bots, Lets ban and delete massages.');
    foreach ($robots as $murda) {
      $MadelineProto->channels->editBanned(['channel' => $chatID, 'user_id' => $murda, 'banned_rights' => ['_' => 'channelBannedRights', 'view_messages' => true, 'until_date' => 0]], ['noResponse' => true]);
    }
    foreach ($robots as $murda) {
      $MadelineProto->channels->deleteUserHistory(['channel' => $chatID, 'user_id' => $murda], ['noResponse' => true]);
    }
  } else {
    sm($chatID, 'No bot detected.');
  }
}