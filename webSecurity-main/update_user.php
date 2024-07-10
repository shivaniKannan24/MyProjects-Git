<?php
session_start();
include("db.php");

$query = "SELECT * FROM request_table";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update_Request</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
}

.container {
    margin: 0 auto;
    width: 80%;
    padding: 20px;
}

.card {
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    padding: 20px;
    margin-bottom: 20px;
}

.card-header {
    background-color: #f0f0f0;
    padding: 10px 0;
    border-bottom: 1px solid #ddd;
}

.card-body {
    padding-top: 20px;
}

.table {
    width: 100%;
    border-collapse: collapse;
}

.table th, .table td {
    padding: 10px;
    border-bottom: 1px solid #ddd;
}

.topic {
    background-color: #007bff;
    color: #fff;
}

.btn {
    background-color: #fff;
    border: 1px solid #007bff;
    color: #007bff;
    padding: 5px 10px;
    text-decoration: none;
    border-radius: 5px;
}

.btn:hover {
    background-color: #007bff;
    color: #fff;
}

    </style>
<body>
    <div class="data">
        <form  method="POST" enctype="multipart/form-data">
            <center><h3 id="title">User Details</h3></center> 
            <hr>
            <?php 
            if ($result && mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="container">
                <div class="row mt-5">
                    <div class="col">
                        <div class="card mt-5">
                            <div class="card-header">
                                <center><h3 class="head">Requests From Customers</h3></center> 
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered text-center">
                                    <tr class="topic">
                                        <td>S.NO.</td>
                                        <td>FieldName</td>
                                        <td>Account number</td>
                                        <td>Existing Value</td>
                                        <td>New Value</td>
                                        <td>OTP</td>
                                        <td>Update</td>
                                    </tr>
                                    <tr>
                                        <td><?php echo $row['SI_no'] ?></td>
                                        <td><?php echo $row['FieldName'] ?></td>
                                        <td><?php echo $row['AccountNumber'] ?></td>
                                        <td><?php echo $row['ExistingValue'] ?></td>
                                        <td><?php echo $row['NewValue'] ?></td>
                                        <td>
                                            <button class="btn otp-btn" name="id">
                                            <a style="text-decoration:None;" href="otp_send.php?acc=<?php echo $row['AccountNumber']; ?>">Send OTP</a>
                                            </button>
                                       
                                        </td>
                                        <td>
                                            <button class="btn" name="id">
                                                <a href="request_delete.php?id=<?php echo $row['SI_no']; ?>&field=<?php echo $row['FieldName'] ?>&acc=<?php echo $row['AccountNumber'] ?>&old=<?php echo $row['ExistingValue'] ?>&new=<?php echo $row['NewValue'] ?>">Update</a>
                                            </button>
                                        </td>
                                    </tr>
                                </table>
                                <br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                }
            } else {
                echo "No data available.";
            }
            ?>
        </form>
    </div>
</body>
</html>
