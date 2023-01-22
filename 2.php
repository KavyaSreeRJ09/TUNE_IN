<html>
    <head>
        <style>
            body {
            background: url(cit1.jpg);
            background-size: 100%;
            background-repeat: no-repeat;
            }
        </style>
    </head>
    <body>
    `    <?php
            // Connect to the database
            $host="localhost";
            $user="root";
            $password="";
			
            $connect=mysqli_connect($host,$user,$password,"tunein");
            
            // Get the submitted form control data values 
            $username=$_POST['username'];
            $mail=$_POST['mail'];
            $pass=$_POST['pass'];
            $sql="INSERT INTO signup(username, password ,email) VALUES ('$username', '$pass','$mail')";
            if (mysqli_query($connect,$sql))
               header("Location:Homepage.php");
            mysqli_close($connect);
        ?>
    </body>
</html>