<?php

// Path to the .rar files
$rarPath = '/home/files/';

// Path to place the unrar file
$unrarPath = '/home/done/';

$files = glob($rarPath . '*.{r00,txt,pdf,mkv,mp3}', GLOB_BRACE);
  foreach ($files as $file) 
  {
    if (stripos($file, '.r00') !== false) 
    {
      $string="unrar e '$file' $unrarPath";
      exec($string);
    } else {
      echo $file . " is not in a rar format\n";
    }
  }

?>
