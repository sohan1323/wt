<?php
//Startsession
Session_start();
//Check if login form has been submitted
If(isset($_POST['submit']))
{
//Getusernameandpasswordinputfromuser
$username=$_POST['username'];
$password=$_POST['password'];
//Setcorrectusernameandpassword
$correct_username='varad';
$correct_password='qwe';
}
//Checkifenteredusernameandpasswordarecorrect
If($username==$correct_username&&$password==$correct_password){

//Setsessionvariabletomarkuserasloggedin
$_SESSION['loggedin']=true;
//Redirectusertowelcomepage
Header('Location:welcome.php');
Exit;
}else{
//Decrementloginattempts
If(isset($_SESSION['attempts'])){
$_SESSION['attempts']--;
}else{
$_SESSION['attempts']=3;

//Displayerrormessageifmaximumloginattemptsexceeded
If($_SESSION['attempts']<=0)
   {
     Echo"Maximum login attempts exceeded.Please try again later.";
   }
else
{
//Displayerrormessage
Echo "Invalid username or password. Youhave".$_SESSION['attempts']."Attempt(s)left.";
}
}
}
?>