<?php
    require 'config.php';
    try{
        if(empty($_POST['user_ID'])){
            $user_ID = htmlspecialchars($_GET["id"]);
            $error_message = ("Give your ID");
            echo "<script type='text/javascript'>alert('$error_message');</script>";
        }
        else{
            $user_ID = $_POST['user_ID'];
        }
        $statement1 = $db->prepare("SELECT user_ID FROM user_info WHERE user_ID = $user_ID");
        $statement1->execute();	
        $result1 = $statement1->fetchAll(PDO::FETCH_OBJ);

        $statement2 = $db->prepare("SELECT user_name FROM user_info WHERE user_ID = $user_ID");
        $statement2->execute();	
        $result2 = $statement2->fetchAll(PDO::FETCH_OBJ);

        $statement3 = $db->prepare("SELECT user_birthday_day FROM user_info WHERE user_ID = $user_ID");
        $statement3->execute();	
        $result3 = $statement3->fetchAll(PDO::FETCH_OBJ);

        $statement4 = $db->prepare("SELECT user_birthday_month FROM user_info WHERE user_ID = $user_ID");
        $statement4->execute();	
        $result4 = $statement4->fetchAll(PDO::FETCH_OBJ);

        $statement5 = $db->prepare("SELECT user_birthday_year FROM user_info WHERE user_ID = $user_ID");
        $statement5->execute();	
        $result5 = $statement5->fetchAll(PDO::FETCH_OBJ);

        $statement6 = $db->prepare("SELECT user_blood_group FROM user_info WHERE user_ID = $user_ID");
        $statement6->execute();	
        $result6 = $statement6->fetchAll(PDO::FETCH_OBJ);

        $statement7 = $db->prepare("SELECT user_phone_no FROM user_contact WHERE user_ID = $user_ID");
        $statement7->execute();	
        $result7 = $statement7->fetchAll(PDO::FETCH_OBJ);

        $statement8 = $db->prepare("SELECT user_email FROM user_contact WHERE user_ID = $user_ID");
        $statement8->execute();	
        $result8 = $statement8->fetchAll(PDO::FETCH_OBJ);

        $statement9 = $db->prepare("SELECT user_city FROM user_address WHERE user_ID = $user_ID");
        $statement9->execute();	
        $result9 = $statement9->fetchAll(PDO::FETCH_OBJ);

        $statement10 = $db->prepare("SELECT user_district FROM user_address WHERE user_ID = $user_ID");
        $statement10->execute();	
        $result10 = $statement10->fetchAll(PDO::FETCH_OBJ);

        $statement11 = $db->prepare("SELECT user_region FROM user_address WHERE user_ID = $user_ID");
        $statement11->execute();	
        $result11 = $statement11->fetchAll(PDO::FETCH_OBJ);

        $statement12 = $db->prepare("SELECT user_post_code FROM user_address WHERE user_ID = $user_ID");
        $statement12->execute();	
        $result12 = $statement12->fetchAll(PDO::FETCH_OBJ);

        $statement13 = $db->prepare("SELECT user_country FROM user_address WHERE user_ID = $user_ID");
        $statement13->execute();	
        $result13 = $statement13->fetchAll(PDO::FETCH_OBJ);
    }catch (Exception $ex) {
        echo $ex->getMessage();
    }
?>
