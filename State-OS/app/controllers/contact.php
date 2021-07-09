<?php
include (ROOT_PATH . "/app/database/db.php");
include (ROOT_PATH . "/app/helpers/validateContact.php");
include (ROOT_PATH . "/app/helpers/middleware.php");
$table = 'contact';

$contact = selectAll($table);


$errors = array();
$name = '';
$email = '';
$project = '';
$message='';

//function to enyter message 
if(isset($_POST['submit_message']))
{
    
    $errors = validateContact($_POST);
    if(count($errors) === 0){
            
            unset($_POST['submit_message']);  
            $contact_id = create($table,$_POST);
            header('location:' . BASE_URL . "/index.php");
            exit();

    }else
    {
        $name = $_POST['name'] ;
        $email = $_POST['email'];
        $project = $_POST['project'];
        $message = $_POST['message'];

    }

}
