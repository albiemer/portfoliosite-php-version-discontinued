<?php
// File and new size
$fname = '23.jpg';


//set $percent value <1 for shrinking and $percent value >1 for expanding
$per = 0.3;

//Check Content type
header('Content-Type: image/jpeg');

//Generate new size parameters
list($width, $height) = getimagesize($fname);
$new_w = $width * $per;
$new_h = $height * $per;

// Load image
$output = imagecreatetruecolor($new_w, $new_h);
$source = imagecreatefromjpeg($fname);

// Resize the source image to new size
imagecopyresized($output, $source, 0, 0, 0, 0, $new_w, $new_h, $width, $height);

//Display Output 
imagejpeg($output);
?>
