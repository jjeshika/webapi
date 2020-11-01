<?php
   $dir = 'Corporate Directory';
    if(!file_exists($dir))
    {
        if(mkdir($dir))
        {
            echo"directory created successfully.";
        }
        else
        {
            echo"Error: directory not created";
        }
    }
    else
    {
        echo"Directory exists already";
    }
?>