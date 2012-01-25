#!/usr/bin/php
<?php

while ($inp = fread(STDIN,8192)) {   
$string .= $inp;  
} 

$sitepath = getenv('CODA_SITE_LOCAL_PATH');

if ($sitepath) {
  chdir($sitepath);
  
  if (substr($string, 0, 1) == '\\') {
  	$string = substr_replace($string, '', 0, 1);
  }    
  
  $entity =  str_ireplace('\\', '/', $string);  
    
  exec("php app/console doctrine:generate:entities $entity", $out);
  
  foreach ($out as $key => $value) {
  	echo $value . "<br/>\n";
  }
}
?>