<?php
session_start();
include("db.php");
function str_openssl_enc($str,$iv){
	$key='1234567890vishal%$%^%$$#$#';
	$chiper="AES-128-CTR";
	$options=0;
	$str=openssl_encrypt($str,$chiper,$key,$options,$iv);
	return $str;
}
//echo "<script type='text/javascript'>alert('Hello')</script>";
if($_SERVER['REQUEST_METHOD']== 'POST')
{
    $iv=openssl_random_pseudo_bytes(16);
    $u= $_POST['user'];//username
    $a= $_POST['pass'];//password
    $u=str_openssl_enc($u,$iv);
    $a=str_openssl_enc($a,$iv);
    $iv=bin2hex($iv);
    $query="insert into login1(Username,Password,iv)  values('$u','$a','$iv')";
    $query_run=mysqli_query($conn,$query);
    if($query_run)
    {
     
     header("Location: user_login.php");
     require_once("password_enc.php");
     exit();
    }
}

$home="homepage";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration successful</title>
    <style>
body
{
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
        .form {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 5px;
            background-color: #f4f4f4;
            margin-top: 50px;
        }
.msg
{
height:70px;
  width: 600px;
  margin: 10vh auto 0 auto;
  background-color: rgb(98, 230, 240);
  border-radius: 20px;
  padding: 5px;
  margin-top:20px;
  border:2px solid darkblue;
 
  
}
#h
{
    
    animation:blow 3s infinite linear;
}
@keyframes blow
{

    0%
    {
        transform:translateY(0) scale(1);
    }
    50%
    {
        transform:translateY(-10px) scale(1.05);
    }
}
.pw
{
  
  width: 500px;
  margin: 10vh auto 0 auto;
  background-color:#ffffff;
  border-radius: 10px;
  padding: 10px;
  margin-top:20px;
            border-color:black;
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 5px;
            background-color: #f4f4f4;
            margin-top: 40px;
            height:300px;
}
#pw
{
  
  padding:5px;
  border-radius:5px;
  height:500px;
  width:400px;
  margin-left:30px;
  color:black;
  margin-bottom:5px;
  margin-top:20px;
}

#repw
{
  
  padding:5px;
  border-radius:5px;
  height:20px;
  width:400px;
  margin-left:30px;
  color:black;
  margin-bottom:5px;
}

#voterid
{
  
  padding:5px;
  border-radius:5px;
  height:20px;
  width:400px;
  margin-left:30px;
  color:black;
  margin-bottom:5px;
}


#btn
{
   
  background-color: blue;
  color: white;
  border: 1px solid;
  padding: 7px;
  margin: 10px 0px;
  cursor: pointer;
  border-radius: 5px;
  font-size: 20px;
  width: 50%;
  margin-left: 100px;
  margin-top:10px;
  
  margin-bottom:50px;
}
.note
{

    height:200px;
  width:600px;
  background-color: rgb(23, 151, 194);
  color:black;
  border: 2px solid;
  margin-right:50%;
}

.inputgroup.error #pw1 {
  
  color: rgb(238, 25, 25);
  margin-left: 30px;
}

.inputgroup.success input {
    
    border:2px solid rgb(11, 197, 11)
  }
  .inputgroup.error input {
    
    border:2px solid red;
  }

  #password
  {
    margin-bottom:40px;
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
        input[type=submit], input[type=button] {
                    background-color: navy;
                    border: none;
                    color: white;
                    padding: 7px 14px;
                    text-decoration: none;
                    margin: 2px 1px;
                    cursor: pointer;
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
            border-radius:1px;
            padding:0px;
            
        }
        nav{
            border-style:double;
            border-color:black;
            color:black;
            background-color:#ffffff;
            padding:5px;
            border-radius:10px;   
        
        }
            
            
        ul{
            margin-left:80%;
        }
        
        li,h1{
            display:Inline;
        }
        li{
            font-size:1.5em;
        }
        .bot{
                color:black;
                padding: 10px;
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

    </style>
    
</head>
<body>
<div class="topic">
        <h1>Bank Management System</h1>
    </div>
<!--<div class="head">
        <nav>
            <h1> Online Voting System</h1>
            
            <ul >
                <li ><a href="voterhome.php?username=". urlencode($u)>Home</a></li>
                <li>|</li>
                <li><a href="home1.html">Logout</a></li>
            </ul>    
        </nav>
        
         
    </div>-->
  <form  method="POST" id="form">
    
    <div class="pw">
       
        <center><h2 id="password">Create Your Password</h2></center>
        <div class="inputgroup">
                <input class="inp" type="text" name="user" id="user" placeholder="Username">
                <div class="error" id="pw1"></div>
            </div>
            
            <div class="inputgroup">
            <input class="inp" type="password" name="pass" id="pass" placeholder="Password">
                <div class="error" id="pw1"></div>
                
            </div>
            <input type="checkbox" onclick="myFunction()">Show Password
            <div>
                <p id="message"></p>
                <p id="show"></p>
            </div>
        
      
        <button  type="submit" >Update Password</button>
        <br>
        
        <br><br>
        

    </div>
    <div class="head">
    <nav>
        <h3 style="color:Black"><u>Note:</u></h3>
       ->Make sure that your new password should contain atleast 1 uppercase,1 lowercase,1 number and 1 special character.<br>
       ->Make sure that your password should be more than 8 characters.<br>
     ->Make sure that your new password and confirm password should be same.<br>
     ->Make sure that yout new password should not be your old password.<br>
    ->The confirmation message will be sent to your respective email id.<br><br>
        
    </nav>
    </div>
  
</body>
</form>
<script>
//function myFunc(){
    const form = document.getElementById("form");
const a= document.getElementById("pass");
const u= document.getElementById("user");
 form.addEventListener("submit", (e) => {
  if (!validateInputs()) {
    e.preventDefault();
  }
  else{
    setsuccess(a)
   // if(setsuccess(a))
      // alert("Password created successfully");
  }
});
function myFunction() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }}
 function validateInputs() {
  let suc = true;
  const us=u.value.trim();
  const password = a.value.trim();


  if (us === "") {
    suc = false;
    seterror(u, "Username is required");
  } else if (us.length < 10 || us.length > 10) {
    suc = false;
    seterror(u, "Username must be 10 characters");
  } else {
    setsuccess(u);
  }

  if (password === "") {
    suc = false;
    seterror(a, "Set your password");
  }
  else if(password .length<8 || !checkpass(password) )
  {
    suc = false;
    seterror(a, "Provide a strong password");
  } 
  else {
    setsuccess(a);
  }
  return suc;
}
function checkpass(a)
{
  var pass=  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,20}$/;
  if(a.match(pass))
  {
    return true;
  }
  else
  {
    return false;
  }


  
}
function seterror(element, msg) {
  const Inputgroup = element.parentElement;
  const errorelement = Inputgroup.querySelector(".error");
  errorelement.innerText = msg;
  Inputgroup.classList.add("error");
  Inputgroup.classList.remove("success");
}
function setsuccess(element) {
  const Inputgroup = element.parentElement;
  const errorelement = Inputgroup.querySelector(".error");
  errorelement.innerText = "";
  Inputgroup.classList.add("success");
  Inputgroup.classList.remove("error");
}

//}


</script>
</html>