<?php
 $item1 = [

    'name' => 'Kien Nguyen',
    'email'=> 'kien.nguyen@yahoo.ca',
    'address'=> ' 22 Q3 Saigon',
    'phone' => '84 222 111559'

 ];
 $item2 = [

    'name' => 'Thu Pham',
    'email'=> 'thu.nguyen@yahoo.ca',
    'address'=> ' 22 Q3 Hue',
    'phone' => '84 222 111559'

 ];

 $customArr = [
    $item1,
    $item2,
 ];
 
 echo '<pre>';
 
    print_r($customArr);
 
 echo '</pre>';

 ?>


<?php 
 
 $item = [
    [
        'name'   => 'Thu Pham',
        'email' => 'thu.nguyen@yahoo.ca',
        'address' => ' 22 Q3 Hue',
        'phone'  => '84 222 111559'
    
    ],

    [
        'name'  => 'Thu Pham',
        'email' => 'thu.nguyen@yahoo.ca',
        'address' => ' 22 Q3 Hue',
        'phone' => '84 222 111559'
    
    ],

    [
        'STATUS'  => 'successful',
    ],
    [
        3000
    ]
];

echo '<pre>';
 
    print_r($item);

echo '</pre>';

?>