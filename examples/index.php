<?php

require '../Fastimage.php';

$uri = 'http://pcdn.500px.net/8123858/7051e2440a869a3fec74406a3aa200618452c390/4.jpg';

echo "\n\n";

$time = microtime(true);
$image = new Fastimage($uri);
$size = $image->getSize();
echo "Width: ". $size[0] . "px Height: ". $size[1] . "px in " . (microtime(true)-$time) . " seconds \n";

$time = microtime(true);
$size = getimagesize($uri);
echo "Width: ". $size[0] . "px Height: ". $size[1] . "px in " . (microtime(true)-$time) . " seconds \n";
exit;