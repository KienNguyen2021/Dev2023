
<?php 


if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    // set a variable to place errors:
    $error = [];

    // validate full name :

    if (empty(trim($_POST['fullname']))){

        $error ['fullname']['required'] = " Your full name is empty, please fill in....";
     }
    else{
         if (strlen(trim($_POST['fullname'])) < 5 ) {

            $error ['fullname']['min'] = " Your full name is longer 5 letters....";

         }
    }

// Validate email :
    if (empty(trim($_POST['email']))){

        $error ['email']['required'] = " Your email is empty, please fill in....";
     }
    else{
         if (!filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL ) ) {

            $error ['email']['invalid'] = " Your email is invalid....";

         }
    }

    //validate Age :

    if (empty(trim($_POST['age']))){

        $error ['age']['required'] = " Your age is empty, please fill in....";
     }
    else{
         if (!filter_var(trim($_POST['age']), FILTER_VALIDATE_INT, ['options' => ['min_range' => 1]]) ) {

            $error ['age']['invalid'] = " Your age should be greater than 1 ...";

         }
    }

    echo '<pre>';

       print_r($error); 
    echo '</pre>';

    // if Error = empty, successful login !

    if(empty($error)){
        echo 'Validate successfully !';
    }
    else{
        echo 'Validate unsuccesfully !';
    }

}


?>



<form method = "POST" >

    <p>
         First name and last name : <br />
        <input type ="text" name = "fullname" placeholder=" Enter your full name" style="height:50px; width:250px" border = "2"/>

     <?php 
        

            echo (!empty($error['fullname']['required']))? '<span style = "color : red;">'.$error['fullname']['required'].'</span>' : false;


            echo (!empty($error['fullname']['min']))? '<span style = "color : red;">'.$error['fullname']['min'].'</span>' : false;

        ?>
    </p>

    <p>
        Email : <br />
        
        <input type ="text" name = "email" placeholder="Enter you email " style="height:50px; width:250px" border = "2"/>

        <?php 
        

        echo (!empty($error['email']['required']))? '<span style = "color : red;">'.$error['email']['required'].'</span>' : false;


        echo (!empty($error['email']['invalid']))? '<span style = "color : red;">'.$error['email']['invalid'].'</span>' : false;

    ?>
     
    </p>

    <p>
        Age : <br />
        <input type ="text" name = "age" placeholder="enter your age " style="height:50px; width:250px" border = "2"  value = "<?php echo (!empty($_POST['age']))? $_POST['age'] : false; ?>" />


        <?php 
        

        echo (!empty($error['age']['required']))? '<span style = "color : red;">'.$error['age']['required'].'</span>' : false;


        echo (!empty($error['age']['invalid']))? '<span style = "color : red;">'.$error['age']['invalid'].'</span>' : false;

    ?>

    </p>

    
    <p>
       
        <button type ="submit" style="height:50px; width:100px" border = "2"> Submit</button>
    </p>



</form>