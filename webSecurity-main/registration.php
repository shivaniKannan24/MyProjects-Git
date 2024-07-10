<?php
session_start();
include("db.php");
if($_SERVER['REQUEST_METHOD']== 'POST')
{
  $Name= $_POST['name'];
  $AccountNum= $_POST['accNum'];
  $ifscCode=$_POST['ifscCode'];
  $AadharNum= $_POST['aadrno'];
  $DOB= $_POST['DOB'];
  $Gender=$_POST['gender'];
  $PhoneNum= $_POST['phno'];
  $doorno=$_POST['dno'];
  $street=$_POST['street'];
  $city= $_POST['city'];
  $Pincode= $_POST['pincode'];
  $AccountType=$_POST['acctype'];
  $AccountBalance=$_POST['balance'];
  $photo=$_POST['photo'];
  $msg=$_POST['msg'];
  $email=$_POST['email'];
  $msg=stripcslashes($msg);
  $msg=mysqli_real_escape_string($conn,$msg); // XSS Attack Prevention Codes ...
  
  

  $query="insert into registration(Name,AccountNum,ifscCode,DOB,doorno,street,city,Pincode,Gender,AccountBalance,AccountType,PhoneNum,AadharNum,photo,msg,email) 
  values('$Name','$AccountNum','$ifscCode','$DOB','$doorno','$street','$city','$Pincode','$Gender','$AccountBalance','$AccountType','$PhoneNum','$AadharNum','$photo','$msg','$email')";
  mysqli_query($conn,$query);
  header("Location: password_creation.php");
}
?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Registration</title>

</head>
<style>

body
{
  background-image: url("background3.jpeg");
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
#form {
  height:500px;
  width: 500px;
  margin: 4vh auto 0 auto;
  background-color: rgb(6, 224, 240);
  border-radius: 10px;
  padding: 10px 25px 10px 25px;
  border:2px black solid;
  border-style:double;
  margin-top: 10px;
  padding-top: 10px;
  width: 400px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 5px;
            background-color: #f4f4f4;
            margin-top: 20px;

}

#home
{
  margin-top:40px;
}
#login
{
  margin-top:20px;
  margin-bottom:40px;
}
#topic {
      text-align:center;
      width:100vw;
      height: 35px;
      background-color: #333;
      color: #fff;
      text-align: center;
      padding: 20px;
      margin-top:-20px;
      margin-left:-35px;
      background-attachment: fixed;

     
}

#form h2 {
  text-align: center;
  color: rgb(9, 94, 105);
}

#form button {
  background-color: blue;
  color: black;
  border: 1px solid;
  padding: 7px;
  margin: 10px 0px;
  cursor: pointer;
  border-radius: 20px;
  font-size: 20px;
  width: 50%;
  margin-left: 0px;
  margin-top: 26px;
}
.inputgroup {
  margin-bottom: 5px;
  width: 100%;
}

.inputgroup label {
  margin-left: 5%;
  margin-top: 35%;
  color: black;
}
.inputgroup.error {
  color: rgb(238, 25, 25);
}
.inputgroup.error #pw {
  color: rgb(238, 25, 25);
  margin-left: 15%;
}
.inputgroup input {
  outline: 0;
  display: flex;
  font-size: 13px;
  width: 50%;
  padding: 5px;
  margin-left: 15%;
  margin-top: 2%;
  margin-bottom: 2%;
  
}
.inputgroup input:focus {
  outline: 0;
}

.inputgroup.success input {
    
  border:2px solid rgb(11, 197, 11)
}
.inputgroup.error input {
  
  border:2px solid red;
}

#form .genderoption {
  display: flex;
  column-gap: 50px;
  margin-top: 15px;
  margin-bottom: 15px;
  margin-left: 8%;
}

#form .genderchoose {
  margin-left: 5%;
}

#form h4 {
  text-align: right;
  margin-right: 5%;
}

#address {
  margin-left: 5%;
}

.required::after {
  content: " *";
  color: red;
}

@media screen and (min-width: 780px){
  body
  {
    margin: 1em 2em;
  }
}
tr{
    margin:7px;
    padding:10px;
}
td{
    margin-right:-10px;
}
    </style>
<body>

    <h2 id="topic">Welcome to Bank Management System</h2>
    <div class="container">
        <form method="POST" id="form">
            <h2>Create Your Account..</h2>

            <center>
                <table>

                    <tr>
                        <td>Name:</td>
                        <td> <input type="text" id="name" name="name" placeholder="Enter your name" required/></td>

                    </tr>

                    <tr>
                        <td>Account num:</td>
                        <td> <input type="int" id="accNum" name="accNum" placeholder="Enter the account number" required/></td>

                    </tr>

                    <tr>
                        <td>IFSC code:</td>
                        <td> <input type="int" id="ifscCode" name="ifscCode" placeholder="Enter the IFSC code" required/></td>

                    </tr>


                    <tr>
                        <td>DOB:</td>
                        <td><input type="date" id="dob" name="DOB" onmouseleave="getyr()"
                                placeholder="Enter your Date of birth" required/></td>

                    </tr>



                    <tr>
                        <td>Account type:</td>
                        <td> <input type="text" id="acctype" name="acctype"  required/>
                        </td>

                    </tr>

                    <tr>
                        <td>Gender:</td>
                        <td>
                          <input type="text" id="gender" name="gender" required>
                        </td>

                    </tr>

                    <tr>
                        <td>Photo:</td>
                        <td> <input type="file" id="photo" name="photo" required/></td>
                    </tr>

                    <tr>
                        <td>Address:</td>
                        <td> <input type="text" id="dno" name="dno" placeholder="Enter door no." required/><br>
                            <input type="text" id="street" name="street" placeholder="Enter Street name" required/><br>
                            <input type="text" id="city" name="city" placeholder="Enter city name" required/><br>
                            <input type="int" id="pincode" name="pincode" placeholder="Enter pincode" required/>
                        </td>

                    </tr>
                    <tr>
                        <td>Account balance:</td>
                        <td> <input type="int" id="balance" name="balance" placeholder="Enter Minimum amount to open" required/>
                        </td>

                    </tr>
                    <tr>
                        <td>Phone number:</td>
                        <td> <input type="int" id="phno" name="phno" placeholder="Enter your phone number" required/></td>

                    </tr>
                    <tr>
                        <td>Aadhar number:</td>
                        <td> <input type="int" id="aadrno" name="aadrno" placeholder="Enter your aadhar number" required/></td>

                    </tr>
                    <tr>
                        <td>email:</td>
                        <td> <input type="email" id="email" name="email" placeholder="Enter your email" required/></td>

                    </tr>

                    <tr>
                        <td>msg:</td>
                        <td> <textarea  id="msg" name="msg" placeholder="Enter your msg to admin" required></textarea></td>

                    </tr>

                    <td>

                    </td>

                </table> <button type="submit">Register</button>

            </center>


            </table>
        </form>
    </div>
</body>
</html>