<?php

/*

		Sviluppato da @LilDods
		
		  Lag calculation
		  
*/

if (!isset($msg)) return 0;
if ($msg == '/lag') {
  $first = microtime();
  sm($chatID, 'Lag calculation...', false, 'HTML', false, false, true);
  $now = microtime();
  sm($chatID, 'Lag: ' . ($now - $first), false, 'HTML', false, false, true);
  exit;
}