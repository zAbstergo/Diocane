<?php

/*

		Sviluppato da @DavideDTW
		
		   Change nickname
		   
*/

if(0 === strpos($msg == '/nick') and in_array($userID, $adminID)){
        $nome = str_replace('/nick ', '', $msg);
        $MadelineProto->account->updateProfile(['first_name' => $nome, ]);
        $MadelineProto->messages->sendMessage(['peer' => $chatID, 'message' => "Nickname changed.", 1]);
}