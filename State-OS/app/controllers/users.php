<?php
include (ROOT_PATH . "/app/database/db.php");
include (ROOT_PATH . "/app/helpers/validateUser.php");
include (ROOT_PATH . "/app/helpers/middleware.php");

$table = 'users';

$users = selectAll($table);


$errors = array();
$firstname = '';
$secondname = '';
$password = '';
$email = '';
$passwordConf = '';
$status='';
$user_id = '';
$activity = '';


//function to store user data into the session and log in
function loginUser($user)
{
    //$activity = create('login_details', ['user_id'=> $user['id']] );
    //$visitor = $_SERVER['REMOTE_ADDR'];
    //$_SESSION['login_details_id'] = $activity;
    $_SESSION['id'] = $user['id'];
    $_SESSION['first_name'] = $user['first_name'];
    $_SESSION['second_name'] = $user['second_name'];
    $_SESSION['admin'] = $user['admin'];

    $_SESSION['msg'] = 'You are now logged in';
    $_SESSION['type'] = 'alert-success';

    //$activity_id = create('activity',['user_id'=>$user['id'], 'username'=>$user['username'], 'ip_address' => $visitor , 'activity' => 'User Login']);

    header('location: ' .BASE_URL . '/dashboard/dashboard.php');

    exit();
}

//function to register user
if(isset($_POST['register']) || isset($_POST['create-admin']))
{
    
    $errors = validateUser($_POST);
    if(count($errors) === 0){
        unset($_POST['register'], $_POST['passwordConf'], $_POST['create-admin']);
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        

        if (isset($_POST['admin']))
        {
            $_POST['admin'] = 1;
            $user_id = create($table,$_POST);
            $_SESSION['message'] = 'Admin User Created successfully!';
            $_SESSION['type'] = 'success';
            header('location:' . BASE_URL . "/admin/users/index.php");
            exit();

        }else
        {
            $_POST['admin'] = 0;

            //dd($_POST);

            $user_id = create($table,$_POST);
            $user = selectOne($table,['id' => $user_id]);

            //log user in
            loginUser($user);

        }


    }else
    {
        $firstname = $_POST['first_name'] ;
        $secondname = $_POST['second_name'] ;
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConf = $_POST['passwordConf'];
        $admin = isset($_POST['admin']) ? 1 : 0;

    }

}

//LOGIN CODE
if (isset($_POST['login']))
{
    $errors = validateLogin($_POST);

    if (count($errors) === 0)
    {
        $user = selectOne($table,['email' => $_POST['email']]);

        if ($user && password_verify($_POST['password'], $user['password']))
        {
            //login user, redirect
            loginUser($user);

        }else
        {
            array_push($errors, 'Invalid Username or Password');
          
        }
    }

    $email = $_POST['email'];
    $password = $_POST['password'];


}


//update individual information
if (isset($_POST['update-user-details']))
{
    $errors = validateUser($_POST);
        if (!empty($_FILES['image']['name']))
        {
            $image_name =time() . '_' . $_FILES['image']['name'];
            $destination = ROOT_PATH . "/assets/img/" . $image_name;

            $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

            if ($result)
            {
                $_POST['image'] = $image_name;
                $_POST['assigned_image'] = 1;
            }else
            {
                array_push($errors,'failed to upload the Profile Image');

            }
        }else
        {
            $_POST['image'] = '';
            $_POST['assigned_image'] = 0;

        }
        if (count($errors) === 0)
        {

            $id = $_POST['id'];
            $new_data = selectOne($table,['id' => $id]);
            $_SESSION['id'] = $new_data['id'];
            $_SESSION['username'] = $new_data['username'];
            $_SESSION['admin'] = $new_data['admin'];
            $_SESSION['su_admin'] = $new_data['su_admin'];
            $_SESSION['assigned_image'] = $new_data['assigned_image'];

            unset($_POST['update-user-details'], $_POST['id'],$_POST['passwordConf']);
            $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $_POST['status'] = htmlentities($_POST['status']);
            $user_id = update($table, $id, $_POST);
            $_SESSION['msg'] = 'User Details Updated Successfully';
            $_SESSION['type'] = 'success';
            header('location:' . BASE_URL . "/dashboard/users/view.php");
            exit();

        }else
        {
            $id = $_POST['id'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $passwordConf = $_POST['passwordConf'];
            $status = $_POST['status'];
        }
        /*    dd($_POST);*/

}

//update information
if (isset($_POST['update-user']))
{
    $errors = validateUser($_POST);
    if (!empty($_FILES['image']['name']))
    {
        $image_name =time() . '_' . $_FILES['image']['name'];
        $destination = ROOT_PATH . "/assets/img/" . $image_name;

        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

        if ($result)
        {
            $_POST['image'] = $image_name;
            $_POST['assigned_image'] = 1;
        }else
        {
            array_push($errors,'failed to upload the Profile Image');

        }
    }else
    {
        $_POST['image'] = '';
        $_POST['assigned_image'] = 0;

    }
    if (count($errors) === 0)
    {

        $id = $_POST['id'];
        unset($_POST['update-user'], $_POST['id'],$_POST['passwordConf']);
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $_POST['status'] = htmlentities($_POST['status']);
        $_POST['admin'] = isset($_POST['admin']) ? 1 : 0;
        $user_id = update($table, $id, $_POST);
        $_SESSION['msg'] = 'User Details Updated Successfully';
        $_SESSION['type'] = 'success';
        header('location:' . BASE_URL . "/dashboard/users/index.php");
        exit();

    }else
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $passwordConf = $_POST['passwordConf'];
        $status = $_POST['status'];
        $admin = isset($_POST['admin']) ? 1 : 0;
    }
    /*    dd($_POST);*/

}

//add user
if (isset($_POST['add-user']))
{
    $errors = validateUser($_POST);
    if (!empty($_FILES['image']['name']))
    {
        $image_name =time() . '_' . $_FILES['image']['name'];
        $destination = ROOT_PATH . "/assets/img/" . $image_name;

        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

        if ($result)
        {
            $_POST['image'] = $image_name;
            $_POST['assigned_image'] = 1;
        }else
        {
            array_push($errors,'failed to upload the Profile Image');

        }
    }else
    {
        $_POST['image'] = '';
        $_POST['assigned_image'] = 0;

    }
    if (count($errors) === 0)
    {
        unset($_POST['add-user'],$_POST['passwordConf']);
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $_POST['status'] = htmlentities($_POST['status']);
        $_POST['admin'] = isset($_POST['admin']) ? 1 : 0;
        $user_id = create($table,$_POST);
        $_SESSION['msg'] = 'User Created successfully!';
        $_SESSION['type'] = 'success';
        header('location:' . BASE_URL . "/dashboard/users/index.php");
        exit();

    }else
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $passwordConf = $_POST['passwordConf'];
        $status = $_POST['status'];
        $admin = isset($_POST['admin']) ? 1 : 0;
    }

    /*    dd($_POST);*/

}


//edit  user by ID
if (isset($_GET['id']))
{
    $user = selectOne($table, ['id' => $_GET['id']]);
    $user_id = $user['id'];
    $username = $user['username'] ;
    $email = $user['email'];
    $admin = $user['admin'];
    $status = $user['status'];
    $admin = isset($user['admin']) ? 1 : 0;
}
//delete admin user function
if (isset($_GET['del_id']))
{
    su_adminOnly();
    $count = delete($table, $_GET['del_id']);
    $_SESSION['msg'] = 'User Deleted successfully!';
    $_SESSION['type'] = 'success';
    header('location:' . BASE_URL . "/dashboard/users/index.php");
    exit();
}



