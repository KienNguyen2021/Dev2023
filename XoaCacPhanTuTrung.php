<html>
    <head>
        <meta charset ="utf-8" />
        <title> Customer </title>
    </head>

    <body>

    <?php 

        $customerArr = [

             [
            'name' => 'Kien Nguyen',
            'email' => 'kien.nguyen@hotmail.com',
            'phone' => '84 1245467',
            'address' => '123 Q1 Saigon'
              ],
          [
            'name' => 'Thu Pham',
            'email' => 'thu.pham@hotmail.com',
            'phone' => '84 1245467',
            'address' => '123 Vung Tau'
           ],

          [
            'name' => 'Nhu  Huynh',
            'email' => 'nhu.huynh@hotmail.com',
            'phone' => '84 1245467',
            'address' => '123  Nha Trang'
          ],

          [
            'name' => 'Nhu Huynh',
            'email' => 'nhu.huynh@hotmail.com',
            'phone' => '84 1245467',
            'address' => '123  Vinh Long'
          ],

          [
            'name' => 'Kien Nguyen',
            'email' => 'kien.nguyen@hotmail.com',
            'phone' => '84 1245467',
            'address' => '123 Q1 Saigon'
              ]
    ];

if (!empty($customerArr)) {

    $indexDuplicate = [];      //Luu tru cac Index giong nhau

    for ($i = 0; $i < count($customerArr)-1 ; $i++){
        for ($j = $i +1; $j <count($customerArr); $j++){

            if ($customerArr [$i]['email'] == $customerArr[$j]['email']){

                  $indexDuplicate []= $j;
            }
        }
    }

         if (!empty($customerArr)){

              foreach ($indexDuplicate as $index){
                   if (isset($customerArr[$index])){

                      unset($customerArr[$index]);

                 }
            }
         }

    }

?>

    <table width ="100%" border ="1" cellpadding ="1" cellspacing = "1">
        <thead>
           <tr>

               <th width ="5%"> STT</th>
               <th> Ho Ten </th>
               <th>  Email </th>
               <th>  Dien thoai </th>
               <th> Dia chi </th>

           </tr>
    </thead>   

 <tbody>
    <?php      // Tang so thu tu
      
      if (!empty($customerArr) && is_array($customerArr)):

            $STT = 0;        // Tang STT
            foreach($customerArr as $item) :
                 $STT++;
    ?>
         <tr>
            <td><?php echo $STT ?></td>
            <td><?php echo $item['name']; ?></td>
            <td><?php echo $item['email']; ?></td>
            <td><?php echo $item['phone']; ?></td>
            <td><?php echo $item['address']; ?></td>

          </tr>

    <?php  endforeach; endif;   ?>   
</tbody>  
           
</table>

</body>

</html>