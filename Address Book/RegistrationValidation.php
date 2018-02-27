<?php

    try{
        include ("config.php");
        
        if(isset($_POST['user_submit'])){
            if(empty($_POST['user_first_name'])){
                $error_message = ("Give your first name");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
                
                
            }
            else if(empty($_POST['user_last_name'])){
                $error_message = ("Give your last name");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
                
                
            }
            else if(empty($_POST['user_email'])){
                $error_message = ("Give your email ID");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
                
                
            }
            else if(empty($_POST['user_ID'])){
                $error_message = ("Give your ID");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
                
                
            }
            else if(empty($_POST['user_password'])){
                $error_message = ("Give your password");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
                
                
            }
            else if(empty($_POST['user_password_temp'])){
                $error_message = ("Re-write your password");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
                
                
            }
            else if(($_POST['user_password']) != ($_POST['user_password_temp'])){
                $error_message = ("Password didn't match");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
                
                
            }
            else if(empty($_POST['user_gender'])){
                $error_message = ("Give your gender");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
                
                
            }
            else if(empty($_POST['user_region'])){
                $error_message = ("Give your region");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
                
                
            }
            else if(empty($_POST['user_blood_group'])){
                $error_message = ("Give your blood_group");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
                
                
            }
            else if(empty($_POST['user_birthday_day'])){
                $error_message = ("Give your user_birthday_day");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
                
                
            }
            else if(empty($_POST['user_birthday_month'])){
                $error_message = ("Give your user_birthday_month");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
                
                
            }
            else if(empty($_POST['user_birthday_year'])){
                $error_message = ("Give your user_birthday_year");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
                
                
            }
            else if(empty($_POST['user_city'])){
                $error_message = ("Give your city");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
                
                
            }
            else if(empty($_POST['user_country'])){
                $error_message = ("Give your country");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
                
                
            }
            else if(empty($_POST['user_phone_no'])){
                $error_message = ("Give your phone_no");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
                
                
            }
            else{
                
//                session_start();
//                $user_ID = "";
//                $user_password = "";
                
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
                
                $statement = $db->prepare("INSERT INTO user_address 
				(
					user_ID,
					user_country, 
					user_city, 
					user_district,
                    user_post_code,
                    user_region
				) 
				VALUES (?,?,?,?,?,?)");
				$statement->execute(array(		
					$user_ID,
					$user_country,
					$user_city,
					$user_district,
                    $user_post_code,
                    $user_region
				));	
                $statement = $db->prepare("INSERT INTO user_contact 
				(
					user_ID, 
					user_phone_no,
					user_email,
					user_password
				) 
				VALUES (?,?,?,?)");
				$statement->execute(array(		
					$user_ID,
					$user_phone_no,
					$user_email,
					$user_password
				));	
                $statement = $db->prepare("INSERT INTO user_info 
				(
					user_ID, 
					user_name, 
					user_blood_group, 
					user_birthday_day,
                    user_birthday_month,
                    user_birthday_year
				)
				VALUES (?,?,?,?,?,?)");
				$statement->execute(array(		
					$user_ID,
					$user_name,
					$user_blood_group,
					$user_birthday_day,
                    $user_birthday_month,
                    $user_birthday_year
				));	
														
				$message = "Thanks! information is Saved successfully.";
				echo "<script type='text/javascript'>alert('$message');</script>";
				//throw new Exception("Thanks! information is Saved.!");
                
                header("Location: Document.php");
                exit;
            }
        }
    }catch(Exception $e) {
        $error_message = $e->getMessage();
        echo($error_message);
    }
?>
