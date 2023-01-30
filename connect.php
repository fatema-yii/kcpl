<?php
 $firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$email=$_POST['email'];
$message=$_POST['message'];
$date= date ('d-m-y h:i:s');
//connection
$conn=new mysqli('localhost','root','','enquiry');
if($conn->connect_error)
{
	die('connection failed:'.$conn->connect_error);
}else
{
	$stmt=$conn->prepare("insert into tbl_contact(firstName,lastName,email,message,date)values(?,?,?,?,?)");
	$stmt->bind_param("sssss",$firstName,$lastName,$email,$message,$date);
	$stmt->execute();
	//echo "Contact form submitted Successfully ";
	$stmt->close();
	$conn->close();
	
header("Location: index.php");


}
?>
