<?php

function validateContact( $contact)
{
    $errors = array();
    if(empty($contact['name']))
    {
        array_push($errors, 'name required ');
    }
    if(empty($contact['email']))
    {
        array_push($errors, 'email is required');
    }
    if(empty($contact['project']))
    {
        array_push($errors, 'Project title is required');
    }
    if(empty($contact['message']))
    {
        array_push($errors, 'message is required');
    }  
    return $errors;

}