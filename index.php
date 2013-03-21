<!DOCTYPE html>
<html>
	<head>
		<?php
			
			$size = $_GET['resize'];
			if($size == false){
				$size = "none";
			}
			$postURL = "index.php?resize=".$size;
			$refresh = 10; 
			
			if ($refresh > 0) {
		?>	
		<META HTTP-EQUIV="Refresh" Content = "<?= $refresh ?>; URL=<? echo $postURL ?>">
		<?php } ?>
		
		<link type="text/css" rel="stylesheet" href="styles.css"/>
		<title>WiFi Googles</title>
	</head>
	<body>
		<div id="wide">
				<?php
					
					$dir = "saves/"; 
					chdir($dir); 
					array_multisort(array_map('filemtime', ($files = glob("*.*"))), SORT_DESC, $files); 
					foreach($files as $filename) 
					{ 
						echo "<a href='".$dir.$filename."' target='_blank'>";
						if ($size == "none"){
							echo "<img src='".$dir.$filename."' />";
						} else {
							echo "<img src='".$dir.$filename."' height='".$size."px' width='".$size."px' />";
						}
						echo "</a>";
					}
				?>
		</div>
	</body>
</html>