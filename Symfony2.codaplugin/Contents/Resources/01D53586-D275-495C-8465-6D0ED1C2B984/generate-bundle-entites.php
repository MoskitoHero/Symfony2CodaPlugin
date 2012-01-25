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
    
  $pattern = '/\/[A-Za-z0-9]*\.php/';
  $entity = preg_replace($pattern, '', $filename);
  $entity = str_ireplace('/Entity', '', $entity);
  echo   "php app/console doctrine:generate:entities $entity";
  
  exec("php app/console doctrine:generate:entities $entity");
}
?>