<?php


$user=$_POST['username'];
$pass=$_POST['pass'];
$date= date("F j, Y, g:i a"); 

$servername="localhost";
$username="id22360552_root";
$password="Meliora@123";
$dbname="id22360552_project";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
	
	$query1="SELECT * FROM `userregistration`";
	$result=mysqli_query($conn,$query1);
	$check=0;
	if($user=="")
	{
		$user=" ";
	}
	while($row=mysqli_fetch_assoc($result))
	{
		if(($row['username']==$user)&&($row['pass']==$pass))
		{			
			$check=1;
			$fname=$row['fname'];
			$lname=$row['lname'];
		}
	}
	if($check==1)
	{
		$servername="localhost";
		$username="id22360552_root";
		$password="Meliora@123";
		$dbname="id22360552_project";

		$con=mysqli_connect($servername,$username,$password,$dbname);
		$query="INSERT INTO `userloginfo`(`fname`, `lname`, `user`, `date`) VALUES ('$fname','$lname','$user','$date')";
		$q="INSERT INTO `userloginfo`(`fname`, `lname`, `user`, `date`) VALUES ('$fname','$lname','$user','$date')";
		$chkme=mysqli_query($con,$q);
		
		
		echo "<script>window.location.assign('afterlogin.php');</script>";
		
  
	}
	else if($check==0)
	{
		readfile("userlogin3.html");
	}
	
}