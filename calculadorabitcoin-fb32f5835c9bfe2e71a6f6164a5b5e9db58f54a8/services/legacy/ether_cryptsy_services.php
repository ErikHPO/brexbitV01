<?php
   $cryptsy =  json_decode(file_get_contents("http://pubapi.cryptsy.com/api.php?method=singlemarketdata&marketid=504"));

   $exchange = $cryptsy->return->markets->ETH;

  /* print "<pre>" ;
   print_r($cryptsy) ;
   print "<pre/>";
   exit;*/

   $volume = $exchange->volume;
   $label = $exchange->label;
   $primary_name = $exchange->primaryname;
   $last_trader = $exchange->lasttradetime;
   $recenttrades = $exchange->recenttrades;
   $price = $recenttrades[0]->price;

   $ticker =
   array(
     "label" => $label,
     "currency" => $primary_name ,
     "volume" => $volume ,
     "lastrader" => $last_trader ,
     "price" => $price);

   $ticker = json_encode($ticker);


   echo $ticker;

?>
