<?php  
require_once __DIR__ . '/config.php';
class API{
    function Select(){
        $db = new connect;
        $users = array();
        $data = $db->prepare('SELECT * FROM `users` WHERE Id');
        $data->execute();
        while($OutputData = $data->fetch(PDO::FETCH_ASSOC)){
            $users[$OutputData['id']] = array()
        }
    }
}

?>