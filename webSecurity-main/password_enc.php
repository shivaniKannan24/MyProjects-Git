<?php
include('db.php');
function str_openssl_dec($str,$iv){
	$key='1234567890vishal%$%^%$$#$#';
	$chiper="AES-128-CTR";
	$options=0;
	$str=openssl_decrypt($str,$chiper,$key,$options,$iv);
	return $str;
}
$res=mysqli_query($conn,"select * from login1 order by id");
	while($row=mysqli_fetch_assoc($res)){
		$iv=hex2bin($row['iv']);
		$u=str_openssl_dec($row['Username'],$iv);
		$a=str_openssl_dec($row['Password'],$iv);
		$query="insert into login(Username,Password)  values('$u','$a')";
		$query_run=mysqli_query($conn,$query);
        if($query_run)
       {
            header("Location: user_login.php");
       }
		// echo "<tr><td>".$row['id']."</td><td>".$name."</td><td>".$email."</td></tr>";
	}
?>