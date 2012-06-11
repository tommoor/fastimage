<?php

require '../Fastimage.php';

$uri = 'http://pcdn.500px.net/8123858/7051e2440a869a3fec74406a3aa200618452c390/4.jpg';

echo "\n\n";

$time = microtime(true);
$image = new FastImage($uri);
list($width, $height) = $image->getSize();
echo "FastImage: \n";
echo "Width: ". $width . "px Height: ". $height . "px in " . (microtime(true)-$time) . " seconds \n";

$time = microtime(true);
list($width, $height) = getimagesize($uri);
echo "getimagesize: \n";
echo "Width: ". $width . "px Height: ". $height . "px in " . (microtime(true)-$time) . " seconds \n";
exit;