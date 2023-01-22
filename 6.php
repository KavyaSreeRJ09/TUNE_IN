<html>
<head>
</head>
<body>
<?php
// Connect to the database
$host="localhost";
$user="root";
$password="";
$connect=mysqli_connect($host,$user,$password,"tunein");

// Get the submitted form control data values 
$name = $_GET['a'];
$cno=$_GET['b'];
$cvv=$_GET['c'];
$sql="INSERT INTO billing (name, cno,cvv) VALUES ('$name','$cno','$cvv')";
if (mysqli_query($connect,$sql))
    Header("Location:form.php");
mysqli_close($connect)
?>
</body>
</html>