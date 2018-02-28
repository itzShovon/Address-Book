<?php
    require 'config.php';
    try{
        $i=0;												
        $statement1 = $db->prepare("SELECT user_address.user_city FROM user_address");
        $statement1->execute();												
        $result1 = $statement1->fetchAll(PDO::FETCH_OBJ);		
        $statement2 = $db->prepare("SELECT user_contact.user_ID, user_contact.user_email, user_contact.user_phone_no FROM user_contact");
        $statement2->execute();												
        $result2 = $statement2->fetchAll(PDO::FETCH_OBJ);		
        $statement3 = $db->prepare("SELECT user_info.user_name FROM user_info");
        $statement3->execute();												
        $result3 = $statement3->fetchAll(PDO::FETCH_OBJ);
    }
    catch (Exception $ex) {
        echo $ex->getMessage();
    }
    
    $user_ID = "";
    $user_ID = htmlspecialchars($_GET["id"]);
    $temp =  0;

    foreach($result2 as $row){
        if($row->user_ID == $user_ID)
            $temp = 1;
    }
    if($temp == 0)
        header('Location: Default.php');
?>
