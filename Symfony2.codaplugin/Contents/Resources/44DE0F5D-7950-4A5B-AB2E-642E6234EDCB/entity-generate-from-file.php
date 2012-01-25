#!/usr/bin/php
<?php

$sitepath = getenv('CODA_SITE_LOCAL_PATH');
$filepath = getenv('CODA_FILEPATH');

if ($sitepath) {
  chdir($sitepath);
  
  $count = 0;
  
  $filename = str_ireplace($sitepath . '/src/', '', $filepath, &$count);
  if ( $count == 0 ) {
    $filename = str_ireplace($sitepath . 'src/', '', $filepath);
  }
    
  $pattern = '/([A-Za-z0-9]*)\.php/';
  $entity = preg_replace($pattern, '$1', $filename);
  
  exec("php app/console doctrine:generate:entities $entity", $out);
  
  foreach ($out as $key => $value) {
  	echo $value . "<br/>\n";
  }
}
?>