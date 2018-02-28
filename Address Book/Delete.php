<?php
    require 'config.php';
    $user_ID = htmlspecialchars($_GET["id"]);
    $sql1 = "DELETE FROM user_address WHERE user_ID = $user_ID";
    $sql2 = "DELETE FROM user_contact WHERE user_ID = $user_ID";
    $sql3 = "DELETE FROM user_info WHERE user_ID = $user_ID";

    try {
        $stmt1 = $db->prepare($sql1);
        $stmt1->bindValue(":user_ID", $user_ID);

        $stmt1->execute();
        $res1 = $stmt1->rowCount();
        if ($res1 > 0) {
            $_SESSION["errorType"] = "success";
            $_SESSION["errorMsg"] = "Contact deleted successfully.";
        } else {
            $_SESSION["errorType"] = "info";
            $_SESSION["errorMsg"] = "Failed to delete contact.";
        }

        $stmt2 = $db->prepare($sql2);
        $stmt2->bindValue(":user_ID", $user_ID);

        $stmt2->execute();
        $res2 = $stmt2->rowCount();
        if ($res2 > 0) {
            $_SESSION["errorType"] = "success";
            $_SESSION["errorMsg"] = "Contact deleted successfully.";
        } else {
            $_SESSION["errorType"] = "info";
            $_SESSION["errorMsg"] = "Failed to delete contact.";
        }

        $stmt3 = $db->prepare($sql3);
        $stmt3->bindValue(":user_ID", $user_ID);

        $stmt3->execute();
        $res3 = $stmt3->rowCount();
        if ($res3 > 0) {
            $_SESSION["errorType"] = "success";
            $_SESSION["errorMsg"] = "Contact deleted successfully.";
        } else {
            $_SESSION["errorType"] = "info";
            $_SESSION["errorMsg"] = "Failed to delete contact.";
        }

    } catch (Exception $ex) {
        $_SESSION["errorType"] = "danger";
        $_SESSION["errorMsg"] = $ex->getMessage();
    }

    header("Location: Document.php");
?>
