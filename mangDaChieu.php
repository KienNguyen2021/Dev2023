<?php 



$custArr = ['Today is sunday, it is relaxing.......', '1234455555', 'status : '];

if(!empty($custArr) && is_array($custArr)){

    foreach ($custArr as $key => $value)
       {

            echo $value.'<br/>';
      }
   } 
else
   {
    echo "Mang nay khong hop le ! <br />" ;

    }

?>

<?php 

$customArray = [
    'Kien ',
    'phone',
    'true',
    'address'
];

for ($i = 0; $i < count($customArray); $i++){


    if (isset($customArray[$i])){

        var_dump($customArray[$i]) .'<br />';
    }
}


?>