<!DOCTYLE html> 
<html>
	<head>
		<title> Vote Now </title>
			
<style type="text/css">
	
body {padding:0; margin:0;}

.container {width:1000px; background:orange; margin:0 auto; padding:10px;}

img {padding:20px; border-radius:100%; border:4px solid blue;}

img:hover {background:yellow;}

input {margin:30px;}

</style>

	</head>
	
<body bgcolor="#FF0000"> 

<div style="background:orange; color:white; text-align:center; width:100%; padding:10px;">!!!!(2016 -: PRESIDENT :- 2020)!!!!</div>
<p>&nbsp;</p>

<div align="center">
<table width="739" height="320" border="4">
    <tr>
      <td width="249" height="217"align="center"><img src="b.jpg" alt="" width="149" height="165"></td>
      <td width="234"align="center"><img src="a.JPG" alt="" width="145" height="172"></td>
      <td width="242" align="center"><img src="g.jpg" alt="" width="165" height="164"></td>
    </tr>
	
   <form action="in.php" method="post" align="center">
    <tr> 
	
      <td height="97" align="center"><input type="submit" name="faith" value="Vote Dr Faith."/></td>
	  
      <td align="center"><input type="submit" name="jus" value="Vote Dr Jus."/></td>
	  
      <td align="center"><input type="submit" name="slau" value="Vote Mr Slau."/></td>
	   <tr>
	  </form>
	    </tr>
  </table>
  
	  
	  <?php 
$con = mysqli_connect("localhost","root","","git");


if(isset($_POST['faith'])){
	
	$vote_faith = "update cand set faith=faith+1";
	
	$run_faith = mysqli_query($con, $vote_faith);
	
	if($run_faith){
	
	echo "<h4 align='center'>You have voted Dr Faith!</h4>";
	echo "<h2 align='center'><a href='rts.php?results'> 'Official Use Only' </a></h2>";
	
	
	}

}
	  
 if(isset($_POST['jus'])){
	
	$vote_jus = "update cand set jus=jus+1";
	
	$run_jus = mysqli_query($con, $vote_jus);
	
	if($run_jus){
	
	echo "<h4 align='center'>You have voted Dr jus!</h4>";
	echo "<h2 align='center'><a href='rts.php?results'> 'Official Use Only' </a></h2>";
	
	
	}

}
	
	if(isset($_POST['slau'])){
	
	$vote_slau = "update cand set slau=slau+1";
	
	$run_slau = mysqli_query($con, $vote_slau);
	
	if($run_slau){
	
	echo "<h4 align='center'>You have voted Mr Slau!</h4>";
	echo "<h2 align='center'><a href='rts.php?results'> 'Official Use Only' </a></h2>";
	
	
	}

}
	
  
?>
</div>

<p align="center"><a href='index.php'><b> :Logout: </b></a></p>

<p>&nbsp;</p>

<div style="background:orange; color:white; text-align:center; width:100%; padding:10px;">!!!SLAU -:- PRESIDENTS!!! </div>
 <div id="FO__OTer" align="center"> 
 
        <p>Designed by : Slau.</p>
  </div>
</body>
</html>
