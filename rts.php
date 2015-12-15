<!DOCTYLE html> 
<html>
	<head>
		<title>Results</title>
	
	</head>
	
<body>

<?php 
$con = mysqli_connect("localhost","root","","git");


if(isset($_GET['results'])){

	$get_votes = "select * from cand";
	
	$run_votes = mysqli_query($con, $get_votes); 
	
	$row_votes = mysqli_fetch_array($run_votes); 
	
	$faith = $row_votes['faith'];
	$jus = $row_votes['jus'];
	$slau = $row_votes['slau']; 
	
	$count = $faith+$jus+$slau; 
	
	$per_faith = round($faith*100/$count) . "%";
	$per_jus = round($jus*100/$count) . "%";
	$per_slau = round($slau*100/$count) . "%";
	
	echo "
	<div style='background:red; padding:210px; text-align:center;'>
	
		<center> 
		<h2> Total Results. </h2>
		
		<p style='background:white; color:black; padding:10px; width:500px;'>
		
		<b> DR FAITH :</b> $faith ($per_faith)
		
		</p>
		
		<p style='background:blue; color:black; padding:10px; width:500px;'>
		
		<b> DR JUS :</b> $jus ($per_jus)
		
		</p>
		
		<p style='background:yellow; color:black; padding:10px; width:500px;'>
		
		<b> MR SLAU :</b> $slau ($per_slau)
		
		</p>
		<p> <a href='index.php'>
		
		<b> Logout Here</b>
		
		</p>
		
		</center>
	
	</div>
	
	";

}

?>

</div>
</body>
</html>