<?php
$r=1;
function test($r)
{
	global  $r;
	echo $r;
}
test($r);
?>