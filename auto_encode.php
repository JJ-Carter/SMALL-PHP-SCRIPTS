<?php

// Path to new videos
$vidPath = '/home/videos/';

// Path to encoded videos
$encoded = '/home/encoded/';

// Path to 
$complete = '/home/complete/';


$files = glob($vidPath . '*.{mkv,avi,mp4}', GLOB_BRACE);
  foreach($files as $file) 
  {
    $fileName = $file;
    $fileName = substr($file, "0", -4);
    $string="ffmpeg -i '$file' -movflags +faststart -crf 20 -preset slow -threads 6 -b:a 192k '$fileName'.mp4";
    exec($string);
    shell_exec("mv " . escapeshellarg($file) . " " . escapeshellarg($complete));
    shell_exec("mv " . escapeshellarg($fileName . ".mp4") . " " . escapeshellarg($encoded));
  }

?>
