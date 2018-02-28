<?php
    try{
        include ("config.php");
        if(isset($_POST['user_submit'])){
            if(isset($_POST['user_first_name']))
                $user_first_name = $_POST['user_first_name'];
            if(isset($_POST['user_last_name']))
                $user_last_name = $_POST['user_last_name'];
            if(isset($_POST['user_name']))
                $user_name = $_POST['user_name'];
            if(isset($_POST['user_email']))
                $user_email = $_POST['user_email'];
            if(isset($_POST['user_gender']))
                $user_gender = $_POST['user_gender'];
            if(isset($_POST['user_region']))
                $user_region = $_POST['user_region'];
            if(isset($_POST['user_blood_group']))
                $user_blood_group = $_POST['user_blood_group'];
            if(isset($_POST['user_birthday_day']))
                $user_birthday_day = $_POST['user_birthday_day'];
            if(isset($_POST['user_birthday_month']))
                $user_birthday_month = $_POST['user_birthday_month'];
            if(isset($_POST['user_birthday_year']))
                $user_birthday_year = $_POST['user_birthday_year'];
            if(isset($_POST['user_city']))
                $user_city = $_POST['user_city'];
            if(isset($_POST['user_post_code']))
                $user_post_code = $_POST['user_post_code'];
            if(isset($_POST['user_district']))
                $user_district = $_POST['user_district'];
            if(isset($_POST['user_country']))
                $user_country = $_POST['user_country'];
            if(isset($_POST['user_phone_no']))
                $user_phone_no = $_POST['user_phone_no'];
            if(isset($_POST['user_ID']))
                $user_ID = $_POST['user_ID'];
            if(isset($_POST['user_password']))
                $user_password = $_POST['user_password'];
        
            $sql = "UPDATE user_address SET user_ID = :user_ID, user_country = :user_country, user_city = :user_city, user_district = :user_district, user_post_code = :user_post_code, user_region = :user_region WHERE user_ID = :user_ID";
            $statement = $db->prepare($sql);
            $statement->bindParam(':user_ID', $_POST['user_ID'], PDO::PARAM_STR);       
            $statement->bindParam(':user_country', $_POST['user_country'], PDO::PARAM_STR);    
            $statement->bindParam(':user_city', $_POST['user_city'], PDO::PARAM_STR);
            // use PARAM_STR although a number  
            $statement->bindParam(':user_district', $_POST['user_district'], PDO::PARAM_STR); 
            $statement->bindParam(':user_post_code', $_POST['user_post_code'], PDO::PARAM_STR);
            $statement->bindParam(':user_region', $_POST['user_region'], PDO::PARAM_STR);
            $count = $statement->execute();

            $sql = "UPDATE user_contact SET user_ID = :user_ID, user_phone_no = :user_phone_no, user_email = :user_email, user_password = :user_password WHERE user_ID = :user_ID";
            $statement = $db->prepare($sql);
            $statement->bindParam(':user_ID', $_POST['user_ID'], PDO::PARAM_STR);       
            $statement->bindParam(':user_phone_no', $_POST['user_phone_no'], PDO::PARAM_STR);    
            $statement->bindParam(':user_email', $_POST['user_email'], PDO::PARAM_STR);
            // use PARAM_STR although a number  
            $statement->bindParam(':user_password', $_POST['user_password'], PDO::PARAM_STR);
            $count = $statement->execute();

            $sql = "UPDATE user_info SET user_ID = :user_ID, user_name = :user_name, user_blood_group = :user_blood_group, user_birthday_day = :user_birthday_day, user_birthday_month = :user_birthday_month, user_birthday_year = :user_birthday_year WHERE user_ID = :user_ID";
            $statement = $db->prepare($sql);
            $statement->bindParam(':user_ID', $_POST['user_ID'], PDO::PARAM_STR);       
            $statement->bindParam(':user_name', $_POST['user_name'], PDO::PARAM_STR);    
            $statement->bindParam(':user_blood_group', $_POST['user_blood_group'], PDO::PARAM_STR);
            // use PARAM_STR although a number  
            $statement->bindParam(':user_birthday_day', $_POST['user_birthday_day'], PDO::PARAM_STR); 
            $statement->bindParam(':user_birthday_month', $_POST['user_birthday_month'], PDO::PARAM_STR);   
            $statement->bindParam(':user_birthday_year', $_POST['user_birthday_year'], PDO::PARAM_INT);
            $count = $statement->execute();
            
            $message = "Thanks! information is Saved successfully.";
            echo "<script type='text/javascript'>alert('$message');</script>";
            //throw new Exception("Thanks! information is Saved.!");
            
            header("Location: Document.php?id=".$user_ID);
            exit;
        }
    }catch(Exception $e) {
        $error_message = $e->getMessage();
        echo($error_message);
    }
?>
