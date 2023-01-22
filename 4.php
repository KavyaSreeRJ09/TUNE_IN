<html>
    <head>
        
    </head>
    <body>
    `    <?php
            // Connect to the database
            $host="localhost";
            $user="root";
            $password="";
			
            $conn=new mysqli($host,$user,$password,"tunein");
            if($conn->connect_error){
                die("connection failed");
            }
            // Get the submitted form control data values 
            $username=$_GET['username'];
           
            $pass=$_GET['pass'];
            $sql = mysqli_query($conn,"SELECT count(*) as total from signup where username='".$username."'and password='".$pass."' " );
             $row = mysqli_fetch_array($sql);

    if($row["total"] > 0){
                ?>
                <script>
                    alert('Login successful');
                    window.location.href="Homepage.php";
                </script>
                
                <?php
            }
            else{
                ?>
                <script>
                    alert('Login failed');
                </script>
                <?php
            }
            
            ?>
    </body>
</html>