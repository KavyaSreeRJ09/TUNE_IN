<!DOCTYPE html>
  <html>
  <head>
  <title>Welcome To Registration Form</title>
<style type="text/css">
    body
    {
	    margin:0px;
	    background-color:#f26724;
	    background-image:url(image/background.jpg);
	    color:#f9fcf5;
	    font-family:Arial, Helvetica, sans-serif;
    }
    
    #main{width:600px; height:auto; overflow:hidden; padding-bottom:20px; margin-left:auto; margin-right:auto; 
    border-radius:5px; padding-left:10px; margin-top:100px; border-top:3px double #f1f1f1; 
    border-bottom:3px double #f1f1f1; padding-top:20px;
    }
    
    #main table{font-family:"Comic Sans MS", cursive;}
    /* css code for textbox */
    #main .tb{height:28px; width:230px; border:1px solid #f26724; color:#fd7838; font-weight:bold; border-left:5px solid #f7f7f7; 
opacity:0.9;}
    
    #main .tb:focus{height:28px; border:1px solid #f26724; outline:none; border-left:5px solid #f7f7f7;}

    /* css code for button*/
    #main .btn{width:150px; height:32px; outline:none;  color:#f7f7f7; font-weight:bold; border:0px solid #f26724; 
    text-shadow: 0px 0.5px 0.5px #fff; border-radius: 2px; font-weight: 600; color: #f26724; letter-spacing: 1px; 
    font-size:14px; background-color:#f1f1f1; -webkit-transition: 1s; -moz-transition: 1s; transition: 1s;}
  
    #main .btn:hover{background-color:#f26724; outline:none;  border-radius: 2px; color:#f1f1f1; border:1px solid #f1f1f1;
    -webkit-transition: 1s; -moz-transition: 1s; transition: 1s; }
    
    </style>
