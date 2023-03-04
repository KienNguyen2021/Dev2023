<html>
    <head>
        <meta charset ="utf-8" />
        <title> Customer </title>
    </head>

    <body>

    <?php 

        $customerArr = [

    //         [
     //         'name' => 'Kien Nguyen',
     //         'email' => 'kien.nguyen@hotmail.com',
    //          'phone' => '84 1245467',
     //         'address' => '123 Q1 Saigon'
     //           ],
     //       [
       //       'name' => 'Thu Pham',
    //          'email' => 'thu.pham@hotmail.com',
     //         'phone' => '84 1245467',
    //          'address' => '123 Vung Tau'
     //        ],

     //       [
     //         'name' => 'Nhu  Huynh',
    //          'email' => 'nhu.huynh@hotmail.com',
    //          'phone' => '84 1245467',
     //         'address' => '123  Nha Trang'
       //     ],
//  
    //        [
      //        'name' => 'Kien Nguyen',
    //          'email' => 'kien.nguyen@hotmail.com',
      //        'phone' => '84 1245467',
     //         'address' => '123 Q1 Saigon'
      //          ]
    ];



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
    <?php 
      
      if (!empty($customerArr) && is_array($customerArr)):

            $STT = 0;
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


    <?php  endforeach; else:  ?>   
     
        <tr>
            <td colspan ="5" style = "text-align: center" > Khong co du lieu

            </td>
            
        </tr>

    <?php endif; ?>    

</tbody>  
           
</table>

</body>

</html>