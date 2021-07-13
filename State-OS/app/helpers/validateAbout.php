<?php

function validateAbout( $aboutus)
{
    $errors = array();
    if(empty($aboutus['title']))
    {
        array_push($errors, 'title required ');
    }
    if(empty($aboutus['subtitle']))
    {
        array_push($errors, 'subtitle is required');
    }
    if(empty($aboutus['content']))
    {
        array_push($errors, 'content is required');
    }
    
    return $errors;

}