<script>
    
    function registration()
	{

		var name= document.getElementById("t1").value;
		var email= document.getElementById("t2").value;
		var uname= document.getElementById("t3").value;
		var card= document.getElementById("t4").value;			
		var cvv= document.getElementById("t5").value;
		
        //email id expression code
		var pwd_expression = /^(?=.?[A-Z])(?=.?[a-z])(?=.?[0-9])(?=.?[#?!@$%^&*-])/;
		var letters = /^[A-Z\ a-z]+$/;
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		var cvvs=/^[0-9]{1,3}/;
		var nums=/^[0-9]{1,12}/;
		if(name=='')
		{
			alert('Please enter your name');
		}
		else if(!letters.test(name))
		{
			alert('Name field required only alphabet characters');
		}
		else if(email=='')
		{
			alert('Please enter your user email id');
		}
		else if (!filter.test(email))
		{
			alert('Invalid email');
		}
		else if(uname=='')
		{
			alert('Please enter the cardHolder name.');
		}
		else if(!letters.test(uname))
		{
			alert('User name field required only alphabet characters');
		}
		else if(cardnumber=='')
		{
			alert('Please enter 12 digits Card number');
		}
		else if(!nums.test(card))
		{
			alert('Please enter 12 digits Card number');
		}
		else if(cvv=='')
		{
			alert('Please enter CVV');
		}
		else if(!cvvs.test(cvv))
		{
			alert('Please enter 3 digits CVV');
		}
		else
		{				                            
               		alert('Thank You for Login & You are Redirecting to music Website ');
			   // Redirecting to other page or website code. 
			   window.location = "D:\menu.html"; 
		}
	}
    
    </script>


  </head>

	<body>
	<!-- Main div code -->
	
	<div id="main">
	<div class="h-tag">
	<h2>Welcome to Music World</h2>
	<h2>Payment Details</h2>
	</div>
	<!-- create account div -->
	<div class="login">
	<table cellspacing="2" align="center" cellpadding="8" border="0">
	<tr>
	<td align="right">Enter Name :</td>
	<td><input type="text" placeholder="Enter user here" id="t1" class="tb" /></td>
	</tr>
	<tr>
	<td align="right">Enter Email ID :</td>
	<td><input type="text" placeholder="Enter Email ID here" id="t2" class="tb" /></td>
	</tr>
	<tr>
	<td align="right">Enter CardHolder Name :</td>
	<td><input type="text" placeholder="Enter CardHolder Name " id="t3" class="tb" /></td>
	</tr>
	<tr>
	<td align="right">Enter Cardnumber :</td>
	<td><input type="text" placeholder="Enter Cardnumber" id="t4" class="tb" /></td>
	</tr>
	<tr>
	<td align="right">Enter CVV :</td>
	<td><input type="text" placeholder="Enter CVV" id="t5" class="tb" /></td>
	</tr>
	<tr>
	<td align="right">Enter Expiry Month/Year:
                           
                          <select name="months" id="months">
                                <option 
value="Jan">Jan</option>
                                <option value="Feb">Feb</option>
                                <option 
value="Mar">Mar</option>
                                <option value="Apr">Apr</option>
                                <option 
value="May">May</option>
                                <option value="June">June</option>
                                <option 
value="July">July</option>
                                <option value="Aug">Aug</option>
                                <option 
value="Sep">Sep</option>
                                <option value="Oct">Oct</option>
                                <option 
value="Nov">Nov</option>
                                <option value="Dec">Dec</option>
                            </select>
          
                  <select name="years" id="years">
                                <option value="2021">2021</option>
                   
             <option value="2022">2022</option>
                                <option value="2023">2023</option>
                      
          <option value="2024">2024</option>
                                <option value="2025">2025</option>
                         
       <option value="2026">2026</option>
                            </select>
</td>

 </tr>
 <tr>
<td>
                
      
	<td>
	<input type="submit" value="Confrim Payment" class="btn" onclick="registration()" /></td>
<tr>
<td>
                
           <h3> <a href="D:\KAVYA ASSIGNMENT\successpage.html">Confirm</a></td>
</h3>                    
   
<h3><td>
                                
<a href="">Reset</a>
                            
	</tr>
	</table>
	
	</div>
	<!-- create account box ending here.. -->
	</div>
	<!-- Main div ending here... -->
	</body>
	</html><!DOCTYPE html>
  <html>
  <head>
  <title>Welcome To Registration Form</title>
<style type="text/css">
    body
    {
	    margin:0px;
	    background-color:#f26724;
	    background-image:url(image/background.jpg);
	    color:#f9fcf5;
	    font-family:Arial, Helvetica, sans-serif;
    }
    
    #main{width:600px; height:auto; overflow:hidden; padding-bottom:20px; margin-left:auto; margin-right:auto; 
    border-radius:5px; padding-left:10px; margin-top:100px; border-top:3px double #f1f1f1; 
    border-bottom:3px double #f1f1f1; padding-top:20px;
    }
    
    #main table{font-family:"Comic Sans MS", cursive;}
    /* css code for textbox */
    #main .tb{height:28px; width:230px; border:1px solid #f26724; color:#fd7838; font-weight:bold; border-left:5px solid #f7f7f7; 
opacity:0.9;}
    
    #main .tb:focus{height:28px; border:1px solid #f26724; outline:none; border-left:5px solid #f7f7f7;}

    /* css code for button*/
    #main .btn{width:150px; height:32px; outline:none;  color:#f7f7f7; font-weight:bold; border:0px solid #f26724; 
    text-shadow: 0px 0.5px 0.5px #fff; border-radius: 2px; font-weight: 600; color: #f26724; letter-spacing: 1px; 
    font-size:14px; background-color:#f1f1f1; -webkit-transition: 1s; -moz-transition: 1s; transition: 1s;}
  
    #main .btn:hover{background-color:#f26724; outline:none;  border-radius: 2px; color:#f1f1f1; border:1px solid #f1f1f1;
    -webkit-transition: 1s; -moz-transition: 1s; transition: 1s; }
    
    </style>
