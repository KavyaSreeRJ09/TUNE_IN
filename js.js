var signin = document.querySelector("#signin");
var register = document.querySelector("#register");
setTimeout(function () {
   register.checked = true;
}, 1000);
setTimeout(function () {
   signin.checked = true;
}, 2000);
 function allLetter()
      { 
	  var name=document.getElementById("name").value;
      var letters = /^[A-Za-z.. ]+$/;
      if(name.match(letters))
      {
      document.getElementById("message").innerHTML="<span style=color:green>Your name have accepted Thank You!!";
      return true;
      }
      else
      {
      document.getElementById("message").innerHTML="<span style=color:red>Its Wrong !!! Please Enter alphabets only!!";
      return false;
      }
      }


	 
function verifyPassword() { 
   var pw=document.getElementById("pwd").value;
  //check empty password field  
  if(pw == "") {  
     document.getElementById("message4").innerHTML = "<span style=color:red>**Fill the password please!";  
	 return false;  
  }  
   
 //minimum password length validation  
  if(pw.length < 8) {  
     document.getElementById("message4").innerHTML = "<span style=color:red;>**Password length must be atleast 8 characters";  
	 return false;  
  }  
  
//maximum length of password validation  
  if(pw.length > 15) {  
     document.getElementById("message4").innerHTML = "<span style=color:red>**Password length must not exceed 15 characters";  
	 return false;  
  } 
  
  else{
     document.getElementById("message4").innerHTML = "<span style=color:green;>**Strong password"; 
	return true;
  }  
}
function ValidateEmail()
{
	var id=document.getElementById("userid").value;
var mailformat = /^[a-zA-Z0-9.!#$%&'+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)$/;
if(id.match(mailformat))
{
document.getElementById("message5").innerHTML="<span style=color:green>Valid email address!";
return true;
}
if(id=="")
{
document.getElementById("message5").innerHTML="<span style=color:red>Please enter the email address!";
return false;
}
if(!id.match(mailformat))
{
document.getElementById("message5").innerHTML="<span style=color:red>You have entered an invalid email address!";
return false;
}
}