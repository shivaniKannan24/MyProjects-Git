<?php
session_start();
include("db.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fieldname = mysqli_real_escape_string($conn, $_POST['field']);
    $acc = mysqli_real_escape_string($conn, $_POST['acc']);
    $existingval = mysqli_real_escape_string($conn, $_POST['old']);
    $newval = mysqli_real_escape_string($conn, $_POST['new']);

    // Check if the field name is not empty
    if (!empty($fieldname)) {
        // Use backticks around the dynamic column name
        $query = "INSERT INTO request_table(FieldName, AccountNumber, ExistingValue, NewValue) 
                  VALUES('$fieldname', '$acc', '$existingval', '$newval')";
        $res = mysqli_query($conn, $query);
        if ($res) {
            echo "<script>alert('Requested to admin');</script>";
            header("Location:user_login.php");
            exit(); // Add exit() here
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Error: Field name is empty.";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="app_vot.js" defer></script>
    <title>Update Customer Profile</title>
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
        .field{
            width:400px;
            margin:auto;
            margin-top: 40px;
            margin-bottom: 40px;
            background-color:rgb(6, 224, 240);
            color:black;
            padding:10px 20px 30px;
            font-size:1.1em;  
            border-radius:10px;         
        
        
        }
        .label{
        padding: 5px;
        }
        h2{
            color:black;
            text-align: center;
        }
        
        div{
            margin:8px;
          
        }
        
        .inp{
            margin-left: 5px;
            width:99%;
            font-size:80%;
            border: 1px solid blue;
            padding:8px 10px;
            border-radius: 7px;
            display:block;
            box-shadow:5px;
            box-sizing: border-box;
        }
        .btn{
            text-align: center;
           padding:10px;
         
        }
        button{
            text-align:center;
            border-radius:6px;
            padding: 10px;
            
        }
        nav{
            border-style:double;
            border-color:black;
            color:black;
            background-color:rgb(6, 224, 240);
            padding:5px;
            border-radius:10px;   
        
        }
        ul{
            margin-left:80%;
        }
        li,h1,ul{
            display:Inline;
        }
        li{
            font-size:1.5em;
        }
        .inp-grp input:focus{
    outline:0;
}

.inp-grp .error{
    color:red;
    font-size:16px;
    margin-top:5px;
    border-color:red;
   
}
.inp-grp.success input{
    border-color:green;
    border-width:2px;

}
.inp-grp.error input{
    border-color:red;
    border-width:2px;
}
.field {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 5px;
            background-color: #f4f4f4;
            margin-top: 50px;
        }
        .topic {
            height: 50px;
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }
        
        </style>
                

</head>
<body>
    <div class="topic">
        
            <center>
            <h1> Bank Management System</h1>
    </center>
          
        
         
    </div>
   
    <fieldset class="field">
        <b>
            <legend> <h2>Update Profile </h2>
               
            </legend>
        </b>
        
        <form class="form"  method="POST" id="form">


            <div class="inp-grp">


            <label class="label" for="field">Field name</label>
<select id="field" class="inp" name="field" title="Select field name">

            <option selected hidden value="" >select field name</option>
                    <option>Name</option>
                    <option>AccountType</option>
                    <option>AccountNum</option>
                    <option>AadharNum</option>
                    <option>ifscCode</option>
                    <option>DOB</option>
                    <option>Gender</option>
                    <option>PhoneNum</option>
                    <option>doorno</option>
                    <option>street</option>
                    <option>city</option>
                    <option>Pincode</option>
                 
                    
                </select>
                <div class="error"></div>
               
            </div >

            <div class="inp-grp">
            <label class="label" for="acc">Account Number</label>
<input id="acc" class="inp" type="text" name="acc" placeholder="Enter Account Number">

                <div class="error"></div>
            </div>

            <div class="inp-grp">
            <label class="label" for="old">Existing value</label>
<input id="old" class="inp" type="text" name="old" placeholder="Enter existing value">

                <div class="error"></div>
            </div>
            <div class="inp-grp">
            <label class="label" for="new">New value</label>
<input id="new" class="inp" type="text" name="new" placeholder="Enter new value">

                <div class="error"></div>
                
            </div>
            
             
            <div class="btn">
                <button  type="submit" name="submit"><a href="user_login.php" style="text-decoration:none">Send Request To Admin</a></button>
            </div>
        </form>
    </fieldset>
    
    
</body>
</html>
