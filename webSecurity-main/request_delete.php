<?php
session_start();
include("db.php");

if(isset($_GET['id'], $_GET['field'], $_GET['acc'], $_GET['old'], $_GET['new'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $fieldname = mysqli_real_escape_string($conn, $_GET['field']);
    $acc = mysqli_real_escape_string($conn, $_GET['acc']);
    $old = mysqli_real_escape_string($conn, $_GET['old']);
    $new = mysqli_real_escape_string($conn, $_GET['new']);

    $query = "UPDATE registration SET `$fieldname` = '$new' WHERE AccountNum = '$acc' AND `$fieldname` = '$old'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $query1 = "DELETE FROM request_table WHERE `SI_no` = '$id'";
        $result1 = mysqli_query($conn, $query1);

        if ($result1) {
            header("Location: update_user.php");
            exit();
        } else {
            echo "Error deleting request: " . mysqli_error($conn);
        }
    } else {
        echo "Error updating registration: " . mysqli_error($conn);
    }
} else {
    echo "One or more parameters are missing.";
}
?>
