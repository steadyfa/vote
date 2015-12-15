<?php
$conn=mysql_connect("localhost","root","");
mysql_select_db("git",$conn);
session_start();

if(isset($_POST['Submit'])){
$email=$_POST['email'];
$password=$_POST['password'];

$sql=mysql_query("select * from reg where email = '$email' AND password = md5('$password')");
if(mysql_num_rows($sql)== 0){
$report= "Sorry this Email or Password is incorrect";
}
else{
$row = mysql_fetch_array($sql);
$_SESSION['email'] == $row[email];
$_SESSION['password'] == $row[password];
$report = header("location: in.php");
}}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>easy transport</title>
<script language="javascript">
function validated(){

if(document.form1.email.value==""){
window.alert("Enter your email address!!!");
document.form1.email.focus();
return false;

}
if(document.form1.password.value == ""){
window.alert("Enter your Password");
document.form1.password.focus();
return false;
}}

</script>
<style type="text/css">
<!--
.style1 {color: #00FF00}
.style2 {color: #0000FF}
-->
</style>
</head>

<body background="1.jpg">

<h1 align="center" class="header">WELCOME<span class="style1"> TO ON LINE V</span>OTING SYSTEAM </h1>
<?php echo $report;?>
<form id="form1" name="form1" method="post" action="" onsubmit="return loginvalidated(this)">
  <table width="323" border="0" align="right">
    <tr>
      <td colspan="2"><p align="" class="style2"> Login Here </p>      </td>
    </tr>
  <tr>
<td><span class="style1">Username/Email</span></td>
<td><label>
<input name="myusername" type="text" id="myusername"size="30">
</td>
<tr>
      <td><span class="style1">Password</span></td>
      <td><label>
        <input name="mypassword" type="password" id="mypassword" size="30" >
      </label></td>
    </tr>
    <tr>
      <td colspan="2"><label>
        <input type="Submit" name="Submit" value="Login" />
      </label></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center"><a href="reg.php"> <span class="style2">If you don't have E-Vote account Register Now</span> <br> 
        ( <span class="style2">Sign Up Here</span> )</a> </div></td>
    </tr>
  </table>
</form>

</body>
</html>
