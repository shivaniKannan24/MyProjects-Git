
<?php
session_start();
include("db.php");
//echo "<script type='text/javascript'>alert('Hello')</script>";


if($_SERVER['REQUEST_METHOD']== 'POST')
{
    $u= $_POST['user'];//username
    $a= $_POST['pass'];//new password 
    $query = "SELECT * FROM login WHERE Username='$u' AND  Password='$a'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) == 1) {
        // If a match is found, set session variables and redirect to dashboard
        $_SESSION['user'] = $u;
        header("Location: view1.php?user=" . urlencode($u)); 

    } else {
        // If no match is found, display an error message
        $error = "Invalid username or password";
    }
 //mysqli_query($conn,$query);
 /* $u=stripcslashes($u);
  $a=stripcslashes($a);
  $u=mysqli_real_escape_string($conn,$u);
  $a=mysqli_real_escape_string($conn,$a);

  $query="select * from login where Username='$u' and Password='$a'";
  $query_run=mysqli_query($conn,$query);
  $count=mysqli_num_rows($query_run);
  $row=mysqli_fetch_assoc($query_run);
 if($count>0){
    echo "Login successful.";
    header("Location: view1.php?username=" . urlencode($u));
 }
 else{
    echo "Login failed";
 }*/
 
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
        }

        h1 {
            font-size: 24px;
            margin: 0;
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
        <h1>Bank Management System</h1>
    </div>
    <?php if(isset($error)) { ?>
        <h3 style="color:red;"><?php echo $error; ?></h3>
    <?php } ?>
    <form  method="POST" class="form">
    <h3>Customer login</h3>
    
    <input type="text" name="user" placeholder="Username">
    <input type="password" name="pass" placeholder="Password">
    <button  type="submit">Submit</button>
</form>

    <div class="option">
        <p>Not Registered yet? <a href="registration.php">Register here!</a></p>
    </div>
</body>
</html>