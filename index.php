<?php
$Allowed_Chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

$Chars_Len = 25;

$Salt_Length = 5;

$groups = 27;

$v = 0;

while($v < $groups){
$salt = "";
for($i=0; $i<5; $i++){
	$salt .= $Allowed_Chars[mt_rand(0,$Chars_Len)];
}
print $salt . '<br />';
//EB0 
$v++;
}
?>