<?php 

$demoArr = [
  1,
  4,
  6,
  12,
  3,
  66,
  34,
  19,
  33,
  8,
  29,
  40
];

echo '<pre>';
 
    print_r($demoArr);

echo '</pre>';

//find max number

if (!empty($demoArr)){

   $max = $demoArr [0];  // support Max is the first element in Array, now compare

    foreach ($demoArr as $key =>$item){

       if ($max <= $item){

          $max = $item;

         //  $max = $key;

        }


      echo 'The index: '.$key. ' and its value :'.$item.'<br />';
    }
      echo '<hr />';

   echo ' The max value : ' .$max. ' and its index : '. $key;



};

