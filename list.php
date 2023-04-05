
<?php 

    require_once'functionAfterValidate.php';

?>

<h1>Customer List </h1>

<hr />

<?php 

if (!empty($_GET['message'])){

    $messageCode = $_GET['message'];

    echo get_message($messageCode);

}

