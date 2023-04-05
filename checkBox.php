
<?php 

    if ($_SERVER['REQUEST_METHOD']=='POST'){

        if(!empty($_POST['favorite'])){

           $favorite  = $_POST['favorite'];

            //  echo '<pre>';
        
             //     print_r($favorite);
           
            //  echo '</pre>';
           //  }

             // take one favorite:

             foreach ($favorite as $item){

                echo $item.'<br />';
             }
    }
}

      //  echo '<pre>';
        
      //      print_r($_GET);   // take the value from web browser

        //  echo '</pre>';

    if (!empty($_GET['favorite'])){

      $favorite = $_GET['favorite'];

    } esle{
         $favorite = [];
    }


?>


<form  method ="POST">

    <p>
        Favourite
    </p>


    <p>
        <input type = "checkbox" name ="favorite[]" value = "1" <?php echo (!empty($_POST['favorite']) && in_array(1, $_POST['favorite']))?'checked' : false; ?>> Favourite A
    </p>

    <p>
        <input type = "checkbox" name ="favorite[]" value = "2" <?php echo (!empty($_POST['favorite']) && in_array(2, $_POST['favorite']))?'checked' : false; ?>> Favourite B
    </p>


    <p>
        <input type = "checkbox" name ="favorite[]" value = "3" <?php echo (!empty($_POST['favorite']) && in_array(3, $_POST['favorite']))?'checked' : false; ?>> Favourite C
    </p>


    <p>
        <input type = "checkbox" name ="favorite[]" value = "4"<?php echo (!empty($_POST['favorite']) && in_array(4, $_POST['favorite']))?'checked' : false; ?>> Favourite D
    </p>

     <button type ="submit">Submit</button>


</form>
