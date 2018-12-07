<?php 
error_reporting(E_ALL & ~E_NOTICE);

if (!$entries) $entries = array();
	$entries[] = array(
		'from' => 'Heinz',
		'message' => 'Tolles Restaurant'
	);
	
		
		$rows = file("Davinci.txt");
		for ($i = 0; $i < count($rows); $i += 1)
		{
			$entries[$i] = explode(',',$rows[$i]);
			$entries[$i][0] = str_replace('||', ',', $entries[$i][0]);
			$entries[$i][1] = str_replace('||', ',', $entries[$i][1]);		
			$entries[$i][0] = str_replace('#@#', "\r\n", $entries[$i][0]);
			$entries[$i][1] = str_replace('#@#', "\r\n", $entries[$i][1]);
		}
		
?>
<DOCTYPE html>
<html>
<head>
<title> Gästebuch </title>
</head>
	<body link="white" vlink="white" alink="gray" style="background-image:url('5.jpg')">
		<center><a href="http://192.168.56.121/Test/Hauptseite.php" style="text-decoration:none;font-size:100px;">Gästebuch</a></center>
		<form action="Bewertung.php" id="Bewertung" method="post">
			<center>
				<label for="Name"><p style="color:white">Name</p></label> 
				<input type="text" name="Name" id="Name" maxlength="30">
				<button type="submit">Kommentar Posten</button>
 
				<label for="Kommentar"><p style="color:white">Kommentar verfassen</p></label>
				<textarea Name="Kommentar" id = "Kommentar"cols="112" rows="35"></textarea> 
   
		
		
			</center>
		</form>
			
			<?php for ($i = 0; $i < count($entries); $i += 1) { 
				if ($entries > 0) {?> 
			<center>
			<br><p style="color:white"><?php echo "Kommentar von" ?></p>
			<p style="color:white"><?php echo $entries[$i][0];?></p><br>
			<p style="color:white"><?php echo $entries[$i][1];?></p>
			</center>
			
			<?php }} ?>
			


	</body>
<html/>
