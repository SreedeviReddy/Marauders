<?php
$myVar = 'string';

$encoded = base64_encode ( $myVar );

echo $encoded;

$new = 'string';

$enc = base64_encode ( $new );

echo '<br>';
echo $enc;
?>