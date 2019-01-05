<?php

/*

		Sviluppato da @LilDods
		
		  Spam strangerbot
		  
*/

if (strpos($msg == '/spam') === 0 and in_array($userID, $adminID)){
     $gigi = explode(" ", $msg, 3);
     $max = $gigi[1];
     $testo = $gigi[2];
sm($chatID, "<b>Start spam</b>", 1);
     for ($x=1; $x<=$max; $x++) {
     sm(@StrangerBot, "/start");
     sleep(2);
     sm(@StrangerBot, $testo);
     sleep(2);
     sm(@StrangerBot, "/end");
     sleep(2);
  }
  sm($chatID, '<b>Finished spam.</b>');
}