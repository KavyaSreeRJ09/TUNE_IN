<html>
    <head>
        <title>feedback form</title>
        <form  name="feedback" action="feedback2.php">
    </head>
    <body bgcolor="#CCCCFF">
    <div align="center">
		<br>
	<h1 style="font-family:verdana;" style="font-size:300%;">TUNE IN</h1> <br>
	<hr><br>
	</div>
        <center>
           <H3> ENTER YOUR FEEDBACK</H3><BR>
        NAME:<input type="text"  name="a" required pattern="[A-Za-z]+"></input><br><br>
        EMAIL ID:<input type="text"  name="b" required  pattern="/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/"></input><br><br>
        FEEDBACK:<input type="text" name="c" required></input><br><br>
        <input type="submit" value="SUBMIT" onclick="thankyou.php">
        <button type="button"><a href="Homepage.php"> BACK</a></button>
        

        </center>
    </form>
    </body>
</html>