<?php
   $cryptsy =  json_decode(file_get_contents("http://pubapi.cryptsy.com/api.php?method=marketdatav2"));

   print "<pre>" ;
   print_r($cryptsy) ;
   print "<pre/>";
?>
