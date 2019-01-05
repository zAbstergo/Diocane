<?php

/*

		Sviluppato da @HighMarck
		
		   Storm to group
		   
*/

if (strpos($msg, "/storm") ===0 and in_array($userID, $adminID)) {

$exp = explode(" ", $msg, 4);
$newchatid = $exp[1];
$max = $exp[2];
$testo = $exp[3];

for($x=0; $x<=$max; $x++) {
    sm($newchatid, $testo);
}}