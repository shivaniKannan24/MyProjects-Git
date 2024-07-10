
<?php
session_start();
include("db.php");
//echo "<script type='text/javascript'>alert('Hello')</script>";


if($_SERVER['REQUEST_METHOD']== 'POST')
{
    $u= $_POST['acc'];//username
    $a= $_POST['otp'];//new password 
    $query = "SELECT * FROM registration WHERE AccountNum='$u' AND otpval='$a'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) == 1) {
        // If a match is found, set session variables and redirect to dashboard
        $_SESSION['acc'] = $u;
        header("Location: update_user.php?user=" . urlencode($u)); 

    } else {
        // If no match is found, display an error message
        $error = "Invalid username or password";
    }
 
 
}

$home="homepage";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: linear-gradient(to right top, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .topic {
            height: 80px;
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
            position: relative;
        }

       

        h1 {
            font-size: 24px;
            margin: 0;
            display: inline-block; /* Ensures the home link and logo are aligned */
        }

        .form {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 5px;
            background-color: #f4f4f4;
            margin-top: 50px;
        }

        input[type="text"],
        input[type="password"],
        button {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .error {
            color: red;
            margin-bottom: 10px;
        }

        .option {
            margin-top: 20px;
            color: #333;
        }

        a {
            color: #333;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="topic">
        <!-- <img src="home.png" alt="Home Logo" class="home-logo">  -->
        <h1>OTP Verification</h1>
        <!-- <a href="homepage.html" class="home-link">&nbspHome</a> -->
    </div>
    <?php if(isset($error)) { ?>
        <h3 style="color:red;"><?php echo $error; ?></h3>
    <?php } ?>
    <form  method="POST" class="form">
        <h3>Confirmation</h3>
        <input type="text" name="acc" placeholder="Enter Account Number">
        <input type="text" name="otp" placeholder="Enter OTP">
        <button  type="submit">Submit</button>
    </form>
   
</body>

</html>
