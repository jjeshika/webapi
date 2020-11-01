<?php
class connect extends PDO{
    
    function __construct(){
  
            parent:: __construct($config['MariaDB'].':host='.config['localhost'].';dbname=' .$config['api'],$config['root'],$config['']);
             $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
        }
       
    }

?>