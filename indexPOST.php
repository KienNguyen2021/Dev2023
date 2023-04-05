
<?php 

echo '<pre>';

    print_r($_POST);

echo '</pre>';

//if(!empty($_POST)){         
  //  $username = $_POST ['username'];
    // $email  = $_POST ['email'];

    // echo $email.'<br />';
    // echo $username;
//}

// Submit name ="submit" :

//if(isset($_POST['submit'])){         

  //  $username = $_POST ['username'];
    // $email  = $_POST ['email'];

    // echo $email.'<br />';
    // echo $username;
//}

//?>



if($_SERVER['REQUEST_METHOD'] =='POST'){         

    $username = $_POST ['username'];
    $email  = $_POST ['email'];

    echo $email.'<br />';
    echo $username;
}
?>

<form method = "post" action ="" >

    <p>
        <input type = "text" name ="username" width = "50%" placeholder =" Username..."/>
    </p>


    <p>
        <input type = "email" name ="email" placeholder =" Email..."/>
    </p>


  <p>
    <button type ="submit" name ="submit"> Submit</button>
  </p>



</form>

