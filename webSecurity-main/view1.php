<?php
session_start();
include("db.php");
$result = null;
if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    if (isset($_GET['user'])) {
        $username = $_GET['user'];
        if (!empty($username)) {
            $username = mysqli_real_escape_string($conn, $username);

            $query = "SELECT * FROM registration WHERE AccountNum='$username'";
            $result = mysqli_query($conn, $query);

            if (!$result) {
                echo "Error executing query: " . mysqli_error($conn);
                // $row = mysqli_fetch_array($result);
                // $userName = $row['Name'];
            }
            else{
                
            }
        } else {
           // echo "Username not provided1.";
        }
    } else {
       // echo "Username not provided.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <style>

body
{
  background-image: linear-gradient(to right top, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1);

  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
#h
{
    margin-top:1px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    color: wheat;
}
#p{
    margin-top:1px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    color: wheat;
}
#title
{
    color:darkblue;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}
.topic1
{
  
    height:50px;
    width:1280px;
    background-color: #333;
    padding:10px;
    border-color:black;
    border-radius:10px;
    margin-left:10px;
    border-style:double;
  
    
}
.data
{
    margin-left:380px;
    margin-top:30px;
    width:500px;
    height: 650px;
    background-color: white;
    border:2px solid darkblue;
    padding:10px;
    border-radius:5px;
    

}

.option {
    height: 3%;
    display: flex;
    align-items: center;
    margin-top:10px;
  }

nav {
    flex: 1;
    text-align: right;
   
  }
  nav ul li {
    list-style: none;
    display: inline-block;
    font-size: 13px;
    font-weight:lighter;
  }
  .img
  {
    margin-top:5px;
    margin-right:40px;
    float:right;
    border:2px black solid;
  }
  .detail
  {
    margin-top:10px;
    margin-left:40px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
  }
  .btn
  {
    float:left;
    margin-left:30px;
    width:20%;
    padding:8px;
    height:30px;
    background-color: darkblue;
    border:2px solid darkblue;
    color:white;
    text-decoration:none;
  }

    </style>
</head>
<body>
<div class="topic1">
           
           <h3 id="h">Bank Management</h3>
           <div class="option">
               <nav>
                   <ul>
                       
                       <li> <h3><a href="user_login.php">Logout</a></h3></li>
                   </ul>
               </nav>
               
             
   
           </div>
</div>
<div class="data">
<form action="" method="POST" enctype="multipart/form-data">
   <center><h3 id="title">User Details<h3></center> 
   <hr>
   <?php 
if ($result) {
    while($row = mysqli_fetch_array($result)) {
        ?>
        <div class="detail">
        <?php
if(isset($row['photo']) && $row['photo'] !== null) {
    //echo '<img src="data:image;base64,'.base64_encode($row['photo']).'">';
    echo '<td><img class="img" src="data:image;base64,'.base64_encode($row['photo']).' " alt="img" style="width:150px; height:200px;"></td><br>';
} else {
    echo '<td>No photo available</td><br>';
}
?>

            <td id="h1"><b>Name:</b></td>
            <td><?php echo $row['Name'] ?></td><br><br>
            <th id="h1"><b>AccountNum :</b></th>
            <td id="h2"><?php echo $row['AccountNum'] ?></td><br><br>
            <th id="h1"><b>ifscCode : </b></th>
            <td><?php echo $row['ifscCode'] ?></td><br><br>
            <th id="h1"><b>AccountBalance :</b></th>
            <td><?php echo $row['AccountBalance'] ?></td><br><br>
            <th id="h1"> <b>AccountType :</b></th>
            <td><?php echo $row['AccountType'] ?></td><br><br>
            <th id="h1"> <b> DOB :</b></th>
            <td><?php echo $row['DOB'] ?></td><br><br>
            <th id="h1"><b>PhoneNum :</b></th>
            <td><?php echo $row['PhoneNum'] ?></td><br><br>
            <th id="h1"><b>AadharNum :</b></th>
            <td><?php echo $row['AadharNum'] ?></td><br><br>
            <th id="h1"><b>Gender :</b></th>
            <td ><?php echo $row['Gender'] ?></td><br><br>
            <th id="h1"><b>Doorno :</b></th>
            <td><?php echo $row['doorno'] ?></td><br><br>
            <th id="h1"><b>Street :</b></th>
            <td><?php echo $row['street'] ?></td><br><br>
            <th id="h1"><b>City :</b></th>
            <td><?php echo $row['city'] ?></td><br><br>
            <th id="h1"><b>Pincode :</b></th>
            <td><?php echo $row['Pincode'] ?></td><br><br>
            <th id="h1"><b>email :</b></th>
            <td><?php echo $row['email'] ?></td><br><br>
            <th id="h1"><b>Msg :</b></th>
            <td><?php echo htmlspecialchars($row['msg']) ?></td><br><br>
            
            <!-- XSS Attack Prevention Code -->
            
            
            
            
           
            
            
            <td> </td><br><br>
            <br><br>
        </div>
        <?php
    }
} else {
    // Handle case where $result is null
    echo "No data available.";
}
?>


               
            <button class="btn"><a href="editreq.php" style="text-decoration:none">Edit</a></button>
        </form>
        </div>
        
</body>
</html>