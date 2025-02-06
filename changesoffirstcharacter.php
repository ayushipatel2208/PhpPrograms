<?php 

$text = 'PHP Tutorial';

$text = preg_replace('/(\b[a-z])/i', '\1', $text);

echo $text;

?>