<script>
    
    function registration()
	{

		var name= document.getElementById("t1").value;
		var email= document.getElementById("t2").value;
		var uname= document.getElementById("t3").value;
		var card= document.getElementById("t4").value;			
		var cvv= document.getElementById("t5").value;
		
        //email id expression code
		var pwd_expression = /^(?=.?[A-Z])(?=.?[a-z])(?=.?[0-9])(?=.?[#?!@$%^&*-])/;
		var letters = /^[A-Z\ a-z]+$/;
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		var cvvs=/^[0-9]{1,3}/;
		var nums=/^[0-9]{1,12}/;
		if(name=='')
		{
			alert('Please enter your name');
		}
		else if(!letters.test(name))
		{
			alert('Name field required only alphabet characters');
		}
		else if(email=='')
		{
			alert('Please enter your user email id');
		}
		else if (!filter.test(email))
		{
			alert('Invalid email');
		}
		else if(uname=='')
		{
			alert('Please enter the cardHolder name.');
		}
		else if(!letters.test(uname))
		{
			alert('User name field required only alphabet characters');
		}
		else if(cardnumber=='')
		{
			alert('Please enter 12 digits Card number');
		}
		else if(!nums.test(card))
		{
			alert('Please enter 12 digits Card number');
		}
		else if(cvv=='')
		{
			alert('Please enter CVV');
		}
		else if(!cvvs.test(cvv))
		{
			alert('Please enter 3 digits CVV');
		}
		else
		{				                            
               		alert('Thank You for Login & You are Redirecting to music Website ');
			   // Redirecting to other page or website code. 
			   window.location = "D:\menu.html"; 
		}
	}
    
    </script>


  </head>

	<body>
	<!-- Main div code -->
	
	<div id="main">
	<div class="h-tag">
	<h2>Welcome to Music World</h2>
	<h2>Payment Details</h2>
	</div>
	<!-- create account div -->
	<div class="login">
	<table cellspacing="2" align="center" cellpadding="8" border="0">
	<tr>
	<td align="right">Enter Name :</td>
	<td><input type="text" placeholder="Enter user here" id="t1" class="tb" /></td>
	</tr>
	<tr>
	<td align="right">Enter Email ID :</td>
	<td><input type="text" placeholder="Enter Email ID here" id="t2" class="tb" /></td>
	</tr>
	<tr>
	<td align="right">Enter CardHolder Name :</td>
	<td><input type="text" placeholder="Enter CardHolder Name " id="t3" class="tb" /></td>
	</tr>
	<tr>
	<td align="right">Enter Cardnumber :</td>
	<td><input type="text" placeholder="Enter Cardnumber" id="t4" class="tb" /></td>
	</tr>
	<tr>
	<td align="right">Enter CVV :</td>
	<td><input type="text" placeholder="Enter CVV" id="t5" class="tb" /></td>
	</tr>
	<tr>
	<td align="right">Enter Expiry Month/Year:
                           
                          <select name="months" id="months">
                                <option 
value="Jan">Jan</option>
                                <option value="Feb">Feb</option>
                                <option 
value="Mar">Mar</option>
                                <option value="Apr">Apr</option>
                                <option 
value="May">May</option>
                                <option value="June">June</option>
                                <option 
value="July">July</option>
                                <option value="Aug">Aug</option>
                                <option 
value="Sep">Sep</option>
                                <option value="Oct">Oct</option>
                                <option 
value="Nov">Nov</option>
                                <option value="Dec">Dec</option>
                            </select>
          
                  <select name="years" id="years">
                                <option value="2021">2021</option>
                   
             <option value="2022">2022</option>
                                <option value="2023">2023</option>
                      
          <option value="2024">2024</option>
                                <option value="2025">2025</option>
                         
       <option value="2026">2026</option>
                            </select>
</td>

 </tr>
 <tr>
<td>
                
      
	<td>
	<input type="submit" value="Confrim Payment" class="btn" onclick="registration()" /></td>
<tr>
<td>
                
           <h3> <a href="C:\Users\Navika M S\Documents\1.Wepage desiginig\success page.html">Confirm</a></td>
</h3>                    
   
<h3><td>
                                
<a href="">Reset</a>
                            
	</tr>
	</table>
	
	</div>
	<!-- create account box ending here.. -->
	</div>
	<!-- Main div ending here... -->
	</body>
	</html>