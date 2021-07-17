<?php

function validateServices( $services)
{
    $errors = array();
    if(empty($services['recording']))
    {
        array_push($errors, 'recording content required ');
    }
    if(empty($services['mixing']))
    {
        array_push($errors, 'mixing and mastering content required');
    }
    if(!empty($services['space_booking']))
    {
        array_push($errors, 'space booking content required');
    }
    
    return $errors;

}