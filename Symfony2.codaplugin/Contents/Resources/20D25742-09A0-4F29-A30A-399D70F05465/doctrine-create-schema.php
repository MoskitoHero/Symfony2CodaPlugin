#!/usr/bin/php
<?php

$sitepath = getenv('CODA_SITE_LOCAL_PATH');

if ($sitepath) {
  chdir($sitepath);
    
  exec("php app/console doctrine:schema:create", $out);
  
  foreach ($out as $key => $value) {
    	echo $value . "<br/>\n";
    }
}
?>