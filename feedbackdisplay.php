<?php 

    require_once("connectionf.php");
    $query = " select * from feedback ";
    $result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>View Records</title>
<style type="text/css">
    body
    {
	    margin:0px;
	    background-color:#F5B7B1;
	    background-image:url(image/background.jpg);
	    color:#f9fcf5;
	    font-family:Arial, Helvetica, sans-serif;
    }
    
    #main{width:600px; height:auto; overflow:hidden; padding-bottom:20px; margin-left:auto; margin-right:auto; 
    border-radius:5px; padding-left:10px; margin-top:100px; border-top:3px double #f1f1f1; 
    border-bottom:3px double #f1f1f1; padding-top:20px;
    }
    
    </style>
</head>
<body class="bg-dark">
<div align="center" >
		<br>
	<h1 style="font-family:verdana;" style="font-size:300%;">TUNE IN</h1> <br>
	<hr>
	</div>
	
        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table align ="center" border ="1px" style="width:600px; line-height:40px;">
                            <tr>
                                <td><b><h1> Name </h1></b></td>
                                
                                <td><b> <h1>email id</h1> </b> </td>
                                <td><b> <h1>Feedback</h1> </b> </td>
                            </tr>
                            <br><br><br><br><br>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $uname = $row['name'];
                                        $upswd = $row['email'];
                                        $fed = $row['feedback'];
                            ?>
                                    <tr>
                                        <td><?php echo $uname ?></td>
                                        <td><?php echo $upswd ?></td>
                                        <td><?php echo $fed ?></td>
                                        
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
                    </div>
                </div>
            </div>
        </div>
    <br><br><br><br>
        <div align="center">
        <a href="Admin panel.php">Back</a>
        </div>
</body>
</html>