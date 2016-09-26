<?php
   $cryptsy =  json_decode(file_get_contents("http://pubapi.cryptsy.com/api.php?method=singlemarketdata&marketid=155"));

   $exchange = $cryptsy->return->markets->DRK;

     //include('array_utils.php');
     //ArrayUtils::showArray($cryptsy);

   $volume = $exchange->volume;
   $currency = $exchange->primaryname;
   $label = $exchange->label;
   $last_trader = $exchange->lasttradetime;
   $recenttrades = $exchange->recenttrades;
   $price = $recenttrades[0]->price;

   $ticker =
   array(
     "label" => $label ,
     "currency" => $currency ,
     "volume" => $volume ,
     "lastrader" => $last_trader ,
     "price" => $price);

   $ticker = json_encode($ticker);


   echo $ticker;

?>
