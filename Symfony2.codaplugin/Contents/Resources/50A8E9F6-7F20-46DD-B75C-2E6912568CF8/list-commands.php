#!/usr/bin/php
<?php

$sitepath = getenv('CODA_SITE_LOCAL_PATH');

if ($sitepath) {
  chdir($sitepath);
    
  exec("php app/console list", $out);
  echo "<pre>";
  foreach ($out as $key => $value) {
    	echo $value . "\n";
    }
  echo "</pre>";
}
?>