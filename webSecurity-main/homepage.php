
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

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 50px;
            margin-left: 200px;
            border-radius: 10px;
            
        }
        .box {
            margin: 0 10px;
            margin-right: 200px;
            border-radius: 10px;
            border: 2px solid black;
            background-color: #333;
            color: white;
        }

        .form {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 5px;
            background-color: #f4f4f4;
            margin-top: 50px;
        }

       
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

        .logo {
              width: 250px;
              height: 200px;
              border-radius: 10px; 
            }
    </style>
</head>

<body>
    <div class="topic">
        <h1>Bank Management System</h1>
    </div>

    <div class="container">
        <div class="box">
            <a href="a_log.php"><img src="admin.png" alt="Admin Logo" class="logo"></a>
            
            <h2>Admin</h2>
        </div>

        <div class="box">
            <a href="user_login.php"><img src="user.jpg" alt="User Logo" class="logo"></a>
            
            <h2>User</h2>
        </div>
    </div>
</body>

</html>